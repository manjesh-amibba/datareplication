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
        $data = $this->dataModel->getAllData();
        print_r($data);
    }
}
