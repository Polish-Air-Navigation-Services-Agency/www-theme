<?php

/** Template to display 'Sekcja z treścią (dwie kolumny)' - section_two_cols */

$section_id = $args['section_id'];
$cols_reverse = $args['cols_reverse'];
$text_botttom = $args['text_botttom'];
$section_number = $args['section_number'];
$title = $args['title'];
$button = $args['button'];
$description = $args['description'];
$decor = $args['decor'];
$decor_bottom = $args['decor_bottom'];
$bgGray = $args['bgGray'];
$overlapping_background = $args['overlapping_background'];


?>

<section id="<?php if ($section_id) : echo $section_id;
                endif; ?>" class="<?php echo ($bgGray) ? 'bg-[#F6F8F9]' : ''; ?>  <?php echo $overlapping_background? '-mt-12 lg:-mt-[140px] lg:pt-60':'lg:pt-[174px]' ?> relative pt-[100px] pb-[45px] overflow-hidden">

    <?php if ($decor) : ?>
        <div class="decoration absolute bottom-0 left-0 z-[-1]">
            <svg xmlns="http://www.w3.org/2000/svg" width="881" height="153" viewBox="0 0 881 153" fill="none">
                <path d="M-64.0471 0.974854C-30.4515 59.5884 109.215 158.863 195.91 158.863C236.654 158.863 264.313 146.262 265.246 128.413C266.192 110.339 226.163 103.906 207.577 109.625C193.63 113.916 192.779 153.628 199.485 185.648C207.347 223.196 234.51 263.939 277.398 263.939C321.716 263.939 351.166 229.667 351.166 185.82C351.166 151.832 339.238 108.399 317.742 108.399C296.247 108.399 282.032 148.428 282.032 184.652C282.032 270.372 375.787 315.488 499.217 315.488C635.865 315.488 684.352 253.836 684.352 203.264C684.352 148.226 623.593 119.632 564.979 111.77C534.221 107.643 484.206 101.762 484.206 123.206C484.206 147.351 549.253 136.137 549.253 163.341C549.253 185.736 479.018 182.971 413.441 155.372C320.517 116.264 323.509 53.8168 351.023 32.3433C380.33 9.46983 436.28 28.7111 450.38 96.676C456.33 125.35 462.762 177.105 442.365 177.105C414.5 177.105 418.045 102.915 390.337 108.684C373.111 112.271 377.47 160.722 382.617 184.453C393.696 235.544 431.081 290.314 515.427 290.314C589.997 290.314 642.662 243.21 642.662 185.648C642.662 154.619 629.627 108.398 608.133 108.398C586.638 108.398 572.893 150.21 572.893 184.652C572.893 242.495 621.932 286.098 688.409 286.098C822.792 286.098 879.976 132.416 879.976 132.416" stroke="#F5F5F5" stroke-width="2" />
            </svg>
        </div>
    <?php endif; ?>

    <div class="container w-full flex  gap-[30px] lg:gap-[117px] <?php if ($cols_reverse) echo 'flex-col md:flex-row-reverse';
                                                                    else echo 'flex-col md:flex-row'; ?> " data-aos="fade" data-aos-delay="50">
        <div class="basis-1/2 flex-col">
            <?php if ($section_number) : ?>
                <span class="w-fit mb-2 text-base leading-[24px] text-secondary font-semibold after:content-[''] after:w-[61px] after:h-[2px] after:bg-secondary after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] relative"><?php echo $section_number; ?></span>
            <?php endif; ?>

            <?php if ($title) : ?>
                <h2 class="max-w-[600px] text-[42px] lg:text-[60px] text-primary leading-[50px] lg:leading-[72px] font-medium"><?php echo $title; ?></h2>
            <?php endif; ?>

            <?php if ($button) : ?>
                <button class="mb-[30px] lg:mb-0 text-[18px] font-medium bg-white !rounded-full border border-[#BEBFBF] !px-6 !py-[11px] text-[#0F304D] hover:bg-primary hover:text-white hover:border-primary transition ease duration-200">
                    <a href="<?php echo esc_url(home_url('/o-nas')); ?>" class="flex items-center justify-center gap-[10px]">
                        <?php echo $button; ?>
                    </a>
                </button>
            <?php endif; ?>


        </div>
        <div class="col2 basis-1/2 <?php if ($text_botttom) : echo 'self-end';
                                    endif; ?>">
            <p class="max-w-[488px] text-[18px] leading-[28px] text-textGray">
                <?php echo $description; ?>
            </p>
        </div>
    </div>
</section>

<?php if($decor_bottom): ?>
    <div class="container">
        <svg class="block mx-auto max-w-[50%] h-auto" width="472" height="125" viewBox="0 0 472 125" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M236 0C137.907 0 51.3894 49.5569 0.116577 125H471.884C420.611 49.5569 334.093 0 236 0Z" fill="#60B8D1"/>
        </svg>
    </div>
<?php endif; ?>
