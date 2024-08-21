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
use Model\Alat;

class AlatController
{

    public function __construct()
    {
        $this->validator = new Validator();
    }

    public function alat()
    {
        $title = "Data Alat";
        if(Request::isAjax()){
            $alat = Alat::all();
            return DataTables::of($alat)->make(true);
        }
        View::render('alat/alat',['title'=>$title],'navbar/navbar');
    }
}
?>