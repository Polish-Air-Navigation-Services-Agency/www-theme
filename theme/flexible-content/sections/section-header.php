<?php

/** Template to display 'Sekcja z tytułem' - section_header */

$section_id = $args['section_id'];
$section_number = $args['section_number'];
$title = $args['title'];
$description = $args['description'];
$header_left = $args['header_left'];
$grayBackground = $args['grayBackground'];



?>

<section id="<?php echo ($section_id) ? $section_id : ''; ?>" class="relative pt-[50px] pb-[45px] overflow-hidden <?php echo ($grayBackground) ? 'bg-[#F6F8F9]' : ''; ?>">

    <div class="container w-full flex flex-col <?php echo ($header_left) ? 'items-start' : 'items-center'; ?> justify-center">
        <?php if ($section_number) : ?>
            <p class="w-fit mb-2 text-base leading-[24px] text-secondary font-semibold after:content-[''] after:w-[61px] after:h-[2px] after:bg-secondary after:rounded-full after:absolute after:top-1/2 after:-translate-y-1/2 after:right-[-70px] before:content-[''] <?php echo ($header_left) ? 'before:w-[0px]' : 'before:w-[61px]'; ?>  before:h-[2px] before:bg-secondary before:rounded-full before:absolute before:top-1/2 before:-translate-y-1/2 before:left-[-70px] relative"><?php echo $section_number; ?></p>
        <?php endif; ?>

        <?php if ($title) : ?>
            <h2 class="mb-10 max-w-[840px] text-[42px] lg:text-[60px] text-primary leading-[50px] lg:leading-[72px] font-medium"><?php echo $title; ?></h2>
        <?php endif; ?>

        <?php if ($description) : ?>
            <div class="max-w-[612px] text-center text-base lg:text-[18px] text-textGray leading-[24px] lg:leading-[28px]"><?php echo $description; ?></div>
        <?php endif; ?>
    </div>
</section>