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
        <img src="<?php echo $banner_img_url; ?>" alt="background image" class="ml-auto mr-0 translate-y-[120px] z-[1] relative">
    <?php endif; ?>


    <div class="relative w-full bg-primary pt-[140px] mb-20 lg:mb-[280px]">
        <div class="pt-12 relative z-0 container">
            <div class="two-col flex flex-col-reverse lg:flex-row-reverse gap-0 lg:gap-[117px] basis relative">
                <div class="col1 basis-1/2 flex-col">
                    <?php if ($section_number) : ?>
                        <p class="w-fit mb-2 text-[16px] leading-[24px] text-secondary font-semibold after:content-[''] after:w-[61px] after:h-[2px] after:bg-secondary after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] relative"><?php echo $section_number; ?></p>
                    <?php endif; ?>

                    <?php if ($title) : ?>
                        <h2 class="mb-[50px] max-w-[480px] text-[50px] lg:text-[60px] text-white leading-[64px] lg:leading-[72px] font-medium"><?php echo $title; ?></h2>
                    <?php endif; ?>
                </div>

                <div class="col2 basis-1/2 relative">
                    <?php if ($description) : ?>
                        <div class="mb-4 text-[20px] text-white leading-[30px]"><?php echo $description; ?></div>
                    <?php endif; ?>

                    <?php if ($description2) : ?>
                        <div class="mb-10 lg:mb-[64px] text-[16px] text-white leading-[24px]"><?php echo $description2; ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php if (isset($section_img)) : ?>
            <div class="img_wrapper">
                <svg class="absolute top-[50px] right-[-190px]" xmlns="http://www.w3.org/2000/svg" width="265" height="158" viewBox="0 0 265 158" fill="none">
                    <path d="M41.1767 54.8695C23.1732 50.0455 38.3076 2.7238 19.4062 1.65463C7.65529 0.989861 2.08386 33.0496 1.30112 49.2735C-0.385614 84.2021 21.2043 113.488 29.9001 118.171C49.4772 123.416 49.1014 132.374 62.6764 127.151C82.5103 119.518 95.7133 102.317 101.629 80.2376C107.001 60.189 106.581 28.0683 92.6934 24.347C78.8055 20.6258 62.6858 45.2615 56.7231 67.5149C46.709 104.888 70.845 141.551 113.797 153.06C200.623 176.325 264.177 86.9286 264.177 86.9286" stroke="#60B8D1" stroke-width="2" />
                </svg>
                <img class="lg:mt-[-100px] lg:translate-y-[120px] relative" src="<?php echo $section_img_url ?>" alt="section_image">
            </div>
        <?php endif; ?>
    </div>
</section>