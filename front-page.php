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

<main>

        <h1> File: front-page.php </h1>
        <h2> Demonstration of static HTML in WordPress as your "home" or "front page".</h2>
        
        <p>If your child theme has a file named <em>front-page.php</em>, then the content of that file will be your frontpage. In this way you can design a smashing splash page.</p>

	    <p>A static front page, featuring:</p>
	    <ul>
	        <li>No loop</li>
	        <li>Pure HTML / CSS</li>
	        <li>Only header.php and footer.php loaded</li>
	        <li>Styles from the parent and child theme</li>
	    </ul>
	    
	    <p>Based on: 404.php</p>
	    
	    <img src="http://multimusen.dk/wpsandbox/wp-content/uploads/2008/06/dsc09114.jpg" alt="Image sample" style="width:200px;height:auto;transform:rotate(12deg);">
	    
        <!-- start slipsum code -->

<h2>Dummy content from <a href="https://slipsum.com/"> slipsum.com </a></h2>

<h4>I can do that</h4>
Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'?

<h4>No man, I don't eat pork</h4>
Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'?

<h4>Is she dead, yes or no?</h4>
Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing.

<!-- end slipsum code -->
	

<!-- /main --><!-- #site-content -->

</main>	    
    
<?php 

// don't display the widgets:
// get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
