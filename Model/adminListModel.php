<?php
     
    function getConnection(){
        $con = mysqli_connect('127.0.0.1', 'root', '', 'connectnation');
        return $con;
    }

    function login($username, $password){
        $con = getConnection();
        $sql = "select * from adminlist where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count =  mysqli_num_rows($result);

        if($count ==1){
            return true;
        }else{
            return false;
        }
    }

    function addUser($username, $password, $email , $fullname , $dob , $mobileno , $id , $gender){
        $con = getConnection();
        $sql = "insert into adminlist VALUES( '{$id}' ,'{$username}', '{$password}', '{$email}' ,'{$dob}', '{$gender}','{$mobileno}' ,'{$fullname}')";        
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }



    function getUser($id) {
        $con = getConnection();
        $sql = "SELECT * FROM userlist WHERE id = '{$id}'";
        $result = mysqli_query($con, $sql);
        
        if ($result && mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        } else {
            return null; 
        }
    }
    

    function getAllUser(){
        $con = getConnection(); 
        $sql = "select * from users";
        $result = mysqli_query($con, $sql);
        $users = [];
    
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $users[] = $row;
            }
        }
        mysqli_close($con);
        return $users;
    }

    function updateUser($id,$username,$email,$password){
        $con = getConnection();
        $sql = "UPDATE users SET username= '{$username}', email= '{$email}', password='{$password}' WHERE id = '{$id}'";
        $result = mysqli_query($con, $sql);

        return $result;
    }

    function deleteUser($id){
        $con = getConnection();
        $sql = "DELETE from users where id = '{$id}'";

        return mysqli_query($con,$sql);
    }

   function getPassword($username){
    $con = getConnection();
    $sql = "SELECT password from adminlist Where username = '{$username}' ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    return $row["password"];
   }

   function updatePassword($username,$newpass){
    $con = getConnection();
    $sql = "UPDATE adminlist SET password='{$newpass}' WHERE username = '{$username}'";
        $result = mysqli_query($con, $sql);

        return $result;
   }
?>