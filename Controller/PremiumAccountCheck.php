<?php
include('../Model/PremiumAccountModel.php');

if(isset($_REQUEST['submit'])){
      $username = 'test';
      $AccountName = $_REQUEST['premiumName'];
      $Url = $_REQUEST['websiteURL'];
      $websiteName = $_REQUEST['websiteName'];
      $type = $_REQUEST['type'];
      $Enddate = $_REQUEST['subscribeEnd'];

if(empty($username) || empty($AccountName) || empty($Url) || empty($websiteName) || empty($type) || empty($Enddate)){
    echo "Null Data Found";

}

else{

    $status = AddPremium($username,$AccountName,$Url,$websiteName,$type,$Enddate);

    if($status =! null){
        echo "Premium Account added successfully";
    }
    else{
       echo "failed";
    }
}

}

else{
    "Please Submit Premium Account Form first";
}









?>