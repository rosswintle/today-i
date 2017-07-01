<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SendDailyReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'todayi:send-reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Today-I Daily Reminders';

    protected $remindersSender;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct( \App\DailyReminders $remindersSender )
    {
        parent::__construct();

        $this->remindersSender = $remindersSender;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->remindersSender->sendAll();
    }
}
