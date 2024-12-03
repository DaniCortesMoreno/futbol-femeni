<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/DaniCortesMoreno/futbol-femeni.git');

set('env', [
    'APP_ENV' => 'production',
    'DB_CONNECTION' => 'null', // Ignorar base de datos
]);

add('shared_files', ['.env']);
add('shared_dirs', ['storage']);
add('writable_dirs', ['storage', 'bootstrap/cache']);

// Hosts

host('52.206.252.156')
    ->set('remote_user', 'sa04-deployer')
    ->set('deploy_path', '/var/www/es-cipfpbatoi-deployer/html');

// Sobrescribir la tarea artisan:migrate para deshabilitarla
task('artisan:migrate', function () {
    writeln('Tarea artisan:migrate deshabilitada.');
});
// Tarea personalizada para compilar activos con Vite
task('vite:build', function () {
    run('cd {{release_path}} && npm install && npm run build');
});



// Hooks
// Hook para compilar activos después de instalar las dependencias
after('deploy:vendors', 'vite:build');
after('deploy:failed', 'deploy:unlock');
after('deploy:vendors', 'artisan:storage:link'); // Crea enlaces simbólicos en storage
