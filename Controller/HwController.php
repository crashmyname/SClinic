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
use Model\HW;

class HwController
{

    public function __construct()
    {
        $this->validator = new Validator();
    }

    public function hw()
    {
        $title = "Data Hw";
        if(Request::isAjax()){
            $alat = HW::all();
            return DataTables::of($alat)->make(true);
        }
        View::render('hw/hw',['title'=>$title],'navbar/navbar');
    }
}
?>