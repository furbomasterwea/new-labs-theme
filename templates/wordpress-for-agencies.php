<?php
/* Template Name: wordpress-for-agencies Aviada Relume */
get_header();


?>
<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> -->


<?php get_template_part("template-parts/global/navbar"); ?>

<?php get_template_part('template-parts/hero',null,[
  'image' => get_stylesheet_directory_uri() . '/images/226a7a69-6a59-437a-bf8e-efc7c7339a01.png',
  'heading'=>'Scale WordPress Development — A Whole Team for the Price of One',
  'paragraph'=>'Stop hiring one developer for every need. Our managed WordPress pod provides 
  the right skill for every task: junior for quick fixes and senior for complex integrations. No bottlenecks, predictable cost.',
   'buttons' => [
    [
    'label'=> 'Book a 20-min Fit Call',
    'class' => 'btn-white'
    ],
    [
    'label'=> 'Prefer a project quote? Schedule a call',
    'class' => 'button is-secondary is-alternate w-button'
    ],
   ]
  ] ); ?>

<?php get_template_part('template-parts/global/used-by'); ?>

<?php get_template_part('template-parts/wp-for-agencies/hero-split-list') ?>  

<?php get_template_part('template-parts/global/client-stories'); ?>

<?php get_template_part('template-parts/global/text-with-bg',null,[
  'image' => get_stylesheet_directory_uri() .  '/images/klara-kulikova-_9vMnA1PPHk-unsplash.jpg',
  'title' => '',
  'heading' => 'Discover your integration potential',
  'paragraph' => 'Scan your website to uncover opportunities for powerful third-party service connections',
  'buttons' => [
    ['label'=>'Scan now',
    'class' => 'btn-white'
  ],
  [
    'label' => 'learn more',
    'class'=> 'button is-secondary is-alternate w-button'
  ]
  ]
]); ?>

<?php get_footer(); ?>