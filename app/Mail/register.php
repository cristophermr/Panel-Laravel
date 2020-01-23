<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class register extends Mailable
{
    use Queueable, SerializesModels;

    public $Subject;
    public $SubSubject;
    public $User;
    public $Password;
    public $Banner;
    public $Logo;

    /**
     * activation constructor.
     * @param $Subject
     * @param $SubSubject
     * @param $User
     * @param $Password
     */
    public function __construct($Subject,$SubSubject,$User,$Password)
    {
        $this->Subject = $Subject;
        $this->SubSubject = $SubSubject;
        $this->User = $User;
        $this->Password = $Password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('crian@tigomail.cr')
            ->view('mail.register');
    }
}
