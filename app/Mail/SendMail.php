<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;

    public function __construct()
    {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        // $beautymail->send('mail.test', [], function($message) 
        // {
        //     $message                                                
        //     ->from('donotreply@justlaravel.com')
        //     ->to('david.ifeanyi84@gmail.com', 'Howdy buddy!')
        //     ->subject('Test Mail!');
        // });
        // return $this->view('view.name');
        // return $this->from('admin.nigerkit@gmail.no-reply')->subject('Welcome message')->view('mail.test');
        return $this->from('admin.nigerkit@gmail.no-reply')->subject('Welcome message')->view('mail.welcomemail');
    }
}
