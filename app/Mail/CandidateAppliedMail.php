<?php

namespace App\Mail;

use App\Models\Candidate;
use App\Models\JobPost;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CandidateAppliedMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $candidateappliedjob;
    public function __construct($candidateappliedjob)
    {
        $this->candidateappliedjob = $candidateappliedjob;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $candidateappliedjob = $this->candidateappliedjob;
        $candidate = Candidate::where('user_id', $candidateappliedjob->candiate_id)->first();
        $jobpost = JobPost::where('id', $candidateappliedjob->job_id)->first();

        return $this->from('info@bizblanca.com')
                    ->subject('Applied Successfully')
                    ->view('email.candidate-applied-job')
                    ->with([        
                        'candidate'     => $candidate,
                        'candidateappliedjob'       => $candidateappliedjob,
                        'jobpost'       => $jobpost,
                    ]);
    }
}
