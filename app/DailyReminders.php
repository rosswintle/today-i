<?php

namespace App;

class DailyReminders {

	function sendAll() {
		echo date('Y-m-d H-i-s') . ": Sending daily reminders\n";
	}

}