<?php
session_start();
include('../Model/adminListModel.php');

if(isset($_REQUEST['submit'])){

   
    $username = trim($_REQUEST['username']);
    $password = trim($_REQUEST['password']);
    if (empty($username) || empty($password)) {
        echo "Null data found!";
    }
    else {
          $status =  login($username,$password);
        
          if($status == true){
            $_SESSION['username'] = $username;
            $_SESSION['Login'] = $_REQUEST['submit'];
             header('location: ../view/AdminHomePage.php');
          }
          else{
             echo "Wrong Password,Try again";
          }

}
}
else {
    header('location: ../view/login.html');
}



?>