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
        $emailcheck = getUserbyemail($email);
        $mobilecheck = getUserbymobile($mobileno);
        $usernameCheck2 = getUser($username);
        $idCheck = getUserbyID($id);

        if( empty($username) || empty($password) || empty($email) || empty($fullname) || empty($dob) || 
        empty($mobileno) || empty($id) || empty($gender)){
            echo "Null data found!";
        }
        elseif(strlen($password) < 8){
            echo "Password character should be more than 8";
        }
        elseif(strlen($mobileno) != 11 || $mobileno[0] != '0' || $mobileno[1] != '1'){
            echo "Mobile phone no must be start with 01 and character number exactly 11";
        }
        elseif(FullnameCheck($fullname) != true){
           echo "Number cant be in Fullname";
        }
        elseif(usernameCheck($username) != true){
            echo "First Character cant be space or number or speacial sign";
        }
           
        elseif($usernameCheck2 != null ){
           echo "username already in database,change username";
        }
        elseif($idCheck != null){
          echo "id already in database,change id";
        }
        elseif($emailcheck != null){
            echo "Email is already taken,try with new one";
        }
        elseif($mobilecheck != null){
            echo "Mobile Number is Already Taken,try with new one";
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