<?php

namespace App;

use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\DailyReminder;

class DailyReminders {

	function sendAll() {

		$usersToSend = User::where('email_hour', (int) date('H'))
			->where( function($query) {
				$query->where('last_email_sent_date', '<', date('Y-m-d') )
					  ->orWhere('last_email_sent_hour', '<', (int) date('H'));
					 } )
			->get();
		echo date('Y-m-d H-i-s') . ": Sending daily reminders\n";
		foreach( $usersToSend as $thisUser) {
			echo date('Y-m-d H-i-s') . ": Sending reminder to $thisUser->email\n";
			Mail::to( $thisUser )->send( new DailyReminder( $thisUser ) );
			$thisUser->last_email_sent_hour = (int) date('H');
			$thisUser->last_email_sent_date = date('Y-m-d');
			$thisUser->save();
		}
	}

}