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

$person2_visible = $args['person2_visible'];

$image2 = $args['image2'];
if ($image2['url']) {
    $image2_url = $image2['url'];
}
$person2_name = $args['person2_name'];
$position2 = $args['position2'];
$contact_info2 = $args['contact_info2'];


?>

<section>
    <div class="w-full relative py-10 md:py-[60px] bg-[#F6F8F9]">
        <div class="container">
            <div class="cols-wrapper flex basis flex-col-reverse lg:flex-row">
                <div class="lg:basis-1/2 bg-white py-10 px-5 lg:px-[60px]">
                    
                    <div class="form-contact-wrapper form-with-confirm-wrapper text-textGray">

                        <?php if ($header) : ?>
                            <h2 class="mb-7 text-3xl font-medium text-primary"><?php echo $header; ?></h2>
                        <?php endif; ?>

                        <?php echo do_shortcode('[contact-form-7 id="96c400d" title="Kontakt"]'); ?>
                        
                        <div class="form-confirmation bg-white  pointer-events-none opacity-0 z-10 absolute inset-0 flex flex-col items-center justify-center transition duration-300 text-primary">
                            <svg class="max-w-full mb-4" width="125" height="125" viewBox="0 0 125 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="62.5" cy="62.5" r="60.5" stroke="#60B8D1" stroke-width="4"></circle>
                                <path d="M38.5713 62.5L54.2856 77.8571L85.7141 47.1428" stroke="#60B8D1" stroke-width="8" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <h3 class="text-center text-2xl md:leading-10 md:!text-[40px] max-w-[460px] font-semibold mb-5"><?php esc_html_e('Thank you for sending your message', '_pansa'); ?></h3>
                            <p class="text-center text-base max-w-[460px] mb-10 md:mb-16"><?php esc_html_e('We will get back to you soon.', '_pansa'); ?></p>
                            <button data-js-form-reset="form-contact-wrapper" class="max-w-[520px] border border-primary bg-primary hover:!bg-white text-white hover:text-primary transition-all duration-200 px-5 xl:!px-12 py-3 rounded-full font-semibold !flex items-center justify-center">
                                <?php esc_html_e('Go back to form', '_pansa'); ?>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="lg:basis-1/2 lg:pl-[100px] mb-10 lg:mb-0 flex gap-10 md:gap-5 flex-col md:flex-row">

                    <div>
                        <?php if ($image_url) : ?>
                            <div class="relative mb-3 min-[430px]:max-w-[315px]">
                                <img src="<?= $image_url ?>" class="w-full object-cover" <?= $image['alt'] ? 'alt="'.$image['alt'] . '"' : '' ?> loading="lazy">
                                <svg class="hidden min-[430px]:block absolute left-full top-1/2 -translate-y-1/2 max-h-[80%]" width="72" height="284" viewBox="1 0 85 284" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M72 142C72 84.0755 43.8577 32.7242 0.5 0.872803V283.127C43.8577 251.276 72 199.924 72 142Z" fill="#60B8D1"/>
                                </svg>
                            </div>
                        <?php endif; ?>
    
                        <?php if ($person_name) : ?>
                        <h3 class="text-3xl font-medium text-foreground mb-1"><?= $person_name ?></h3>
                        <?php endif; ?>
    
                        <?php if ($position) : ?>
                        <p class="text-lg text-secondary font-medium pb-2.5 mb-2.5 relative after:absolute after:block after:content-[''] after:h-1 after:bg-secondary after:bottom-0 after:w-[61px] after:rounded-full"><?= $position ?></p>
                        <?php endif; ?>
    
                        <?php if ($contact_info) : ?>
                        <div class="text-textGray font-semibold text-xl prose-a:transition prose-a:duration-200 hover:prose-a:text-secondary">
                            <?= $contact_info ?>
                        </div>
                        <?php endif; ?>
                    </div>

                    <?php if ($person2_visible) : ?>
                        <div>
                            <?php if ($image2_url) : ?>
                            <div class="relative mb-3 min-[430px]:max-w-[315px]">
                                <img src="<?= $image2_url ?>" class="w-full object-cover" <?= $image2['alt'] ? 'alt="'.$image2['alt'] . '"' : '' ?> loading="lazy">
                            </div>
                            <?php endif; ?>

                            <?php if ($person2_name) : ?>
                            <h3 class="text-3xl font-medium text-foreground mb-1"><?= $person_name ?></h3>
                            <?php endif; ?>

                            <?php if ($position2) : ?>
                            <p class="text-lg text-secondary font-medium pb-2.5 mb-2.5 relative after:absolute after:block after:content-[''] after:h-1 after:bg-secondary after:bottom-0 after:w-[61px] after:rounded-full"><?= $position ?></p>
                            <?php endif; ?>

                            <?php if ($contact_info2) : ?>
                            <div class="text-textGray font-semibold text-xl prose-a:transition prose-a:duration-200 hover:prose-a:text-secondary">
                                <?= $contact_info2 ?>
                            </div>
                            <?php endif; ?>

                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>