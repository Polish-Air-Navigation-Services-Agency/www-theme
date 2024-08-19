<?php

/** Template to display 'Sekcja Wizja (liczniki)' - section_counters */

$tiles_list = $args['tiles_list'];

?>

<div class="relative w-full bg-primary py-[140px]">
    <div class="decoration absolute top-0 left-1/2 -translate-x-1/2">
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="75" viewBox="0 0 150 75" fill="none">
            <circle cx="75" r="75" fill="#60B8D1" />
        </svg>
    </div>
    <div class="pt-12 relative z-0 container">
        <?php if ($tiles_list) :
            $tileID = 0;
        ?>
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-x-10 gap-y-14 lg:gap-y-10">
                <?php foreach ($tiles_list as $tile) :
                    $tileID++;
                ?>
                    <div class="relative flex flex-col lg: items-center text-left">
                        <div class="mb-1 lg:mb-6 self-start">
                            <?php if ($tile) : ?>
                                <h3 class="text-[40px] lg:text-[60px] text-white font-medium">
                                    <span id="target<?php echo $tileID ?>" data-counter-target<?php echo $tileID ?>="<?php echo $tile['counter_target']; ?>" data-counter-qty>
                                        <?php echo $tile['counter_target']; ?>
                                    </span>

                                    <?php if ($tile['counter_unit_2']) : ?>
                                        <span><?php echo $tile['counter_unit_2']; ?></span>
                                    <?php endif; ?>

                                    <span class="text-secondary text-[16px] font-semibold absolute top-[10px] lg:top-4"><?php echo $tile['counter_unit']; ?></span>
                                </h3>
                            <?php endif; ?>
                        </div>
                        <?php if ($tile['description']) : ?>
                            <p class="text-[14px] text-white leading-[21px]"><?php echo $tile['description']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>