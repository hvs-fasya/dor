<?php

namespace App\Console\Commands;

use App\Content;
use App\Services\ImportService;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

/**
 * Class ImportKeywordsCommand
 *
 * @package App\Console\Commands
 */
class ImportKeywordsCommand extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'keyword:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import keywords from xsls(excel) file';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->importKeysFromTxtFile();
    }

    public function importKeysFromTxtFile()
    {
        # Prepare a collection from file
        $keywords = (new Collection(explode("\n", Storage::get('keywords.txt'))))->unique();
        $keywords->pop(); // Удаляем последний пустой ключ

        # Create chunks by 500 items
        foreach($keywords->chunk(100) as $keywords_group)
        {
            # Bulk insert a keyword group in DB
            $this->insertKeywordsGroup($keywords_group);
        }

        $this->info('Было импортированно ' . $keywords->count() . ' ключевых слов');
    }

    /**
     * @param $keywords_group
     */
    protected function insertKeywordsGroup(Collection $keywords_group)
    {
        $keyword_data = [];

        $keywords_group->each(function($keyword) use(&$keyword_data){
            $keyword_data[] = $this->prepareKeyword($keyword);
        });

        Content::insert($keyword_data);
    }

    /**
     *
     * @param $keyword
     * @return array
     */
    protected function prepareKeyword($keyword)
    {
        return [
            'keyword' => $keyword,
            'url' => rus_slug($keyword),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }

}