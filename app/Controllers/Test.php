<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
    }

    public function writeData()
    {
      //print_r($_POST);
      $key = "Test Key ";
      $value = "Test Value ";
      $this->dataModel->writeData($key, $value);
      $this->replicate($key, $value);
      $datas = $this->dataModel->getDataById(4568);
      //print_r($datas);
    }

    public function addDataForm(){
      echo view('header');
      echo view('add-data-form');
      echo view('footer');
    }

    public function replicate($key, $value){
      $datas = $this->dataModel->getAllData();
      //Machine 1, instant replication
      $url2 = "http://datareplication.com/write-data";
      $post = array(
          'key' => $key,
          'value' => $value,
          'id' => 123
          );
      //$this->dataModel->writeDataWithId(500, $key, $value);
      $this->replicateAPICall($post, $url2);

      }



public function replicateAPICall($data, $url){
    $fields_string = http_build_query($data);
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
    $result = curl_exec($ch);
    echo $result;
    curl_close($ch);
  }

}
