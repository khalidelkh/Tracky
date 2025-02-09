<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tracky
 */

?>

<!-- * Last section & Footer * -->
<section class="self-stretch text-center text-base-2">
  <div class="bg-whitesmoke-200 min-h-[257px] py-14 flex flex-row flex-wrap items-center justify-center gap-[60px]">
    <img class="w-[212px] h-[99px] object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/frame-351@2x.webp" />

    <img class="w-[212px] h-[99px] object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/frame-352@2x.webp" />

    <img class="w-[212px] h-[99px] object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/frame-358@2x.webp" />

    <img class="w-[212px] h-[99px] object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/frame-354@2x.webp" />

    <img class="w-[212px] h-[99px] object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/frame-357@2x.webp" />
  </div>

  <footer class="flex max-w-screen-xl px-5 w-full mx-auto flex-row flex-wrap items-start justify-between py-[114px] xl:px-0 box-border gap-10 text-left text-xl-2 text-midnightblue font-work-sans">
    <div class="flex flex-col items-start justify-start gap-[23px] text-sm text-darkslategray-100 font-poppins">
      <img class="w-[171.8px] h-[49.7px] object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/frame-359@2x.webp" />

      <div class="flex flex-col items-start justify-start gap-[15px]">
        <p class="max-w-[373.6px] relative leading-[25px] font-normal">
          <b>TRACKY </b>
          <span>est une solution SAAS (software as a service). Aucun logiciel
            à installer. Une simple connexion internet suffit, Pas de
            mises à jour à faire par l’utilisateur.</span>
        </p>
        <div class="flex flex-row items-start justify-start gap-[24px]">
          <a href="<?= get_theme_mod('instagram_link', '') ?>">
            <img class="w-[20.2px] relative h-[20.2px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/instagram.svg" />
          </a>

          <a href="<?= get_theme_mod('facebook_link', '') ?>">
            <img class="w-[11.5px] relative h-[20.2px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/vector9.svg" />
          </a>
        </div>
      </div>
    </div>
    <div class="flex flex-col items-start justify-start gap-[19px]">
      <b class="relative leading-[26.25px] mix-blend-normal">Liens Utiles</b>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'liens-utils',
        'menu_id' => 'liens-utils',
        'container' => 'ul',
        'menu_class' => ' liens-utils m-0 flex flex-col items-start justify-start gap-[8px] text-base-2 text-darkslategray-100  font-semibold',
      ));
      ?>

    </div>
    <div class="flex flex-col items-start justify-start gap-[19px]">
      <b class="relative leading-[26.25px] mix-blend-normal">Pages légales</b>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'pages-légales',
        'menu_id' => 'pages-légales',
        'container' => 'ul',
        'menu_class' => ' pages-légales m-0 flex flex-col items-start justify-start gap-[8px] text-base-2 text-darkslategray-100 font-semibold',
      ));
      ?>

    </div>
    <div class="flex flex-col items-start justify-start gap-[17px]">
      <b class="relative leading-[26.25px] mix-blend-normal">Inscrivez-vous</b>
      <div class="flex flex-col items-start justify-start gap-[12px] text-sm text-darkslategray-100 font-poppins">
        <p class="max-w-[373.6px] relative leading-[25px]">
          Une simple connexion internet suffit, Pas de mises à jour à
          faire par l’utilisateur.
        </p>
        <div class="flex flex-row items-start justify-start gap-[10px] text-base-2">
          <input class="max-w-[250.4px] w-full box-border h-[58.6px] overflow-hidden shrink-0 flex flex-col items-start justify-center py-0 px-5 border-[1px] border-solid border-gainsboro" placeholder="Votre adresse email" />

          <button class="max-w-[113.1px] sm:w-full rounded-[1.67px] bg-cornflowerblue-100 h-[58.6px] overflow-hidden shrink-0 flex flex-col items-center justify-center text-white">
            <div class="relative leading-[22.21px] font-semibold mix-blend-normal">
              Envoyer
            </div>
          </button>
        </div>
      </div>
    </div>
  </footer>

  <div class="bg-midnightblue min-h-16 flex flex-col items-center justify-center">
    <p class="relative text-sm sm:text-base leading-[22.21px] font-medium mix-blend-normal text-white m-0">
      Copyright © 2024 Tracky . Tous Droit Réservé.
    </p>
  </div>
</section>


<?php wp_footer(); ?>

</body>

</html>