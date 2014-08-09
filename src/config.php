<?Php
$app['debug'] = true;

$app['db.config'] = array(
        'kernel' => array(
          'driver'   => 'pdo_mysql',
          'path'     => __DIR__.'/app.db',
          'host'      => 'localhost',
          'dbname'    => 'black-lotus',
          'user'      => 'root',
          'password'  => 'senha123',
          'charset'   => 'utf8',
        ),
        
    );

