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
                
                
               
               
             
              // echo '<div class="oGrid" style="background-color:white;">';
                // The 2nd Loop
                
                
                //while (have_posts()) {
                   //the_post();
                   //$args = array(
                    //"category_name" => "cours",
                    //"posts_per_page" => 10
                    //"orderby" => 'date',
                    //"order"=>"ASC"
                //);
                //$query1 = new WP_Query(  );
          
         // The Loop
         while ( have_posts() ) {
            echo '<br>'; 
           the_post();
             echo '<h3>' . get_the_title() . '</h3>';
            // echo '<p>'.get_the_excerpt(). '</p>';
         }
          
         /* Restore original Post Data 
          * NB: Because we are using new WP_Query we aren't stomping on the 
          * original $wp_query and it does not need to be reset with 
          * wp_reset_query(). We just need to set the post data back up with
          * wp_reset_postdata().
          */
         wp_reset_postdata();

                   /*
			        //get_template_part( 'template-parts/content', 'evenement' );
                    $oMois = get_the_date("m");
                    $oJour = get_the_date("j");

                    
                    
                    switch($oMois%9){
                    case 0:echo "<div style='grid-area:".$oJour."/".($oMois%9+1)."/".($oJour+1)."/".($oMois%9+1).";' class='septembre' id=".get_the_ID().">";
                    echo "<p>" . get_the_date("j") ." - ".get_the_date("m"). " - ".get_the_date("y") ."</p>";
                    echo "<p>".get_the_title()."</p>";
                    echo "</div>";
                    break;

                    case 1:

                    echo "<div style='grid-area:".$oJour."/".($oMois%9+1)."/".($oJour+1)."/".($oMois%9+1).";'  class='octobre' id=".get_the_ID().">";
                    echo "<p>" . get_the_date("j") ." - ".get_the_date("m"). " - ".get_the_date("y") ."</p>";
                    echo "<p>".get_the_title()."</p>";
                    echo "</div>";
                    break;
                    
                    

                    case 2:
                    echo "<div style='grid-area:".$oJour."/".($oMois%9+1)."/".($oJour+1)."/".($oMois%9+1).";'  class='novembre' id=".get_the_ID().">";
                    echo "<p>" . get_the_date("j") ." - ".get_the_date("m"). " - ".get_the_date("y") ."</p>";
                    echo "<p>".get_the_title()."</p>";
                    echo "</div>";
                    break;
                    }*/
                    
                   // }
                           
                            
                     
                        

                        
                    
                    
                
                 

                //echo '</div>';
                //echo '<div class="wp-block-cgb-block-my-block"><p>Bonjour, nous sommes sur le site public</p><p>CGB BLOCK: <code>my-block</code> is a new Gutenberg block.</p><p>It was created via <code><a href="https://github.com/ahmadawais/create-guten-block">create-guten-block</a></code>.</p></div>';
            ?>
        </div>
    </section>
<?php
get_footer();