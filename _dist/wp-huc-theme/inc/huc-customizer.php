<?php

add_action( 'customize_register', 'cd_customizer_settings' );
function cd_customizer_settings( $wp_customize ) {

$wp_customize->remove_section( 'header_image' );

$wp_customize->add_section( 'cd_homepage_build' , array(
    'title'      => 'Homepage elements',
    'priority'   => 30,
) );





// Split hero
$wp_customize->add_setting( 'homeBuild_splitHero' , array(
  'default'     => false,
  'transport'   => 'refresh',
));

$wp_customize->add_control( 'homeBuild_splitHero', array(
  'type'        => 'checkbox',
  'label'       => 'Show Hero splitscreen',
  'section'     => 'cd_homepage_build',
  'settings'    => 'homeBuild_splitHero',
));

// Split hero Color
$wp_customize->add_setting( 'homeBuild_splitHeroColor' , array(
  'default'     => '#fff',
  'transport'   => 'refresh',
) );

$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'homeBuild_splitHeroColor', array(
  'label'       => 'Show Hero color',
  'section'     => 'cd_homepage_build',
  'settings'    => 'homeBuild_splitHeroColor',
  'description'    => 'Pick the background color of the right side of the splitscreen.',
)));



// partners
$wp_customize->add_setting( 'homeBuild_Partners' , array(
  'default'     => false,
  'transport'   => 'refresh',
) );

$wp_customize->add_control('homeBuild_Partners', array(
  'type'        => 'checkbox',
  'label'       => 'Show partners',
  'section'     => 'cd_homepage_build',
  'settings'    => 'homeBuild_Partners',
));

//news
$wp_customize->add_setting( 'homeBuild_news' , array(
  'default'     => false,
  'transport'   => 'refresh',
) );

$wp_customize->add_control('homeBuild_news', array(
  'type'        => 'checkbox',
  'label'       => 'Show news articles',
  'section'     => 'cd_homepage_build',
  'settings'    => 'homeBuild_news',
));

// brand color title_tagline
$wp_customize->add_setting( 'brandcolor1' , array(
  'default'     => 'rgb(13, 252, 239)',
  'transport'   => 'refresh',
) );


  $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'brandColor', array(
  'label'       => 'Brand color #1',
  'section'     => 'colors',
  'settings'    => 'brandcolor1',
)));


// footer
$wp_customize->add_section( 'footer' , array(
    'title'      => 'Footer',
    'priority'   => 65,
) );


// Footer textblock 1
$wp_customize->add_setting( 'footer_block1' , array(
  'default'     => '',
  'transport'   => 'refresh',
));

$wp_customize->add_control( 'footer_block1', array(
  'type'        => 'textarea',
  'label'       => 'Text block 1',
  'section'     => 'footer',
  'settings'    => 'footer_block1',
));

// Footer textblock 2
$wp_customize->add_setting( 'footer_block2' , array(
  'default'     => '',
  'transport'   => 'refresh',
));

$wp_customize->add_control( 'footer_block2', array(
  'type'        => 'textarea',
  'label'       => 'Text block 2',
  'section'     => 'footer',
  'settings'    => 'footer_block2',
));

// Footer textblock 3
$wp_customize->add_setting( 'footer_block3' , array(
  'default'     => '',
  'transport'   => 'refresh',
));

$wp_customize->add_control( 'footer_block3', array(
  'type'        => 'textarea',
  'label'       => 'Text block 3',
  'section'     => 'footer',
  'settings'    => 'footer_block3',
));

// Footer textblock 4
$wp_customize->add_setting( 'footer_block4' , array(
  'default'     => '',
  'transport'   => 'refresh',
));

$wp_customize->add_control( 'footer_block4', array(
  'type'        => 'textarea',
  'label'       => 'Text block 4',
  'section'     => 'footer',
  'settings'    => 'footer_block4',
));


// brand color title_tagline
$wp_customize->add_setting( 'footerColorBG' , array(
  'default'     => 'rgb(13, 252, 239)',
  'transport'   => 'refresh',
) );


  $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'footerColorBG', array(
  'label'       => 'Footer background color',
  'section'     => 'footer',
  'settings'    => 'footerColorBG',
)));




}



?>
