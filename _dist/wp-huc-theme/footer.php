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

?>

</div><!-- #page -->
<footer class="footer">
  <div class="itemBlock hcBasicSideMargin xCols">

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

    if ( get_theme_mod('footer_block4') != '' ) {
      echo '<div>'.get_theme_mod('footer_block4').'</div>';
    }

    if ( get_theme_mod('footerTwitterId') != '' ) {
      //embed
      //echo '<div class="twitterTimelineContainer"><a class="twitter-timeline" href="https://twitter.com/'.get_theme_mod('footerTwitterId').'">Tweets by GoldenAgents</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>';
      echo '<div><a href="https://twitter.com/'.get_theme_mod('footerTwitterId').'">Golden Agents on Twitter</a></div>';

    }

     ?>


  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
