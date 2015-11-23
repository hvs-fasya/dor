<?php

namespace App\Console\Commands;

use App\Content;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\InputOption;

class CreateVirtualHostCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'project:create_virtualhost';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create project\'s virtual host in apache sites-available directory';

    protected $httpHost;

    protected function getOptions()
    {
        return [
            ['domain', null, InputOption::VALUE_OPTIONAL, 'Name of domain to create virtual host.'],
            ['ip', null, InputOption::VALUE_OPTIONAL, 'Ip of the server for virtual host'],
        ];
    }

    public function __construct()
    {
        parent::__construct();
        $this->httpHost = config('custom_app.http_host');
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        //$result = shell_exec('cd /etc/apache2/sites-available/');
        $domain = $this->option('domain');
        $ip = $this->option('ip');

        if (is_null($domain) && empty($domain)) {
            $domain = $this->httpHost;
        }

        //$this->error('Вы ввели пустой домен!');

        $domainConf = $domain . '.conf';

        //$command = 'pwd;';
        $command = 'cd /etc/apache2/sites-available/;';
        $command .= 'ls -la;';
        $result = shell_exec($command);
        echo $result;

        $command .= 'sudo touch ' . $domainConf . ';';

        $view = view('console.server_virtual_host', [
            'domain' => $domain,
            'ip' => $ip
        ]);

        $command .= 'sudo sh -c "echo \'' . $view . '\' > ' . $domainConf . '";';
        $command .= 'sudo a2ensite ' . $domainConf . ';';
        $command .= 'sudo service apache2 restart;';

        $result = shell_exec($command);
        echo $result;
    }

}