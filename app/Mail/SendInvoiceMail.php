<?php

namespace App\Mail;

use App\Models\Company;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendInvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $company;
    public function __construct($company)
    {
        $this->company = $company;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $company = $this->company;
        $companyinfo = Company::where('id', $company->id)->with(['Package', 'Order'])->first();

        return $this->from('info@bizblanca.com')
                    ->subject('Bizblanca Plan Invoice')
                    ->view('email.company-invoice')
                    ->with([
                        'company'          => $companyinfo
                    ]);
    }
}
