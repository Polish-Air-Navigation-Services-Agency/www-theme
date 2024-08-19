<?php

/** Template to display 'Sekcja z numerowanymi kafelkami' - section_numbered_tiles */

$section_number = $args['section_number'];
$title = $args['title'];
$tiles = $args['tiles'];

?>

<div>
    <div class="container">
        <div class="counter mb-[100px] lg:mb-[190px] grid grid-cols-1 lg:grid-cols-3 gap-[30px]">
            <?php if ($tiles) :
                $tileID = 0;
            ?>
                <?php foreach ($tiles as $tile) :
                    $tileID++;
                ?>
                    <?php if ($tile) : ?>
                        <div class="tile-wrapper w-[355px] px-5 py-[30px] bg-primary">
                            <?php if ($tile['number']) : ?>
                                <p class="mb-[90px] text-[60px] text-primary leading-[72px] rounder-full bg-secondary"><?php echo $tile['number']; ?></p>
                            <?php endif; ?>

                            <?php if ($tile['title']) : ?>
                                <p class="mb-[9px] text-[30px] text-white leading-[36px]"><?php echo $tile['title']; ?></p>
                            <?php endif; ?>

                            <?php if ($tile['description']) : ?>
                                <p class="text-[16px] text-white leading-[24px]"><?php echo $tile['description']; ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>