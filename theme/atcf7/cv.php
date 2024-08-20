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
    <div class="has-tooltip mb-5 flex gap-[4px] [&>p]:self-start [&>p]:mt-[-10px]">
      [acceptance gdpr_woo_consent]
      <div class="tooltip">
        <div class="tooltip-icon"></div>
        <span class="tooltip-text text-[10px] leading-[15px]">
          <?php esc_html_e('Wyrażam zgodę na przetwarzanie przez Polską Agencje Żeglugi Powietrznej z siedzibą przy ul. Wieżowej 8, 02-147 Warszawa, moich danych osobowych zawartych w dokumentacji aplikacyjnej w celu i zakresie niezbędnym do uczestnictwa w przyszłych procesach rekrutacji, w tym informowania mnie o realizowanych przez Polską Agencje Żeglugi Powietrznej rekrutacjach.', '_pansa'); ?>
        </span>
      </div>
      [/acceptance]
    </div>
  </div>

  <div class="btn-transparent group relative text-center max-w-full w-fit mx-auto [&_.wpcf7-spinner]:absolute [&_.wpcf7-spinner]:right-[-7px] [&_.wpcf7-spinner]:top-4 [&_svg_path]:hover:fill-secondary [&_svg_circle]:hover:stroke-secondary">
    [submit "Wyślij wiadomość"]
    <svg class="absolute right-5 top-6 pointer-events-none" width="14" height="10" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path class="!fill-none group-hover:stroke-primary transition duration-200" d="M0.774525 0.500055L5.50054 5.75635L10.2266 0.500055" fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round"></path>
    </svg>
  </div>
</div>