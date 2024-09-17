<?php

/** Template to display 'Sekcja z kafelkami (grid)' - section_tiles_grid */

$section_id = $args['section_id'];
$section_number = $args['section_number'];
$tiles_list = $args['tiles_list'];

?>

<section id="<?php if ($section_id) : echo $section_id;
                endif; ?>" class="relative pt-[100px] lg:pt-[174px] pb-[45px] overflow-hidden">
    <div class="container mx-auto">
        <?php if ($tiles_list) :
            $tileID = 0;
        ?>
            ` <div class="tiles-wrapper flex flex-col basis">
                <?php foreach ($tiles_list as $tile) :
                    $tileID++;
                ?>
                    <div class="col1 flex flex-col">
                        <?php if ($tile && $tileID < 4) : ?>
                            <h3><?php echo $tile['title'] ?></h3>
                        <?php endif; ?>
                    </div>
                    <div class="col2 flex flex-col">
                        <?php if ($tile && $tileID >= 4) : ?>
                            <h3><?php echo $tile['title'] ?></h3>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>`

        <?php endif; ?>
    </div>
</section>