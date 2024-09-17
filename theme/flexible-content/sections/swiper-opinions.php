<?php

/** Template to display 'Swiper z opiniami' - swiper_opinions */

$opinions_list = $args['opinions_list'];

?>

<section class="pb-[100px] overflow-hidden">
    <div class="container mx-auto">
        <div class="wrapper relative">
            <svg class="decoration absolute bottom-[-70px] left-[150px] z-[-1]" xmlns="http://www.w3.org/2000/svg" width="207" height="218" viewBox="0 0 207 218" fill="none">
                <path d="M23.1519 0.999858C61.7343 11.338 76.385 54.402 74.441 89.9499C72.7836 120.265 62.4816 155.653 48.9037 156.136C30.8105 156.782 -3.65451 141.367 1.53699 125.397C6.66292 109.624 34.5708 104.997 71.2242 114.818C114.933 126.53 166.122 170.199 205.52 217" stroke="#60B8D1" stroke-width="2" />
            </svg>

            <div class="swiper !max-w-[768px]" data-js="swiper-tiles-wide">
                <div class="swiper-wrapper z-[0]">
                    <?php foreach ($opinions_list as $opinion) : ?>
                        <div class="swiper-slide">
                            <div class="slide flex flex-row basis gap-6">
                                <div class="left-col basis-1/2 bg-[#D4DEE4]">
                                    <img class="m-auto" src="<?php echo $opinion['image'] ?>" alt="author-image">
                                </div>

                                <div class="right-col basis-1/2 flex flex-col justify-center">
                                    <p class="mb-[6px] text-[#0E181E] font-medium text-[30px]"><?php echo $opinion['author'] ?></p>

                                    <p class="mb-10 text-secondary text-[18px] font-medium"><?php echo $opinion['position'] ?></p>

                                    <div class="italic text-textGray text-[16px] leading-[24px]"><?php echo $opinion['opinion_text'] ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
            <div class="swiper-button-prev after:!content-[''] !left-[70px] top-1/2">
                <svg class="rotate-180 scale-[2.7]" xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72" fill="none">
                    <circle cx="36" cy="36" r="36" transform="matrix(-1.19249e-08 -1 -1 1.19249e-08 72 72)" fill="#60B8D1" />
                    <path d="M36.5337 44.5971L45.3332 35.7976M45.3332 35.7976L36.5337 26.998M45.3332 35.7976L23.867 35.7975" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="swiper-button-next after:!content-[''] !right-[70px] top-1/2">
                <svg class="scale-[2.7]" xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72" fill="none">
                    <circle cx="36" cy="36" r="36" transform="matrix(-1.19249e-08 -1 -1 1.19249e-08 72 72)" fill="#60B8D1" />
                    <path d="M36.5337 44.5971L45.3332 35.7976M45.3332 35.7976L36.5337 26.998M45.3332 35.7976L23.867 35.7975" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
    </div>
</section>