<?php

/** Template to display 'Baner' - hero */

$hero_background = $args['hero_background'];
if ($hero_background['url']) {
    $hero_bg_url = $hero_background['url'];
}
$hero_text = $args['hero_text'];
?>

<?php if (!(is_account_page() && !is_user_logged_in())) : ?>
    <div class="relative w-full h-[300px] md:h-[600px] md:!h-[400px] flex flex-col items-center justify-center">
        <?php if (isset($hero_bg_url)) : ?>
            <img src="<?php echo $hero_bg_url ?>" alt="background_image">
        <?php endif; ?>

        <div class="relative z-0 flex flex-col items-center justify-center container">
            <?php if ($hero_text) : ?>
                <h1 class="<?php if ($display_logo) : ?>text-3xl md:text-[46px]<?php else : ?>text-5xl md:text-[46px] max-w-[760px] [.woocommerce-cart_&]:max-w-[880px] md:leading-[55px]<?php endif; ?> text-bold text-white font-bold text-center"><?php echo $hero_text; ?></h1>
            <?php endif; ?>
        </div>

    </div>
<?php endif; ?>