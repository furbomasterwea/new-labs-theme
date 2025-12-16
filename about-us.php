<?php
/* Template Name: About Aviada Relume */
get_header();


?>
<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> -->

<?php get_template_part('template-parts/global/navbar' ); ?>

<?php get_template_part('template-parts/hero',null,[
  'image'=> get_stylesheet_directory_uri() .  '/images/bg.jpg',
  'heading'=>'Web development reimagined',
  'paragraph'=>'Transforming marketing teams with powerful web solutions and seamless third-party integrations',
  'buttons' => [
    [
    'label'=> 'Button',
    'class' => 'btn-white'
    ],
     [
    'label'=> 'Button',
    'class' => 'button is-secondary is-alternate w-button'
    ],
   ]
  ] ); ?>

<?php get_template_part("template-parts/global/used-by"); ?>

<?php get_template_part('template-parts/about-us/empowering' ); ?>

<?php get_template_part('template-parts/about-us/accelerating' ); ?>

<?php get_template_part('template-parts/global/our-team' ); ?>

<?php get_template_part('template-parts/about-us/client-stories' ); ?>

<?php get_template_part('template-parts/global/faq' ); ?>

<?php get_template_part('template-parts/global/text-with-bg',null,[
  'image' => get_stylesheet_directory_uri() . '/images/klara-kulikova-_9vMnA1PPHk-unsplash.jpg',
  'title'=>'',
  'heading'=> 'Ready to transform your web presence?',
  'paragraph'=> 'Let\'s discuss how we can elevate your digital strategy with custom solutions',
    'buttons' => [
    [
    'label'=> 'Start a 30-minute scoping call',
    'class' => 'btn-white'
    ],
    [
      'label'=>'Get Started',
      'class'=> 'button is-secondary is-alternate w-button'
    ],
   ]
]); ?>

<?php get_template_part('template-parts/global/footer-relume' ); ?>


<?php get_footer(); ?>
