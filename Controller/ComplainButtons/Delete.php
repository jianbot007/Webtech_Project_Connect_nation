<?php
include("../../Model/complainlistModel.php");


if(isset($_REQUEST['id'])){
    $Id = $_REQUEST['id'];
    

    $BanAccount = GetComplain($Id);
    if($BanAccount != null){
    $accid = $Id;
    $accountname = $BanAccount['accountname'];
    $deletedtime = "7th January 2025" ;
    $posttime = "1st January 2025";
    $postdetails = $BanAccount['postdetails'];
     
    Addpost($accid,$accountname,$deletedtime,$posttime,$postdetails);
    header('location: ../../view/complainBox.php');
    deleteComplain($Id);
    }
    else{
        echo "Error";
    }

   
}

else{
    
    echo "ERROR : Could not catch id";
}

?>