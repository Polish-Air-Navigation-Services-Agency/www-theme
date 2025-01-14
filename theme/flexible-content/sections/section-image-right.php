<?php

/** Template to display 'Baner do prawej' - section_image_right */

$image = $args['image'];

?>

<section class="section_image_right">
    <div class="container">
        <div class="mr-[calc(50%_-_50vw)] h-[280px] lg:h-[520px]" data-js-parallax="container">
            <div data-js-parallax="img" class="mobile-paralax-disabled">
                <?php if (isset($image['url'])){
                    echo pansa_img_responsive($image, 'h-full w-full object-cover object-top', array(1536, 520), 'eager');
                }; ?>
            </div>
        </div>
    </div>
</section>