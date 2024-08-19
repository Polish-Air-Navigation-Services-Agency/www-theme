<?php

/** Template to display 'Sekcja Wizja (liczniki)' - section_counters */

$tiles_list = $args['tiles_list'];

?>

<div class="relative w-full py-10 pb-20 md:pt-11 mt-10 mb-20">
    <div class="pt-12 relative z-0 container">
        <?php if ($tiles_list) :
            $tileID = 0;
        ?>
            <div class="py-10 lg:py-20 px-8 lg:px-20 xl:px-36 grid grid-cols-4 gap-x-10 gap-y-10 sm:grid-cols-2 lg:gap-x-[110px] lg:gap-y-[90px]">
                <?php foreach ($tiles_list as $tile) :
                    $tileID++;
                ?>
                    <div class="relative flex flex-col items-center text-left">
                        <div class="mb-5 md:mb-7 self-start">
                            <?php if ($tile) : ?>
                                <h3 class="text-2xl lg:text-3xl xl:text-4xl font-extrabold">
                                    <span id="target<?php echo $tileID ?>" data-counter-target<?php echo $tileID ?>="<?php echo $tile['counter_target']; ?>" data-counter-qty class="text-2xl lg:text-3xl xl:text-4xl font-bold"><?php echo $tile['counter_target']; ?></span>
                                    <?php echo $tile['counter_unit']; ?>
                                </h3>
                            <?php endif; ?>
                        </div>
                        <?php if ($tile['description']) : ?>
                            <p class="text-sm md:text-base leading-[26px]"><?php echo $tile['description']; ?></p>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>