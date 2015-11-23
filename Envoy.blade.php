@servers(['new_server'=>'127.0.0.1'])

<?php
$branch = 'master';
$repo = 'git@bitbucket.org:leadia/simple-content-engine.git';

$db = [
    'user' => 'root',
    'password' => 'HvhOFbn35',
];

$landings_dir = '/var/www/landings';
$prev_project = 'greentd.ru';

// Динамический параметр, мб передавать из консоли...
$project_name = 'hvs1.ru';

$newProjects = [
    '116jurist.ru',
];

$projectsManual = [
    'vga-online.ru',
    'sro-newcons.ru',
];

$projects = getProjectsDirNames();

function getProjectsDirNames()
{
    $path = realpath(getcwd().'/resources/projects/');
    $d = dir($path);
    echo "Дескриптор: " . $d->handle . "\n";
    echo "Путь: " . $d->path . "\n";
    $pr = [];
    while (false !== ($entry = $d->read())) {
        if ($entry != '.' && $entry != '..') {
            $pr[] = $entry;
        }
    }
    $d->close();
    return $pr;
}

?>

@macro('deploy', ['on' => 'new_server'])
    make_project_dir
    clone_repo
    set_permission
    run_composer
    run_gulp
    create_db
    copy_env_file_from_dor_env
    run_deploy_data_for_project
    run_artisan_migrate
@endmacro

@macro('project_data_deploy', ['on' => 'new_server'])
    copy_env_file_from_dor_env
    run_deploy_data_for_project
    run_artisan_migrate
@endmacro

@macro('update', ['on' => 'new_server'])
    update_projects
@endmacro

@macro('run_keywords_commands', ['on' => 'new_server'])
    import_keywords
    publish_keywords
@endmacro



@task('make_project_dir')
    cd {{ $landings_dir }};
    pwd;
    mkdir {{ $project_name }};
    ls -la
@endtask

@task('clone_repo')
    cd {{ $landings_dir }}/{{ $project_name }};
    git clone {{ $repo }} ./
    git checkout {{ $branch }}
@endtask

@task('set_permission')
    cd {{ $landings_dir }}/{{ $project_name }};
    chmod 777 -R public/;
    chmod 777 -R storage/;
@endtask

@task('run_composer')
    cd {{ $landings_dir }}/{{ $project_name }};
    composer install
@endtask

@task('copy_env')
    cd {{ $landings_dir }}/{{ $project_name }};
    cp .env.local .env
@endtask

@task('run_gulp')
    cd {{ $landings_dir }}/{{ $project_name }};
    npm install;
    gulp develop
@endtask

@task('git_pull')
    cd {{ $landings_dir }}/{{ $project_name }};
    git pull origin {{ $branch }}
@endtask

@task('install_gulp')
    npm install -g gulp
    npm install -g bower
    npm install
@endtask

@task('run_artisan_migrate')
    cd {{ $landings_dir }}/{{ $project_name }};
    php artisan migrate:status;
    php artisan migrate;
@endtask

@task('create_db')
    cd {{ $landings_dir }}/{{ $project_name }};
    mysql --user={{ $db['user'] }} --password={{ $db['password'] }} -e "CREATE DATABASE IF NOT EXISTS \`{{ str_replace('.', '_', $project_name) }}\`";
@endtask

@task('create_link_to_keywords_file')
    cd {{ $landings_dir }}/{{ $project_name }};
    ln -s ../../resources/projects/{{ $project_name }}/keywords.txt storage/app/keywords.txt;
@endtask

@task('import_keywords')
    cd {{ $landings_dir }}/{{ $project_name }};
    php artisan keyword:import;
@endtask

@task('publish_keywords')
    cd {{ $landings_dir }}/{{ $project_name }};
    php artisan keyword:publish --keys=percent;
@endtask

@task('copy_vendor_dir_from_prev_project')
    cp -R {{ $landings_dir }}/{{ $prev_project }}/vendor {{ $landings_dir }}/{{ $project_name }}/vendor;
@endtask

@task('copy_env_file_from_prev_project')
    cp -R {{ $landings_dir }}/{{ $prev_project }}/.env {{ $landings_dir }}/{{ $project_name }}/.env
@endtask

@task('copy_env_file_from_dor_env')
    cp -R {{ $landings_dir }}/{{ $project_name }}/.env.server_dor {{ $landings_dir }}/{{ $project_name }}/.env
@endtask

@task('copy_node_dir_from_prev_project')
    cp -R {{ $landings_dir }}/{{ $prev_project }}/node_modules {{ $landings_dir }}/{{ $project_name }}/node_modules
@endtask

@task('run_deploy_data_for_project')
    cd {{ $landings_dir }}/{{ $project_name }};
    php artisan project:deploy_data --domain={{ $project_name }};
@endtask

@task('upload_keywords', ['on' => 'local'])
    sftp new_server;
@endtask

@task('cd_project_dir')
    cd {{ $landings_dir }};
@endtask

@task('cd_project_dir_and_show')
    cd {{ $landings_dir }}/{{ $project_name }};
    ls -la;
    pwd;
@endtask

@task('list')
    ls -la
@endtask

@task('update_projects')
    @foreach ($projects as $project_name)
        cd {{ $landings_dir }}/{{ $project_name }};
        git pull origin {{ $branch }};
    @endforeach
@endtask
