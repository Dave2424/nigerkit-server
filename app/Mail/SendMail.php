<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class SendMail extends Notification
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $data;

    public function __construct($user)
    {
        $this->data = $user;
    }

    public function via($notificable)
    {

        return ['mail'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function toMail()
    {
        $token = Str::random(60);
        return (new MailMessage)
            ->greeting('Hello ' . $this->data->fname)
            ->subject('[Nigerkit] Registration Confirmation')
            ->line('Thank you for registering on Nigertkit platform.')
            ->line('Please confirm your email by clicking on the link below:')
            ->action('Confirm email', route('verify', [ $token, $this->data->id]));
    }
}
