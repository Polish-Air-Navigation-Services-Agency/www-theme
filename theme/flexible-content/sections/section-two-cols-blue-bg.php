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

<section class="<?php echo ($overlapping_background) ? 'translate-y-[-100px] mb-[-100px]' : '' ?> ">
    <div class="relative w-full bg-primary pt-[180px]">
        <div class="pt-12 relative container z-[1]">
            <div class="two-col flex flex-col-reverse lg:flex-row relative">
                <div class="basis-1/2 relative">
                    <?php if ($description) : ?>
                        <div class="mb-4 text-[20px] text-white leading-[30px]"><?php echo $description; ?></div>
                    <?php endif; ?>

                    <?php if ($description2) : ?>
                        <div class="mb-10 lg:mb-0 text-base text-white leading-[24px]"><?php echo $description2; ?></div>
                    <?php endif; ?>
                </div>

                <div class="basis-1/2 flex-col lg:pl-28">
                    <?php if ($section_number) : ?>
                        <p class="w-fit mb-2 text-base leading-[24px] text-secondary font-semibold after:content-[''] after:w-[61px] after:h-[2px] after:bg-secondary after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] relative"><?php echo $section_number; ?></p>
                    <?php endif; ?>

                    <?php if ($title) : ?>
                        <h2 class="max-w-[480px] mb-10 lg:mb-0 text-[42px] lg:text-[60px] text-white leading-[50px] lg:leading-[72px] font-medium"><?php echo $title; ?></h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>