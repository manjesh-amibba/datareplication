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
      $key = $_POST['key'];
      $value = $_POST['value'];
      $this->dataModel->writeData($key, $value);
    }
    public function addDataForm(){
      echo view('header');
      echo view('add-data-form');
      echo view('footer');
    }

}
