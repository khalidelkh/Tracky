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
              class="relative leading-[20.19px] font-medium mix-blend-normal text-white hover:text-white"
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
	        <!-- * ----- Header & Banner ------ * -->
			<section
        class="self-stretch min-h-[1050px] flex flex-col items-center justify-start gap-[154px] bg-[url('/wp-content/themes/tracky/assets/images/frame-376@3x.png')] bg-cover bg-no-repeat bg-[top] text-left text-xl-2 text-cornflowerblue-100 font-poppins"
      >
        <div
          class="w-full relative flex max-w-screen-xl mt-5 lg:mt-0 px-5 xl:px-0 flex-col gap-28 xl:gap-y-44 items-center"
        >
          <!-- * ----- Header ----- * -->
          <header
            class="w-full py-5 lg:py-0 lg:h-[91px] flex flex-row items-end gap-10 lg:gap-5 xl:gap-20 2xl:gap-[100px] text-left text-base-2 text-white font-poppins"
          >
            <img class="w-[209.8px] h-[62.3px]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/logo.svg" />

            <!-- * ---- Desktop menu ---- * -->
            <div
              class="hidden lg:flex flex-row flex-1 items-center justify-between"
            >
              <ul
                class="flex text-sm p-0 m-0 xl:text-base flex-row items-end justify-start gap-5 xl:gap-[32px]"
              >
                <li
                  class="flex flex-row items-end justify-start relative gap-[10px] text-cornflowerblue-100"
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
                </div>
                 <div
                  class="relative leading-[22.21px] font-semibold mix-blend-normal"
                >
                  Actualitées
                </div> 
                <div
                  class="relative leading-[22.21px] font-semibold mix-blend-normal"
                >
                  Contact
                </div>
              </ul>
              <button
                class="cursor-pointer p-0 bg-cornflowerblue-100 w-44 xl:w-[196.9px] rounded-[1.67px] box-border h-[60.6px] flex flex-col items-center justify-center border-[1px] border-solid border-gainsboro"
              >
                <div
                  class="relative text-sm xl:text-base-2 leading-[22.21px] font-semibold font-poppins text-white text-left mix-blend-normal"
                >
                  Demande un devis
                </div>
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
                <ul
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
                  </li>

                   <li>
                    <a class="hover:underline" href="#">Actualitées</a>
                  </li> 

                  <li>
                    <a class="hover:underline" href="#">Contact</a>
                  </li>
                </ul>

                <button
                  class="cursor-pointer p-0 bg-cornflowerblue-100 w-44 xl:w-[196.9px] rounded-[1.67px] box-border h-[60.6px] flex flex-col items-center justify-center border-[1px] border-solid border-gainsboro"
                >
                  <div
                    class="relative text-sm xl:text-base-2 leading-[22.21px] font-semibold font-poppins text-white text-left mix-blend-normal"
                  >
                    Demande un devis
                  </div>
                </button>
              </div>
            </div>
          </header>

          <!-- * ----- Banner ----- * -->
          <div
            class="flex flex-col lg:flex-row items-center justify-between gap-10 w-full"
          >
            <div class="flex flex-col items-start justify-start gap-[42px]">
              <div class="flex flex-col items-start justify-start gap-[8px]">
                <h6
                  class="relative leading-[26.25px] font-medium mix-blend-normal"
                >
                  VIHÉCULES TRACKING
                </h6>
                <h1
                  class="m-0 max-w-[611px] relative text-35xl-5 leading-[60.58px] font-bold font-work-sans text-white mix-blend-normal"
                >
                  Tracky Safe & Reliable Solutions web!
                </h1>
              </div>

              <div
                class="flex flex-col items-start justify-start gap-[51px] text-lg-2 text-white"
              >
                <div
                  class="flex flex-row items-center justify-start gap-[20px]"
                >
                  <img
                    class="w-[3px] relative h-[80.8px] mix-blend-normal"
                    alt=""
                    src="<?= get_template_directory_uri() ?>/assets/images/divider.svg"
                  />

                  <p class="m-0 max-w-[643px] relative leading-[28px]">
                    Une solution sur mesure et modulable selon les besoins de
                    chaque client et chaque metier lorem ipsum dolor sit amet,
                    consectetur adipisicing elit.
                  </p>
                </div>
                <div
                  class="flex flex-row flex-wrap items-start justify-center md:justify-start gap-y-5 gap-x-[34px]"
                >
                  <button
                    class="cursor-pointer p-0 bg-cornflowerblue-100 w-[196.9px] rounded-[1.67px] box-border h-[60.6px] flex flex-col items-center justify-center border-[1px] border-solid border-gainsboro"
                  >
                    <span
                      class="relative text-base-2 leading-[22.21px] font-semibold font-poppins text-white text-left mix-blend-normal"
                    >
                      En savoir plus
                    </span>
                  </button>
                  <button
                    class="cursor-pointer p-0 bg-cornflowerblue-200 w-[196.9px] rounded-[1.67px] box-border h-[60.6px] flex flex-col items-center justify-center border-[1px] border-solid border-gainsboro"
                  >
                    <div
                      class="relative text-base-2 leading-[22.21px] font-semibold font-poppins text-white text-left mix-blend-normal"
                    >
                      Demande un devis
                    </div>
                  </button>
                </div>
              </div>
            </div>

            <div
              class="max-w-[545.2px] w-full rounded-[3.33px] px-5 py-10 bg-white min-h-[527px] flex flex-col items-center justify-center text-[27.3px] text-midnightblue font-work-sans"
            >
              <div class="flex flex-col items-start justify-start gap-[106px]">
                <div class="flex flex-col items-start justify-start gap-[11px]">
                  <button
                    class="cursor-pointer [border:none] p-0 bg-cornflowerblue-100 w-[136.3px] rounded-[1.67px] h-[39.3px] flex flex-col items-center justify-center"
                  >
                    <div
                      class="relative text-mini-1 leading-[20.19px] font-medium font-poppins text-white text-left mix-blend-normal"
                    >
                      Application
                    </div>
                  </button>
                  <h2
                    class="m-0 relative text-inherit leading-[39.38px] font-bold font-inherit mix-blend-normal"
                  >
                    Application mobile
                    <br />
                    IOS & ANDROID
                  </h2>
                </div>
                <div
                  class="flex flex-col items-start justify-start gap-[30px] text-center text-sm text-cornflowerblue-100 font-poppins"
                >
                  <div
                    class="max-w-[444.2px] w-full p-5 rounded-[1.67px] bg-whitesmoke-100 flex flex-col items-center justify-center"
                  >
                    <div
                      class="flex w-full flex-col items-start justify-start gap-[6px]"
                    >
                      <h6
                        class="relative leading-[20.19px] font-medium mix-blend-normal"
                      >
                        SUIVEZ VOTRE VÉHICULE
                      </h6>
                      <div
                        class="max-w-[403.9px] w-full rounded-[1.33px] bg-white h-[8.1px] flex flex-row items-center justify-start"
                      >
                        <img
                          class="max-w-[101px] relative rounded-[1.33px] h-[8.1px] mix-blend-normal"
                          alt=""
                          src="<?= get_template_directory_uri() ?>/assets/images/line-active.svg"
                        />

                        <img
                          class="w-[15px] relative h-[15px] mix-blend-normal ml-[-7.5px]"
                          alt=""
                          src="<?= get_template_directory_uri() ?>/assets/images/ellipse-839.svg"
                        />
                      </div>
                      <div
                        class="flex flex-row items-start justify-between w-full text-left text-mini-1 text-gray-100"
                      >
                        <div
                          class="relative leading-[20.19px] mix-blend-normal"
                        >
                          <span>25</span>
                          <span>
                            <span class="font-semibold font-poppins"> </span>
                            <span>Km</span>
                          </span>
                        </div>
                        <div
                          class="relative leading-[20.19px] text-right mix-blend-normal"
                        >
                          <span>100</span>
                          <span>
                            <span class="font-semibold font-poppins"> </span>
                            <span>Km</span>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div
                    class="flex flex-row flex-wrap items-start justify-start gap-[20px]"
                  >
                    <button
                      class="cursor-pointer p-0 bg-[transparent] w-full sm:w-[212px] rounded-[1.67px] box-border h-[58.6px] flex flex-row items-center justify-center gap-[6px] border-[1px] border-solid border-gainsboro"
                    >
                      <img
                        class="w-[13.1px] relative h-[16.2px] mix-blend-normal"
                        alt=""
                        src="<?= get_template_directory_uri() ?>/assets/images/vector2.svg"
                      />

                      <span
                        class="relative text-base-2 leading-[22.21px] font-semibold font-poppins text-darkslategray-300 text-center mix-blend-normal"
                      >
                        Play store
                      </span>
                    </button>
                    <button
                      class="cursor-pointer p-0 bg-[transparent] sm:w-[212px] w-full rounded-[1.67px] box-border h-[58.6px] flex flex-row items-center justify-center gap-[6px] border-[1px] border-solid border-gainsboro"
                    >
                      <img
                        class="w-[16.2px] relative h-[16.2px] mix-blend-normal"
                        alt=""
                        src="<?= get_template_directory_uri() ?>/assets/images/vector3.svg"
                      />

                      <div
                        class="relative text-base-2 leading-[22.21px] font-semibold font-poppins text-darkslategray-300 text-center mix-blend-normal"
                      >
                        Google play
                      </div>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- * overflowed section * -->
        <div
          class="-mb-24 px-5 xl:px-0 flex w-full max-w-screen-xl flex-col md:flex-row items-start justify-start text-center text-35xl-5 text-midnightblue"
        >
          <div
            class="w-full shadow-[0px_5px_29px_rgba(33,_52,_48,_0.34)] rounded-t-3xs md:rounded-tl-3xs gap-5 md:rounded-tr-none md:rounded-br-none md:rounded-bl-3xs bg-white py-10 flex flex-row flex-wrap items-center justify-evenly"
          >
            <div class="flex flex-col items-center justify-start gap-[16px]">
              <b class="relative leading-[60.58px] mix-blend-normal">560+</b>
              <img
                class="w-[60.6px] relative h-[3px] mix-blend-normal"
                alt=""
                src="<?= get_template_directory_uri() ?>/assets/images/divider1.svg"
              />

              <span
                class="relative text-lg-2 leading-[26.25px] font-semibold text-darkslategray-300 mix-blend-normal"
              >
                Clients Fidèlle
              </span>
            </div>
            <div class="flex flex-col items-center justify-start gap-[15px]">
              <b class="relative leading-[60.58px] mix-blend-normal">15K+</b>
              <img
                class="w-[60.6px] relative h-[3px] mix-blend-normal"
                alt=""
                src="<?= get_template_directory_uri() ?>/assets/images/divider2.svg"
              />

              <div
                class="relative text-lg-2 leading-[26.25px] font-semibold text-darkslategray-300 mix-blend-normal"
              >
                GPS Installer
              </div>
            </div>
            <div class="flex flex-col items-center justify-start gap-[16px]">
              <b class="relative leading-[60.58px] mix-blend-normal">68K+</b>
              <img
                class="w-[60.6px] relative h-[3px] mix-blend-normal"
                alt=""
                src="<?= get_template_directory_uri() ?>/assets/images/divider1.svg"
              />

              <div
                class="relative text-lg-2 leading-[26.25px] font-semibold text-darkslategray-300 mix-blend-normal"
              >
                Membre d’équipe
              </div>
            </div>
          </div>
          <div
            class="md:max-w-[313px] w-full shadow-[0px_5px_29px_rgba(33,_52,_48,_0.34)] rounded-tl-none md:rounded-tr-3xs rounded-b-3xs md:rounded-br-3xs md:rounded-bl-none bg-cornflowerblue-100 flex flex-col items-start justify-center pl-[32px] pr-3 box-border gap-[18px] text-left text-3xl-2 py-[44.5px] text-white"
          >
            <div
              class="flex flex-col items-start justify-start relative gap-[9px]"
            >
              <div
                class="relative leading-[28.27px] font-semibold mix-blend-normal z-[0]"
              >
                Une solution selon <br />
                votre métier
              </div>
              <img
                class="w-[60.6px] absolute !m-[0] top-[-11px] left-[0px] h-[3px] mix-blend-normal z-[1]"
                alt=""
                src="<?= get_template_directory_uri() ?>/assets/images/divider3.svg"
              />
            </div>
            <button
              class="flex flex-row items-center justify-start gap-[29px] text-base-2 border-none bg-transparent"
            >
              <div
                class="relative leading-[22.21px] font-semibold mix-blend-normal text-white"
              >
                EN SAVOIR PLUS
              </div>
              <img
                class="w-[14.5px] relative h-[12.1px] mix-blend-normal"
                alt=""
                src="<?= get_template_directory_uri() ?>/assets/images/vector4.svg"
              />
            </button>
          </div>
        </div>
      </section>