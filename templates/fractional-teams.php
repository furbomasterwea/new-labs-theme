<?php
/* Template Name: Fractional teams */
get_header();
?>
<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> -->

<?php get_template_part("/template-parts/global/navbar"); ?>

<?php get_template_part('template-parts/hero',null,[
  'tagline' => 'Services',
  'image'=> get_stylesheet_directory_uri() .  '/images/bg.jpg',
  'heading'=>'Fractional Engineering Teams Built for Real Product Delivery',
  'paragraph'=>'Senior-led teams. Flexible capacity. Zero staffing headaches. We help companies ship, scale, and
  stabilize products using fractional teams that integrate directly with yout business.',
  'buttons' => [
    [
    'label'=> 'Let\'s talk about your team',
    'class' => 'btn-main'
    ],
    
   ]
  ] ); ?>

  <?php get_template_part('/template-parts/global/used-by'); ?>

<?php get_footer(); ?>