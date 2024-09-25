<?php

/** Template to display 'Sekcja z mapą i informacjami' - section_map */

$contact_text = $args['contact_text'];
$location_text = $args['location_text'];

?>

<section>
    <div class="py-10 lg:py-[60px]">
        <div class="container flex flex-col md:flex-row flex-wrap gap-10 mb-12">
            <?php if ($contact_text) : ?>
                <div class="flex gap-4 lg:base-[33%]">
                    <svg class="shrink-0" width="34" height="32" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32.3336 1.76186L11.3812 20.8095V30.3333L17.0955 24.619M1.85742 14.1428L32.3336 1.69519L27.0003 29.3809L1.85742 14.1428Z" stroke="#60B8D1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div>
                        <h3 class="text-primary text-3xl font-medium mb-3"><?php esc_html_e('Text or call us', '_pansa'); ?></h3>
                        <div class="text-textGray font-semibold text-xl prose-a:transition prose-a:duration-200 hover:prose-a:text-secondary">
                            <?= $contact_text; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
    
            <?php if ($location_text) : ?>
                <div class="flex gap-4 lg:base-[33%]">
                    <svg class="shrink-0" width="26" height="34" viewBox="0 0 26 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.9999 32.3143L14.2018 30.9601C15.5656 29.3982 16.7922 27.9162 17.8837 26.5067L18.7846 25.3182C22.5465 20.2496 24.4284 16.2267 24.4284 13.2534C24.4284 6.90672 19.3122 1.76196 12.9999 1.76196C6.68748 1.76196 1.57129 6.90672 1.57129 13.2534C1.57129 16.2267 3.45319 20.2496 7.2151 25.3182L8.11605 26.5067C9.67308 28.5018 11.3021 30.4376 12.9999 32.3143Z" stroke="#60B8D1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    <div>
                        <h3 class="text-primary text-3xl font-medium mb-3"><?php esc_html_e('Our location', '_pansa'); ?></h3>
                        <div class="text-textGray font-semibold text-xl">
                            <?= $location_text; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>