<?php

namespace App\Mail;

use App\Models\Candidate;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $user;
    public $PasswordReset;
    public function __construct(User $user, $PasswordReset)
    {
        $this->user = $user;
        $this->PasswordReset = $PasswordReset;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = $this->user;
        $PasswordReset = $this->PasswordReset;

        $profile = Candidate::where('user_id', $user->id)->first();

        return $this->from('info@bizblanca.com')
                    ->subject('Reset Password')
                    ->view('email.email-reset-password')
        ->with([        
            'user'          => $user,
            'profile'       => $profile,
            'PasswordReset' => $PasswordReset,
        ]);
    }
}
