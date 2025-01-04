<?php
     
    function getConnection(){
        $con = mysqli_connect('127.0.0.1', 'root', '', 'connectnation');
        return $con;
    }

    function getAllcomplan(){
        $con = getConnection(); 
        $sql = "select * from complainbox";
        $result = mysqli_query($con, $sql);
        $complains = [];
    
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $complains[] = $row;
            }
        }
        mysqli_close($con);
        return $complains;
    }

    function deleteComplain($postid){
        $con = getConnection();
        $sql = "DELETE from complainbox where postid = '{$postid}'";

        return mysqli_query($con,$sql);
    }


    function Addcomplain($complaint,$accountname,$postdetails,$complain,$postid){
        $con = getConnection(); 
        $sql = "insert into complainbox VALUES('{$complaint}' ,'{$accountname}','{$postdetails}','{$complain}','{$postid}')";        
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }

    }
?>