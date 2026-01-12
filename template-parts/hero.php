<?php
$heading    = $args['heading'] ?? 'Default Heading';
$paragraph  = $args['paragraph'] ?? 'Default paragraph';
$buttons    = $args['buttons'] ?? [];
$image      = $args['image'] ?? '';
$align      = $args['align'] ?? 'left'; 
$tagline    = $args['tagline']?? 'Tagline';

$alignment_options = [
    'center' => [
        'section' => 'text-center items-center',
        'inner'   => 'mx-auto items-center',
        'buttons' => 'justify-center'
    ],
    'left' => [
        'section' => 'text-left items-start',
        'inner'   => '',
        'buttons' => 'justify-start'
    ]
];

$classes = $alignment_options[$align] ?? $alignment_options['left'];
?>

<section id="relume" class="relative px-[5%] py-16 md:py-24 lg:py-28 flex flex-col <?= $classes['section'] ?>">
  <div class="container flex flex-col <?= $classes['section'] ?>">
    
    <div class="w-full max-w-2xl text-white flex flex-col <?= $classes['inner'] ?>">
      
      <p class="text-size-medium"><?= esc_html__($tagline) ?></p>
      
      <h1 class="heading-style-h1">
        <?= esc_html( $heading ); ?>
      </h1>
      
      <p class="text-size-medium">
        <?= esc_html( $paragraph ); ?>
      </p>

      <div class="mt-6 flex flex-wrap gap-4 md:mt-8 <?= $classes['buttons'] ?>">
        <?php foreach ($buttons as $button): ?>
          <button class="<?= esc_attr($button['class'] ?? 'btn-primary') ?>">
            <?= esc_html($button['label']) ?>
          </button>
        <?php endforeach; ?>
      </div>

    </div>
  </div>

  <div class="absolute inset-0 -z-10">
    <img src="<?= esc_url($image) ?>" class="size-full object-cover" alt="Background" />
    <div class="absolute inset-0 bg-black/50"></div>
  </div>
</section>