<?php

/** Template to display 'Sekcja z pytaniami' - section_faq */

$questions_list = $args['questions_list'];

?>

<section class="relative pb-10 lg:pb-[100px] bg-[#F6F8F9]">
    <div class="container mx-auto">
        <div class="faq-wrapper">
            <?php $question_qty = 1; ?>
            <?php foreach ($questions_list as $question) :
                if ($question_qty < 10) :
                    $question_qty = '0' . $question_qty;
                endif;
            ?>
                <div class="question-wrapper mt-10 lg:flex gap-[44px] border-b-[1px] border-[#BEBFBF]">
                    <p class="text-secondary text-[30px] font-medium"><?php echo $question_qty . '/'; ?></p>
                    <div class="right-col">
                        <h3 class="mb-5 text-[30px] font-medium leading-[36px]"><?php echo $question['question']; ?></h3>
                        <div class="mb-10 text-textGray text-base"><?php echo $question['answer']; ?></div>
                    </div>
                </div>
            <?php
                $question_qty++;
            endforeach;
            ?>
        </div>
    </div>
</section>