<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class UserAction extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $post;
    public $action;


    public function __construct($user,$post,$action)
    {
        $this -> user = $user;
        $this -> post = $post;
        $this -> action = $action;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

      $user = Auth::user();

      return $this-> from($user -> email)
                  -> view('mail.post-mail');
    }
}
