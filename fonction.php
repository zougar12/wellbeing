<?php

$con = mysqli_connect("localhost","root","","wellbeing");


function getPub(){
    
    global $con;

    $i = 1;

    
    $get_publications = "select * from publications order by 1 DESC LIMIT 0,8";
    
    $run_publications = mysqli_query($con,$get_publications);
    
    while($row_publications=mysqli_fetch_array($run_publications)){
        
        $id_p = $row_publications['id_publication'];
        
        $publications = $row_publications['text_publication'];

        $datee = $row_publications['dat'];
        echo "
        
        <div class='u-container-style u-custom-item u-list-item u-radius-15 u-repeater-item u-shape-round u-white'>
              <div class='u-container-layout u-similar-container u-container-layout-$i'>
                <p class='u-custom-item u-text u-text-default u-text-1'>Employé</p>
                <p class='u-custom-item u-text u-text-default u-text-2'> $publications <span style='font-weight: 700;'>
                    <span style='font-weight: 400;'></span>
                  </span>
                </p>
                <img class='u-image u-image-default u-preserve-proportions u-image-1' src='images/37429.png' alt='' data-image-width='512' data-image-height='512'>
                <p class='u-custom-item u-small-text u-text u-text-default u-text-variant u-text-3'>$datee</p>
                <img class='u-image u-image-contain u-image-default u-image-2' src='images/like-png-picto-pouce-en-l-air-115636417050dyzg2q0l3-removebg-preview.png' alt='' data-image-width='494' data-image-height='505'>
                
                <img class='u-image u-image-contain u-image-default u-preserve-proportions u-image-3' src='images/25663.png' alt='' data-image-width='512' data-image-height='512'>
                <h7><p class='u-custom-item u-text u-text-default u-text-4'>Dernier commentaire</p></h7>";
                $get_commentaires = "select * from commentaire where id_publication = $id_p LIMIT 0,1";

                $run_commentaires = mysqli_query($con,$get_commentaires);
          
              while($row_commentaires=mysqli_fetch_array($run_commentaires)){
                  
                  $commentaires = $row_commentaires['text_commentaire'];
                  echo"
                <p class='u-custom-item u-text u-text-default u-text-5'>$commentaires</p>";
              }
              echo"
                <a href ='contact.php?id_p=$id_p'><div class='u-border-2 u-border-grey-dark-1 u-container-style u-custom-item u-group u-radius-10 u-shape-round u-white u-group-1'>
                  <div class='u-container-layout u-container-layout-2'>
                    <p class='u-custom-item u-text u-text-default u-text-6'>Donnez votre avis a ce sujet</p>
                  </div>
                </div></a>
                <a href='contact.php?id_p=$id_p' class='u-btn u-btn-round u-button-style u-custom-item u-grey-25 u-hover-grey-15 u-radius-50 u-btn-1'>Envoyer</a>
              </div>
              
              </div>
        
        ";

        $i=$i+2;
        
        
    
}
}

function getfullpub(){
  global $con ;

  if(isset($_GET['id_p'])){
    
    $id_p = $_GET['id_p'];

    $_SESSION['id_p']=$id_p;
  $get_publication = "select * from publications where id_publication = $id_p";
    
    $run_publication = mysqli_query($con,$get_publication);
    
    while($row_publications=mysqli_fetch_array($run_publication)){
        
        $id_p = $row_publications['id_publication'];
        
        $publications = $row_publications['text_publication'];

        echo "
        <div class='u-container-style u-group u-radius-15 u-shape-round u-white u-group-1'>
          <div class='u-container-layout u-container-layout-1'>
            <h5><p class='u-text u-text-default u-text-1'>publication</p></h5>
            <p class='u-text u-text-default u-text-2'>Employé : $publications <span style='font-weight: 700;'>
                <span style='font-weight: 400;'></span>
              </span>
            </p>
            <h5><p class='u-text u-text-default u-text-1'>Commentaires</p></h5>
            ";
            $get_commentaires = "select * from commentaire where id_publication = $id_p ";

          $run_commentaires = mysqli_query($con,$get_commentaires);
    
        while($row_commentaires=mysqli_fetch_array($run_commentaires)){
            
            $commentaires = $row_commentaires['text_commentaire'];
            echo"
            
            <p class='u-text u-text-default u-text-5'> Employeur : $commentaires</p>
            <div></div>
            


        ";


        }

        echo"<div class='u-border-2 u-border-grey-dark-1 u-container-style u-group u-radius-10 u-shape-round u-white u-group-2'>
        <form action='insert.php' methode ='get'>
          <div class='u-container-layout u-container-layout-2'>
            <input type='text' name='com' placeholder='ecrire un commentaire' required style ='border:none;'>
            
          </div>
        </div>
        <button name='envoie' class='u-border-none u-btn u-btn-round u-button-style u-grey-25 u-hover-grey-15 u-radius-50 u-btn-1'>Envoyer</button>
        </form>
      </div>
    </div>";

   

    

}
    }
}



?>