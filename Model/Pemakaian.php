<?php

namespace Model;
use Support\BaseModel;
use Support\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;

class Pemakaian extends BaseModel
{
    protected $table = 'tb_pemakaian';
    protected $primaryKey = 'id_pemakaian';

    public function importFromFile(Request $request, $filepath)
    {
        $spreadsheet = IOFactory::load($filepath);
        $sheet = $spreadsheet->getActiveSheet();
        $data = $sheet->toArray();
        $headers = array_shift($data);
        foreach($data as $row){
            $dataArray = array_combine($headers,$row);
            $this->attributes = $dataArray;
            $this->save();
        }
    }
}
?>