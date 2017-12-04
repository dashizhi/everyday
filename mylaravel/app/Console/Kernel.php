<?php namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Redis;
use Redirect;
 
class Kernel extends ConsoleKernel {

	/**
	 * The Artisan commands provided by your application.
	 *
	 * @var array
	 */
	protected $commands = [
		'App\Console\Commands\Inspire',
	];

	/**
	 * Define the application's command schedule.
	 *
	 * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
	 * @return void
	 */
	protected function schedule(Schedule $schedule)
	{
		 $schedule->call(function(){
            if (Redis::Llen('news')!=0) {
            
            for ($i=0; $i < Redis::Llen('news'); $i++ ) { 
                $data=unserialize(Redis::rpop('news'));
                $res = DB::table('news')->insert(['time'=>$data['time'],'content'=>$data['content'],'type'=>$data['type'],'userid'=>$data['userid']]);              
            }
        }
    })->everyTwoMinute();

		// $schedule->command('inspire')
		// 		 ->hourly();
	}

}
