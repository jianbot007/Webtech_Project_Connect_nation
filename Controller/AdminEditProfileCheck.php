<?php

include('../Model/adminListModel.php');
session_start();
if(isset($_SESSION['username'])){
  if(isset($_REQUEST['submit'])){

    $username = $_SESSION['username'];
    $email  =  trim($_REQUEST['email']);
    $fullname = trim($_REQUEST['fullname']);
    $dob= trim($_REQUEST['dob']);
    $mobileno = trim($_REQUEST['phone']);
    $gender = trim($_REQUEST['gender']);

    function FullnameCheck($Fullname) {
        for ($i = 0; $i < strlen($Fullname) ; $i++) {
            $ascii= ord($Fullname[$i]);
           
            if (!(($ascii >= 65 && $ascii <= 90) || ($ascii >= 97 && $ascii <= 122) || $ascii == 32)) {
                return false;
            }
    
        }
         return true;
    }

    function usernameCheck($Username){
        $ascii= ord($Username[0]);
        if (!(($ascii >= 65 && $ascii <= 90) || ($ascii >= 97 && $ascii <= 122))) {
            return false;
        }
            return true;
    }

if(FullnameCheck($fullname) != true){
       echo "Number cant be in Fullname";
    }
    else {
        $status = updateUserbyUsername($username,$fullname,$email,$mobileno,$gender,$dob);
        if($status != null){
            header('location: ../view/AdminList.php');
        }else{
            header('location: ../view/AdminReg.php');
        }
    }

   
  }
  else{
    echo "ERROR : No submit";
  }



}
else{
    echo"Please Login First";
    header('location: ../view/login.html');
    exit();
}


?>