<?php
     
    function getConnection(){
        $con = mysqli_connect('127.0.0.1', 'root', '', 'connectnation');
        return $con;
    }

    function GetComplain($id){
        $con = getConnection();
        $sql = "SELECT * FROM complainbox WHERE accountid = '{$id}'";
        $result = mysqli_query($con, $sql);
        
        if ($result && mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        } else {
            return null; 
        }

    }

    function AddBanAcc($accid,$accountname,$reason,$bannedtime){
        $con = getConnection(); 
        $sql = "insert into bannedlist VALUES('{$accid}' ,'{$accountname}','{$reason}','{$bannedtime}')";        
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }

    }
    
    function Addpost($postid,$accountname,$deletedtime,$posttime,$postdetails){
        $con = getConnection(); 
        $sql = "insert into deletedpost VALUES( '{$postid}' ,'{$accountname}','{$deletedtime}','{$posttime}','{$postdetails}')";        
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
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

    function deleteComplain($id){
        $con = getConnection();
        $sql = "DELETE from complainbox where accountid = '{$id}'";

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