<?php

/** Template to display 'Swiper z opiniami' - swiper_opinions */

$opinions_list = $args['opinions_list'];

?>

<section class="relative pb-[100px] overflow-hidden">
    <div class="container mx-auto">
        <div class="swiper" data-js="swiper-tiles-wide">
            <div class="swiper-wrapper">
                <?php foreach ($opinions_list as $opinion) : ?>
                    <div class="swiper-slide">
                        <?php echo $opinion['author'] ?>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-button-prev">
                <svg class="rotate-180" xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72" fill="none">
                    <circle cx="36" cy="36" r="36" transform="matrix(-1.19249e-08 -1 -1 1.19249e-08 72 72)" fill="#60B8D1" />
                    <path d="M36.5337 44.5971L45.3332 35.7976M45.3332 35.7976L36.5337 26.998M45.3332 35.7976L23.867 35.7975" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="swiper-button-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72" fill="none">
                    <circle cx="36" cy="36" r="36" transform="matrix(-1.19249e-08 -1 -1 1.19249e-08 72 72)" fill="#60B8D1" />
                    <path d="M36.5337 44.5971L45.3332 35.7976M45.3332 35.7976L36.5337 26.998M45.3332 35.7976L23.867 35.7975" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </div>
</section>