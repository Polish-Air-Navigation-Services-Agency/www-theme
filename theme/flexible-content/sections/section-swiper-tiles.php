<?php

/** Template to display 'Swiper kafelek' - section_swiper_tiles */

$section_number = $args['section_number'];
$title = $args['title'];
$tiles = $args['tiles'];

?>

<section class="relative pt-[100px] pb-[45px] overflow-hidden">
    <div class="container w-full flex flex-col ">
            <?php if ($section_number) : ?>
                <span class="w-fit mb-2 text-[16px] leading-[24px] text-secondary font-semibold after:content-[''] after:w-[61px] after:h-[2px] after:bg-secondary after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] relative"><?php echo $section_number; ?></span>
            <?php endif; ?>

            <div class="flex">
                <?php if ($title) : ?>
                    <h2 class="max-w-[600px] mb-11 text-[42px] lg:text-[60px] text-primary leading-[50px] lg:leading-[72px] font-medium"><?php echo $title; ?></h2>
                <?php endif; ?>
                <div class="hidden lg:flex self-end">
                    <button class="swiper-button-prev swiper-btn-default">
                        <svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.4658 18.5969L1.66629 9.79733M1.66629 9.79733L10.4658 0.997789M1.66629 9.79733L23.1325 9.79728" stroke="#0F304D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button class="swiper-button-next swiper-btn-default">
                        <svg width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M14.5342 18.5969L23.3337 9.79733M23.3337 9.79733L14.5342 0.997789M23.3337 9.79733L1.86751 9.79728" stroke="#0F304D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="swiper w-full !overflow-visible" data-js="swiper-tiles">
                <div class="swiper-wrapper">
                    <?php foreach ($tiles as $key=>$tile) : ?>
                        <div class="swiper-slide pl-6 border-l border-l-[#D4DEE4]">
                            <span class="block text-3xl font-medium text-secondary mt-5 mb-7">
                                <?php
                                    $tile_num = $key + 1; 
                                    echo $tile_num<10? '0' . $tile_num : $tile_num 
                                ?>
                            </span>
                            <?php if ($tile['title']) : ?>
                                <h3 class="mb-3 text-3xl font-medium leading-[36px] text-foreground"><?php echo $tile['title']; ?></h3>
                            <?php endif; ?>

                            <?php if ($tile['description']) : ?>
                                <p class="text-base font-normal text-textGray"><?php echo $tile['description']; ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
    </div>
</section>