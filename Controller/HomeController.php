<?php
namespace Controller;

use Support\Request;
use Support\Validator;
use Support\View;
use Support\CSRFToken;
use Support\Crypto;
use Support\UUID;
use Support\DataTables;
use Support\Session;
use Support\Date;
use Model\Obat;
use Model\User;
use Model\Pemakaian;
use Model\RestEmp;
use Model\Stock;

class HomeController
{

    public function __construct()
    {
        $this->validator = new Validator();
    }

    public function index()
    {
        $obat = Obat::query()->count();
        $user = User::query()->count();
        echo Date::parse('2024-10-21')->startOfDay().'<br>';
        echo Date::parse('2024-10-21')->endOfDay();
        $pemakaian = Pemakaian::query()
                    ->whereMonth('tb_pemakaian.tgl_pemakaian',Date::Month())
                    ->whereYear('tb_pemakaian.tgl_pemakaian',Date::Year())
                    ->count();
        $rest = RestEmp::query()
                    ->whereMonth('tb_rest_emp.tgl_rest',Date::Month())
                    ->whereYear('tb_rest_emp.tgl_rest',Date::Year())
                    ->count();
        View::render('dashboard',['obat'=>$obat,'user'=>$user,'pemakaian'=>$pemakaian,'rest'=>$rest],'navbar/navbar');
    }

    public function onLogin(Request $request)
    {
        $user = User::query()
                ->where('username','=',$request->username)
                ->where('password','=',md5($request->password))
                ->first();
        if($user){
            Session::set('user',[
                'user_id' => $user['user_id'],
                'username' => $user['username'],
                'nama_user' => $user['nama_user'],
                'level' => $user['level'],
                'foto' => $user['foto']
            ]);
            // $_SESSION['username'] = $user->username;
            View::redirectTo($_ENV['ROUTE_PREFIX'].'/home');
        } else {
            Session::set('error', 'Invalid Credentials');
            View::redirectTo($_ENV['ROUTE_PREFIX'].'/login');
        }
    }

    public function logout()
    {
        Session::destroy();
        View::redirectTo($_ENV['ROUTE_PREFIX'].'/login');
    }
}
?>