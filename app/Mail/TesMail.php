<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TesMail extends Mailable
{
  
    use Queueable, SerializesModels;
  
    public $data=[];
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data= $data;
    }
  
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('plcemailsender@gmail.com', 'PLC Website')
        ->subject($this->data["subject"])
                    ->view('layout.email_template')->with("data",$this->data)
                    ->attach($this->data["user_file"]->getRealPath(), [
                        'as' => $this->data["user_file"]->getClientOriginalName(),
                        'mime' => $this->data["user_file"]->getClientMimeType(),
                    ]);
    }
}