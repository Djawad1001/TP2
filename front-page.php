<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores
 * https://codex.wordpress.org/Function_Reference
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
        
		while ( have_posts() ) :
			the_post();
            the_post_thumbnail('full');
			//get_template_part( 'template-parts/content', 'page' );
           
			// If comments are open or we have at least one comment, load up the comment template.
			

        endwhile; // End of the loop.
        

// The Query

$args = array(
    "category_name" => "nouvelles",
    "posts_per_page" => 3,
    "orderby" => 'date',
    "order"=>"ASC"
);
$query1 = new WP_Query( $args );

// The Loop

while ( $query1->have_posts() ) {

echo '<div class="nouvelle" id="nouvelle_"'.get_the_ID().'>';

echo '</div>';
echo '<br>'; 
$query1->the_post();
echo '<div id='.get_the_ID().'>';
echo '<h3>' . get_the_title() . '</h3>';
echo '<p>'.get_the_excerpt(). '</p>';
echo "<input id=".get_the_ID()." type='button' value='lire la suite...'>";
echo '</div>';





}

//ARG2

$args2 = array (

"category_name" => "evenement",
"posts_per_page" => 3




);
$query2 = new WP_Query($args2);

//$category = get_the_category($query2->post->ID);

echo "<h1>Événements</h1>";
echo "<h1>".category_description(get_category_by_slug( 'evenement' )->term_id)."</h1>";
// The 2nd Loop
while ( $query2->have_posts() ) {

$query2->the_post();
echo '
<article class="article-evenement" style="display:flex;">
<img src="'.get_the_post_thumbnail_url().'" alt="" class="image-article" style="display:inline-block; width:15%;margin-left:2%;margin-bottom:2%;margin-right:2%">
<div class="content-post">
    <h3 class="title-article"><a href='.get_the_permalink().'>'.get_the_title().'</a></h3>
    <h4 class="post-date">'.get_the_date().'</h4>
    <p class="text-extract">'.substr(get_the_excerpt(),0,200).'</p>
</div>
</article>
';



/**
 * -===========================================================
 * ======TOUT LE RESTE EN DESSOUS A SERVI COMME MODELE POUR LES DIFFERENTS EXERCICES=====
 * ======A NE PAS TROP CONSIDERER POUR LA CORRECTION DU TP=====
 * ===========================================================
 * 
 * 
 */
/*
echo '' 
.get_the_post_thumbnail(null,"thumbnail"). '
<h3>' .get_the_title(). '</h3>'
.get_the_excerpt().;
*/

//$query3->the_post();
//echo '<div class="divConference" style="background-color:white"; padding:1%;">';

//echo '<h4>'.get_the_title(). ' - '  . get_the_date() . '</h4>';
//echo '<h4>' . get_the_date() . '</h4>';
//echo get_the_post_thumbnail(null,"thumbnail");
//echo the_excerpt();
//echo '</div>';

}
		/*
        $args3 = array (
     
            "category_name" => "conference",
            "posts_per_page" => 8,
            "orderby" => "date",
            "order" =>"ASC"
            
        
            
        );
        $query3 = new WP_Query($args3);
        
        $category = get_the_category($query3->post->ID);
        
        
        echo "<h1>".category_description($category[0])."</h1>";
        // The 2nd Loop
        while ( $query3->have_posts() ) {
            $query3->the_post();
            echo '<div class="divConference" style="background-color:white"; padding:1%;">';
        
            echo '<h4>'.get_the_title(). ' - '  . get_the_date() . '</h4>';
            //echo '<h4>' . get_the_date() . '</h4>';
            echo get_the_post_thumbnail(null,"thumbnail");
            echo the_excerpt();
            echo '</div>';
            
        }
        
        // Restore original Post Data
        wp_reset_postdata();*/
 
  
 /* Restore original Post Data 
  * NB: Because we are using new WP_Query we aren't stomping on the 
  * original $wp_query and it does not need to be reset with 
  * wp_reset_query(). We just need to set the post data back up with
  * wp_reset_postdata().
  */
 //wp_reset_postdata();
  



/*
 $args2 = array(
    "category_name" => "evenement",
    "posts_per_page" => 3,
    "orderby" => 'date',
    "order"=>"DESC",
    'nopaging' => true
);
$query2 = new WP_Query( $args2 );
echo '<h1>EVENEMENT</h1>';
// The Loop
while ( $query2->have_posts() ) {
echo '<br>'; 

$query2->the_post();
echo '<h3>' . get_the_title() . '</h3>';
echo the_excerpt();
}
*/
/* Restore original Post Data 
* NB: Because we are using new WP_Query we aren't stomping on the 
* original $wp_query and it does not need to be reset with 
* wp_reset_query(). We just need to set the post data back up with
* wp_reset_postdata().
*/
/*
wp_reset_postdata();*/
  

        
        // Restore original Post Data
        wp_reset_postdata();
 /* The 2nd Query (without global var) */
 /*
 $args2 = array (
     
     "category_name" => "evenement",
     
     
     
     
     
 );
 
 $query2 = new WP_Query( $args2 );
 $catID = get_the_category($query2->post->ID);

 echo "<h1>".category_description($catID[0])."</h1>";
 // The 2nd Loop
 while ( $query2->have_posts() ) {
     $query2->the_post();
     echo '<li>' . get_the_title( $query2->post->ID ) . '</li>';
     echo get_the_post_thumbnail(null, "thumbnail");
 }
 
 // Restore original Post Data
 wp_reset_postdata();
 */ 

////////////////////////////////////////////////////////////
//EXERCICE 



 ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
