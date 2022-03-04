<?php

//include "file.php";


function Vierge($atts, $content=null) { 


       //Recuperation des donnees
       if ($atts[0]=="Test"){       
       }

       else return "Erreur de definition du shortcode";


       //Affichage des resultats
       if ($atts[1]=="Test"){
              return "Working";}
                
       else return "Erreur de declaration du shortcode";
}


add_shortcode('Vierge', 'Vierge');  

?>
