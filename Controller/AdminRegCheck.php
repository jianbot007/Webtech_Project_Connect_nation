<?php
 include('../Model/adminListModel.php');

 if(isset($_POST['submit'])){
        
         $username  =  trim($_REQUEST['username']);
        $password  =  trim($_REQUEST['password']);
        $email  =  trim($_REQUEST['email']);
        $fullname = trim($_REQUEST['fullname']);
        $dob= trim($_REQUEST['dob']);
        $mobileno = trim($_REQUEST['phone']);
        $id = trim($_REQUEST['id']);
        $gender = trim($_REQUEST['gender']);

        

        if( empty($username) || empty($password) || empty($email) || empty($fullname) || empty($dob) || 
        empty($mobileno) || empty($id) || empty($gender)){
            echo "Null data found!";
        }else {
            $status = addUser($username, $password, $email , $fullname , $dob , $mobileno , $id , $gender);
            if($status){
                header('location: ../view/AdminList.php');
            }else{
                header('location: ../view/AdminReg.php');
            }
        }
    }else{
        header('location: ../view/AdminReg.php');
    }

    ?>