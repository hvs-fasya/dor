<?php namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Laravel\Lumen\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        'App\Console\Commands\ImportKeywordsCommand',
        'App\Console\Commands\ContentParseCommand',
        'App\Console\Commands\PublishKeywordsCommand',
        'App\Console\Commands\GenerateSitemapFileCommand',
        'App\Console\Commands\DeployProjectDataCommand',
        'App\Console\Commands\CreateVirtualHostCommand',
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // Каждые сутки открываем 40 ключей
        //$schedule->command('keyword:publish')->daily();
        $schedule->command('keyword:publish')->cron('* * * * *')->withoutOverlapping();
        // Каждую минуту собираем контент для опубликованного ключа
        $schedule->command('content:parse')->cron('* * * * *')->withoutOverlapping();
        // Каждые сутки генерируем sitemap
        //$schedule->command('sitemap:generate')->daily();
        $schedule->command('sitemap:generate')->cron('* * * * *')->withoutOverlapping();
    }
}
