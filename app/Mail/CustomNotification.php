<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomNotification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    { 
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('custom@custom.com', 'Custom')
            ->subject("Welcome " . $this->user->name . " | Custom")
            ->markdown('vendor.notifications.email')
            ->with([
                'greeting' => "Hi " . $this->user->name,
                'introLines' => ['Welcome to custom.com', 'Hope you are safe, staying at home!'],
                'outroLines' => [
                    'Thank you for being with us. You are receiving this mail in order to know about that we have launched our first Custom MongoDB', 
                    'Hurry up guys!'
                ]
            ]);
    }
}
