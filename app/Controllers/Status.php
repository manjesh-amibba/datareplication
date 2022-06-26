<?php

namespace App\Controllers;

class Status extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
    }

    public function showStatus()
    {
      $result['datas'] = $this->dataModel->getAllData();
      echo view('header');
      echo view('status', $result);
      echo view('footer');
    }
}
