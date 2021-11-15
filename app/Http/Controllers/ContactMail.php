<?php

namespace App\Http\Controllers;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /** Create a new message instance. ...*/
    public function __construct($request)
    {
        $this->request = $request;
    }

    /** Build the message. ...*/
    public function build()
    {
        return $this->from('info@thevinylshop.com', 'The Vinyl Shop - Info')
            ->cc('info@thevinylshop.com', 'The Vinyl Shop - Info')
            ->subject('The Vinyl Shop - Contact Form')
            ->markdown('email.contact');
    }
}
