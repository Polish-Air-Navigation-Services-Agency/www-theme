<?php

/** Template to display 'Baner do prawej' - section_image_right */

$image = $args['image'];

?>

<section class="relative">
    <?php if ($image) : ?>
        <img src="<?php echo $image; ?>" alt="image">
    <?php endif; ?>
</section>