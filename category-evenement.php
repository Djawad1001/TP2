<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Astral
 * @since 0.1
 */
get_header();
/* 
* Functions hooked into astral_top_banner action
* 
* @hooked astral_inner_banner
*/
do_action( 'astral_top_banner' );

?>
	<section class="align-blog" id="blog">
        <div class="container">
            <?php


               echo '<div class="oGrid" style="background-color:white;">';
                // The 2nd Loop
                
                
                while (have_posts()) {
                   the_post();

			        //get_template_part( 'template-parts/content', 'evenement' );
                    $oMois = get_the_date("m");
                    $oJour = get_the_date("j");

                    
                    //Bien que l'affichage marque 2020, tous les événements ont été réalisés et ecrit pour 2019 comme ca on peut les voir. 
                    //Je ne peux pas avoir un événement dans le futur. 
                    switch($oMois%4){
                    case 0:echo "<div style='grid-area:".$oJour."/".($oMois%4+1)."/".($oJour+1)."/".($oMois%4+1).";' class='septembre' id=".get_the_ID().">";
                    echo "<p>" . get_the_date("j") ." avril 2020</p>";
                    echo '<h2 style="color:black; font-weight:600;"><a href='.get_the_permalink().' class="lienEvent">' . get_the_title() .'</a></h2>';
                    //echo "<p>".get_the_title()."</p>";
                    echo "</div>";
                    break;

                    case 1:

                    echo "<div style='grid-area:".$oJour."/".($oMois%4+1)."/".($oJour+1)."/".($oMois%4+1).";'  class='octobre' id=".get_the_ID().">";
                    echo "<p>" . get_the_date("j") ." mai 2020</p>";
                    //echo "<p>".get_the_title()."</p>";
                    echo '<h2 style="color:black; font-weight:600;"><a href='.get_the_permalink().' class="lienEvent">' . get_the_title() .'</a></h2>';
                    echo "</div>";
                    break;
                    
                    

                    case 2:
                    echo "<div style='grid-area:".$oJour."/".($oMois%4+1)."/".($oJour+1)."/".($oMois%4+1).";'  class='novembre' id=".get_the_ID().">";
                    echo "<p>" . get_the_date("j") ." juin 2020</p>";
                    //echo "<p>".get_the_title()."</p>";
                    echo '<h2 style="color:black; font-weight:600;"><a href='.get_the_permalink().' class="lienEvent">' . get_the_title() .'</a></h2>';
                    echo "</div>";
                    break;
                    }
                    
                    }
                           
                 /**
                  *=========================================================
                  *======CODE EN SURPLUS UTILISER POUR DES ESSAIS/EXERCICES
                  *==================================== 
                   */          
                 // echo '<div class="oGrid">';


// while ( have_posts() ) :
//     the_post();
//     $mois = (int)get_the_date('m');
//     $mois = ($mois % 3) + 1;
  
//     $jour = (int)get_the_date('j'); 
//     $gridArea = $jour . '/' . $mois; 
//     //echo $gridArea;
//     echo '<h2 class="titreEvent"><a href='.get_the_permalink().'>' . get_the_title() .' ' . get_the_date('j-m-Y') .'</a></h2>';
//     //echo '<h4 style="grid-area:'. $gridArea .'">' . get_the_title() .  get_the_ID() . get_the_date('Y-m-d') . '</h4>'; 



// endwhile; // End of the loop.

// echo '</div>';    
                        

                        
                    
                    
                
                 

                echo '</div>';
                echo '<div class="wp-block-cgb-block-my-block"><p>Bonjour, nous sommes sur le site public</p><p>CGB BLOCK: <code>my-block</code> is a new Gutenberg block.</p><p>It was created via <code><a href="https://github.com/ahmadawais/create-guten-block">create-guten-block</a></code>.</p></div>';
            ?>
        </div>
    </section>
<?php
get_footer();