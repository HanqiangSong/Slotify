<?php

function sanitizePassword($inputText) {
  $inputText = strip_tags($inputText); //get rid of ofther simplexml_load_string
  return $inputText;
}

function sanitizeFormUsername($inputText) {

  $inputText = strip_tags($inputText); //get rid of ofther simplexml_load_string
  $inputText = str_replace(" ","",$inputText); // repalce spce with empty
  return $inputText;
}

function sanitizeFormString($inputText) {
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ","",$inputText);
  $inputText = ucfirst(strtolower($inputText)); // change first char upper
  return $inputText;
}



if(isset($_POST['loginButton'])) {
  //Login Button was pressed
  $loginUsername = sanitizeFormUsername($_POST['loginUsername']);
}

if(isset($_POST['registerButton'])) {
  $username = sanitizeFormUsername($_POST['username']);
  $firstName = sanitizeFormString($_POST['firstName']);
  $lastName = sanitizeFormString($_POST['lastName']);
  $email = sanitizeFormString($_POST['email']);
  $email2 = sanitizeFormString($_POST['email2']);
  $passWord = sanitizePassword($_POST['passWord']);
  $passWord2 = sanitizePassword($_POST['passWord2']);
  $wasSuccessful = $account->register($username, $firstName, $firstName, $email, $email2, $passWord, $passWord2);

  if ($wasSuccessful) {
    header("Location: index.php");
  }


}


 ?>
