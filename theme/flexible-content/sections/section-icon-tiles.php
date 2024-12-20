<?php

/** Template to display 'Sekcja kafelek z ikonami' - section_icon_tiles */

$section_number = $args['section_number'];
$title = $args['title'];
$subtitle = $args['subtitle'];
$tiles = $args['tiles'];

?>

<section class="bg-[#F6F8F9] overflow-hidden">
    <div class="container mx-auto py-[100px] relative">
        <div class="decoration absolute top-0 left-1/2 -translate-x-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="75" viewBox="0 0 150 75" fill="none">
                <circle cx="75" r="75" fill="#60B8D1"></circle>
            </svg>
        </div>

        <div class="title-wrapper w-full flex flex-col justify-center items-center">
            <?php if ($section_number) : ?>
                <p class="w-fit mb-2 text-base leading-[24px] text-secondary font-semibold before:content-[''] before:w-[61px] before:h-[2px] before:bg-secondary before:rounded-full before:absolute before:top-1/2 before:-translate-y-1/2 before:left-[-70px] after:content-[''] after:w-[61px] after:h-[2px] after:bg-secondary after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] relative"><?php echo $section_number; ?></p>
            <?php endif; ?>

            <?php if ($title) : ?>
                <h2 class="mb-[50px] text-[50px] text-center lg:text-[60px] text-primary leading-[64px] lg:leading-[72px] font-medium"><?php echo $title; ?></h2>
            <?php endif; ?>

            <?php if ($subtitle) : ?>
                <div class="mx-auto mb-[30px] max-w-screen-md text-base text-center text-textGray"><?php echo $subtitle; ?></div>
            <?php endif; ?>
        </div>

        <div class="tiles-wrapper mx-auto w-fit hidden lg:grid grid-cols-1 lg:grid-cols-3 gap-[30px] justify-center">
            <?php if ($tiles) :
                $tileID = 0;
            ?>
                <?php foreach ($tiles as $tile) :
                ?>
                    <?php if ($tile) : ?>
                        <div class="tile-wrapper group w-full lg:w-[355px] px-5 py-[30px] flex flex-col transition ease duration-200">
                            <?php if ($tile['icon']) : ?>
                                <img class="!w-[32px] pb-6" src="<?php echo $tile['icon']['url'] ?>" alt="<?php echo $tile['icon']['url'] ?>">
                            <?php endif; ?>

                            <?php if ($tile['title']) : ?>
                                <h3 class="mb-3 text-[30px] font-medium leading-[36px]"><?php echo $tile['title']; ?></h3>
                            <?php endif; ?>

                            <?php if ($tile['description']) : ?>
                                <p class="text-base leading-[24px] text-textGray"><?php echo $tile['description']; ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <div class="swiper lg:!hidden w-full !overflow-visible [&_.swiper-slide]:w-4/5 [&_.swiper-slide]:md:w-1/2 [&_.swiper-slide]:lg:w-1/3" data-js="swiper-tiles">
            <div class="swiper-wrapper">
                <?php foreach ($tiles as $key => $tile) : ?>
                    <div class="swiper-slide md:pr-9 lg:pr-14">
                        <?php if ($tile['icon']) : ?>
                            <img class="!w-[32px] pb-6" src="<?php echo $tile['icon']['url'] ?>" alt="<?php echo $tile['icon']['url'] ?>">
                        <?php endif; ?>

                        <?php if ($tile['title']) : ?>
                            <h3 class="mb-3 text-[30px] font-medium leading-[36px]"><?php echo $tile['title']; ?></h3>
                        <?php endif; ?>

                        <?php if ($tile['description']) : ?>
                            <p class="text-base leading-[24px] text-textGray"><?php echo $tile['description']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>