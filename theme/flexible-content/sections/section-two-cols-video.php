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

<section class="relative mb-20 pt-10">
    <?php if (!$description && !$description2) : ?>
        <svg class="decoration hidden lg:block absolute bottom-0 right-[80px]" xmlns="http://www.w3.org/2000/svg" width="609" height="107" viewBox="0 0 609 107" fill="none">
            <circle cx="304.5" cy="304.5" r="304.5" fill="#60B8D1" />
        </svg>
    <?php endif; ?>
    <div class="lg:grid grid-cols-2">

        <div class="col-span-full row-start-1">
            <div class="container min-h-[80%] bg-primary">
                <div class="lg:w-1/2 lg:ml-auto">
                    <?php if ($section_number) : ?>
                        <span class="w-fit mb-2 text-base leading-[24px] text-secondary font-semibold after:content-[''] after:w-[61px] after:h-[2px] after:bg-secondary after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] relative"><?php echo $section_number; ?></span>
                    <?php endif; ?>

                    <?php if ($title) : ?>
                        <h2 class="mb-[50px] text-[50px] lg:text-[60px] text-white leading-[64px] lg:leading-[72px] font-medium"><?php echo $title; ?></h2>
                    <?php endif; ?>

                    <?php if ($description) : ?>
                        <div class="mb-4 text-[20px] text-white leading-[30px]"><?php echo $description; ?></div>
                    <?php endif; ?>

                    <?php if ($description2) : ?>
                        <div class="mb-10 lg:mb-0 text-base text-white leading-[24px]"><?php echo $description2; ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php if (isset($video)) : ?>
            <div class="col-start-1 row-start-1 <?php if ($title || $description || $description2) : ?> lg:pr-16 <?php endif; ?>">
                <?php if ($decoration_video) : ?>
                    <img class="hidden lg:block lg:absolute mb-5 lg:mb-0 top-[-30px] right-0" src="<?php echo $decoration_video; ?>" alt="decoration">
                <?php endif; ?>
                <div class="relative overflow-hidden" data-videoWrapper>
                    <div class="group absolute z-20 inset-0 flex justify-center items-center cursor-pointer">
                        <svg class="z-20" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                            <rect width="100" height="100" rx="50" fill="white" fill-opacity="0.4" />
                            <path class="transition duration-200 group-hover:fill-secondary" d="M70 50L40 67.3205L40 32.6795L70 50Z" fill="white" />
                        </svg>
                        <span class="inset-0 absolute z-10 bg-[#0F304D80]">
                        </span>
                    </div>
                    <div class="relative z-10 w-full min-h-52 lg:min-h-[400px]">
                        <?php if ($video_thumbnail) : ?>
                            <img class="object-cover w-full h-auto max-h-[660px]" src="<?php echo $video_thumbnail['url'] ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="absolute inset-0 w-full [&>iframe]:w-full [&>iframe]:h-full">
                        <?php echo $video; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>