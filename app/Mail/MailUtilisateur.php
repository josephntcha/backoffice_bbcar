<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailUtilisateur extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$user)
    {
        $this->data=$data;
        $this->user=$user;
    }
    
   public function build()
   {
       return $this->subject($this->data['sujet'] ?? 'Mail de Wootan')
                                   ->view('email.formatMail')
                                   ->attach(storage_path('app/public/'.$this->data['file']));
                                   
                                  

   }
}
