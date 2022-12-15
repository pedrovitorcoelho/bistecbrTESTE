<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContatoLetter extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dados2)
    {
        $this->dados2 = $dados2;
    }

    public $dados2;


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Email para Newsletter')
        ->view('envioLetters');
    }
}
