<?php

/** Template to display 'CTA' - cta */

$section_id = $args['section_id'];
$title = $args['title'];
$button = $args['button'];

?>

<section id="<?php if ($section_id) : echo $section_id;
                endif; ?>" class="relative mb-[80px] py-[80px] lg:py-[128px] bg-primary overflow-hidden">
    <svg class="decoration absolute left-0 top-1/2 -translate-x-full" xmlns="http://www.w3.org/2000/svg" width="75" height="150" viewBox="0 0 75 150" fill="none">
        <circle cy="75" r="75" fill="#60B8D1" />
    </svg>
    <svg class="decoration absolute right-0 bottom-0" xmlns="http://www.w3.org/2000/svg" width="680" height="133" viewBox="0 0 680 133" fill="none">
        <path d="M1 1.68506C48.6212 49.6062 209.223 109.35 292.964 86.9117C332.32 76.3663 355.774 57.0359 352.056 39.5533C348.292 21.8509 307.962 25.9971 291.49 36.3317C279.128 44.0863 288.585 82.6654 303.349 111.859C320.662 146.092 357.444 178.417 398.871 167.316C441.679 155.846 461.255 115.119 449.907 72.7666C441.11 39.9367 418.346 1.0708 397.583 6.63429C376.821 12.1975 373.45 54.5416 382.826 89.5315C404.981 172.217 506.966 191.591 625.979 159.83C626.144 159.786 710.604 141.435 778.104 25.4348" stroke="#60B8D1" stroke-width="2" />
    </svg>
    <div class="container w-full flex items-center justify-between">
        <?php if ($title) : ?>
            <h2 class="max-w-[590px] text-white text-[42px] lg:text-[60px] leading-[50px] lg:leading-[72px] font-medium"><?php echo $title; ?></h2>
        <?php endif; ?>

        <?php if ($button) : ?>
            <button class="mb-[30px] lg:mb-0 text-[18px] text-white font-medium bg-secondary !rounded-full border border-primary !px-6 !py-[11px] hover:bg-primary hover:text-white hover:border-white transition ease duration-200">
                <a href="<?php echo esc_url(home_url('/kogo-szukamy')); ?>" class="flex items-center justify-center gap-[10px]">
                    <?php echo $button; ?>
                    <svg class="self-center" xmlns="http://www.w3.org/2000/svg" width="34" height="16" viewBox="0 0 34 16" fill="none">
                        <path class="group-hover:stroke-[#0F304D]" d="M26.4003 14.5996L33 7.99996M33 7.99996L26.4003 1.4003M33 7.99996L1.49994 8.00003" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>
            </button>
        <?php endif; ?>
    </div>
</section>