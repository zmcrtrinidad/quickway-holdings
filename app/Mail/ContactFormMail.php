<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $subject;
    public $message;
    protected $currentTime;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        // Form (name, email, subject, message)
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->subject = $data['subject'];
        $this->message = $data['message'];


        // date and time
        // $this->currentTime = date('Y-m-d H:i:s');

        $this->currentTime = Carbon::now('Asia/Manila')->format('m-d-Y H:i:s');
    }


    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */

    public function build()
    {
        // dd($this->message);
        return $this->from($this->email)
            ->subject($this->subject)
            ->view('emails.contact-form')
            ->with([
                'name' => $this->name,
                'email' => $this->email,
                'asignatura' => $this->subject,
                'content' => $this->message,
                'currentTime' => $this->currentTime
            ]);
    }
    public function envelope()
    {
        return new Envelope(
            subject: 'Inquiry',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail.mail',
            // gagawa ng form html with details
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
