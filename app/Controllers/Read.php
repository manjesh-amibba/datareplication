<?php

namespace App\Controllers;

class Read extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
    }

    public function readData()
    {
        $datas = $this->dataModel->getAllData();
        $result = array();
        foreach($datas as $data){
          $keyValueArray[$data->data_key] = $data->data_value;
          $result[$data->id] = $keyValueArray;
        }

        $result['recordcount'] = count($datas);
    		echo json_encode($result);

    }
}
