<?php

/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.9-dev
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * -----------------------------------------------------------------------------
 *  Global database settings
 * -----------------------------------------------------------------------------
 *
 *  Set database configurations here to override environment specific
 *  configurations
 *
 */

return array(
  'active' => 'testdb',
  /**
   * Base config, just need to set the DSN, username and password in env. config.
   */
  'default' => array(
    'type'        => 'pdo',
    'connection'  => array(
      'persistent' => false,
    ),
    'identifier'   => '`',
    'table_prefix' => '',
    'charset'      => 'utf8',
    'enable_cache' => true,
    'profiling'    => false,
  ),

  'testdb' => array(
    'type'   => 'mysqli',
    'connection' =>
    array(
      'hostname'   => 'localhost',
      'database'   => 'データベース名',
      'username'   => 'ユーザ名',
      'password'   => 'パスワード',
      'persistent' => FALSE,
    ),
    'table_prefix' => '',
    'charset'      => 'utf8',
    'caching'      => false,
    'profiling'    => true,
  ),
);
