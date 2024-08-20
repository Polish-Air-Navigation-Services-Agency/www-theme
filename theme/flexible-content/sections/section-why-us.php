<?php

/** Template to display 'Sekcja Dlaczego my (video)' - section_why_us */

$section_number = $args['section_number'];
$title = $args['title'];
$video = $args['video'];

?>

<section class="relative pt-[100px] lg:pt-[174px] pb-[45px] overflow-hidden">
    <div class="decoration absolute top-0 right-0 z-[-1]">
        <svg xmlns="http://www.w3.org/2000/svg" width="294" height="235" viewBox="0 0 294 235" fill="none">
            <path d="M60.8584 81.3661C33.9435 74.1542 56.569 3.40919 28.3119 1.8108C10.7445 0.816981 2.41531 48.7456 1.24514 73.0001C-1.2765 125.218 31 169 44 176C73.2674 183.842 72.7056 197.234 93 189.425C122.651 178.015 142.39 152.299 151.234 119.291C159.265 89.3186 158.637 41.2987 137.875 35.7355C117.113 30.1723 93.0141 67.0023 84.0999 100.271C69.129 156.143 105.212 210.953 169.424 228.158C299.227 262.939 394.239 129.294 394.239 129.294" stroke="#60B8D1" stroke-width="2" />
        </svg>
    </div>

    <div class="title-wrapper w-full flex flex-col justify-center items-center">
        <?php if ($section_number) : ?>
            <p class="w-fit mb-2 text-[16px] leading-[24px] text-secondary font-semibold before:content-[''] before:w-[61px] before:h-[2px] before:bg-secondary before:rounded-full before:absolute before:top-1/2 before:-translate-y-1/2 before:left-[-70px] after:content-[''] after:w-[61px] after:h-[2px] after:bg-secondary after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] relative"><?php echo $section_number; ?></p>
        <?php endif; ?>

        <?php if ($title) : ?>
            <h2 class="mb-[50px] text-[60px] text-primary leading-[72px] font-medium"><?php echo $title; ?></h2>
        <?php endif; ?>
    </div>

    <div class="video">
        <?php echo $video; ?>
    </div>

</section>