<?php

/** Template to display 'Sekcja ze zdjęciem' - section_image_separator */

$image = $args['image'];

?>

<section class="relative pb-[100px] overflow-hidden">
    <div class="w-full relative">
        <svg class="absolute bottom-0 left-1/2 -translate-x-1/2" xmlns="http://www.w3.org/2000/svg" width="150" height="75" viewBox="0 0 150 75" fill="none">
            <circle cx="75" r="75" fill="#60B8D1" />
        </svg>
        <img src="<?php echo $image; ?>" alt="image">
    </div>
</section>