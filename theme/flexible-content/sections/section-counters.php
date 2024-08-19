<?php

/** Template to display 'Sekcja Wizja (liczniki)' - section_counters */

$tiles_list = $args['tiles_list'];
$section_number = $args['section_number'];
$title = $args['title'];
$description = $args['description'];
$description2 = $args['description2'];
$section_img = $args['section_img'];

if ($section_img['url']) {
    $section_img_url = $section_img['url'];
}


?>

<div class="relative w-full bg-primary pt-[140px]">
    <div class="decoration absolute top-0 left-1/2 -translate-x-1/2">
        <svg xmlns="http://www.w3.org/2000/svg" width="150" height="75" viewBox="0 0 150 75" fill="none">
            <circle cx="75" r="75" fill="#60B8D1" />
        </svg>
    </div>
    <div class="pt-12 relative z-0 container">
        <!-- counter -->
        <?php if ($tiles_list) :
            $tileID = 0;
        ?>
            <div class="counter mb-[100px] lg:mb-[140px] grid grid-cols-1 lg:grid-cols-4 gap-x-10 gap-y-14 lg:gap-y-10">
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
        <!-- /counter end -->

        <div class="two-col flex basis">
            <div class="col1 basis-1/2 flex-col">
                <?php if ($section_number) : ?>
                    <p class="w-fit mb-2 text-[16px] leading-[24px] text-secondary font-semibold after:content-[''] after:w-[61px] after:h-[2px] after:bg-secondary after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] relative"><?php echo $section_number; ?></p>
                <?php endif; ?>

                <?php if ($title) : ?>
                    <p class="mb-[50px] text-[60px] text-white leading-[72px] font-medium"><?php echo $title; ?></p>
                <?php endif; ?>

                <?php if ($description) : ?>
                    <div class="max-w-[414px] mb-4 text-[20px] text-white leading-[30px]"><?php echo $description; ?></div>
                <?php endif; ?>

                <?php if ($description2) : ?>
                    <div class="max-w-[414px] lg:mb-[150px] text-[16px] text-white leading-[24px]"><?php echo $description2; ?></div>
                <?php endif; ?>
            </div>

            <div class="col2 basis-1/2">
                <?php if (isset($section_img)) : ?>
                    <img class="absolute" src="<?php echo $section_img_url ?>" alt="section_image" class="test">
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>