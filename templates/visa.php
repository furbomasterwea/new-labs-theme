<?php
/* Template Name: Visa Aviada Relume */
get_header();

?>
<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> -->

<?php get_template_part('template-parts/global/navbar' ); ?>

<?php get_template_part('template-parts/hero',null,[
  'image' =>  get_stylesheet_directory_uri() .'/images/bg.jpg',
  'heading'=>'Deliver Product Outcomes — No Hiring Delays',
  'paragraph'=>'Assemble a senior squad that ships. Fixed-scope sprints, transparent velocity,
   and production-ready code without adding U.S. headcount or waiting on immigration.',
   'buttons' => [
    [
    'label'=> 'Start a 30-minute scoping call',
    'class' => 'btn-white'
    ],
   ]
  ] ); ?>

<?php get_template_part("template-parts/global/used-by"); ?>

<?php get_template_part('template-parts/global/text-with-bg',null,[
  'image' => get_stylesheet_directory_uri() . '/images/codioful-formerly-gradienta-OzfD79w8ptA-unsplash.jpg',
  'title'=>'',
  'heading'=> 'New hiring friction?',
  'paragraph'=> 'If visas or headcount constraints are slowing your roadmap, 
  LABS delivers outcomes with near-zero lead time. Full U.S. timezone overlap.',
   'buttons' => [
    [
    'label'=> 'Start a 30-minute scoping call',
    'class' => 'btn-white'
    ],
   ]
]); ?>

<?php get_template_part('template-parts/visa/what-stalls-teams' ); ?>

<?php get_template_part('/template-parts/visa/hero-split') ?>

<?php get_template_part('template-parts/visa/technical-arsenal' ); ?>

<?php get_template_part('template-parts/visa/digital-strategy' ); ?>

<?php get_template_part('template-parts/visa/pricing-and-terms' ); ?>

<?php get_template_part('template-parts/global/portfolio' ); ?>

<?php get_template_part('template-parts/visa/technological-aproach' ); ?>

<?php get_template_part('template-parts/global/client-stories' ); ?>

<?php get_footer(); ?>

