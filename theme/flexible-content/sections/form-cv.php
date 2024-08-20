<?php

/** Template to display 'Formularz z plikiem' - form_contact_file */

$header = $args['header'];
$description = $args['description'];
$section_number = $args['section_number'];
$title = $args['title'];
$hide_message_field = $args['hide_message_field'];

$image = $args['image'];

if ($image['url']) {
    $image_url = $image['url'];
}

?>

<section>
    <div class="w-full h-[456px] overflow-visible relative py-10 md:py-[70px] mb:pb-20 bg-primary">
        <div class="decoration absolute top-0 left-1/2 -translate-x-1/2">
            <svg xmlns="http://www.w3.org/2000/svg" width="570" height="570" viewBox="0 0 570 570" fill="none">
                <circle cx="285" cy="285" r="285" fill="#60B8D1" />
            </svg>
        </div>
        <div class="container">
            <div class="cols-wrapper flex basis">
                <div class="col1 basis-1/2">
                    <?php if ($section_number) : ?>
                        <p class="w-fit mb-2 text-[16px] leading-[24px] text-secondary font-semibold after:content-[''] after:w-[61px] after:h-[2px] after:bg-secondary after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] relative"><?php echo $section_number; ?></p>
                    <?php endif; ?>

                    <?php if ($title) : ?>
                        <h2 class="mb-[50px] text-[50px] lg:text-[60px] text-white leading-[72px] font-medium"><?php echo $title; ?></h2>
                    <?php endif; ?>
                </div>

                <div class="col2 basis-1/2 z-[1]">
                    <div class="mx-auto <?php if ($hide_message_field) {
                                            echo '[&_.message-container]:hidden';
                                        } ?>">

                        <div class="form-cv-wrapper form-with-confirm-wrapper p-[40px_60px] bg-white text-textGray">
                            <p class="mb-[30px] text-[30px] leading-[36px] font-medium"> <?php esc_html_e('Wypełnij formularz', '_pansa'); ?></p>
                            <?php echo do_shortcode('[contact-form-7 id="f8be224" title="CV"]'); ?>
                            <div class="form-confirmation pointer-events-none opacity-0 z-10 absolute inset-0 flex flex-col items-center justify-center transition duration-300 text-white">
                                <svg class="max-w-full mb-4" width="125" height="125" viewBox="0 0 125 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="62.5" cy="62.5" r="60.5" stroke="#ffffff" stroke-width="4"></circle>
                                    <path d="M38.5713 62.5L54.2856 77.8571L85.7141 47.1428" stroke="#ffffff" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                <h4 class="text-center text-2xl md:leading-10 md:!text-[40px] max-w-[460px] font-bold mb-5"><?php esc_html_e('Thank you for sending your message', '_pansa'); ?></h4>
                                <p class="text-center text-base max-w-[460px] mb-10 md:mb-16"><?php esc_html_e('Our experts are already verifying your message, we will get back to you soon with the information you need', '_pansa'); ?></p>
                                <button data-js-form-reset="form-cv-wrapper" class="w-full max-w-[520px] border-none !bg-white hover:!bg-secondary hover:!text-white transition-all duration-200 !text-foreground h-[55px] !px-5 xl:!px-12 !rounded-[15px] font-semibold !flex items-center justify-center">
                                    <?php esc_html_e('Go back to form', '_pansa'); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="<?php echo $image_url; ?>" alt="image" class="w-full">
</section>