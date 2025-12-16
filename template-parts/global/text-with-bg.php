<?php
$title = $args["title"]?? 'Default title';
$heading = $args['heading'] ?? 'Default Heading';
$paragraph = $args['paragraph'] ??'Default paragraph';
$buttons = $args['buttons'] ??'';
$image = $args['image']??'';
?>

<section class="section_layout180 text-color-white color-scheme-1 text-white">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-large">
                <div class="layout180_component">
                    <div class="text-align-center">
                        <div class="max-width-large align-center text-white">
                            <div class="margin-bottom margin-xsmall">
                                <div class="text-style-tagline text-color-white"><?= esc_html($title)?></div>
                            </div>
                            <h2 class="heading-style-h2 ">
                                <?php echo esc_html( $heading ); ?>
                            </h2>
                            <p class="text-size-medium">
                                <?php echo esc_html( $paragraph ); ?>
                            </p>
                            <div class="margin-top margin-medium">
                                <div class="button-group is-center"><?php foreach ($buttons as $button): ?>
                                    <button class="<?= $button['class']?>"><?= $button['label']  ?></button>
                                    <?php endforeach?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="layout180_background-image-wrapper">
        <div class="image-overlay-layer"></div>
        <img sizes="(max-width: 2560px) 100vw, 2560px"
           src="<?= $image ?>" loading="eager"
            class="layout180_background-image"
        />
    </div>
</section>