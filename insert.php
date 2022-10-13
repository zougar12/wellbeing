<?php
session_start();
include "connexion.php";
$id_p=$_SESSION['id_p'];

if(isset($_GET['envoie'])){

    
    
    $pub = $_GET['com'];

    $pubs = "INSERT INTO commentaire(id_user,id_publication,text_commentaire,dat) VALUES (3,$id_p,'$pub', Now() )";
    
    $run_pub = mysqli_query($con,$pubs);
    
    if($run_pub){
        
        echo "<script></script>";
        
        echo "<script>window.open('Contact.php?id_p=$id_p','_self')</script>";
        
    }
    
  }


?>