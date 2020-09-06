<?php
/* Template Name: Page Pertest */
get_header(); 
?>
<main id="mainTest">
    <h1> How to create a page template </h1>
    
    <h2> file: page-pertest.php</h2>
    
    <p>This page will only load header and footer. The rest is static HTML. Just in order to demonstrate that you can do whatever you will with WordPress markup.</p>
    
    <p>The template should be named after the WordPress template hierarchy, that is:</p>
    
    <pre>
        page-{slug}.phg
    </pre>
    
    <p>
    The slug is the last part of the url. The url for this page is:
    </p>
    
    <pre>
    https://multimusen.dk/wpsandbox/pertest/
    </pre>
    
    <p>So the word we need for the {slug} part of the file name is "pertest". Remember that PHP is case sensitive. The word "pertest" is not equal to "PerTest". In the present case the correct PHP filename is: <strong>page-pertest.php</strong>. </p>
    
    <p>The page must begin with this comment:</p>
    
    <pre>
    &lt;?php /* Template Name: Page Pertest */ ?&gt
    </pre>
    
    After that you may add whatever static content you need.
</main>
<?php
get_footer();
