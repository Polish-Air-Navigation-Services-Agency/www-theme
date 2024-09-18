<?php

/** Template to display 'Baner do prawej' - section_image_right */

$image = $args['image'];

?>

<section class="relative overflow-hidden">
    <div class="container">
        <div class="mr-[calc(50%_-_50vw)]">
            <?php if ($image) : ?>
                <img src="<?php echo $image; ?>" alt="image" class="h-[300px] lg:h-[520px] w-full object-cover relative z-[1]">
            <?php endif; ?>
        </div>
    </div>
</section>