<?php

namespace App\Jobs;

use App\Mail\ContactMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendContactEmail implements ShouldQueue
{
    use Queueable, Dispatchable, InteractsWithQueue, SerializesModels;


    public $data; // ✅ Declare the property here

    /**
     * Create a new job instance.
     */
    public function __construct($data)
    {
        //
        $this->data = $data; // Assign it to the declared property
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // send email

        // Send email to the user
        Mail::to($this->data['email'])->send(new ContactMail($this->data, 'user'));

        // Send email to the admin
        Mail::to(config('mail.from.address'))->send(new ContactMail($this->data, 'admin'));
    }
}
