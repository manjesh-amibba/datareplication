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
      //$this->dataModel->writeData($key, $value);
      $this->replicate($key, $value);
    }

    public function addDataForm(){
      echo view('header');
      echo view('add-data-form');
      echo view('footer');
    }

    public function replicate($key, $value){
      $datas = $this->dataModel->getAllData();
      //Machine 1, instant replication
      $url2 = "http://ec2-65-0-18-227.ap-south-1.compute.amazonaws.com/write-data";
      $post = array(
          'key' => $key,
          'value' => $value,
          'id' => count($datas)
          );
      $this->replicateAPICall($post, $url2);

      }



public function replicateAPICall($data, $url){
  print_r($data);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,  $url );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt($ch, CURLOPT_POST,           1 );
    curl_setopt($ch, CURLOPT_POSTFIELDS,    $data );
    curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: text/plain'));
    $result = curl_exec($ch);
    curl_close($ch);
  }

}
