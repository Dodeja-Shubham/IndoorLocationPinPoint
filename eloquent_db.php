<?php

$settings = array(
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'database' => 'indoor_positioning',
    'username' => 'root',
    'password' => '',
    'collation' => 'utf8_general_ci',
    'charset'   => "utf8",
	'prefix' => ''
);

$container = new Illuminate\Container\Container;
$connFactory = new \Illuminate\Database\Connectors\ConnectionFactory($container);
$conn = $connFactory->make($settings);
$resolver = new \Illuminate\Database\ConnectionResolver();
$resolver->addConnection('default', $conn);
$resolver->setDefaultConnection('default');
\Illuminate\Database\Eloquent\Model::setConnectionResolver($resolver);
