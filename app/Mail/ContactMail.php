<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**

     * Create a new message instance.

     *

     * @return void

     */
	public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()

    {

        return $this->subject('Novo Contato - SOS Pragas')
                    ->view('emails.contact') // Template Blade
                    ->with('data', $this->data); // Dados enviados para o template

    }
}
