<?php

/** Template to display 'Sekcja z numerowanymi kafelkami' - section_numbered_tiles */

$section_number = $args['section_number'];
$section_number = $args['section_number'];
$title = $args['title'];
$tiles = $args['tiles'];

?>

<section class="bg-[#F6F8F9]">
    <div class="container">
        <?php if ($section_number) : ?>
            <p class="w-fit mb-2 text-[16px] leading-[24px] text-secondary font-semibold before:content-[''] before:w-[61px] before:h-[2px] before:bg-secondary before:rounded-full before:absolute before:top-1/2 before:-translate-y-1/2 before:left-[-70px] after:content-[''] after:w-[61px] after:h-[2px] after:bg-secondary after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] relative"><?php echo $section_number; ?></p>
        <?php endif; ?>

        <?php if ($title) : ?>
            <h2 class="mb-[50px] text-[60px] text-primary leading-[72px] font-medium"><?php echo $title; ?></h2>
        <?php endif; ?>

        <div class="tiles-wrapper w-fit mb-[100px] lg:mb-[190px] grid grid-cols-1 lg:grid-cols-3 gap-[30px] justify-center">
            <?php if ($tiles) :
                $tileID = 0;
            ?>
                <?php foreach ($tiles as $tile) :
                    $tileID++;
                ?>
                    <?php if ($tile) : ?>
                        <div class="tile-wrapper w-[355px] px-5 py-[30px] <?php if ($tileID == 1) echo 'bg-primary';
                                                                            else echo 'bg-white'; ?>">
                            <?php if ($tile['number']) : ?>
                                <p class="w-fit mb-[90px] text-[60px] text-primary leading-[72px] font-medium  <?php if ($tileID == 1) echo 'bg-secondary rounded-full';
                                                                                                                else echo 'text-primary'; ?>"><?php echo $tile['number']; ?></p>
                            <?php endif; ?>

                            <?php if ($tile['title']) : ?>
                                <p class="mb-[9px] text-[30px] <?php if ($tileID == 1) echo 'text-white';
                                                                else echo 'text-primary'; ?> leading-[36px]"><?php echo $tile['title']; ?></p>
                            <?php endif; ?>

                            <?php if ($tile['description']) : ?>
                                <p class="text-[16px] <?php if ($tileID == 1) echo 'text-white';
                                                        else echo 'text-primary'; ?> leading-[24px]"><?php echo $tile['description']; ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>