<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'itoptest2.c9gfyvwslse8.eu-west-1.rds.amazonaws.com';
$CFG->dbname    = 'moodle282bis';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'Rootroot';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://demo2.virtualtoptraining.com';
$CFG->dataroot  = '/mnt/glusterfs/moodledata/moodle282';
$CFG->admin     = 'admin';

$CFG->session_handler_class = '\core\session\memcached';
$CFG->session_memcached_save_path = 'itoptest.uv5orh.cfg.euw1.cache.amazonaws.com:11211';
$CFG->session_memcached_prefix = 'sess_demo2_';
$CFG->session_memcached_acquire_lock_timeout = 120;
$CFG->session_memcached_lock_expire = 7200;
$CFG->directorypermissions = 0777;

$CFG->debug = 6143;
$CFG->debugdisplay = 1;

$CFG->tempdir = '/srv/www/moodle282/tempdir';
$CFG->localcachedir = '/srv/www/moodle282/localcachedir';

require_once(dirname(__FILE__) . '/lib/setup.php');
