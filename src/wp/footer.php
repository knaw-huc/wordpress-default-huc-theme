<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gutenbergtheme
 */



     $cleanMenu = wp_nav_menu( array(
       'menu_id'        => 'primary-menu',
       'echo' => false,
       'depth'=> 1,
     ) );
     //echo $cleanMenu;




?>

</div><!-- #page -->
<footer class="footer">
  <div class="hcBasicSideMargin xCols">

    <?php
    if ( get_theme_mod('footer_block1') != '' ) {
      echo '<div>'.get_theme_mod('footer_block1').'</div>';
    }

    if ( get_theme_mod('footer_block2') != '' ) {
      echo '<div>'.get_theme_mod('footer_block2').'</div>';
    }

    if ( get_theme_mod('footer_block3') != '' ) {
      echo '<div>'.get_theme_mod('footer_block3').'</div>';
    }

    //if ( get_theme_mod('footer_block4') != '' ) {
      echo '<div class="footernav"><a href-"/">Home</a>'.strip_tags($cleanMenu,"<a>").'</div>';
    //}

    if ( get_theme_mod('footerTwitterId') != '' ) {
      echo '<div><a href="https://twitter.com/'.get_theme_mod('footerTwitterId').'"><img class="twitterIcon" src="'.get_bloginfo( 'template_url' ).'/images/icon-twitter.png">Golden Agents on Twitter</a></div>';
    }

     ?>


  </div>
</footer>

<?php wp_footer(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-3962916-27', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
