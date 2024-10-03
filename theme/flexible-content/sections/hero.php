<?php

/** Template to display 'Baner' - hero */

$hero_background = $args['hero_background'];
$hero_background_mobile = $args['hero_background_mobile'];
$small_title = $args['small_title'];
$hero_text = $args['hero_text'];
$description = $args['description'];

if ($hero_background['url']) {
    $hero_bg_url = $hero_background['url'];
}

if ($hero_background_mobile['url']) {
    $hero_bg_url_mobile = $hero_background_mobile['url'];
}
?>

<section class="relative w-full !h-[600px] md:!h-[700px] flex flex-col justify-center">
    <picture class="absolute inset-0 -z-10 object-cover !h-full w-full">
        <source media="(min-width:768px)" srcset="<?= $hero_bg_url ?>">
        <img src="<?= $hero_bg_url_mobile ?>" class="w-full h-full object-cover" <?= $hero_background_mobile['alt'] ? 'alt="'.$hero_background_mobile['alt'] . '"' : '' ?> loading="eager">
    </picture>

    <div class="decoration absolute bottom-0 left-0 z-[-1]">
        <svg class="svg-draw-animation" xmlns="http://www.w3.org/2000/svg" width="138" height="417" viewBox="0 0 138 417" fill="none">
            <path d="M-210.006 1.00488C-188.968 80.0074 -56.3187 239.811 45.3028 267.04C93.062 279.837 129.426 273.808 136.105 253.256C142.869 232.447 97.9617 212.361 74.3864 213.203C56.6944 213.833 43.271 259.943 41.1114 299.443C38.5784 345.762 57.6681 401.874 107.941 415.345" stroke="#60B8D1" stroke-width="2" />
        </svg>
    </div>

    <div class="container">
        <div class="relative mb-10 z-0 flex flex-col justify-center">
            <?php if ($small_title) : ?>
                <h2 class="w-fit text-base leading-[24px] font-semibold text-white after:content-[''] after:w-5 min-[380px]:after:w-[61px] after:h-[2px] after:bg-white after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:ml-2.5 relative"><?php echo $small_title; ?></h2>
            <?php endif; ?>
            <?php if ($hero_text) : ?>
                <h1 class="text-[40px] lg:text-[80px] leading-[45px] lg:leading-[80px] font-medium text-white"><?php echo $hero_text; ?></h1>
            <?php endif; ?>
        </div>

        <div class="max-w-[360px] mb-[36px] relative">
            <?php if ($description) : ?>
                <p class="text-[18px] leading-[27px] font-medium text-white"><?php echo $description; ?></p>
            <?php endif; ?>
        </div>

        <a href="<?php echo esc_url(home_url('/kogo-szukamy')); ?>" class="flex items-center justify-center gap-[10px] group bg-white w-fit !rounded-full !px-6 !py-[11px] text-[#0F304D] font-medium hover:bg-primary hover:text-white transition duration-200">
            <?php esc_html_e('Sprawdź kogo szukamy', '_pansa'); ?>
            <svg class="self-center" xmlns="http://www.w3.org/2000/svg" width="34" height="16" viewBox="0 0 34 16" fill="none">
                <path class="group-hover:stroke-white" d="M26.4003 14.5996L33 7.99996M33 7.99996L26.4003 1.4003M33 7.99996L1.49994 8.00003" stroke="#0F304D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>

        <a href="#o_nas" aria-label="scroll down" class="group block cursor-pointer absolute bottom-6 left-1/2 -translate-x-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="48" viewBox="0 0 50 48" fill="none">
                <path class="group-hover:stroke-primary transition duration-200" d="M18.4003 32.9004L25 39.5001M25 39.5001L31.5997 32.9004M25 39.5001L24.9999 8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </div>
</section id="<?php echo $section_ID; ?>">