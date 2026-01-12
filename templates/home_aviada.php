<?php
/* Template Name: Home Aviada Relume */
get_header();

?>
<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> -->

 <main class="main-wrapper">

<?php get_template_part('template-parts/global/navbar' ); ?>

<?php get_template_part('template-parts/home/hero' ); ?>

<?php get_template_part('template-parts/home/cta' ); ?>

<?php get_template_part('template-parts/home/features' ); ?>

<?php get_template_part('template-parts/global/client-stories' ); ?>

<?php get_template_part('template-parts/global/portfolio' ); ?>

<?php get_template_part('template-parts/home/campaign-creation' ); ?>

<?php get_template_part('template-parts/home/essential-tools' ); ?>

<?php get_template_part('template-parts/global/assesment' ); ?>

<?php get_template_part('template-parts/global/our-team' ); ?>

<?php get_template_part('template-parts/global/text-with-bg',null,[
  'image' => get_stylesheet_directory_uri() . '/images/klara-kulikova-_9vMnA1PPHk-unsplash.jpg',
  'title'=>'who we are',
  'heading'=> 'We handle the technical side of your digital 
  campaigns so you can focus on strategy, content, and performance.',
  'paragraph'=> '',
   'buttons' => [
    [
    'label'=> 'Learn more',
    'class' => 'button is-secondary is-alternate w-button'
    ],
     [
    'label'=> 'Contact us',
    'class' => 'button is-link is-icon is-alternate w-inline-block'
    ],
  ],
]); ?>

<?php get_template_part('template-parts/global/faq' ); ?>

</main>


<?php get_footer(); ?>
