<?php
namespace Controller;
use Support\Request;
use Support\Validator;
use Support\View;
use Support\CSRFToken;
use Support\Crypto;
use Support\UUID;
use Support\DataTables;
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
}
?>