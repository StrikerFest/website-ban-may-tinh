<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use DB;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        //Chạy lệnh "php artisan schedule:work" để bắt đầu quá trình tự động cập nhật trạng thái
        //Tự động cập nhật trạng thái thành đã nhận hàng đối với đơn hàng có trạng thái là đang giao và đã 7 ngày chưa xác nhận đơn
        $schedule->call(function(){
            DB::table('hoa_don')->where('maTTHD', 4)->whereRaw('DATE_ADD(`updated_at`, INTERVAL 7 DAY) < NOW()')->update([
                'maTTHD' => 5,
            ]);
        })->cron('* * * * *');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
