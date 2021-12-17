<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailUserSocialRegisterVerification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $User;
    public function __construct($User)
    {
        $this->User = $User;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $User = $this->User;
        return $this->from('info@bizblanca.com')
                    ->subject('Bizblanca New Account')
                    ->view('email.social-user-account')
                    ->with([
                        'user'          => $User,
                    ]);
    }
}
