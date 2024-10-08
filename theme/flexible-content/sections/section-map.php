<?php

/** Template to display 'Sekcja z mapą i informacjami' - section_map */

$contact_text = $args['contact_text'];
$location_text = $args['location_text'];
$search_text = $args['search_text']

?>

<section>
    <div class="py-10 lg:py-[60px] overflow-hidden">
        <div class="container flex flex-col md:flex-row flex-wrap gap-10 mb-12">
            <?php if ($contact_text) : ?>
                <div class="flex gap-4 lg:basis-1/3">
                    <svg class="shrink-0" width="34" height="32" viewBox="0 0 34 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32.3336 1.76186L11.3812 20.8095V30.3333L17.0955 24.619M1.85742 14.1428L32.3336 1.69519L27.0003 29.3809L1.85742 14.1428Z" stroke="#60B8D1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div>
                        <h3 class="text-primary text-3xl font-medium mb-3"><?= __('Text or call us', '_pansa'); ?></h3>
                        <div class="text-textGray font-semibold text-xl prose-a:transition prose-a:duration-200 hover:prose-a:text-secondary">
                            <?= $contact_text; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
    
            <?php if ($location_text) : ?>
                <div class="flex gap-4 lg:basis-1/3">
                    <svg class="shrink-0" width="26" height="34" viewBox="0 0 26 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.9999 32.3143L14.2018 30.9601C15.5656 29.3982 16.7922 27.9162 17.8837 26.5067L18.7846 25.3182C22.5465 20.2496 24.4284 16.2267 24.4284 13.2534C24.4284 6.90672 19.3122 1.76196 12.9999 1.76196C6.68748 1.76196 1.57129 6.90672 1.57129 13.2534C1.57129 16.2267 3.45319 20.2496 7.2151 25.3182L8.11605 26.5067C9.67308 28.5018 11.3021 30.4376 12.9999 32.3143Z" stroke="#60B8D1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M13.0002 17.9524C15.6301 17.9524 17.7621 15.8204 17.7621 13.1905C17.7621 10.5606 15.6301 8.42859 13.0002 8.42859C10.3703 8.42859 8.23828 10.5606 8.23828 13.1905C8.23828 15.8204 10.3703 17.9524 13.0002 17.9524Z" stroke="#60B8D1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>


                    <div>
                        <h3 class="text-primary text-3xl font-medium mb-3"><?= __('Our location', '_pansa'); ?></h3>
                        <div class="text-textGray font-semibold text-xl">
                            <?= $location_text; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <?php if($search_text): ?>
        <div class="container">
            <div class="mr-[calc(50%_-_50vw)]">
                <iframe class="h-[400px] lg:h-[650px] w-full" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=558&amp;hl=en&amp;q=<?php echo rawurlencode($search_text) ?>&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>