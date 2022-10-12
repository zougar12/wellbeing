<?php

$con = mysqli_connect("localhost","root","","wellbeing");


function getPub(){
    
    global $con;

    $i = 1;
    
    $get_publications = "select * from publications order by 1 DESC LIMIT 0,8";
    
    $run_publications = mysqli_query($con,$get_publications);
    
    while($row_publications=mysqli_fetch_array($run_publications)){
        
        $id_p = $row_publications['id_c'];
        
        $publications = $row_publications['pub'];
        echo "
        
        <div class='u-container-style u-custom-item u-list-item u-radius-15 u-repeater-item u-shape-round u-white'>
              <div class='u-container-layout u-similar-container u-container-layout-$i'>
                <p class='u-custom-item u-text u-text-default u-text-1'>Employé</p>
                <p class='u-custom-item u-text u-text-default u-text-2'> $publications <span style='font-weight: 700;'>
                    <span style='font-weight: 400;'></span>
                  </span>
                </p>
                <img class='u-image u-image-default u-preserve-proportions u-image-1' src='images/37429.png' alt='' data-image-width='512' data-image-height='512'>
                <p class='u-custom-item u-small-text u-text u-text-default u-text-variant u-text-3'>Il y a 5 heures</p>
                <img class='u-image u-image-contain u-image-default u-image-2' src='images/like-png-picto-pouce-en-l-air-115636417050dyzg2q0l3-removebg-preview.png' alt='' data-image-width='494' data-image-height='505'>
                <img class='u-image u-image-contain u-image-default u-preserve-proportions u-image-3' src='images/25663.png' alt='' data-image-width='512' data-image-height='512'>
                <p class='u-custom-item u-text u-text-default u-text-4'>Employeur</p>
                <p class='u-custom-item u-text u-text-default u-text-5'>Je suis d'accord avec vous nous allons faire notre possible afin de pouvoir corriger au plus vite ce problème</p>
                <div class='u-border-2 u-border-grey-dark-1 u-container-style u-custom-item u-group u-radius-10 u-shape-round u-white u-group-1'>
                  <div class='u-container-layout u-container-layout-2'>
                    <p class='u-custom-item u-text u-text-default u-text-6'>Donnez votre avis a ce sujet</p>
                  </div>
                </div>
                <a href='#' class='u-btn u-btn-round u-button-style u-custom-item u-grey-25 u-hover-grey-15 u-radius-50 u-btn-1'>Envoyer</a>
              </div>
              
              </div>
        
        ";

        $i=$i+2;
        
        
    
}
}
?>