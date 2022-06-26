<?php

namespace App\Controllers;

class Write extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
    }

    public function writeData()
    {
      //$key = $_POST['data-key'];
      //$value = $_POST['data-value'];
      $key = "key2";
      $value = "value2";
      $this->dataModel->writeData($key, $value);
    }

}
