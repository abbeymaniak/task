<?php

if(isset($_POST)){

    $emailsArray = ['ayo_ogunnaike@yahoo.com'];
    $name = $_POST['name'];
    $title = $_POST['title'];
    $company = $_POST['company'];
    $email = $_POST['email'];

  if(!in_array($email, $emailsArray)){
      array_push($emailsArray, $email);
     echo 'success';
  }else{
 echo json_encode(['status' => 'failure', 'message' => 'Email already exist']);

  }
    
}