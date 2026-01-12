<?php
/* Template Name: wordpress-for-general-clients Aviada Relume */
get_header();
?>
<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> -->

<?php get_template_part("template-parts/global/navbar"); ?>

<?php get_template_part('template-parts/hero',null,[
  'image' => get_stylesheet_directory_uri() . '/images/226a7a69-6a59-437a-bf8e-efc7c7339a01.png',
  'heading'=>'Building top-notch websites quickly and efficiently',
  'paragraph'=>'Aviada Labs transforms digital experiences with high-performance 
  web solutions that drive business growth and user engagement.',
   'buttons' => [
    [
    'label'=> 'Book a 20-min Fit Call',
    'class' => 'btn-white'
    ],
     [
    'label'=> 'Scan your site',
    'class' => 'button is-secondary is-alternate w-button'
    ],
   ]
  ] ); ?>

<?php get_template_part("template-parts/global/used-by"); ?>

<?php get_template_part("template-parts/wp-general-clients/security-and-accesibility");?>

<?php get_template_part("template-parts/global/assesment");?>

<?php get_template_part("template-parts/wp-general-clients/why-choose-wordpress");?>

<?php get_template_part("template-parts/global/assesment");?>

<?php get_template_part("template-parts/global/portfolio");?>

<?php get_template_part("template-parts/global/text-with-bg",null,[
  "image" => get_stylesheet_directory_uri() . '/images/codioful-formerly-gradienta-OzfD79w8ptA-unsplash.jpg',
  "heading"=>"From Concept to Conversion",
  "paragraph"=>"Let’s Build Your WordPress Site Right",
  "buttons"=>[
    [
      "class"=>"btn-white",
      "label"=>"Book a 20-Min Fit Call"
    ],
    [
      "class"=>"button is-secondary is-alternate w-button",
      "label"=> "Prefer mail? Write us!"
    ]
  ]
]);?>

<?php get_template_part("template-parts/global/faq");?>

<?php get_footer(); ?>