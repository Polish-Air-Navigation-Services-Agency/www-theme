<?php

/** Template to display 'Sekcja z video (niebieskie tło)' - section_two_cols_video */

$section_number = $args['section_number'];
$title = $args['title'];
$description = $args['description'];
$description2 = $args['description2'];
$decoration_video = $args['decoration_video'];
$decoration_paragraph = $args['decoration_paragraph'];
$video = $args['video'];
$video_thumbnail = $args['video_thumbnail'];

?>

<section>
    <div class="relative w-full bg-primary mb-20 pt-10">
        <?php if ($decoration_paragraph) : ?>
            <svg class="decoration hidden lg:block absolute bottom-0 right-[80px]" xmlns="http://www.w3.org/2000/svg" width="609" height="107" viewBox="0 0 609 107" fill="none">
                <circle cx="304.5" cy="304.5" r="304.5" fill="#60B8D1" />
            </svg>
        <?php endif; ?>
        <div class="flex flex-col lg:flex-row lg:gap-x-[68px]">
            <div class="col1 basis-1/2 relative">
                <?php if (isset($video)) : ?>
                    <?php if ($decoration_video) : ?>
                        <img class="hidden lg:block lg:absolute mb-5 lg:mb-0 top-[-30px] right-0" src="<?php echo $decoration_video; ?>" alt="decoration">
                    <?php endif; ?>
                    <div class="relative lg:translate-y-[100px]">
                        <div class="video lg:w-auto [&>iframe]:w-full [&>iframe]:lg:h-[472px] relative">
                            <div class="video-wrapper video-wrapper-img2 lg:w-full lg:h-[472px] [&>iframe]:w-full [&>iframe]:lg:h-[472px] video-player-wrapper relative after:z-[1] after:content-[''] after:absolute after:top-0 after:left-0 after:w-full after:transition after:duration-[300ms] after:ease-out after:bg-center after:bg-cover after:bg-no-repeat after:h-full before:z-[2] before:transition before:duration-[300ms] before:ease-out" data-videoWrapper>
                                <?php echo $video; ?>
                                <div class="wp-block-group btn-more js-videoBtn group desktop:w-[175px] w-[140px] desktop:h-[175px] h-[140px] mx-auto text-center rounded-full z-[2] absolute top-[60%] desktop:top-[60%] left-[50%] translate-x-[-50%] translate-y-[-80%] transition ease-out duration-300 flex flex-col justify-center items-center gap-y-0 cursor-pointer overflow-hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                                        <rect width="100" height="100" rx="50" fill="white" fill-opacity="0.4" />
                                        <path d="M70 50L40 67.3205L40 32.6795L70 50Z" fill="white" />
                                    </svg>
                                    <span class="test after:z-[-1] before:z-[-1] before:opacity-0 after:opacity-0 !z-[-1] !bottom-[-110px]"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col2 basis-1/2 relative lg:translate-y-[100px]">
                <?php if ($section_number) : ?>
                    <span class="w-fit mb-2 text-[16px] leading-[24px] text-secondary font-semibold after:content-[''] after:w-[61px] after:h-[2px] after:bg-secondary after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] relative"><?php echo $section_number; ?></span>
                <?php endif; ?>

                <?php if ($title) : ?>
                    <h2 class="mb-[50px] text-[50px] lg:text-[60px] text-white leading-[64px] lg:leading-[72px] font-medium"><?php echo $title; ?></h2>
                <?php endif; ?>

                <?php if ($description) : ?>
                    <div class="mb-4 text-[20px] text-white leading-[30px]"><?php echo $description; ?></div>
                <?php endif; ?>

                <?php if ($description2) : ?>
                    <div class="mb-10 lg:mb-0 text-[16px] text-white leading-[24px]"><?php echo $description2; ?></div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>