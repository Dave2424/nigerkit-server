<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 6/11/19
 * Time: 3:21 PM
 */

namespace App\Repositories;


use Bogardo\Mailgun\Facades\Mailgun;
use Bogardo\Mailgun\Mail\Message;
use Illuminate\Encryption\Encrypter;
use Mailgun\Exception;
use Illuminate\Support\Facades\Log;


class Mailer
{
    protected $mailer;

    public function __construct()
    {
        $this->mailer = new Mailgun();

    }

    /**
     * @param array $data
     * @return array
     */
    public function send(array $data)
    {
        return $this->authAndSend($data, $template = 'notice');
    }

    /**
     * @param $data
     * @param $template
     * @return array
     */
    public function authAndSend($data, $template)
    {

//        dd($data);

        try {
            $htmlMessage = $data['data'];
            try {
                $msg = Mailgun::send("emails.{$template}", $htmlMessage, function (Message $message) use ($data) {

                    if (is_array($data['to'])) {
                        $toes=[];
                        foreach ($data['to'] as $to) {
                            $toes[$to]=[];
                        }
                        $message->to($toes);
                    }else{
                        $message->to($data['to']);
                    }


                    $message->subject($data['subject']);
                    if (isset($data['files']) && !empty($data['files'])) {
                        $file=$data['files'];
                        $path=false;
                        $fname=false;
                        if(is_file($file)) {
                            try {
                                try {
                                    $path = $file->getPathname();
                                } catch (\Exception $r) {}
                                try {
                                    $fname = $file->getFileName();
                                } catch (\Exception $t) {}
                                if ($path && $fname)
                                    $message->attach($path, $fname);
                            } catch (Exception $e) {
                            }
                        }
                        else{
                            try {
                                $path = $file['pathname'];
                            } catch (\Exception $ex) {
                                Log::info($file);
                            }
                            try {
                                $fname = $file['filename'];
                            } catch (\Exception $ex) {
                                Log::info($file);
                            }
                            if ($path && $fname)
                                $message->attach($path, $fname);
                        }
                    }
                });
                return ['success' => $msg];
            } catch (\Exception $e) {
                return ['error' => $e->getMessage(), $e->getCode(), $e->getFile(), $e->getTraceAsString()];
            }
        } catch (Exception $ex) {
            return ['error' => $ex->getMessage(), $e->getCode(), $e->getFile(), $e->getTraceAsString()];
        }
    }


    public function addTo($toAddress)
    {
        $toAddress = trim($toAddress);
        $to = explode(' ', $toAddress);
        foreach ($to as $t) {
            $this->mailer->addAddress(trim($t, ','));
        }
    }

    /**
     * CC Address(es).
     *
     * @param string $ccAddress
     */
    public function addCC($ccAddress)
    {
        $ccAddress = trim($ccAddress);
        $cc = explode(' ', $ccAddress);

        foreach ($cc as $address) {
            $this->mailer->addCC(trim($address, ','));
        }
    }

    /**
     * BCC Address(es).
     *
     * @param string $bccAddress
     */
    public function addBCC($bccAddress)
    {
        $bccAddress = trim($bccAddress);
        $cc = explode(' ', $bccAddress);

        foreach ($cc as $address) {
            $this->mailer->addBCC(trim($address, ','));
        }
    }

    public function addFiles($files)
    {
        if ($files) {
            foreach ($files as $file) {
                $this->mailer->addAttachment($file['tmp'], $file['name']);
            }
        }
    }

    /**
     * Encryption Library dependency.
     *
     * @return Encrypter
     */
    public function getEncrypter()
    {
        return new Encrypter(uniqid(rand(), true));
    }

}