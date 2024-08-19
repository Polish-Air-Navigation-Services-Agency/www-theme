<?php

/** Template to display 'Sekcja z treścią (dwie kolumny)' - section_two_cols */

$cols_reverse = $args['cols_reverse'];
$section_number = $args['section_number'];
$title = $args['title'];
$button = $args['button'];
$description = $args['description'];

?>

<div>
    <div class="container w-full flex gap-[117px] <?php if ($cols_reverse) echo 'flex-row-reverse'; ?> ">
        <div class="col1 basis-1/2 flex-col">
            <?php if ($section_number) : ?>
                <p class="text-[16px] leading-[24px] text-[#60B8D1] after:content-[''] after:w-[61px] after:h-[2px] after:bg-white after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] relative"><?php echo $section_number; ?></p>
            <?php endif; ?>

            <?php if ($title) : ?>
                <p class="text-[60px] text-[#0F304D] leading-[72px]"><?php echo $title; ?></p>
            <?php endif; ?>

            <?php if ($button) : ?>
                <button class="bg-white !rounded-full border-[#BEBFBF] !px-6 !py-[11px] text-[#0F304D]">
                    <a href="<?php echo esc_url(home_url('/o-nas')); ?>" class="flex items-center justify-center gap-[10px]">
                        <?php echo $button; ?>
                    </a>
                </button>
            <?php endif; ?>


        </div>
        <div class="col2 basis-1/2">
            <p class="max-w-[564px]">
                <?php echo $description; ?>
            </p>
        </div>
    </div>
</div>