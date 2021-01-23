<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Cocur\Slugify\Slugify;
use DateTime;
use App\Model\Post;
use App\Model\Setting;
use DB;

class DefaultHelperController extends Controller
{
    public static function makeSlug($text){
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;

    }

    // HelperController::syncArray($question, 'categories', $categories, "App\Models\Category", 'addCategory');
    public static function syncArray($data, $to, Array $payload, $class, $action){
        // dd($class);
        if(count($payload) >= 1){
            $new_payload = array();
            foreach($payload as $payload_data){
                $payload_data = $class::$action(html_entity_decode($payload_data));
                array_push($new_payload, $payload_data->id);
            }
            $data->$to()->sync($new_payload);
        }

        return true;
    }

    // $categories = HelperController::unique_str_array($request['categories']);
    public static function unique_str_array($string){
        $strings = array();

        if(!is_string($string)){
            $string = implode(",", $string);
        }
        
        foreach(explode(',', $string) as $data){
            array_push($strings, trim($data));
        }

        return array_unique($strings);
    }

    public static function value_to_array($payload, $field){
        $array = array();

        if(count($payload) >= 1){
            foreach($payload as $data){
                array_push($array, trim($data->$field));
            }
        }
        
        return $array;
    }

    public static function validateDate($date, $format = 'Y-m-d H:i:s'){
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

    public static function generateUniqueKey($column, $table){
        $key = sha1(time());
        if(DB::table($table)->where($column, $key)->first()){
            HelperController::generateUniqueKey($column, $table);
        }
        return $key;
    }

    public static function targetBlank($content){
        return preg_replace('/(<a\b[^><]*)>/i', '$1 target="_blank">', $content);
    }

    public static function removeImageHight($content){
        return preg_replace('#(<img.+?)height=(["\']?)\d*\2(.*?/?>)#i', '$1$3', $content);
    }

    // Get list of url to replace from $content
    public static function getUrlToReplace($content){
        $links = [];
        $pattern = '~[a-z]+://\S+"~';
        if($content && $num_found = preg_match_all($pattern, $content, $out)){
            foreach($out[0] as $link){
                $url_path = parse_url($link, PHP_URL_PATH);
                $end=explode('/',$url_path);
                if($end && count($end) > 0){
                    $last_path = $end[count($end)-1];
                    if($last_path == '"'){
                        $last_path= $end[count($end)-2];
                        $link = substr_replace($link ,"",-1);
                    }
                    if(substr($last_path, -1) == "/"){
                        $last_path= substr_replace($last_path ,"",-1);
                    }
                    $post = Post::whereSlug($last_path)->whereStatus(1)->first();

                    if($post){
                        $links[] = [
                            'link'=>$link,
                            'replace_by'=>route($post->post_type, $post->slug),
                        ];
                    }
                }
            }
        }
        return $links;
    }

    public static function replaceLinks($content){
        $replaceable = HelperController::getUrlToReplace($content);
        // dd($replaceable);
        if($replaceable && count($replaceable)>0){
            foreach($replaceable as $replace){
                $content = str_replace($replace['link'], $replace['replace_by'], $content);
            }
        }
        return $content;
    }

    public static function textToLinks($content){
        return preg_replace_callback('#(?<!href\=[\'"])(https?|ftp|file)://[-A-Za-z0-9+&@\#/%()?=~_|$!:,.;]*[-A-Za-z0-9+&@\#/%()=~_|$]#', function($matches){
                                
            $url_host = parse_url($matches[0], PHP_URL_HOST);
            $base_url_host = parse_url($matches[0], PHP_URL_HOST);
            
            if($url_host == $base_url_host || empty($url_host)){
                // external link ...
                $ret = "<a href='".$matches[0]."' target='_blank'>".$matches[0]."</a>";
            } else {
                // internal link ...
                $ret = "<a href='".$matches[0]."'>".$matches[0]."</a>";
            }
            return $ret;
            
        }, $content);
    }

    public static function adsAfterParagraph($content){
        $closing_p = '</p>';
        $paragraphs = explode( $closing_p, $content );
        $count = 0;
        foreach ($paragraphs as $index => $paragraph) {
            $paragraphs[$index] .= $closing_p;
            if ( $count == (Setting::getValue("NUMBER_ADVERT_INSERT_AFTER_PARAGRAPH") ?(int)Setting::getValue("NUMBER_ADVERT_INSERT_AFTER_PARAGRAPH") : 3) ) {
                //Replace the html here with a valid version of your ad code
                $paragraphs[$index] .= AdsSlot::mainAdvert("After_Paragraph");
                $count = 0;
            }
            $count++;
        }

        return implode( '', $paragraphs );
    }

    public static function transform($keywords, $content){
        $words = explode(" ", $content); //split wherever we have space 

        foreach( $words as $key => $value ) {
            if ( in_array($value, $keywords) ) {
                $words[$key] = "<a href='" . $value . "'>". $value ."</a>";
            }
        }

        $paragraph = implode(" ", $words);
        return $paragraph;
    }

    public static function checkEmail($email) {
        $find1 = strpos($email, '@');
        $find2 = strpos($email, '.');
        return ($find1 !== false && $find2 !== false && $find2 > $find1);
     }
}
