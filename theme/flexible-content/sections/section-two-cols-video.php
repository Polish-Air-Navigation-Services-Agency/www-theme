<?php

/** Template to display 'Sekcja z video (niebieskie tło)' - section_two_cols_video */

$section_number = $args['section_number'];
$title = $args['title'];
$description = $args['description'];
$description2 = $args['description2'];
$decoration_paragraph = $args['decoration_paragraph'];
$video = $args['video'];
$video_thumbnail = $args['video_thumbnail'];

?>

<section class="relative">
    <div class="lg:grid grid-cols-2">
        <div class="col-span-full row-start-1">
            <div class="bg-primary pt-20 min-h-[80%] relative
                <?php if (!$description && !$description2 && !$title) : ?>
                    lg:pt-28 
                <?php else: ?>
                    lg:pt-44
                <?php endif; ?>">

                <?php if (!$description && !$description2 && !$title) : ?>
                    <svg class="decoration hidden lg:block absolute bottom-0 right-[80px]" xmlns="http://www.w3.org/2000/svg" width="609" height="107" viewBox="0 0 609 107" fill="none">
                        <circle cx="304.5" cy="304.5" r="304.5" fill="#60B8D1" />
                    </svg>
                <?php else: ?>
                    <div class="container relative" data-aos="fade" data-aos-delay="50">
                        <div class="lg:w-1/2 lg:ml-auto pb-10">
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
                                <div class="text-base text-white leading-[24px]"><?php echo $description2; ?></div>
                            <?php endif; ?>
    
                        </div>
                    </div>
                <?php endif; ?>
                
            </div>
        </div>

        <?php if (isset($video)) : ?>
            <div class="col-start-1 row-start-1 relative 
                <?php if ($title || $description || $description2) : ?> 
                    lg:pr-16 
                <?php endif; ?>

                <?php if (!$description && !$description2 && !$title) : ?>
                    lg:pt-28 
                <?php else: ?>
                    lg:pt-44
                <?php endif; ?>" data-aos="fade" data-aos-delay="50">
                
                <?php if (!$description && !$description2 && !$title) : ?>
                    <svg data-js-parallax data-js-parallax-offset="70" class="svg-draw-animation hidden lg:block lg:absolute mb-5 lg:mb-0 top-12 -right-48" width="265" height="158" viewBox="0 0 265 158" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M41.1767 54.8695C23.1732 50.0455 38.3076 2.7238 19.4062 1.65463C7.65529 0.989861 2.08386 33.0496 1.30112 49.2735C-0.385614 84.2021 21.2043 113.488 29.9001 118.171C49.4772 123.416 49.1014 132.374 62.6764 127.151C82.5103 119.518 95.7133 102.317 101.629 80.2376C107.001 60.189 106.581 28.0683 92.6934 24.347C78.8055 20.6258 62.6858 45.2615 56.7231 67.5149C46.709 104.888 70.845 141.551 113.797 153.06C200.623 176.325 264.177 86.9286 264.177 86.9286" stroke="#60B8D1" stroke-width="2"/>
                    </svg>
                <?php else: ?>
                    <svg data-js-parallax data-js-parallax-offset="70" class="svg-draw-animation hidden lg:block lg:absolute mb-5 lg:mb-0 top-12 right-16" width="601" height="222" viewBox="0 0 601 222" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M-59 1C-35.5477 41.9998 61.9504 111.442 122.47 111.442C150.912 111.442 170.22 102.628 170.872 90.142C171.532 77.4999 143.589 72.9998 130.615 77.0003C120.878 80.0018 120.284 107.78 124.965 130.178C130.454 156.442 149.415 184.942 179.355 184.942C210.292 184.942 230.85 160.969 230.85 130.298C230.85 106.524 222.523 76.1424 207.518 76.1424C192.513 76.1424 182.59 104.142 182.59 129.481C182.59 189.442 248.037 221 334.201 221C429.592 221 463.439 177.875 463.439 142.5C463.439 104.001 421.025 84.0001 380.108 78.5003C358.636 75.6139 323.722 71.4998 323.722 86.4999C323.722 103.39 369.13 95.5451 369.13 114.574C369.13 130.239 320.101 128.306 274.323 109C209.455 81.6443 211.544 37.9626 230.75 22.9421C251.209 6.94219 290.267 20.4014 300.11 67.9424C304.262 87.9999 308.753 124.202 294.514 124.202C275.062 124.202 277.537 72.3063 258.194 76.342C246.169 78.851 249.213 112.742 252.806 129.342C260.54 165.08 286.637 203.391 345.517 203.391C397.572 203.391 434.337 170.442 434.337 130.178C434.337 108.473 425.238 76.1417 410.233 76.1417C395.228 76.1417 385.633 105.389 385.633 129.481C385.633 169.942 419.866 200.442 466.272 200.442C560.081 200.442 600 92.9424 600 92.9424" stroke="#60B8D1" stroke-width="2"/>
                    </svg>
                <?php endif; ?>
                <div class="relative overflow-hidden" data-videoWrapper>
                    <div class="group absolute z-20 inset-0 flex justify-center items-center cursor-pointer transition duration-200" data-js-video-btn>
                        <svg class="z-20" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                            <rect width="100" height="100" rx="50" fill="white" fill-opacity="0.4" />
                            <path class="transition duration-200 group-hover:fill-secondary" d="M70 50L40 67.3205L40 32.6795L70 50Z" fill="white" />
                        </svg>
                        <span class="inset-0 absolute z-10 bg-[#0F304D80]">
                        </span>
                    </div>
                    <div class="absolute z-10 inset-0 w-full [&>iframe]:w-full [&>iframe]:h-full opacity-0 transition duration-300" data-js-video-iframe-container="<?php echo $video; ?>">
                    </div>
                    <div class="relative w-full min-h-52 lg:min-h-[400px]">
                        <?php if ($video_thumbnail) : ?>
                            <img class="object-cover w-full h-auto max-h-[660px]" width="600" height="660" src="<?php echo $video_thumbnail['url']; ?>" <?php if(isset($video_thumbnail['alt'])){echo 'alt="'.$video_thumbnail['alt'].'"';}; ?> loading="lazy" >
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>