<?php

/** Template to display 'Sekcja z listą ofert pracy' - section_job_list */

$is_preview = $args['preview'];
$endpoint_base = $args['endpoint'];

?>

<section class="bg-[#F6F8F9]">
    <div class="container mx-auto pb-[100px]" data-aos="fade" data-aos-delay="50">
        <div data-js="job-list-raw" data-jobs-endpoint="<?= $endpoint_base; ?>" class="hidden"></div>

        <div data-js="job-list" data-jobs-preview="<?= $is_preview ? 'true' : 'false' ?>" class="mb-10 md:mb-[60px]">
        </div>

        <p data-js="job-list-empty" class="hidden mb-5 mx-auto max-w-96 text-3xl md:text-4xl text-center text-textGray/40 font-medium">
            <?php esc_html_e('No offers', '_pansa'); ?>
        </p>

        <?php if ($is_preview) :
            $JOBS_PAGE_ID = 39;
        ?>
            <a href="<?php echo get_permalink($JOBS_PAGE_ID); ?>" target="_blank" class="mx-auto w-fit px-7 py-3 flex items-center justify-center gap-2.5 rounded-full text-[18px] font-medium bg-primary hover:bg-secondary text-white transition duration-200 relative">
                <?php esc_html_e('Show all offers', '_pansa'); ?>
                <svg class="pointer-events-none shrink-0" xmlns="http://www.w3.org/2000/svg" width="34" height="16" viewBox="0 0 34 16" fill="none">
                    <path class="transition duration-200" d="M26.4003 14.5996L33 7.99996M33 7.99996L26.4003 1.4003M33 7.99996L1.49994 8.00003" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        
        <?php else : ?>
            <button class="disabled:opacity-50 disabled:pointer-events-none block mx-auto rounded-full px-5 py-3 font-medium border border-[#BEBFBF] hover:border-primary text-primary hover:text-white hover:bg-primary text-lg transition duration-200"
                data-js="load-more-jobs">
                <?php esc_html_e('Show more', '_pansa'); ?>
            </button>
        <?php endif; ?>



    </div>
</section>