<?php

add_action( 'customize_register', 'cd_customizer_settings' );
function cd_customizer_settings( $wp_customize ) {

//   $wp_customize->add_section( 'cd_colorstest' , array(
//       'title'      => 'ColorsTest',
//       'priority'   => 30,
//   ) );
//
//   $wp_customize->add_setting( 'background_color2' , array(
//     'default'     => '#43C6E4',
//     'transport'   => 'refresh',
//   ) );
//
//   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
//   	'label'        => 'Background Color',
//   	'section'    => 'cd_colorstest',
//   	'settings'   => 'background_color2',
//   ) ) );
// }





$wp_customize->add_section( 'cd_homepage_build' , array(
    'title'      => 'Homepage build',
    'priority'   => 30,
) );


//news
$wp_customize->add_setting( 'homeBuild_news' , array(
  'default'     => false,
  'transport'   => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homeBuild_news', array(
  'type'        => 'checkbox',
  'label'       => 'Show news articles',
  'section'     => 'cd_homepage_build',
  'settings'    => 'homeBuild_news',
) ) );
}



?>
