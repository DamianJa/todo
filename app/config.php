<?php




// show all errors
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);


// require stuff
if( !session_id() ) @session_start();
require_once __DIR__ . '/lib/composer/vendor/autoload.php';



// constants & settings
define( 'BASE_URL', 'http://localhost/todo' );
define( 'APP_PATH', realpath(__DIR__ . '/app/') );

require_once __DIR__ . '/model/Database.php';

// configurations
$config = [

    'db' => [
        'type'     => 'mysql',
        'dbName'     => 'test',
        'server'   => 'localhost',
        'port'     => '3306',
        'username' => 'root',
        'password' => 'root',
        'charset'  => 'utf8'
    ]

];

// create db and connect

$db = new Database($config['db']);
$conn = $db->connect();
// posts controller
include_once "app/controller/Controller.php";
include_once "app/controller/PostsController.php";
$posts = new PostsController($conn);

// auth
require_once APP_PATH . 'lib/composer/vendor/phpauth/phpauth/Config.php';
require_once APP_PATH . 'lib/composer/vendor/phpauth/phpauth/Auth.php';

$auth_config = new PHPAuth\Config($conn);
$auth   = new PHPAuth\Auth($conn, $auth_config);

