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
                <div class="col1 flex flex-col">
                    <?php
                    $tileID = 0;
                    foreach ($tiles_list as $tile) :
                        $tileID++;
                    ?>

                        <?php if ($tile && $tileID < 4) : ?>
                            <h3><?php echo $tile['title'] ?></h3>
                            <h3><?php echo $tileID; ?></h3>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>

                <div class="col2 flex flex-col">
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