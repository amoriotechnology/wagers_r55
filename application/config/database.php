<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group  = 'default';
$query_builder = TRUE;
$active_record = TRUE;

$db['default'] = [
    'dsn'          => '',
    'hostname'     => 'localhost',
    'username'     => 'amoriotech_stockeai',
    'password'     => 'Amorio@2022',
    'database'     => 'amoriotech_stockeai',
    'dbdriver'     => 'mysqli',
    'dbprefix'     => '',
    'pconnect'     => FALSE,
    'db_debug'     => (ENVIRONMENT !== 'production'),
    'cache_on'     => FALSE,
    'cachedir'     => '',
    'char_set'     => 'utf8',
    'dbcollat'     => 'utf8_general_ci',
    'swap_pre'     => '',
    'encrypt'      => FALSE,
    'compress'     => FALSE,
    'autoinit'     => TRUE,
    'stricton'     => FALSE,
    'failover'     => [],
    'save_queries' => TRUE,
];

?>