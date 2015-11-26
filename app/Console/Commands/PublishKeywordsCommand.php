<?php
/**
 * Created by PhpStorm.
 * User: VpE4
 * Date: 01.05.2015
 * Time: 11:16
 */


namespace App\Console\Commands;

use App\Content;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

class PublishKeywordsCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'keyword:publish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish a keyword';

    protected function getOptions()
    {
        return [
            ['keys', null, InputOption::VALUE_OPTIONAL, 'How many keys need to publish', 2],
        ];
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $keysNumber = $this->option('keys');

        if ($keysNumber == 'percent') {
            $keysNumber = round(Content::count() * (70 / 100));
        }

        $ids = Content::publishKeywords($keysNumber);

        $count = $ids->count();

        if ($count > 500) {
            $this->info("Опубликовано ключей: {$count}.");
        } elseif ($count) {
            $this->info("Были опубликованы ключи c id: {$ids->implode('id', ', ')}.");
        } else {
            $this->info("Нет, неопубликованных ключей");
        }
    }

}
