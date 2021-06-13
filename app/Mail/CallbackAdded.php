<?php

namespace App\Mail;

use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;

class CallbackAdded extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($callback)
    {
        $this->callback = $callback;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('cmdtech8@gmail.com')
            ->view('mails.callback-added')
            ->with([
                'name' => $this->callback->name,
                'phone' => $this->callback->phone
            ]);
    }
}
