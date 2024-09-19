<?php

/** Template to display 'Swiper kafelek' */

$section_number = $args['section_number'];
$title = $args['title'];
$tiles = $args['tiles'];

?>

<section class="relative pt-[100px] pb-[45px] overflow-hidden">
    <div class="container w-full flex flex-col ">
            <?php if ($section_number) : ?>
                <span class="w-fit mb-2 text-[16px] leading-[24px] text-secondary font-semibold after:content-[''] after:w-[61px] after:h-[2px] after:bg-secondary after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] relative"><?php echo $section_number; ?></span>
            <?php endif; ?>

            <?php if ($title) : ?>
                <h2 class="max-w-[600px] text-[42px] lg:text-[60px] text-primary leading-[50px] lg:leading-[72px] font-medium"><?php echo $title; ?></h2>
            <?php endif; ?>

            <div class="swiper" data-js="swiper-tiles">
                <div class="swiper-wrapper">
                    <?php foreach ($tiles as $key=>$tile) : ?>
                        <div class="swiper-slide pl-6 border-l border-l-[#D4DEE4]">
                            <span class="text-3xl font-medium text-secondary mt-5 mb-7"><?php echo $key<10? '0' . $key : $key ?></span>
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