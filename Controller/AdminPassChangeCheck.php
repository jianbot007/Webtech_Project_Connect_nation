<?php
session_start();
include('../Model/adminListModel.php');


if (isset($_SESSION['username'])) {
if(isset($_REQUEST['submit'])){

    $username = $_SESSION['username'];
    $oldpassword = trim($_REQUEST['oldPassword']);
    $newpassword = trim($_REQUEST['newPassword']);
    $confirmpassword = trim($_REQUEST['confirmPassword']);
    
    if (empty($oldpassword) || empty($newpassword) || empty($confirmpassword)) {
        echo "Null data found!";
    }
    else
    {  
        $password = getPassword($username);
        
       if($password == $oldpassword){
          if($newpassword == $confirmpassword){
            updatePassword($username,$newpassword);
            header('location: ../view/AdminHomepage.php');
          }
          else{
                echo "confirmpass and pass is not same";
          }
       }
       else{
        echo "Password is not correct";
       }

    }


}
else {
    header('location: ../view/AdminPassChange');
}
}
else {
    echo "Username not found";
}



?>