<?php
session_start();

require __DIR__ . '/../vendor/autoload.php';  //composer
require __DIR__ . '/../src/Models/User.php';
require __DIR__ . '/../src/Controllers/InicioController.php';
require __DIR__ . '/../src/Controllers/UserController.php';
require __DIR__ . '/../src/Controllers/LoginController.php';
require __DIR__ . '/../src/Controllers/DashboardController.php';


use Illuminate\Database\Capsule\Manager as Capsule;
use App\Controllers\UserController;
use App\Controllers\LoginController;
use App\Controllers\DashboardController;
use App\Controllers\InicioController;

$userController = new UserController();
$loginController = new LoginController();
$dashboardController = new DashboardController();
$inicioController = new InicioController();

Flight::set('flight.views.path', __DIR__ . '/../src/Views');

//database
$capsule = new Capsule;
$capsule->addConnection([   // essa é a conexão com o banco de dados
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'flight_projeto', // nome do banco de dados
    'username'  => 'root',           // usuário do banco de dados
    'password'  => '',               // senha do banco de dados
    'charset'   => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent(); 
//

    /** rotas */

// página inicial
Flight::route('/', [$inicioController, 'index']);
//cadastro
Flight::route('GET /cadastro', [$userController, 'showRegistrationForm']);
Flight::route('POST /cadastro', [$userController, 'store']);
//login
Flight::route('GET /login', [$loginController, 'showLoginForm']);
Flight::route('POST /login', [$loginController, 'login']);
//dashboard
Flight::route('GET /dashboard', [$dashboardController, 'index']);
//logout
Flight::route('GET /logout', [$loginController, 'logout']);

Flight::start();