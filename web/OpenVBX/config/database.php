<?php
$active_group = 'default';
$active_record = TRUE;
$dbopts = parse_url(getenv('DATABASE_URL'));
$db['default']['username'] = $dbopts["user"];
$db['default']['password'] = $dbopts["pass"];
$db['default']['hostname'] = $dbopts["host"];
$db['default']['database'] = ltrim($dbopts["path"]);
$db['default']['dbdriver'] = 'mysqli';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = FALSE;
$db['default']['db_debug'] = FALSE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
/* Autogenerated Configuration for db 2015-05-06 */
