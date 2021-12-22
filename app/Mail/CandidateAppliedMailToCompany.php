<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Candidate;
use App\Models\Company;
use App\Models\JobPost;

class CandidateAppliedMailToCompany extends Mailable
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
        $candidate = Candidate::find($candidateappliedjob->candidate_id);
        $company = Company::where('id', $candidateappliedjob->company_id)->first();
        $jobpost = JobPost::where('id', $candidateappliedjob->job_id)->first();
        return $this->from('info@bizblanca.com')
                    ->subject('New Bizer Apply')
                    ->view('email.candidate-applied-job-to-company')
                    ->with([        
                        'candidate'     => $candidate,
                        'company'     => $company,
                        'candidateappliedjob'       => $candidateappliedjob,
                        'jobpost'       => $jobpost,
                    ]);
    }
}
