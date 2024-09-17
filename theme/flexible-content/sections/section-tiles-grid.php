<?php

/** Template to display 'Sekcja z kafelkami (grid)' - section_tiles_grid */

$tiles_list = $args['tiles_list'];

?>

<section class="relative pt-[100px] lg:pt-[174px] pb-[45px] overflow-hidden">
    <div class="container mx-auto">
        <?php if ($tiles_list) :
            $tileID = 0;
        ?>
            ` <div class="tiles-wrapper flex flex-row basis">
                <div class="col1 basis-1/2 flex flex-col">
                    <?php
                    $tileID = 0;
                    foreach ($tiles_list as $tile) :
                        $tileID++;
                    ?>

                        <?php if ($tile && $tileID < 4) : ?>
                            <div class="tile-wrapper border border-b-[1px] border-[#D4DEE4]">
                                <svg class="mb-[28px]" xmlns="http://www.w3.org/2000/svg" width="30" height="25" viewBox="0 0 30 25" fill="none">
                                    <path d="M10.2299 12.8557V3.76632H1V6.74598C1 10.1203 3.68434 12.8557 6.99564 12.8557H10.2299ZM10.2299 12.8557L23.0044 12.8557C26.3157 12.8557 29 10.1203 29 6.74598V1H10.2299V12.8557ZM5.61496 18.2302H24.385V24H5.61496V18.2302ZM11.6842 12.8557H18.3158V18.2302H11.6842V12.8557Z" stroke="#60B8D1" stroke-width="2" stroke-linejoin="round" />
                                </svg>
                                <h3 class="mb-3 text-[30px] font-medium"><?php echo $tile['title'] ?></h3>
                                <p class="mb-12 text-textGray"><?php echo $tile['description'] ?></p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <div class="col2 basis-1/2 flex flex-col">
                    <?php
                    $tileID = 0;
                    foreach ($tiles_list as $tile) :
                        $tileID++;
                    ?>
                        <?php if ($tile && $tileID >= 4) : ?>
                            <h3><?php echo $tile['title'] ?></h3>
                            <h3><?php echo $tileID ?></h3>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>`

        <?php endif; ?>
    </div>
</section>