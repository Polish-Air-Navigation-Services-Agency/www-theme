<?php

/** Template to display 'Sekcja Dlaczego my (video)' - section_why_us */

$section_number = $args['section_number'];
$title = $args['title'];
$video = $args['video'];
$desc1 = $args['desc1'];
$desc2 = $args['desc2'];

?>

<section class="relative pt-[100px] lg:pt-[140px] pb-[45px] lg:pb-[100px] overflow-hidden">
    <div class="title-wrapper w-full flex flex-col justify-center items-center">
        <?php if ($section_number) : ?>
            <p class="w-fit mb-2 text-[16px] leading-[24px] text-secondary font-semibold before:content-[''] before:w-[61px] before:h-[2px] before:bg-secondary before:rounded-full before:absolute before:top-1/2 before:-translate-y-1/2 before:left-[-70px] after:content-[''] after:w-[61px] after:h-[2px] after:bg-secondary after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] relative"><?php echo $section_number; ?></p>
        <?php endif; ?>

        <?php if ($title) : ?>
            <h2 class="mb-[50px] text-[60px] text-primary leading-[72px] font-medium"><?php echo $title; ?></h2>
        <?php endif; ?>
    </div>

    <div class="video lg:w-[92%] [&>iframe]:w-full [&>iframe]:lg:h-[630px] relative">
        <div class="decoration absolute top-[-130px] right-[-150px] z-[-1]">
            <svg xmlns="http://www.w3.org/2000/svg" width="294" height="235" viewBox="0 0 294 235" fill="none">
                <path d="M60.8584 81.3661C33.9435 74.1542 56.569 3.40919 28.3119 1.8108C10.7445 0.816981 2.41531 48.7456 1.24514 73.0001C-1.2765 125.218 31 169 44 176C73.2674 183.842 72.7056 197.234 93 189.425C122.651 178.015 142.39 152.299 151.234 119.291C159.265 89.3186 158.637 41.2987 137.875 35.7355C117.113 30.1723 93.0141 67.0023 84.0999 100.271C69.129 156.143 105.212 210.953 169.424 228.158C299.227 262.939 394.239 129.294 394.239 129.294" stroke="#60B8D1" stroke-width="2" />
            </svg>
        </div>
        <?php echo $video; ?>
        <div class="desc-wrapper lg:w-[457px] text-white bg-primary pt-[70px] pb-10 px-5 lg:px-10 lg:absolute bottom-[-80px] right-0">
            <div class="mb-3 text-[18px] font-medium leading-[27px]"><?php echo $desc1 ?></div>
            <div class="mb-10 text-[16px] leading-[24px]"><?php echo $desc2 ?></div>
            <button class="text-[18px] font-medium bg-primary !rounded-full border border-white !px-6 !py-[11px] hover:text-[#0F304D] hover:bg-white hover:border-[#BEBFBF] transition ease duration-200">
                <a href="<?php echo esc_url(home_url('/o-nas')); ?>" class="flex items-center justify-center gap-[10px]">
                    <?php echo esc_html_e('Dowiedz się więcej', '_pansa'); ?>
                </a>
            </button>
        </div>
    </div>

</section>