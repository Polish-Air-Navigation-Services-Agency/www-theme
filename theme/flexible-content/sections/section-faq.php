<?php

/** Template to display 'Sekcja z pytaniami' - section_faq */

$questions_list = $args['questions_list'];

?>

<section id="<?php if ($section_id) : echo $section_id;
                endif; ?>" class="relative pt-[50px] pb-[45px] overflow-hidden">

    <div class="container w-full flex flex-col items-center justify-center">
        <?php foreach ($questions_list as $question) :
            $question_qty = 1
        ?>
            <?php echo $question_qty; ?>
            <?php echo $question['question']; ?>
            <?php echo $question['answer']; ?>
        <?php
            $question_qty++;
        endforeach;
        ?>
    </div>
</section>