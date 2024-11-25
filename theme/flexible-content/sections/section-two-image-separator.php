<?php

/** Template to display 'Sekcja z 2 zdjęciami' - section_two_image_separator */

$image_left = $args['image_left'];
$image_right = $args['image_right'];
$add_decor = $args['add_decor'];

?>

<section class="relative <?php if($add_decor) : ?> pb-[100px] <?php endif;?>">
    <div class="w-full relative">
        <?php if($add_decor) : ?>
            <svg class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-full" xmlns="http://www.w3.org/2000/svg" width="150" height="75" viewBox="0 0 150 75" fill="none">
                <circle cx="75" r="75" fill="#60B8D1" />
            </svg>
        <?php endif;?>
        <div class="md:aspect-[2048/700] max-h-[700px] grid grid-cols-1 md:grid-cols-2">
            <div data-js-parallax="container" class="h-64 md:h-full">
                <div data-js-parallax="img" class="w-full">
                    <?php if (isset($image_left['url'])){
                            echo pansa_img_responsive($image_left, 'h-full w-full object-cover', array(1024, 700), 'lazy');
                    }; ?>
                </div>
            </div>
            <div data-js-parallax="container" class="h-64 md:h-full">
                <div data-js-parallax="img" class="w-full">
                    <?php if (isset($image_right['url'])){
                            echo pansa_img_responsive($image_right, 'h-full w-full object-cover', array(1024, 700), 'lazy');
                    }; ?>
                </div>
            </div>
        </div>
    </div>
</section>