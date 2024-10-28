<?php
if (!defined('ABSPATH')) {
  exit;
}
/**
 * Template Name: kontakt
 * */
?>

<div class="form-basic form-contact">
  <div class="mb-[18px] grid grid-cols-1 lg:grid-cols-2 gap-x-[28px] gap-y-[10px] lg:last:[&_p]:col-span-2">
    [text* your-name placeholder "Twoje imię*"]

    [text* your-lastname placeholder "Twoje nazwisko*"]

    [tel* your-phone placeholder "Numer telefon*"]

    [email* your-email placeholder "Adres e-mail*"]

    [text* your-title placeholder "Temat*"]

  </div>

  <div class="message-container w-full">
    [textarea your-message x3 placeholder "Treść wiadomości"]
  </div>

  <div class="max-w-[520px] mb-5 [&_a]:!text-white hover:[&_a]:!text-white [&_input]:!accent-secondary">
    <div class="mb-5 ">
      [acceptance privacy-policy]
        Wyrażam zgodę na przetwarzanie przez Polską Agencje Żeglugi Powietrznej z siedzibą przy ul. Wieżowej 8, 02-147 Warszawa, moich danych osobowych zawartych w dokumentacji aplikacyjnej w celu i zakresie niezbędnym do uczestnictwa w przyszłych procesach rekrutacji, w tym informowania mnie o realizowanych przez Polską Agencje Żeglugi Powietrznej rekrutacjach.
      [/acceptance]
    </div>
  </div>

  <div class="btn-transparent group relative text-center max-w-full w-fit ml-auto [&_.wpcf7-spinner]:absolute [&_.wpcf7-spinner]:right-[-7px] [&_.wpcf7-spinner]:top-4 ">
    [submit "Wyślij"]
    <svg class="absolute right-[26px] top-[16px] pointer-events-none" xmlns="http://www.w3.org/2000/svg" width="34" height="16" viewBox="0 0 34 16" fill="none">
      <path d="M26.4003 14.5996L33 7.99996M33 7.99996L26.4003 1.4003M33 7.99996L1.49994 8.00003" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
  </div>
</div>