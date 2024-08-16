<?php

namespace Controller;
use Support\Response;
use Support\Request;
use Support\Http;

class ApiController {

    public function namaemp(Request $request)
    {
        $nik = $request->nik;
        $nama = Http::post('http://ise-iss-09/istock/public/api/apinama',[
            'nik' => $nik,
        ]);
        return Response::json($nama);
    }

    public function sectionemp(Request $request)
    {
        $nik = $request->nik;
        $sect = Http::post('http://ise-iss-09/istock/public/api/apisect',[
            'nik' => $nik,
        ]);
        return Response::json($sect);
    }
}