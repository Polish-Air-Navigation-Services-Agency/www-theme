<?php

/** Template to display 'Sekcja z video (niebieskie tło)' - section_two_cols_video */

$section_number = $args['section_number'];
$title = $args['title'];
$description = $args['description'];
$description2 = $args['description2'];
$video = $args['video'];
$video_thumbnail = $args['video_thumbnail'];

?>

<section>
    <div class="relative w-full bg-primary mb-20 pt-10">
        <svg class="decoration hidden lg:block absolute bottom-0 right-[80px]" xmlns="http://www.w3.org/2000/svg" width="609" height="107" viewBox="0 0 609 107" fill="none">
            <circle cx="304.5" cy="304.5" r="304.5" fill="#60B8D1" />
        </svg>
        <div class="flex flex-col lg:flex-row">
            <div class="col1 basis-1/2 relative">
                <?php if (isset($video)) : ?>
                    <div class="relative lg:translate-y-[100px]">
                        <svg class="absolute top-[-120px] lg:top-[-70px] left-0 lg:left-auto lg:right-[-190px]" xmlns="http://www.w3.org/2000/svg" width="265" height="158" viewBox="0 0 265 158" fill="none">
                            <path d="M41.1767 54.8695C23.1732 50.0455 38.3076 2.7238 19.4062 1.65463C7.65529 0.989861 2.08386 33.0496 1.30112 49.2735C-0.385614 84.2021 21.2043 113.488 29.9001 118.171C49.4772 123.416 49.1014 132.374 62.6764 127.151C82.5103 119.518 95.7133 102.317 101.629 80.2376C107.001 60.189 106.581 28.0683 92.6934 24.347C78.8055 20.6258 62.6858 45.2615 56.7231 67.5149C46.709 104.888 70.845 141.551 113.797 153.06C200.623 176.325 264.177 86.9286 264.177 86.9286" stroke="#60B8D1" stroke-width="2" />
                        </svg>
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
</section>