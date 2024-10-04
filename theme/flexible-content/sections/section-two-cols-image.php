<?php

/** Template to display 'Sekcja ze zdjęciem (dwie kolumny)' - section_two_cols_image */

$section_number = $args['section_number'];
$title = $args['title'];
$description = $args['description'];
$image = $args['image'];

?>

<section class="bg-white lg:mb-[100px] pt-20 lg:pt-[180px] lg:grid grid-cols-2">
    <div class="col-span-full row-start-1">
        <div class="container mx-auto relative">
            <svg data-js-parallax data-js-parallax="200" class="svg-draw-animation hidden lg:block absolute -top-24 left-[calc(50%_-_100px)]" width="320" height="269" viewBox="0 0 320 269" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1.00488 267.164C61.6364 251.018 184.279 149.215 205.177 71.2241C214.998 34.5707 210.371 6.66282 194.598 1.53689C178.628 -3.65462 163.213 30.8104 163.859 48.9036C164.343 62.4815 199.73 72.7835 230.045 74.4409C265.593 76.3849 308.657 61.7342 318.995 23.1517" stroke="#60B8D1" stroke-width="2" />
            </svg>

            <div class="w-full lg:w-1/2 lg:max-w-[540px] pr-10 relative">
                <?php if ($section_number) : ?>
                    <p class="w-fit mb-2 text-base leading-[24px] text-secondary font-semibold after:content-[''] after:w-[61px] after:h-[2px] after:bg-secondary after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] relative"><?php echo $section_number; ?></p>
                <?php endif; ?>

                <?php if ($title) : ?>
                    <h2 class="mb-[50px] text-[50px] lg:text-[60px] text-primary leading-[64px] lg:leading-[72px] font-medium"><?php echo $title; ?></h2>
                <?php endif; ?>

                <?php if ($description) : ?>
                    <div class="max-w-fill mb-10 text-base text-textGray leading-[24px]"><?php echo $description; ?></div>
                <?php endif; ?>
            </div>

        </div>
    </div>

    <?php if (isset($image)) : ?>
        <div class="col-start-2 row-start-1">
            <?php 
                echo pansa_img_responsive($image, 'mt-10 lg:mt-0 w-full relative max-h-[400px] lg:max-h-[690px] object-cover', array(768, 700), 'lazy');
             ?>
        </div>
    <?php endif; ?>

</section>