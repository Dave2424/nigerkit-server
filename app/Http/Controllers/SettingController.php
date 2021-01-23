<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingController extends Controller
{
    public function index(){
        $site_name = Setting::getValue("SITE_NAME");
        $site_email = Setting::getValue("SITE_EMAIL");
        $site_phone = Setting::getValue("SITE_PHONE");
        $address = Setting::getValue("CONTACT_ADDRESS");

        $opening_hours = Setting::getValue("OPENING_HOURS");
        $contact_message = Setting::getValue("CONTACT_MESSAGE");
        $base_url = Setting::getValue("SITE_URL");
        $site_description = Setting::getValue("SITE_DESCRIPTION");

        $facebook = Setting::getValue("FACEBOOK_PAGE_URL");
        $twitter = Setting::getValue("TWITTER_HANDEL_URL");
        $instagram = Setting::getValue("INSTAGRAM_PAGE_URL");
        $pinterest = Setting::getValue("PINTEREST_PAGE_URL");

        return view('settings.index')->with([
            'site_name'=> $site_name,
            'site_email'=> $site_email,
            'site_phone'=> $site_phone,
            'address'=> $address,
            'opening_hours'=> $opening_hours,
            'contact_message'=> $contact_message,
            'base_url'=> $base_url,
            'site_description'=> $site_description,

            'facebook'=> $facebook,
            'twitter'=> $twitter,
            'instagram'=> $instagram,
            'pinterest'=> $pinterest,
        ]);
    }

    public function update(Request $request){
        Setting::setValue("SITE_NAME", $request['site_name']);
        Setting::setValue("SITE_EMAIL", $request['site_email']);
        Setting::setValue("SITE_PHONE", $request['site_phone']);
        Setting::setValue("CONTACT_ADDRESS", $request['address']);

        Setting::setValue("OPENING_HOURS", $request['opening_hours']);
        Setting::setValue("CONTACT_MESSAGE", $request['contact_message']);
        Setting::setValue("SITE_URL", $request['base_url']);
        Setting::setValue("SITE_DESCRIPTION", $request['site_description']);

        Setting::setValue("FACEBOOK_PAGE_URL", $request['facebook']);
        Setting::setValue("TWITTER_HANDEL_URL", $request['twitter']);
        Setting::setValue("INSTAGRAM_PAGE_URL", $request['instagram']);
        Setting::setValue("PINTEREST_PAGE_URL", $request['pinterest']);

        return redirect(route('settings.index'))->withStatus(__('Uploaded successfully.'));
    }
}
