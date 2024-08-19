<?php

/** Template to display 'Baner' - hero */

$hero_background = $args['hero_background'];
$small_title = $args['small_title'];
$hero_text = $args['hero_text'];
$description = $args['description'];

if ($hero_background['url']) {
    $hero_bg_url = $hero_background['url'];
}
?>

<div class="relative translate-y-[-150px] w-full h-[300px] md:h-[600px] md:!h-[700px] flex flex-col items-center justify-center">
    <?php if (isset($hero_bg_url)) : ?>
        <img src="<?php echo $hero_bg_url ?>" alt="background_image" class="absolute inset-0 z-[-1] object-cover !h-full w-full">
    <?php endif; ?>

    <div class="relative mb-10 z-0 flex flex-col items-center justify-center container">
        <?php if ($small_title) : ?>
            <h2 class="text-[16px] leading-[24px] font-semibold text-white"><?php echo $small_title; ?></h2>
        <?php endif; ?>
        <?php if ($hero_text) : ?>
            <h1 class="text-[40px] lg:text-[80px] lg:leading-[80px] font-medium text-white"><?php echo $hero_text; ?></h1>
        <?php endif; ?>
    </div>

    <div class="mb-[36px]">
        <?php if ($description) : ?>
            <p class="text-[18px] leading-[27px] font-medium text-white"><?php echo $description; ?></p>
        <?php endif; ?>
    </div>

    <button class="bg-white !rounded-full !px-6 !py-[11px] text-[#0F304D]">
        <a href="<?php echo esc_url(home_url('/kogo-szukamy')); ?>" class="flex items-center justify-center gap-[10px]">
            <?php esc_html_e('Sprawdź kogo szukamy', '_pansa'); ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="16" viewBox="0 0 34 16" fill="none">
                <path d="M26.4003 14.5996L33 7.99996M33 7.99996L26.4003 1.4003M33 7.99996L1.49994 8.00003" stroke="#0F304D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </a>
    </button>

</div>