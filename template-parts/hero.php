<?php
$heading = $args['heading'] ?? 'Default Heading';
$paragraph = $args['paragraph'] ??'Default paragraph';
$buttons = $args['buttons'] ?? [];
$image = $args['image']??'';
?>

<section id="relume" class="relative px-[5%] py-16 md:py-24 lg:py-28">
  <div class="container">
    <div slotName="max-width-large" class="w-full max-w-2xl text-white">
      <p
        elementName="tagline"
        class="text-size-medium"
      >
        Tagline
      </p>
      <h1
        elementName="heading"
        class="heading-style-h1"
      >
        <?php echo esc_html( $heading ); ?>
      </h1>
      <p elementName="paragraph" class="text-size-medium">
        <?php echo esc_html( $paragraph ); ?>
      </p>
      <div
        slotName="button-group"
        elementName="button-group"
        class="mt-6 flex flex-wrap gap-4 md:mt-8"
      >
       
        <?php foreach ($buttons as $button): ?>
          <button class="<?= $button['class']?>"><?= $button['label']  ?></button>
          <?php endforeach?>

      </div>
    </div>
  </div>
  <div class="absolute inset-0 -z-10">
    <img
      src="<?= $image ?>"
      class="size-full object-cover"
      alt="Relume placeholder image"
    />
    <div class="absolute inset-0 bg-black/50"></div>
  </div>
</section>