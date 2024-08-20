<?php

/** Template to display 'Sekcja z listą ofert pracy' - section_job_list */

$tiles = $args['tiles2'];

?>

<section>
    <div class="container mx-auto py-[100px]">
        <div class="tiles-wrapper mx-auto w-fit grid grid-cols-1 lg:grid-cols-3 gap-[30px] justify-center">
            <?php if ($tiles) :
                $tileID = 0;
            ?>
                <?php foreach ($tiles as $tile) :
                    $tileID++;
                ?>
                    <?php if ($tile) : ?>
                        <div class="tile-wrapper flex justify-between items-center">
                            <div class="left-col w-[323px] flex gap-4">
                                <p class=""><?php echo $tileID; ?></p>

                                <div class="offer-details-wrapper">
                                    <?php if ($tile['title']) : ?>
                                        <p class=""><?php echo $tile['title']; ?></p>
                                    <?php endif; ?>

                                    <?php if ($tile['date']) : ?>
                                        <p class=""><?php echo $tile['date']; ?></p>
                                    <?php endif; ?>

                                    <?php if ($tile['city']) : ?>
                                        <p class=""><?php echo $tile['city']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="right-col">
                                <?php if ($tile['url']) : ?>
                                    <a href="<?php echo $tile['url']; ?>" class="btn-transparent group relative text-center max-w-full w-fit ml-auto ">
                                        Aplikuj
                                        <svg class="absolute right-[26px] top-[16px] pointer-events-none" xmlns="http://www.w3.org/2000/svg" width="34" height="16" viewBox="0 0 34 16" fill="none">
                                            <path class="group-hover:stroke-primary" d="M26.4003 14.5996L33 7.99996M33 7.99996L26.4003 1.4003M33 7.99996L1.49994 8.00003" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>