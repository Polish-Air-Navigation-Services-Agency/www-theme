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

    <div class="desc">
        <?php if ($description) : ?>
            <p class="text-[18px] leading-[27px] font-medium text-white"><?php echo $description; ?></p>
        <?php endif; ?>
    </div>

</div>