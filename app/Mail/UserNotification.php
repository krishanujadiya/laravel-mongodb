<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;

class UserNotification extends Mailable
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
                    'You are receiving this mail in order to know about the services offered by our Team Custom.',
                    'Hurry up guys!'
                ]
            ]);
    }
}
