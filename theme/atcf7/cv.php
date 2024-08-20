<?php
if (!defined('ABSPATH')) {
  exit;
}
/**
 * Template Name: CV
 * */
?>

<div class="form-basic cv">
  <div class="mb-[18px] grid grid-cols-2 gap-x-[28px] gap-y-[10px]">
    [text* your-name placeholder "Twoje imię*"]

    [text* your-lastname placeholder "Twoje nazwisko*"]

    [tel* your-phone placeholder "Numer telefon*"]

    [email* your-email placeholder "Adres e-mail*"]

    [text* your-country placeholder "Kraj*"]

    [text* your-region placeholder "Region/Województwo*"]

    [text* your-coop placeholder "Forma współpracy*"]

    <label for="your-file" class="flex justify-between items-center [&_br]:hidden" data-js="cv-file">
      <span class="truncate" data-js="cv-file-name">
        <?php esc_html_e('Załącz plik CV', '_pansa') ?>
      </span>
    </label>[file* your-file id:your-file placeholder "Załącz CV*"]
  </div>

  <div class="message-container w-full mb-[30px]">
    [textarea* your-message x3 placeholder "Wiadomość..."]
  </div>

  <div class="max-w-[520px] mb-5 [&_a]:!text-white hover:[&_a]:!text-white [&_input]:!accent-secondary">
    <div class="mb-5 has-tooltip">
      [acceptance gdpr_woo_consent]
      <div class="tooltip">
        <div class="tooltip-icon hidden"></div>
        <span class="tooltip-text">
          Wyrażam zgodę na przetwarzanie przez Polską Agencje Żeglugi Powietrznej z siedzibą przy ul. Wieżowej 8, 02-147 Warszawa, moich danych osobowych zawartych w dokumentacji aplikacyjnej w celu i zakresie niezbędnym do uczestnictwa w przyszłych procesach rekrutacji, w tym informowania mnie o realizowanych przez Polską Agencje Żeglugi Powietrznej rekrutacjach.
        </span>
      </div>
      [/acceptance]
    </div>
  </div>

  <div class="btn-submit group relative flex gap-[10px] text-center max-w-full w-fit mx-auto [&_.wpcf7-spinner]:absolute [&_.wpcf7-spinner]:right-[-7px] [&_.wpcf7-spinner]:top-4 [&_svg_path]:hover:fill-secondary [&_svg_circle]:hover:stroke-secondary [&_p]:flex [&_p]:gap-[4px] [&_p]:!font-medium [&_p]:bg-primary [&_p]:hover:bg-white [&_p]:!rounded-full [&_p]:!px-6 [&_p]:!py-[11px] [&_p]:text-white [&_p]:hover:text-[#0F304D] transition ease duration-200">
    [submit "Wyślij"]
    <svg class="self-center" xmlns="http://www.w3.org/2000/svg" width="34" height="16" viewBox="0 0 34 16" fill="none">
      <path class="group-hover:stroke-white" d="M26.4003 14.5996L33 7.99996M33 7.99996L26.4003 1.4003M33 7.99996L1.49994 8.00003" stroke="#0F304D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
  </div>
</div>