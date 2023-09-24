<?php

return array(
  'active' => 'mysqli',

  'pdo' => array(
    'type'           => 'pdo',
    'connection'     => array(
      'dsn'        => 'mysql:host=localhost;dbname=framework',
      'username'       => 'root',
      'password'       => 'root',
      'persistent'     => false,
      'compress'       => false,
    ),
    'table_prefix' => '',
    'charset'      => 'utf8',
    'caching'      => false,
    'profiling'    => true,
  ),
  'mysqli' => array(
    'type'           => 'mysqli',
    'connection'     => array(
      'hostname' => 'localhost',
      'database' => 'framework',
      'username'       => 'root',
      'password'       => 'root',
      'persistent'     => false,
      'compress'       => false,
    ),
    'table_prefix' => '',
    'charset'      => 'utf8',
    'caching'      => false,
    'profiling'    => true,
  ),
);
