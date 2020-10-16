<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DailyReminder extends Mailable
{
    use Queueable, SerializesModels;

    public $url = '';
    public $user = '';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->url = action('App\Http\Controllers\MyProfileController@show');
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.daily-reminder')
            ->with('userData', $this->user);
    }
}
