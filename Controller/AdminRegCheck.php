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

        $usernameCheck = getUser($username);
        $idCheck = getUserbyID($id);

        if( empty($username) || empty($password) || empty($email) || empty($fullname) || empty($dob) || 
        empty($mobileno) || empty($id) || empty($gender)){
            echo "Null data found!";
        }
        elseif(strlen($password) < 8){
            echo "Password character should be more than 8";
        }
        elseif(strlen($mobileno) != 11 || $mobileno[0] != '0' || $mobileno[1] != '1'){
            echo "Mobile phone no must be start with 01 and character exactly 11";
        }
        elseif($usernameCheck != null ){
           echo "username already in database,change username";
        }
        elseif($idCheck != null){
          echo "id already in database,change id";
        }
        else {
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