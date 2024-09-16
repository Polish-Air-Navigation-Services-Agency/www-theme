<?php

/** Template to display 'Sekcja z treścią (dwie kolumny + zdjęcia)' - section_two_cols_blue_bg_img */

$section_number = $args['section_number'];
$title = $args['title'];
$description = $args['description'];
$description2 = $args['description2'];
$banner_img = $args['banner_img'];
$section_img = $args['section_img'];

if ($banner_img['url']) {
    $banner_img_url = $banner_img['url'];
}
if ($section_img['url']) {
    $section_img_url = $section_img['url'];
}


?>

<section>
    <?php if (isset($banner_img)) : ?>
        <img src="<?php echo $banner_img_url; ?>" alt="background image" class="translate-y-[-143px]">
    <?php endif; ?>


    <div class="relative w-full bg-primary pt-[140px] mb-20 lg:mb-[280px]">
        <div class="decoration absolute top-0 left-1/2 -translate-x-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" width="150" height="75" viewBox="0 0 150 75" fill="none">
                <circle cx="75" r="75" fill="#60B8D1" />
            </svg>
        </div>



        <div class="pt-12 relative z-0 container">
            <div class="two-col flex flex-col-reverse lg:flex-row basis relative">
                <div class="decoration hidden lg:block absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 z-[-1]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="779" height="175" viewBox="0 0 779 175" fill="none">
                        <path d="M0.895508 1.25024C48.5167 49.1714 209.119 108.915 292.86 86.4769C332.215 75.9315 355.67 56.6011 351.951 39.1184C348.188 21.4161 307.858 25.5623 291.385 35.8969C279.023 43.6515 288.48 82.2306 303.245 111.424C320.558 145.657 357.34 177.982 398.767 166.882C441.574 155.411 461.15 114.684 449.802 72.3318C441.005 39.5019 418.242 0.63599 397.479 6.19948C376.716 11.7627 373.346 54.1068 382.721 89.0967C404.877 171.782 506.862 191.156 625.875 159.395C626.04 159.351 710.5 141 778 25" stroke="#60B8D1" stroke-width="2" />
                    </svg>
                </div>

                <div class="col1 basis-1/2 flex-col">
                    <?php if ($section_number) : ?>
                        <p class="w-fit mb-2 text-[16px] leading-[24px] text-secondary font-semibold after:content-[''] after:w-[61px] after:h-[2px] after:bg-secondary after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] relative"><?php echo $section_number; ?></p>
                    <?php endif; ?>

                    <?php if ($title) : ?>
                        <h2 class="mb-[50px] text-[50px] lg:text-[60px] text-white leading-[64px] lg:leading-[72px] font-medium"><?php echo $title; ?></h2>
                    <?php endif; ?>
                </div>

                <div class="col2 basis-1/2">
                    <?php if ($description) : ?>
                        <div class="max-w-fill lg:max-w-[414px] mb-4 text-[20px] text-white leading-[30px]"><?php echo $description; ?></div>
                    <?php endif; ?>

                    <?php if ($description2) : ?>
                        <div class="max-w-fill lg:max-w-[414px] mb-10 lg:mb-[150px] text-[16px] text-white leading-[24px]"><?php echo $description2; ?></div>
                    <?php endif; ?>
                </div>
            </div>

            <?php if (isset($section_img)) : ?>
                <img class="" src="<?php echo $section_img_url ?>" alt="section_image" class="test">
            <?php endif; ?>
        </div>
    </div>
</section>