<?php
namespace Controller;
use Support\Request;
use Support\AuthMiddleware;
use Support\DataTables;
use Support\Date;
use Support\View;
use Model\Mcu;

class McuController{

    public function mcu(){
        if(Request::isAjax()){
            // $mcu = Mcu::all();
            $mcu = Mcu::query()
                    ->select('id_mcu','nik','no_rm','nama','factory','tgl_pemeriksaan','status_gizi','buta_warna','anamnesa','radiology_test','dokter','fitness_s','keterangan')
                    ->get();
            return DataTables::of($mcu)
                    ->make(true);
        }
        View::render('mcu/mcu',[],'navbar/navbar');
    }
}