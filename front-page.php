<?php
/**
 * The template for displaying a static html frontpage
 *
 * @package WordPress: twentytwenty child
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<!-- main id="site-content" role="main" -->

<main id="frontPage">
    <!-- YouTube -->
    <iframe width="100%" height="400px" src="https://www.youtube.com/embed/1o645n7OeeA?autoplay=1&muted=1&loop=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"></iframe>
    <aside id="fileInfo">
    	File: front-page.php<br>
	Purpose: If you choose a static front page WordPress will use the file <em>front-page.php</em>.
    </aside>
</main>	    


<?php 

// don't display the widgets:
// get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
