<?php
session_start();
require_once __DIR__ . '/bin/support/Asset.php';
require_once __DIR__ . '/bin/support/Prefix.php';
require_once __DIR__ . '/bin/support/Rc.php';
use Support\Request;
use Support\Route;
use Support\Validator;
use Support\View;
use Support\CSRFToken;
use Support\CORSMiddleware;
use Support\AuthMiddleware; //<-- Penambahan Middleware atau session login
use Support\RateLimiter;
use Support\Crypto;
use Support\Session;
use Support\UUID;
use Controller\UserController;
use Controller\ObatController;
use Controller\PemakaianController;
use Controller\ApiController;
use Controller\HomeController;
use Controller\AlatController;
use Controller\HwController;
use Controller\McuController;

$request = new Request();
$route = new Route($prefix);
$userController = new UserController();
$obatController = new ObatController();
$pemakaianController = new PemakaianController();
$apiController = new ApiController();
$homeController = new HomeController();
$alatController = new AlatController();
$hwController = new HwController();
$mcuController = new McuController();

handleMiddleware();

// Authentication
$route->get('/', function(){
    View::render('auth/login');
});
$route->get('/login', function(){
    View::render('auth/login');
});
$route->post('/login', function() use ($homeController,$request) {
    $homeController->onLogin($request);
});
$route->post('/logout', function() use ($homeController) {
    $homeController->logout();
});
// HOME
$route->get('/home', function() use ($homeController){
    AuthMiddleware::checkLogin();
    $homeController->index();
});
$route->get('/obat', function() use ($obatController){
    $obatController->obat();
});
$route->get('/pemakaian-obat', function() use ($pemakaianController){
    $pemakaianController->pemakaian();
});
$route->get('/data-alat', function() use ($alatController){
    $alatController->alat();
});
$route->get('/data-user', function() use ($userController){
    $userController->index();
});
$route->get('/data-hw', function() use ($hwController){
    $hwController->hw();
});
$route->get('/data-mcu', function() use ($mcuController){
    $mcuController->mcu();
});
$route->get('/getobat', function() use ($obatController){
    $obatController->getObat();
});

// User
$route->get('/user', function() use ($userController) {
    AuthMiddleware::checkLogin(); //<-- Cara pemanggilannya
    $userController->index();
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

// ROUTE API DIBAWAH SINI BIAR RAPIH
$route->get('/api/user', function() use ($userController) {
    AuthMiddleware::checkToken();
    $userController->userapi();
});
$route->post('/api/login', function() use ($userController) {
    $request = new Request();
    $userController->loginapi($request);
});
$route->post('/api/employee', function() use ($apiController, $request){
    $apiController->namaemp($request);
});
$route->post('/api/sect', function() use ($apiController, $request){
    $apiController->sectionemp($request);
});

// Menjalankan route
// echo "Dispatching route...<br>";
$route->dispatch();
?>