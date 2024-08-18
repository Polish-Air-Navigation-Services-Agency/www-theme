<?php

/** Template to display 'Baner' - hero */

$hero_background = $args['hero_background'];
if ($hero_background['url']) {
    $hero_bg_url = $hero_background['url'];
}
$hero_text = $args['hero_text'];
?>

<div class="relative translate-y-[-88px] w-full h-[300px] md:h-[600px] md:!h-[700px] flex flex-col items-center justify-center">
    <?php if (isset($hero_bg_url)) : ?>
        <img src="<?php echo $hero_bg_url ?>" alt="background_image" class="absolute inset-0 z-[-1] object-cover !h-full w-full">
    <?php endif; ?>

    <div class="relative z-0 flex flex-col items-center justify-center container">
        <?php if ($hero_text) : ?>
            <h1 class="text-[40px] lg:text-[80px] lg:leading-20 font-medium text-white"><?php echo $hero_text; ?></h1>
        <?php endif; ?>
    </div>

</div>