<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct($details, $attachmentPath = null, $attachmentName = null)
    {
        $this->details = $details;
        $this->attachmentPath = $attachmentPath;
        $this->attachmentName = $attachmentName;
    }

    public function build()
    {
        $email = $this->subject($this->details['subject'])->view('emails.email_template');
        if ($this->attachmentPath && file_exists($this->attachmentPath)) {
            $email->attach($this->attachmentPath, ['as' => $this->attachmentName ?? 'attachment.pdf', 'mime' => 'application/pdf',]);
        }
        return $email;
    }
}
