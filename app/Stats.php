<?php

namespace App;

use App\Action;
use Carbon\Carbon;

/**
* 
*/
class Stats 
{

	private $now;
	public  $today     = 0;
	public  $yesterday = 0;
	public  $week      = 0;
	public  $month     = 0;
	public  $year      = 0;
	
	function __construct()
	{
		$this->now = Carbon::now();
		$this->constructToday();
		$this->constructYesterday();
		$this->constructMonth();
		$this->constructYear();
	}

	function constructToday() {
		$this->today = Action::whereDate( 'created_at', $this->now->toDateString() )->count();
	}

	function constructYesterday() {
		$yesterday = Carbon::yesterday();
		$this->yesterday = Action::whereDate( 'created_at', $yesterday->toDateString() )->count();
	}

	function constructMonth() {
		$this->month = Action::whereMonth( 'created_at', $this->now->month )->count();
	}

	function constructYear() {
		$this->year = Action::whereYear( 'created_at', $this->now->year )->count();
	}

}