<?php
session_start();
require_once __DIR__ . '/bin/support/Asset.php';
use Support\Request;
use Support\Route;
use Support\Validator;
use Support\View;
use Support\CSRFToken;
use Support\CORSMiddleware;
use Support\AuthMiddleware; //<-- Penambahan Middleware atau session login
use Support\RateLimiter;
use Support\Crypto;
use Support\UUID;
use Controller\UserController;
use Controller\ObatController;
use Controller\PemakaianController;
// use Model\UserModel;
$envFile = __DIR__ . '/.env';
$env = parse_ini_file($envFile);

foreach ($env as $key => $value) {
    $_ENV[$key] = $value;
}

$prefix = $_ENV['ROUTE_PREFIX'] != null ? $_ENV['ROUTE_PREFIX'] : throw new Exception('Variabel lingkungan ROUTE_PREFIX tidak ditemukan atau kosong.');

$request = new Request();
$route = new Route($prefix);
$userController = new UserController();
$obatController = new ObatController();
$pemakaianController = new PemakaianController();

$rateLimiter = new RateLimiter();
if (!$rateLimiter->check($_SERVER['REMOTE_ADDR'])) {
    http_response_code(429);
    View::render('errors/429',[]);
    exit();
}
CORSMiddleware::handle();

$route->get('/', function(){
    View::render('auth/login');
});
$route->get('/home', function() use ($obatController){
    $obatController->index();
});
$route->get('/obat', function() use ($obatController){
    $obatController->obat();
});
$route->get('/pemakaian-obat', function() use ($pemakaianController){
    $pemakaianController->pemakaian();
});
$route->get('/getobat', function() use ($obatController){
    $obatController->getObat();
});
// Authentication
$route->get('/login', function(){
    View::render('login');
});
$route->post('/login', function() use ($userController) {
    $request = new Request();
    $userController->login($request);
});
$route->post('/api/login', function() use ($userController) {
    $request = new Request();
    $userController->loginapi($request);
});
$route->get('/logout', function() use ($userController) {
    $userController->logout();
});
// User
$route->get('/user', function() use ($userController) {
    AuthMiddleware::checkLogin(); //<-- Cara pemanggilannya
    $userController->index();
});
// $route->get('/user/getUsers', function() use ($userController){
//     $userController->getUsers();
// });
$route->get('/api/user', function() use ($userController) {
    AuthMiddleware::checkToken();
    $userController->userapi();
});
$route->get('/adduser', function() use ($userController){
    AuthMiddleware::checkLogin();
    $userController->addUser();
});
$route->get('/formedit', function() use ($userController, $request) {
    AuthMiddleware::checkLogin();
    $id = Crypto::decrypt($request->id);
    $userController->getUserId($id);
});
$route->post('/store', function() use ($userController, $request) {
    $userController->store($request);
});
$route->post('/update', function() use ($userController, $request) {
    $id = Crypto::decrypt($request->id);
    $userController->update($request, $id);
});
$route->get('/delete', function() use ($userController, $request) {
    $id = Crypto::decrypt($request->id);
    $userController->delete($id);
});

// Menjalankan route
// echo "Dispatching route...<br>";
$route->dispatch();
?>