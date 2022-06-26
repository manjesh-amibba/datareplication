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
          $result['key_'.$data->id] = $data->data_key;
          $result['value_'.$data->id] = $data->data_value;
        }
        $result['recordcount'] = count($datas);
    		echo json_encode($result);
    }

    public function showData(){
      $result['datas'] = $this->dataModel->getAllData();
      echo view('header');
      echo view('show-data', $result);
      echo view('footer');
    }
}
