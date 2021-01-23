<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Setting;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('label')->nullable();
            $table->text('value')->nullable();
            $table->text('description')->nullable();
            $table->softDeletes('deleted_at')->nullable();
            $table->timestamps();
        });

        Setting::create([
            "name"=>"SITE_NAME",
            "label"=>"Site Name",
            "value"=>"NigerKit"
        ]);

        Setting::create([
            "name"=>"SITE_EMAIL",
            "label"=>"Site Email",
            "value"=>"admin@nigerkit.com",
        ]);

        Setting::create([
            "name"=>"SITE_PHONE",
            "label"=>"Site Phone Number",
        ]);

        Setting::create([
            "name"=>"CONTACT_ADDRESS",
            "label"=>"CONTACT ADDRESS",
        ]);
        
        Setting::create([
            "name"=>"OPENING_HOURS",
            "label"=>"Site OPENING HOURS",
        ]);

        Setting::create([
            "name"=>"CONTACT_MESSAGE",
            "label"=>"Site CONTACT MESSAGE",
        ]);

        Setting::create([
            "name"=>"SITE_URL",
            "label"=>"Website Address",
        ]);

        Setting::create([
            "name"=>"SITE_DESCRIPTION",
            "label"=>"Site Description",
        ]);

        Setting::create([
            "name"=>"FACEBOOK_PAGE_URL",
            "label"=>"FACEBOOK PAGE URL",
        ]);

        Setting::create([
            "name"=>"TWITTER_HANDEL_URL",
            "label"=>"TWITTER HANDEL URL",
        ]);
        
        Setting::create([
            "name"=>"INSTAGRAM_PAGE_URL",
            "label"=>"INSTAGRAM PAGE URL",
        ]);

        Setting::create([
            "name"=>"PINTEREST_PAGE_URL",
            "label"=>"PINTEREST PAGE URL",
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
