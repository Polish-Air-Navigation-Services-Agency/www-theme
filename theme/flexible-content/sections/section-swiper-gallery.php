<?php

/** Template to display 'Swiper galeria' - section_swiper_gallery */

$section_number = $args['section_number'];
$title = $args['title'];
$tiles = $args['tiles'];

?>

<section class="relative my-20 lg:mt-36 lg:mb-[100px] overflow-hidden">
    <div class="container w-full flex flex-col ">
        <?php if ($section_number) : ?>
            <span class="w-fit mb-2 text-base leading-[24px] text-secondary font-semibold after:content-[''] after:w-[61px] after:h-[2px] after:bg-secondary after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] relative"><?php echo $section_number; ?></span>
        <?php endif; ?>

        <div class="flex justify-between mb-11">
            <?php if ($title) : ?>
                <h2 class="max-w-[680px] text-[42px] lg:text-[60px] text-foreground leading-[50px] lg:leading-[72px] font-medium"><?php echo $title; ?></h2>
            <?php endif; ?>
            <div class="hidden shrink-0 md:flex gap-6 self-end">
                <button class="swiper-btn-default" data-js="swiper-prev">
                    <span class="hidden">Prev</span>
                    <svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.4658 18.5969L1.66629 9.79733M1.66629 9.79733L10.4658 0.997789M1.66629 9.79733L23.1325 9.79728" stroke="#0F304D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <button class="swiper-btn-default" data-js="swiper-next">
                    <span class="hidden">Next</span>
                    <svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.5342 18.5969L23.3337 9.79733M23.3337 9.79733L14.5342 0.997789M23.3337 9.79733L1.86751 9.79728" stroke="#0F304D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>

        <div class="swiper w-full !overflow-visible [&_.swiper-slide]:w-4/5 [&_.swiper-slide]:md:w-1/2 [&_.swiper-slide]:lg:w-1/3" data-js="swiper-tiles">
            <div class="swiper-wrapper">
                <?php foreach ($tiles as $key => $tile) : ?>
                    <div class="swiper-slide pr-5">
                        <?php if ($tile['image']) : ?>
                            <a href="<?php echo $tile['image']['url'] ?>" data-lightbox="gallery">
                                <?php
                                        echo pansa_img_responsive($tile['image'], 'w-full object-cover', array(768, 768), 'lazy');
                                 ?>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>