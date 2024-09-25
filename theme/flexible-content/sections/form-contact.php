<?php

/** Template to display 'Formularz z plikiem' - form_contact_file */

$header = $args['header'];
$image = $args['image'];

if ($image['url']) {
    $image_url = $image['url'];
}

$person_name = $args['person_name'];
$position = $args['position'];
$contact_info = $args['contact_info'];


?>

<section>
    <div class="w-full relative py-10 md:py-[60px] bg-[#F6F8F9]">
        <div class="container">
            <div class="cols-wrapper flex basis flex-col-reverse lg:flex-row">
                <div class="lg:basis-1/2 bg-white py-10 px-5 lg:px-[60px]">
                    <?php if ($header) : ?>
                        <h2 class="mb-7 text-3xl font-medium text-primary"><?php echo $header; ?></h2>
                    <?php endif; ?>

                    <div class="form-contact-wrapper form-with-confirm-wrapper text-textGray">
                        <?php echo do_shortcode('[contact-form-7 id="96c400d" title="Kontakt"]'); ?>
                        
                        <div class="form-confirmation pointer-events-none opacity-0 z-10 absolute inset-0 flex flex-col items-center justify-center transition duration-300 text-white">
                            <svg class="max-w-full mb-4" width="125" height="125" viewBox="0 0 125 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="62.5" cy="62.5" r="60.5" stroke="#ffffff" stroke-width="4"></circle>
                                <path d="M38.5713 62.5L54.2856 77.8571L85.7141 47.1428" stroke="#ffffff" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <h3 class="text-center text-2xl md:leading-10 md:!text-[40px] max-w-[460px] font-bold mb-5"><?php esc_html_e('Thank you for sending your message', '_pansa'); ?></h3>
                            <p class="text-center text-base max-w-[460px] mb-10 md:mb-16"><?php esc_html_e('Our experts are already verifying your message, we will get back to you soon with the information you need', '_pansa'); ?></p>
                            <button data-js-form-reset="form-contact-wrapper" class="w-full max-w-[520px] border-none !bg-white hover:!bg-secondary hover:!text-white transition-all duration-200 !text-foreground h-[55px] !px-5 xl:!px-12 !rounded-[15px] font-semibold !flex items-center justify-center">
                                <?php esc_html_e('Go back to form', '_pansa'); ?>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="lg:basis-1/2 lg:pl-[100px]">
                   <?php if($image_url){
                        echo pansa_img_responsive($image, 'w-full max-w-[315px]', array(315, 350), 'lazy');
                    } ?>
                    <?php if ($person_name) : ?>
                    <h3 class="text-3xl font-medium text-foreground mb-1"><?= $person_name ?></h3>
                    <?php endif; ?>

                    <?php if ($position) : ?>
                    <p class="text-lg text-secondary font-medium pb-2.5 relative after:absolute after:block after:content-[''] after:h-1 after:w-[61px] after:rounded-full"><?= $position ?></p>
                    <?php endif; ?>

                    <?php if ($contact_info) : ?>
                    <div class="text-textGray font-semibold text-xl prose-a:transition prose-a:duration-200 prose-a:hover:text-secondary">
                    <?= $contact_info ?>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>