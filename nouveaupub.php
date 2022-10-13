<?php
include "connexion.php";

if(isset($_POST['pub'])){
    
    $id_u = 1;
    
    $pub = $_POST['message'];

    $pubs = "INSERT INTO publications( text_publication,id_user,aime,aimepas,dat) VALUES ('$pub', 3,2,5, Now() )";
    
    $run_pub = mysqli_query($con,$pubs);
    
    if($run_pub){
        
        echo "<script></script>";
        
        echo "<script>window.open('accueil.php','_self')</script>";
        
    }
    
  }

?>