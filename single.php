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
 * @package underscore
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		
		<?php
		// Affichage de la requête $query par défaut 
		while ( have_posts() ) :
			the_post();
			//the_title();
			// le filtre pour les articles de catégorie «evenement»
			if (has_category('evenement'))
			{
			//echo '/// mon événement ////';
			echo '<h1>Voici les événements</h1>';
			echo '<h2>' . category_description(get_category_by_slug('evenement')) . '</h2>';	

			echo '<h2>'.the_title().'</h2>';
			echo '<img src="'.get_the_post_thumbnail_url().'" alt="" class="image-article" style="display:inline-block; width:15%;margin-left:2%;margin-bottom:2%;margin-right:2%">';
			the_content();
			}
			/* tous les autres articles */
			else {
				the_title();
				// tout autre codes te permettant d'afficher un article standard
			}
		endwhile; // fin de la boucle

		?>
	</section>
    </main><!-- #main -->
	</div><!-- #primary -->
<?php

//get_sidebar();
get_footer();