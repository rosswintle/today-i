<?php

namespace App;

use App\Action;
use Carbon\Carbon;

class Stats
{
    private $now;
    public $today = 0;
    public $yesterday = 0;
    public $week = 0;
    public $month = 0;
    public $year = 0;

    public function __construct()
    {
        $this->now = Carbon::now();
        $this->constructToday();
        $this->constructYesterday();
        $this->constructMonth();
        $this->constructYear();
    }

    public function constructToday()
    {
        $this->today = Action::whereDate('action_time', $this->now->toDateString())->count();
    }

    public function constructYesterday()
    {
        $yesterday = Carbon::yesterday();
        $this->yesterday = Action::whereDate('action_time', $yesterday->toDateString())->count();
    }

    public function constructMonth()
    {
        $this->month = Action::whereMonth('action_time', $this->now->month)
            ->whereYear('action_time', $this->now->year)->count();
    }

    public function constructYear()
    {
        $this->year = Action::whereYear('action_time', $this->now->year)->count();
    }
}
