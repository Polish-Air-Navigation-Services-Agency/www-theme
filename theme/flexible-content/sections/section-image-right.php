<?php

/** Template to display 'Baner do prawej' - section_image_right */

$image = $args['image'];

?>

<section class="relative overflow-hidden">
    <div class="container">
        <div class="mr-[calc(50%_-_50vw)]">
            <?php if (isset($image['url'])){
                echo smoothh_img_responsive($image, 'h-[300px] lg:h-[520px] w-full object-cover relative z-10', array(1300, 520), 'eager');
            }; ?>
        </div>
    </div>
</section>