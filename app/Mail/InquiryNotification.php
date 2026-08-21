<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Inquiry; // Import the model

class InquiryNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $inquiry; // Make the data public so the view can see it

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Inquiry $inquiry)
    {
        $this->inquiry = $inquiry;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('New ' . ucfirst($this->inquiry->type) . ' Submission')
                    ->replyTo($this->inquiry->email, $this->inquiry->name)
                    ->view('emails.inquiry_notification');
    }
}
