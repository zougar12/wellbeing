<?php
include "connexion.php";

if(isset($_GET['envoie'])){

    
    
    $pub = $_GET['com'];

    $pubs = "INSERT INTO commentaire(id_user,id_publication,text_commentaire,dat) VALUES (3,1,'$pub', Now() )";
    
    $run_pub = mysqli_query($con,$pubs);
    
    if($run_pub){
        
        echo "<script></script>";
        
        echo "<script>window.open('Contact.php?id_p=1','_self')</script>";
        
    }
    
  }


?>