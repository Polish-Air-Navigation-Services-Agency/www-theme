<?php

/** Template to display 'Sekcja z listą ofert pracy' - section_job_list */

$tiles = $args['tiles2'];
$is_preview = $args['preview'];

$JOBS_INCREMENT_COUNT = 10;

?>

<section class="bg-[#F6F8F9]">
    <div class="container mx-auto pb-[100px]">
        
            <?php if ($tiles && count($tiles)>0) :
                if ($is_preview) {
                    $tiles = array_slice($tiles, 0, 5);
                }
            ?>
            <div class="tiles-wrapper mb-10 md:mb-[60px]">
                <?php foreach ($tiles as $key=>$tile) :
                    $tileID = $key + 1;
                    if ($tileID < 10){
                        $tileID = '0' . $tileID;
                    }
                ?>
                    <div class="py-8 md:py-10 flex flex-col lg:flex-row justify-between border-b-[1px] border-b-[#BEBFBF]" 
                        data-js-job-visible="<?php echo ($key < $JOBS_INCREMENT_COUNT) ? 'true' : 'false'; ?>"
                    >
                        
                        <div class="flex gap-[26px]">
                            <span class="text-[30px] w-9 font-medium text-secondary"><?php echo $tileID; ?></span>
                            <div class="mb-5 lg:mb-0">
                                <?php if ($tile['title']) : ?>
                                    <h3 class="mb-[10px] text-[30px] font-medium text-primary"><?php echo $tile['title']; ?></h3>
                                <?php endif; ?>

                                <div class="flex gap-[14px]">
                                    <?php if ($tile['date']) : ?>
                                        <div class="flex gap-[4px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M3.33325 6.6665H16.6666M3.33325 6.6665V13.9998C3.33325 14.9332 3.33325 15.3998 3.51492 15.7565C3.67471 16.0701 3.92966 16.3251 4.24325 16.4848C4.59909 16.6665 5.06575 16.6665 5.99742 16.6665H14.0024C14.9341 16.6665 15.3999 16.6665 15.7558 16.4848C16.0699 16.3248 16.3249 16.0698 16.4849 15.7565C16.6666 15.3998 16.6666 14.9348 16.6666 14.0032V6.6665M3.33325 6.6665V5.99984C3.33325 5.0665 3.33325 4.59984 3.51492 4.24317C3.67492 3.929 3.92909 3.67484 4.24325 3.51484C4.59992 3.33317 5.06659 3.33317 5.99992 3.33317H6.66659M16.6666 6.6665V5.99734C16.6666 5.06567 16.6666 4.599 16.4849 4.24317C16.3249 3.92949 16.0696 3.67453 15.7558 3.51484C15.3999 3.33317 14.9333 3.33317 13.9999 3.33317H13.3333M6.66659 3.33317H13.3333M6.66659 3.33317V1.6665M13.3333 3.33317V1.6665" stroke="#60B8D1" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <p class="text-base"><?php echo $tile['date']; ?></p>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($tile['city']) : ?>
                                        <div class="flex gap-[4px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99993 17.6571L10.6009 16.9799C11.2828 16.199 11.8961 15.458 12.4418 14.7532L12.8923 14.159C14.7733 11.6247 15.7142 9.61324 15.7142 8.12657C15.7142 4.95324 13.1561 2.38086 9.99993 2.38086C6.84374 2.38086 4.28564 4.95324 4.28564 8.12657C4.28564 9.61324 5.2266 11.6247 7.10755 14.159L7.55803 14.7532C8.33654 15.7508 9.15104 16.7187 9.99993 17.6571Z" stroke="#60B8D1" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M10.0001 10.4763C11.3151 10.4763 12.381 9.41027 12.381 8.09531C12.381 6.78034 11.3151 5.71436 10.0001 5.71436C8.68513 5.71436 7.61914 6.78034 7.61914 8.09531C7.61914 9.41027 8.68513 10.4763 10.0001 10.4763Z" stroke="#60B8D1" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <p class="text-base"><?php echo $tile['city']; ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="self-end lg:self-center">
                            <?php if ($tile['url']) : ?>
                                <a href="<?php echo $tile['url']; ?>" class="group w-[160px] h-[50px] pl-[30px] pr-[70px] flex items-center justify-center rounded-full text-[18px] font-medium bg-primary border-[1px] border-primary hover:bg-white hover:text-primary hover:border-[#BEBFBF] text-white transition-all duration-200 relative">
                                    <?php esc_html_e('Apply', '_pansa'); ?>
                                    <svg class="absolute right-[26px] top-[16px] pointer-events-none" xmlns="http://www.w3.org/2000/svg" width="34" height="16" viewBox="0 0 34 16" fill="none">
                                        <path class="group-hover:stroke-primary" d="M26.4003 14.5996L33 7.99996M33 7.99996L26.4003 1.4003M33 7.99996L1.49994 8.00003" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
                <?php if ($is_preview) :
                    $JOBS_PAGE_ID = 39;
                ?>
                    <a href="<?php echo get_permalink($JOBS_PAGE_ID); ?>" target="_blank" class="group mx-auto w-fit px-7 py-3 flex items-center justify-center gap-2.5 rounded-full text-[18px] font-medium bg-primary border-[1px] border-primary hover:bg-white hover:text-primary hover:border-[#BEBFBF] text-white transition duration-200 relative">
                        <?php esc_html_e('Show all offers', '_pansa'); ?>
                        <svg class="pointer-events-none shrink-0" xmlns="http://www.w3.org/2000/svg" width="34" height="16" viewBox="0 0 34 16" fill="none">
                            <path class="group-hover:stroke-primary transition duration-200" d="M26.4003 14.5996L33 7.99996M33 7.99996L26.4003 1.4003M33 7.99996L1.49994 8.00003" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                <?php elseif(count($tiles)>10) : ?>
                    <button class="block mx-auto rounded-full px-5 py-3 font-medium border border-[#BEBFBF] hover:border-primary text-primary hover:text-white hover:bg-primary text-lg transition duration-200" 
                        data-js-job="loadMore"
                    >
                        <?php esc_html_e('Show more', '_pansa'); ?>
                    </button>
                <?php endif; ?>

            <?php else : ?>
                <p class="mx-auto max-w-96 text-3xl md:text-4xl text-center text-textGray/40 font-medium">
                    <?php esc_html_e('No offers', '_pansa'); ?>
                </p>
            <?php endif; ?>
        

        
    </div>
</section>