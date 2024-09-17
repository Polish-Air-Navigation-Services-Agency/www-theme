<?php

/** Template to display 'Sekcja z tytułem' - section_header */

$section_id = $args['section_id'];
$section_number = $args['section_number'];
$title = $args['title'];

?>

<section id="<?php if ($section_id) : echo $section_id;
                endif; ?>" class="relative pt-[50px] pb-[45px] overflow-hidden">

    <div class="container w-full flex flex-col items-center justify-center">
        <?php if ($section_number) : ?>
            <p class="w-fit mb-2 text-[16px] leading-[24px] text-secondary font-semibold after:content-[''] after:w-[61px] after:h-[2px] after:bg-secondary after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] before:content-[''] before:w-[61px] before:h-[2px] before:bg-secondary before:rounded-full before:absolute before:top-1/2 before:-translate-y-1/2 before:left-[-70px] relative"><?php echo $section_number; ?></p>
        <?php endif; ?>

        <?php if ($title) : ?>
            <h2 class="max-w-[500px] text-center text-[42px] lg:text-[60px] text-primary leading-[50px] lg:leading-[72px] font-medium"><?php echo $title; ?></h2>
        <?php endif; ?>
    </div>
</section>