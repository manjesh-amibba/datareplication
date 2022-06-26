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
      if (isset($_POST['id'])){
        $datas = $this->dataModel->getDataById($_POST['id']);
        if(count($datas) > 0){
          // No Need to replicate
          return;
        }else{
          // Vaid Replication request.
          $this->dataModel->writeDataWithId($id, $key, $value);
          return;
        }

      }
      // First time data Writing
      $this->dataModel->writeData($key, $value);
      $this->replicate();
    }

    public function addDataForm(){
      echo view('header');
      echo view('add-data-form');
      echo view('footer');
    }
    
    public function replicate(){
      $datas = $this->dataModel->getAllData();
      //Machine 2, instant replication
      $url2 = "http://ec2-65-0-18-227.ap-south-1.compute.amazonaws.com/write-data";
      $post = [
          'key' => $_POST['key'],
          'value' => $_POST['value'],
          'id' => count($datas)

      ];
      $this->replicateAPICall($post, $url);
      if(count($datas)%10 == 0){
        $url3 = "http://ec2-3-110-157-240.ap-south-1.compute.amazonaws.com/write-data";
        $url4 = "http://ec2-65-0-132-227.ap-south-1.compute.amazonaws.com/write-data";
        foreach ($datas as $data) {
          $post = [
              'key' => $data->data_key,
              'value' => $data->data_value,
              'id' => $data->id,
          ];
          $this->replicateAPICall($post, $url3);
          $this->replicateAPICall($post, $url4);
        }
        }
      }
    }

public replicate5(){
  $url5 = "http://ec2-13-127-217-50.ap-south-1.compute.amazonaws.com/write-data";
  $datas = $this->dataModel->getAllData();
  foreach ($datas as $data) {
    $post = [
        'key' => $data->data_key,
        'value' => $data->data_value,
        'id' => $data->id,
    ];
    $this->replicateAPICall($post, $url5);
  }
}

priavte replicateAPICall($data, $url){
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($ch);
    curl_close($ch);
  }

}
