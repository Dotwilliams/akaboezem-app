<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Models\MemberSubscription;

class SubscriptionReminderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reminders:check {no_days}';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $days = $this->argument('no_days');
        $allDueToday = MemberSubscription::whereYear('exp_date', Carbon::now()->year)->whereDay('exp_date', Carbon::today()->addDays($days))->get();
        if($allDueToday){

            // echo 'yes';
            dd($allDueToday);

         }
      return dd('123') ;
    }
}
