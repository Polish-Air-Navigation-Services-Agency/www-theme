<?php

/** Template to display 'Sekcja z kafelkami (grid)' - section_tiles_grid */

$tiles_list = $args['tiles_list'];

?>

<section class="relative pt-[100px] pb-[100px] overflow-hidden">
    <div class="container mx-auto">
        <?php if ($tiles_list) :
            $tileID = 0;
        ?>
            <div class="tiles-wrapper flex flex-row basis">
                <div class="col1 basis-1/2 flex flex-col">
                    <?php
                    $tileID = 0;
                    foreach ($tiles_list as $tile) :
                        $tileID++;
                    ?>

                        <?php if ($tile && $tileID < 4) : ?>
                            <div class="tile-wrapper mt-[48px] pr-[48px] <?php echo ($tileID == 3) ? '' : 'border-b-[1px]' ?> _border-b-[1px] border-r-[1px] border-[#D4DEE4]">
                                <div class="icon mb-[28px]">
                                    <img src="<?php echo $tile['icon'] ?>" alt="icon">
                                </div>
                                <h3 class="mb-3 text-[30px] font-medium"><?php echo $tile['title']; ?></h3>
                                <p class="mb-12 text-textGray"><?php echo $tile['description']; ?></p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <div class="col2 basis-1/2 flex flex-col justify-center">
                    <?php
                    $tileID = 0;
                    foreach ($tiles_list as $tile) :
                        $tileID++;
                    ?>
                        <?php if ($tile && $tileID >= 4) : ?>
                            <div class="tile-wrapper pt-[48px] px-[48px] border-b-[1px] border-[#D4DEE4]">
                                <div class="icon mb-[28px]">
                                    <img src="<?php echo $tile['icon'] ?>" alt="icon">
                                </div>
                                <h3 class="mb-3 text-[30px] font-medium"><?php echo $tile['title']; ?></h3>
                                <p class="mb-12 text-textGray"><?php echo $tile['description']; ?></p>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>