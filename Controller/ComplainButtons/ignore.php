<?php
include("../../Model/complainlistModel.php");


if(isset($_REQUEST['id'])){
    $Id = $_REQUEST['id'];
    


     
    deleteComplain($Id);
    header('location: ../../view/complainBox.php');
    
    
  
   
}
else{
    
    echo "ERROR : Could not catch id";
}

?>