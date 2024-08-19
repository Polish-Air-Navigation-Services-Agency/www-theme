<?php

/** Template to display 'Sekcja z treścią (dwie kolumny)' - section_two_cols */

$section_number = $args['section_number'];
$title = $args['title'];
$button = $args['button'];
$description = $args['description'];

?>

<div>
    <div class="container w-full flex">
        <div class="col1 basis-1/2">
            <?php echo $section_number; ?>
            <?php echo $title; ?>
            <?php echo $button; ?>
        </div>
        <div class="col2 basis-1/2">
            <?php echo $description; ?>
        </div>
    </div>
</div>