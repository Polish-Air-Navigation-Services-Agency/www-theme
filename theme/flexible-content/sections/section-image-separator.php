<?php

/** Template to display 'Sekcja ze zdjęciem' - section_image_separator */

$image = $args['image'];
$add_decor = $args['add_decor'];

?>

<section class="relative pb-[100px] ">
    <div class="w-full relative">
        <?php if($add_decor) : ?>
            <svg class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-full" xmlns="http://www.w3.org/2000/svg" width="150" height="75" viewBox="0 0 150 75" fill="none">
                <circle cx="75" r="75" fill="#60B8D1" />
            </svg>
        <?php endif;?>
        <?php if ($image) : ?>
            <img src="<?php echo $image; ?>" class="w-full object-cover max-h-[600px]" alt="image">
        <?php endif; ?>
    </div>
</section>