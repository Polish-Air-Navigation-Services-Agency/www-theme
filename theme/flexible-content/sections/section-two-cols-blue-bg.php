<?php

/** Template to display 'Sekcja z treścią (niebieskie tło)' - section_two_cols_blue_bg */

$section_number = $args['section_number'];
$title = $args['title'];
$description = $args['description'];
$description2 = $args['description2'];
$video = $args['video'];
$video_thumbnail = $args['video_thumbnail'];
$overlapping_background = $args['overlapping_background'];

?>

<section class="<?php echo ($overlapping_background) ? 'translate-y-[-100px]' : '' ?> ">
    <div class="relative w-full bg-primary pt-[180px] mb-20 lg:mb-[280px]">
        <svg class="decoration hidden lg:block absolute bottom-0 right-[80px]" xmlns="http://www.w3.org/2000/svg" width="609" height="107" viewBox="0 0 609 107" fill="none">
            <circle cx="304.5" cy="304.5" r="304.5" fill="#60B8D1" />
        </svg>
        <div class="pt-12 relative container z-[1]">
            <div class="two-col flex flex-col lg:flex-row-reverse gap-0 lg:gap-[117px] basis relative">
                <div class="col1 basis-1/2 flex-col">
                    <?php if ($section_number) : ?>
                        <p class="w-fit mb-2 text-[16px] leading-[24px] text-secondary font-semibold after:content-[''] after:w-[61px] after:h-[2px] after:bg-secondary after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] relative"><?php echo $section_number; ?></p>
                    <?php endif; ?>

                    <?php if ($title) : ?>
                        <h2 class="max-w-[480px] text-[42px] lg:text-[60px] text-white leading-[50px] lg:leading-[72px] font-medium"><?php echo $title; ?></h2>
                    <?php endif; ?>
                </div>

                <div class="col2 basis-1/2 relative">
                    <?php if ($description) : ?>
                        <div class="mb-4 text-[20px] text-white leading-[30px]"><?php echo $description; ?></div>
                    <?php endif; ?>

                    <?php if ($description2) : ?>
                        <div class="mb-10 lg:mb-0 text-[16px] text-white leading-[24px]"><?php echo $description2; ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>