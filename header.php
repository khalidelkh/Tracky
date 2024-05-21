<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tracky
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
        <!-- * ----- Toolbar ----- * -->
		<div
        class="bg-cornflowerblue-100 px-5 xl:px-0 h-[41px] w-full overflow-hidden flex flex-row items-center justify-between"
      >
        <div class="flex max-w-screen-xl mx-auto w-full justify-between">
          <div class="flex flex-row items-center justify-start gap-[8px]">
            <img
              class="w-[18.4px] relative h-[13.8px] mix-blend-normal"
              alt=""
              src="<?= get_template_directory_uri() ?>/assets/images/emailsvg.svg"
            />

            <a href="mailto:<?= get_theme_mod('contact_email', 'info@tracky.com') ?>"
              class="relative leading-[20.19px] font-medium mix-blend-normal !text-white hover:!text-white"
            >
            <?= get_theme_mod('contact_email', 'info@tracky.com') ?>
            </a>
          </div>
          <div class="flex flex-row items-center justify-start gap-[22px]">
          <a href="<?= get_theme_mod('tweeter_link', '') ?>">
            <img
              class="w-[18.2px] relative h-[15.1px] mix-blend-normal"
              alt=""
              src="<?= get_template_directory_uri() ?>/assets/images/twittericon.svg"
            />
          </a>
            
          <a href="<?= get_theme_mod('instagram_link', '') ?>"> 
            <img
              class="w-[15.2px] relative h-[15.1px] mix-blend-normal"
              alt=""
              src="<?= get_template_directory_uri() ?>/assets/images/instagramicon.svg"
            />
          </a>  
            
          <a href="<?= get_theme_mod('facebook_link', '') ?>">
            <img
              class="w-[8.7px] relative h-[15.1px] mix-blend-normal"
              alt=""
              src="<?= get_template_directory_uri() ?>/assets/images/vector.svg"
            />
          </a>
          
          <a href="<?= get_theme_mod('youtub_link', '') ?>">
            <img
              class="w-[17.2px] relative h-[12.1px] mix-blend-normal"
              alt=""
              src="<?= get_template_directory_uri() ?>/assets/images/youtubeicon.svg"
            />
          </a>
          </div>
        </div>
      </div>
	  <section
        class="relative w-full flex min-h-[476px] flex-col self-stretch font-semibold max-md:px-0"
      >
        <img
          loading="lazy"
          src="<?= get_template_directory_uri() ?>/assets/images/bgs/bg-banner.png"
          alt=""
          class="absolute inset-0 object-cover size-full"
        />
        <div
          class="relative flex w-full max-w-screen-xl mx-auto px-5 xl:px-0 flex-col items-start"
        >
          <!-- * ----- Header ----- * -->
          <header
            class="w-full py-5 lg:py-0 lg:h-[91px] flex flex-row items-end gap-10 lg:gap-5 xl:gap-20 2xl:gap-[100px] text-left text-base-2 text-white font-poppins"
          >
            <img class="w-[209.8px] h-[62.3px]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/logo.svg" />

            <!-- * ---- Desktop menu ---- * -->
            <div
              class="hidden lg:flex flex-row flex-1 items-center justify-between !ml-16"
            >
            <?php
              wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'menu_id' => 'header-menu',
                'container' => 'ul',
                'menu_class' => 'header-menu flex text-sm p-0 m-0 xl:text-base flex-row items-end justify-start gap-5 xl:gap-[32px] font-bold',
              ));
              ?>
              <!-- <ul
                class="flex text-sm p-0 m-0 xl:text-base flex-row items-end justify-start gap-5 xl:gap-[32px]"
              >
                <li
                  class="flex flex-row items-end justify-start relative gap-[10px]"
                >
                  <a
                    href="#"
                    class="relative leading-[22.21px] font-semibold mix-blend-normal z-[0]"
                  >
                    Accueil
                  </a>
                  <img
                    class="w-[63.6px] absolute !m-[0] top-[-52px] left-[0px] rounded-12xs-5 h-[3px] mix-blend-normal z-[1]"
                    alt=""
                    src="<?= get_template_directory_uri() ?>/assets/images/hover-menu.svg"
                  />
                </li>
                <div
                  class="flex flex-row items-end justify-start relative gap-[2px]"
                >
                  <div
                    class="relative leading-[22.21px] font-semibold mix-blend-normal z-[0]"
                  >
                    Solution
                  </div>
                  <img
                    class="w-[10.1px] absolute !m-[0] top-[12.9px] left-[70px] h-[10.1px] mix-blend-normal z-[1]"
                    alt=""
                    src="<?= get_template_directory_uri() ?>/assets/images/vector1.svg"
                  />
                </div>
                <div class="flex flex-row items-end justify-start relative">
                  <div
                    class="relative leading-[22.21px] font-semibold mix-blend-normal z-[0]"
                  >
                    Secteur
                  </div>
                  <img
                    class="w-[10.1px] absolute !m-[0] top-[12.9px] left-[63px] h-[10.1px] mix-blend-normal z-[1]"
                    alt=""
                    src="<?= get_template_directory_uri() ?>/assets/images/vector1.svg"
                  />
                </div>
                <div
                  class="relative leading-[22.21px] font-semibold mix-blend-normal"
                >
                  A-propos
                </div>
                <div
                  class="flex flex-row items-end justify-start relative gap-[2px]"
                >
                  <div
                    class="relative leading-[22.21px] font-semibold mix-blend-normal z-[0]"
                  >
                    Produits
                  </div>
                  <img
                    class="w-[10.1px] absolute !m-[0] top-[12.9px] left-[70px] h-[10.1px] mix-blend-normal z-[1]"
                    alt=""
                    src="<?= get_template_directory_uri() ?>/assets/images/vector1.svg"
                  />
                </div> -->
                 <!-- <div
                  class="relative leading-[22.21px] font-semibold mix-blend-normal"
                >
                  Actualitées
                </div>  -->
                <!-- <div
                  class="relative leading-[22.21px] font-semibold mix-blend-normal"
                >
                  Contact
                </div>
              </ul> -->
              <button
                class="cursor-pointer p-0 bg-cornflowerblue-100 w-44 xl:w-[196.9px] rounded-[1.67px] box-border h-[60.6px] flex flex-col items-center justify-center border-[1px] border-solid border-gainsboro"
              >
                <a href="/contact"
                  class="relative text-sm xl:text-base-2 leading-[22.21px] font-semibold font-poppins !text-white text-left mix-blend-normal hover:text-white"
                >
                  Demande un devis
                </a>
              </button>
            </div>

            <!-- * ---- Mobile menu ---- * -->
            <div
              class="ml-auto flex-row self-center items-center justify-between gap-[28px] lg:hidden"
            >
              <button
                class="menu-button cursor-pointer [border:none] p-0 bg-transparent w-[24px] h-[24px] flex flex-col items-center justify-center"
              >
                <div
                  class="w-6 h-6 bg-white"
                  style="
                    mask: url('<?= get_template_directory_uri() ?>/assets/images/icons/menu-icon.svg');
                    -webkit-mask: url('<?= get_template_directory_uri() ?>/assets/images/icons/menu-icon.svg');
                    mask-size: contain;
                    -webkit-mask-size: contain;
                  "
                ></div>
              </button>

              <div
                style="opacity: 0; pointer-events: none"
                class="mobile-menu bg-midnightblue transition-all duration-200 ease-out flex flex-col justify-evenly items-center py-10 w-full h-[calc(100vh-120px)] left-0 z-50 right-0 absolute top-[120px] text-orange"
              >
              <?php
              wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'menu_id' => 'header-menu',
                'container' => 'ul',
                'menu_class' => 'header-menu m-0 text-lg font-medium flex flex-col justify-center items-center space-y-6',
              ));
              ?>
                <!-- <ul
                  class="text-lg font-medium flex flex-col justify-center items-center space-y-6"
                >
                  <li>
                    <a class="hover:underline" href="/">Acceuil</a>
                  </li>

                  <li>
                    <a class="hover:underline" href="#">Solutions</a>
                  </li>

                  <li>
                    <a class="hover:underline" href="#">Secteur</a>
                  </li>

                  <li>
                    <a class="hover:underline" href="#">A-propos</a>
                  </li>

                  <li>
                    <a class="hover:underline" href="#">Produits</a>
                  </li> -->

                   <!-- <li>
                    <a class="hover:underline" href="#">Actualitées</a>
                  </li>  -->

                  <!-- <li>
                    <a class="hover:underline" href="#">Contact</a>
                  </li>
                </ul> -->

                <button
                  class="cursor-pointer p-0 bg-cornflowerblue-100 w-44 xl:w-[196.9px] rounded-[1.67px] box-border h-[60.6px] flex flex-col items-center justify-center border-[1px] border-solid border-gainsboro"
                >
                  <a href="/contact"
                    class="relative text-sm xl:text-base-2 leading-[22.21px] font-semibold font-poppins !text-white text-left mix-blend-normal hover:text-white"
                  >
                    Demande un devis
                 </a>
                </button>
              </div>
            </div>
          </header>

        