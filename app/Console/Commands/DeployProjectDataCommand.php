<?php

namespace App\Console\Commands;

use App\Content;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\InputOption;

class DeployProjectDataCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'project:deploy_data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deploy project\'s data to separate it from others';

    protected $httpHost;

    public function __construct()
    {
        parent::__construct();
        $this->httpHost = config('custom_app.http_host');
    }

    protected function getOptions()
    {
        return [
            ['domain', null, InputOption::VALUE_REQUIRED, 'Name of domain for deploying it\'s data.'],
        ];
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->copyRobotsFile();
        $this->copyPartOfEnvFile();
    }

    protected function copyPartOfEnvFile()
    {
        $file = '.env.part';
        $domain = $this->option('domain');
        $project_path =  realpath(base_path('resources/projects/'.$domain));

        if ($project_path !== false) {

            $projectFile = $project_path . DIRECTORY_SEPARATOR . $file;
            $envFile = base_path() . DIRECTORY_SEPARATOR . '.env';

            $fileContent = File::get($projectFile);
            $dbNameSetting = 'DB_DATABASE='.str_replace('.', '_', $domain);
            $res = File::append($envFile, "\n\n" . $dbNameSetting . "\n\n");
            if ($res) {
                $res = File::append($envFile, $fileContent . "\n\n");
            }

            if ($res) {
                $this->info('Часть файла ' . $file . ' была успешно скопирована в .env файл');
            } else {
                $this->error('Файл ' . $file . ' не был скопирован. Проверьте права или наличие файла');
            }
        }
    }

    protected function copyRobotsFile()
    {
        $file = 'robots.txt';
        $domain = $this->option('domain');
        $project_path =  realpath(base_path('resources/projects/'.$domain));
        //$projectFile = project_path() .DIRECTORY_SEPARATOR . $file;
        $projectFile = $project_path . DIRECTORY_SEPARATOR . $file;
        $publicFile = public_path() . DIRECTORY_SEPARATOR . $file;
        $res = File::copy($projectFile, $publicFile);

        if ($res) {
            $this->info('Файл '.$file.' был успешно скопирован');
        } else {
            $this->error('Файл '.$file.' не был скопирован. Проверьте права или наличие файла');
        }
    }

}