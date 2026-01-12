<?php 
$tagline = $args["tagline"]??'';
$heading = $args['heading'] ?? 'Default Heading';
$paragraph = $args['paragraph'] ??'Default paragraph';
$buttons = $args['buttons'] ??'';
$image = $args['image']??'';
?>

<section class="min-h-screen w-full flex items-center justify-center p-4 md:p-8 ">
  <div class=" w-full max-w-7xl h-auto min-h-[600px] lg:min-h-[85vh] rounded-2xl overflow-hidden grid grid-cols-1 lg:grid-cols-2">
    
      <div class="relative w-full sm:col-span-2 lg:order-first lg:col-span-1 flex items-center">
      <img 
        src="<?= $image ?>"
        alt="Placeholder"
        class="h-auto w-full rounded-image object-cover"
      />
    </div>

    <div class="flex flex-col justify-center p-8 md:p-12 lg:p-16 lg:last-first">
      <div class="flex items-start gap-4 mb-6">
        <div>
          <p class="font-bold"><?= esc_html($tagline) ?></p>
          <h2><?= esc_html($heading) ?></h3>
          <p>
          <?= esc_html($paragraph) ?>  
        </p>
        </div>
      </div>
      <div class="flex flex-wrap gap-4 mt-4">
        
      <?php foreach ($buttons as $button): ?>
      <button class="<?= $button['class']?>"><?= $button['label']  ?></button>
      <?php endforeach?>

      </div>
    </div>

  </div>
</section>
