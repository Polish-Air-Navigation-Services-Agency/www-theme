<?php

/** Template to display 'Swiper z opiniami' - swiper_opinions */

$opinions_list = $args['opinions_list'];

?>

<section class="pb-[100px] overflow-hidden">
    <div class="container mx-auto">
        <div class="wrapper relative">
            <svg class="decoration svg-draw-animation hidden lg:block absolute bottom-[-70px] left-[150px] z-[-1]" xmlns="http://www.w3.org/2000/svg" width="207" height="218" viewBox="0 0 207 218" fill="none">
                <path d="M23.1519 0.999858C61.7343 11.338 76.385 54.402 74.441 89.9499C72.7836 120.265 62.4816 155.653 48.9037 156.136C30.8105 156.782 -3.65451 141.367 1.53699 125.397C6.66292 109.624 34.5708 104.997 71.2242 114.818C114.933 126.53 166.122 170.199 205.52 217" stroke="#60B8D1" stroke-width="2" />
            </svg>

            <div class="swiper !max-w-[768px]" data-js="swiper-tiles-wide">
                <div class="swiper-wrapper z-[0]">
                    <?php foreach ($opinions_list as $opinion) : ?>
                        <div class="swiper-slide">
                            <div class="slide flex flex-col lg:flex-row basis gap-6">
                                <div class="left-col basis-1/2 bg-[#D4DEE4]">
                                    <img class="m-auto" src="<?php echo $opinion['image'] ?>" alt="author-image">
                                </div>

                                <div class="right-col basis-1/2 flex flex-col justify-center">
                                    <p class="mb-[6px] text-[#0E181E] font-medium text-[30px]"><?php echo $opinion['author'] ?></p>

                                    <p class="mb-10 text-secondary text-[18px] font-medium"><?php echo $opinion['position'] ?></p>

                                    <div class="italic text-textGray text-base leading-[24px]"><?php echo $opinion['opinion_text'] ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
            <button class="swiper-button-prev swiper-btn-default !size-[72px] after:!content-[''] !left-[20px] lg:!left-[70px] !bottom-[-100px] !top-auto lg:bottom-auto lg:!top-1/2">
                <span class="hidden">Prev</span>
                <svg class="!w-[25px]" width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.4658 18.5969L1.66629 9.79733M1.66629 9.79733L10.4658 0.997789M1.66629 9.79733L23.1325 9.79728" stroke="#0F304D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <button class="swiper-button-next swiper-btn-default !size-[72px] after:!content-[''] !right-[20px] lg:!right-[70px] !bottom-[-100px] !top-auto lg:bottom-auto lg:!top-1/2">
                <span class="hidden">Next</span>
                <svg class="!w-[25px]" width="25" height="20" viewBox="0 0 25 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.5342 18.5969L23.3337 9.79733M23.3337 9.79733L14.5342 0.997789M23.3337 9.79733L1.86751 9.79728" stroke="#0F304D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
    </div>
</section>