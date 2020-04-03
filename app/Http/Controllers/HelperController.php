<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
//use Intervention\Image\Facades\Image;

class HelperController extends Controller
{
//    public static $base_url;


    public function __construct()
    {
//        self::$base_url = url('/');
    }

    public static function processImageUpload( $image, $name = 'user', $dir = 'user', $height = 350, $width = 1200 )
    {
        if (!file_exists(storage_path('app/public/'.$dir))) {
            mkdir(storage_path('app/public/'.$dir), 0777, true);
        }
        //Process new image
        $imageName = preg_replace('/\s+/', '', $name);
        $user_image = '/'.$dir.'/header/' . uniqid(rand()) . $imageName . '.' . $image->getClientOriginalExtension();

        $imageR = Image::make($image);
        $imageR = $imageR->resize($width, $height); //width height

        Storage::disk('public')->put($user_image, (string)$imageR->encode());

        return $user_image;
    }

    public static function processProductsImage( $image, $name = 'image', $dir = 'store')
    {
        if (!file_exists(storage_path('app/public/'.$dir))) {
            mkdir(storage_path('app/public/'.$dir), 0777, true);
        }
        //Process new image
        $store_image = '/'.$dir.$image->getClientOriginalExtension();

        return Storage::disk('public')->put($store_image, $image);
    }
    /**
     * Remove image from storage
     * @param $path
     */
    public static function removeImage($path)
    {
        $path = str_replace(self::$base_url."/storage", '', $path);

        if(Storage::disk('public')->exists($path)){
            //remove
            Storage::disk('public')->delete($path);
        }
    }


    /**
     * Build Mail Contents
     * @param $content
     * @param $title
     * @return array
     */
    public static function buildMailer($content, $title)
    {

        $base_url = 'http://app.startev.africa';

        $toSend = ['content' => $content['message'],  'subject' => $title,  'title' => $title, 'base_url' => $base_url];

        if (isset($content['token'])) {
            $toSend['token'] = $content['token'];
        }
        return  $toSend;
    }

    /**
     * @param $data
     * @param $template
     * @return \Illuminate\Http\JsonResponse
     */
    public static function sendMail($data, $template)
    {

        $data['sender'] = "Startev Africa";

        $receivers = $data['to'];

        $title = $data['subject'];

        $outgoing_email = $receivers;

        $insertData = [
            'sender' => $data['sender'],
            'type' => 1,
            'email_Subject' => $title,
            'email_Content' => $data['message'],
            'email_recipients' => $receivers,
        ];



        $array = [];

        if (isset($data['file']) && $data['file'] != null && $data['file']->isValid()) {
            $file = $data['file'];

            $savedName = '/files/mailbox' . time() . $file->getClientOriginalName();
            $filePath = public_path('files/mailbox');
            if (!is_dir($filePath))
                @mkdir($filePath, 0775, true);

            $collect = $file->move($filePath, $savedName);
            $insertData['email_Attachment'] = $savedName;

            $array = $collect;
        }

        $emailData = [
            'subject' => $title,
            'to' => $outgoing_email,
            'data' =>  self::buildMailer($data, $title),
            'files' => $array,
        ];


//        dd($emailData);

        $mailer = new Mailer();


        try {
            $ml = $mailer->authAndSend($emailData,$template);

            if (isset($ml['error']))
                return response()->json(['error' => $ml]);
            else {
                $pl = $ml['success'];
                $msgId = str_replace('>', '', str_replace('<', '', $pl->id));
                //handle success
            }
        } catch (\Exception $e) {
            Log::info("$e ::From Mail sender");
            return response()->json(['error' => "$e ::From Mail sender"]);
        }

        return response()->json(['success' => "Email Successfully sent", 'mailer' => $ml]);


    }
}
