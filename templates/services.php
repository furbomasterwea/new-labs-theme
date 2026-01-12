<?php
/* Template Name: Services Aviada Relume */
get_header();
?>
<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>"> -->

<?php get_template_part("/template-parts/global/navbar"); ?>

<?php get_template_part("/template-parts/hero", null, [
  'image'=> get_stylesheet_directory_uri() .  '',
  'heading'=>'We do the work that matters',
  'paragraph'=>'Aviada Labs brings skilled teams, search visibility, and connected systemsto businesses
  that need them. We move fast, stay focused, and build things that endure.',
  'align' => 'center',
  'tagline' => 'Start',
  'buttons' => [
    [
    'label'=> 'Scan your website',
    'class' => 'btn-white'
    ],
     [
    'label'=> 'Start your project',
    'class' => 'button is-secondary is-alternate w-button'
    ],
   ]
  ] ); ?>

<section>
    <h1>
        Section 2
    </h1>
</section>

<?php get_template_part("/template-parts/global/hero-split-image-right",null, [
  'tagline' => 'Teams',
  'heading' =>'Fractional teams built for your pace',
  'paragraph' => 'You need people who understand the work. We send them. They integrate fast, deliver hard, and move on when the job is done.
   No overhead. No politics. Just results.',
   'buttons' => [
    [
      'label' => 'Hire',
      'class' => 'button is-secondary is-alternate w-button',
    ],
    [
      'label' => 'Learn',
      'class' => 'button is-link is-icon is-alternate w-inline-block flex items-center gap-1'
    ]
    ],
    'image'=> get_stylesheet_directory_uri() .  '/images/placeholder.png',

]) ?>

<?php get_template_part("/template-parts/global/hero-split-image-left",null, [
  'heading' =>'Search engines find you, everyone uses it',
  'paragraph' => 'Your site needs to be seen and used. We handle both. Better rankings, better access, better outcomes
  for the people who come looking.',
   'buttons' => [
    [
      'label' => 'Audit',
      'class' => 'transparent-btn',
    ],
    [
      'label' => 'Learn',
      'class' => 'button is-link is-icon is-alternate w-inline-block text-black btn-secondary-black'
    ]
    ],
    'image'=> get_stylesheet_directory_uri() .  '/images/placeholder.png',

]) ?>

<?php get_template_part("/template-parts/global/hero-split-image-right",null, [
  'heading' =>'Tools that work together, not against you',
  'paragraph' => 'Your systems should talk to each other. When they don\'t, you bleed time and money. We connect
  them. The work flows. The gaps close.',
   'buttons' => [
    [
      'label' => 'Build',
      'class' => 'button is-secondary is-alternate w-button',
    ],
    [
      'label' => 'Explore',
      'class' => 'button is-link is-icon is-alternate w-inline-block flex items-center gap-1'
    ]
    ],
    'image'=> get_stylesheet_directory_uri() .  '/images/placeholder.png',

]) ?>

<section id="relume" class="overflow-hidden pt-12 md:pt-16 lg:pt-20 pb-8 md:pb-10 lg:pb-12">
  <div class="container mx-auto mb-6 w-full max-w-lg px-[5%] md:mb-8 lg:mb-10">
    <h6
      class="text-center text-base font-bold leading-[1.2] md:text-md md:leading-[1.2]"
    >
      Trusted by companies that build things
    </h6>
  </div>
</section>

<?php get_template_part("/template-parts/global/text-with-bg",null,[
   'image' => get_stylesheet_directory_uri() . '/images/codioful-formerly-gradienta-OzfD79w8ptA-unsplash.jpg',
  'title'=>'',
  'heading'=> 'Lets talk about what\'s next.',
  'paragraph'=> 'Tell us what you\'re building. We\'ll tell you how we can help.',
   'buttons' => [
    [
    'label'=> 'Book a 20 min Fit call',
    'class' => 'btn-white'
    ],
    [
      'label' => 'Connect',
      'class' => 'button is-secondary is-alternate w-button'
    ]
   ]
]);?>


<?php get_footer(); ?>