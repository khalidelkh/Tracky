<?php
/* Template Name: produits*/
get_header();
?>
<h1 class="mt-24 text-35xl-5 font-bold leading-[60.69px] text-white">
  Nos produits
</h1>

<img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/divider1.svg" alt="" class="m-0 aspect-[20] w-[60px] fill-cornflowerblue-100" />
<div class="mt-24 flex gap-2.5 text-lg leading-6 whitespace-nowrap max-md:mt-10">
  <a href="#" class="text-cornflowerblue-100">Home</a>
  <img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/icons/double-chevron.svg" alt="" class="shrink-0 my-auto aspect-square w-2.5 fill-cornflowerblue-100" />
  <span class="text-white">Produits</span>
</div>
</div>
</section>

<!-- * Nos produit * -->
<?php get_template_part('template-section/section-produit'); ?>
<!-- <section
        class="flex flex-col w-full max-w-screen-xl mx-auto px-5 py-14 xl:px-0 xl:py-32 2xl:py-44"
      >
        <h6
          class="w-full text-lg font-medium leading-7 text-cornflowerblue-100 max-md:max-w-full"
        >
          Nos Produits
        </h6>
        <h2
          class="mt-1 w-full text-21xl-4 font-bold sm:leading-[49px] text-blue-950 text-ellipsis max-md:max-w-full"
        >
          PRODUITS LES PLUS <br class="hidden md:block" />
          POPULAIRES
        </h2>
        <img
          loading="lazy"
          src="<?= get_template_directory_uri() ?>/assets/images/Frame-589-min.webp"
          alt=""
          class="mt-8 aspect-[20] fill-cornflowerblue-100 w-[61px]"
        />
        <p
          class="mt-8 max-w-4xl w-full font-normal text-base leading-6 text-ellipsis text-zinc-700 max-md:max-w-full"
        >
          Toutes les contraintes et besoins que nécessite le transport de
          marchandises ont été étudiés par nos équipes pour arriver à satisfaire
          ce créneau trés sensible. Nous vous offrons des solutions sur mesure
          pour pouvoir gérer votre flotte. Gérer le kilomètrage parcouru, la
          consommation de carburant, les pannes moteur, les alertes,
          l'historique des trajets...
        </p>
        <div
          class="flex gap-3 self-start mt-28 text-sm font-medium leading-5 text-zinc-700 max-md:mt-10"
        >
          <button data-active class="product-filter-button">GPS ISUM</button>
          <button class="product-filter-button">GPS ISUM</button>
          <button class="product-filter-button">GPS ISUM</button>
        </div>

        <section
          class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 mt-8 w-full max-md:max-w-full"
        >
          <article
            class="group aspect-square overflow-y-hidden flex relative flex-col"
          >
            <div
              class="flex flex-col grow justify-center w-full bg-white rounded border-2 transition-all duration-200 group-hover:border-4 border-cornflowerblue-100 border-solid max-md:px-5 max-md:mt-7"
            >
              <img
                loading="lazy"
                src="<?= get_template_directory_uri() ?>/assets/images/Frame-589-min.webp"
                alt=""
                class="mt-3 px-7 w-full aspect-[1.37]"
              />
              <button
                class="justify-center transition-all duration-200 -bottom-full group-hover:bottom-0 w-full left-0 absolute items-center px-16 py-5 mt-8 bg-cornflowerblue-100 rounded-sm max-md:px-5 !text-white"
              >
                En savoir plus
              </button>
            </div>
          </article>

          <article
            class="group aspect-square overflow-y-hidden flex relative flex-col"
          >
            <div
              class="flex flex-col grow justify-center w-full bg-white rounded border-2 transition-all duration-200 group-hover:border-4 border-cornflowerblue-100 border-solid max-md:px-5 max-md:mt-7"
            >
              <img
                loading="lazy"
                src="<?= get_template_directory_uri() ?>/assets/images/Frame-589-min.webp"
                alt=""
                class="mt-3 px-7 w-full aspect-[1.37]"
              />
              <button
                class="justify-center transition-all duration-200 -bottom-full group-hover:bottom-0 w-full left-0 absolute items-center px-16 py-5 mt-8 bg-cornflowerblue-100 rounded-sm max-md:px-5 !text-white"
              >
                En savoir plus
              </button>
            </div>
          </article>

          <article
            class="group aspect-square overflow-y-hidden flex relative flex-col"
          >
            <div
              class="flex flex-col grow justify-center w-full bg-white rounded border-2 transition-all duration-200 group-hover:border-4 border-cornflowerblue-100 border-solid max-md:px-5 max-md:mt-7"
            >
              <img
                loading="lazy"
                src="<?= get_template_directory_uri() ?>/assets/images/Frame-589-min.webp"
                alt=""
                class="mt-3 px-7 w-full aspect-[1.37]"
              />
              <button
                class="justify-center transition-all duration-200 -bottom-full group-hover:bottom-0 w-full left-0 absolute items-center px-16 py-5 mt-8 bg-cornflowerblue-100 rounded-sm max-md:px-5 !text-white"
              >
                En savoir plus
              </button>
            </div>
          </article>

          <article
            class="group aspect-square overflow-y-hidden flex relative flex-col"
          >
            <div
              class="flex flex-col grow justify-center w-full bg-white rounded border-2 transition-all duration-200 group-hover:border-4 border-cornflowerblue-100 border-solid max-md:px-5 max-md:mt-7"
            >
              <img
                loading="lazy"
                src="<?= get_template_directory_uri() ?>/assets/images/Frame-589-min.webp"
                alt=""
                class="mt-3 px-7 w-full aspect-[1.37]"
              />
              <button
                class="justify-center transition-all duration-200 -bottom-full group-hover:bottom-0 w-full left-0 absolute items-center px-16 py-5 mt-8 bg-cornflowerblue-100 rounded-sm max-md:px-5 !text-white"
              >
                En savoir plus
              </button>
            </div>
          </article>

          <article
            class="group aspect-square overflow-y-hidden flex relative flex-col"
          >
            <div
              class="flex flex-col grow justify-center w-full bg-white rounded border-2 transition-all duration-200 group-hover:border-4 border-cornflowerblue-100 border-solid max-md:px-5 max-md:mt-7"
            >
              <img
                loading="lazy"
                src="<?= get_template_directory_uri() ?>/assets/images/Frame-589-min.webp"
                alt=""
                class="mt-3 px-7 w-full aspect-[1.37]"
              />
              <button
                class="justify-center transition-all duration-200 -bottom-full group-hover:bottom-0 w-full left-0 absolute items-center px-16 py-5 mt-8 bg-cornflowerblue-100 rounded-sm max-md:px-5 !text-white"
              >
                En savoir plus
              </button>
            </div>
          </article>

          <article
            class="group aspect-square overflow-y-hidden flex relative flex-col"
          >
            <div
              class="flex flex-col grow justify-center w-full bg-white rounded border-2 transition-all duration-200 group-hover:border-4 border-cornflowerblue-100 border-solid max-md:px-5 max-md:mt-7"
            >
              <img
                loading="lazy"
                src="<?= get_template_directory_uri() ?>/assets/images/Frame-589-min.webp"
                alt=""
                class="mt-3 px-7 w-full aspect-[1.37]"
              />
              <button
                class="justify-center transition-all duration-200 -bottom-full group-hover:bottom-0 w-full left-0 absolute items-center px-16 py-5 mt-8 bg-cornflowerblue-100 rounded-sm max-md:px-5 !text-white"
              >
                En savoir plus
              </button>
            </div>
          </article>
        </section>

        <nav
          class="flex gap-5 self-center px-5 mt-20 text-lg font-semibold leading-6 text-center text-gray-800 whitespace-nowrap max-md:mt-10"
        >
          <button
            class="justify-center items-center px-6 text-white bg-cornflowerblue-100 h-[51px] rounded-[100px] w-[51px] max-md:px-5"
          >
            1
          </button>
          <button
            class="justify-center px-5 py-3 border border-solid border-zinc-300 rounded-[100px] bg-white"
          >
            2
          </button>
          <button
            class="justify-center px-5 py-3 border border-solid border-zinc-300 rounded-[100px] bg-white"
          >
            3
          </button>
        </nav>
      </section> -->

<!-- * Do good * -->
<section class="self-stretch min-h-[632px] flex flex-col items-start justify-center box-border gap-[23px] bg-[url('/wp-content/themes/tracky/assets/images/rejoignez-notre-rseau_3x-min.webp')] bg-cover bg-no-repeat bg-[top] text-left text-xl-2 text-cornflowerblue-100 font-poppins">
  <div class="flex flex-col items-start py-16 justify-center box-border w-full max-w-screen-xl px-5 mx-auto">
    <div class="flex flex-col items-start justify-start gap-[17px]">
      <div class="flex flex-col items-start justify-start gap-[3px]">
        <h6 class="m-0 relative text-inherit leading-[26.25px] font-semibold font-inherit mix-blend-normal">
        Devenons partenaires !
        </h6>
        <h2 class="m-0 relative text-21xl-4 sm:text-[43px] leading-[59px] font-bold font-work-sans mix-blend-normal text-white">
        Devenez un partenaire de TRACKY<br>
         Solutions et développez votre<br> activité
        </h2>
      </div>
      <img class="w-[60.6px] relative h-[3px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/divider4.svg" />
    </div>
    <div class="flex flex-col items-start justify-start gap-[26px] text-sm-9 text-white">
      <p class="m-0 max-w-[689.2px] relative leading-[24.76px] text-justify">
        <span>Il existe d’énormes opportunités de croissance aux quatre coins du monde. Étant 
        l’une des marques à la croissance la plus rapide dans le secteur de la télématique, 
        c’est le moment idéal pour rejoindre TRACKY Solutions en tant que partenaire.
        Nos modèles de commission et de partenariat sont uniques et offrent de hauts 
        niveaux de flexibilité, vous trouverez donc la bonne relation pour travailler avec nous.</span>
      </p>
      <div class="flex flex-row flex-wrap items-start justify-start gap-[34px]">
        <button class="cursor-pointer p-0 bg-cornflowerblue-100 w-[196.9px] rounded-[1.67px] box-border h-[60.6px] flex flex-col items-center justify-center border-[1px] border-solid border-gainsboro">
          <a href="/solution-web" class="relative text-base-2 leading-[22.21px] font-semibold font-poppins !text-white text-left mix-blend-normal hover:text-white">
            En savoir plus
          </a>
        </button>
        <button class="cursor-pointer p-0 bg-cornflowerblue-200 w-[196.9px] rounded-[1.67px] box-border h-[60.6px] flex flex-col items-center justify-center border-[1px] border-solid border-gainsboro">
          <a href="/demende-un-devis" class="relative text-base-2 leading-[22.21px] font-semibold font-poppins !text-white text-left mix-blend-normal hover:text-white">
          Demander un devis
          </a>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- * Avis Clients * -->
<?php get_template_part('template-section/section-avis-clients'); ?>
<!-- <section
        class="self-stretch min-h-[856px] pt-20 xl:pt-0 px-5 xl:px-0 flex flex-row items-end justify-center pb-16 xl:pb-[126px] box-border text-left text-xl-2 text-cornflowerblue-100 font-poppins"
      >
        <div
          class="flex w-full max-w-screen-xl mx-auto flex-col-reverse lg:flex-row items-center lg:items-start justify-start"
        >
          <div
            class="flex flex-col items-start justify-start pt-2.5 px-0 pb-0 z-[1]"
          >
            <div
              class="max-w-[747.1px] rounded-[3.33px] bg-white flex flex-col items-start justify-center py-12 sm:px-[50px] box-border gap-[18px]"
            >
              <div
                class="flex flex-col items-start justify-start gap-[5px] z-[2]"
              >
                <h6
                  class="m-0 relative text-inherit leading-[26.25px] font-semibold font-inherit mix-blend-normal"
                >
                  Avis Clients
                </h6>
                <h2
                  class="m-0 relative text-13xl leading-normal sm:text-21xl-4 sm:leading-[46.44px] font-bold font-work-sans mix-blend-normal text-midnightblue"
                >
                  Ce que les gens disent de notre <br />
                  Organisation
                </h2>
              </div>
              <img
                class="w-[60.6px] relative h-[3px] mix-blend-normal z-[1]"
                alt=""
                src="<?= get_template_directory_uri() ?>/assets/images/divider6.svg"
              />

              <div
                class="swiper max-w-80 sm:max-w-none w-full items-start justify-start gap-[5px] z-[0] text-sm text-darkslategray-100"
              >
                <div class="avis-swiper w-full overflow-hidden">
                  <div class="swiper-wrapper w-full">
                    <div class="swiper-slide relative leading-[25px]">
                      <p>
                        <span>TRACKY </span>
                        <span
                          >est une solution SAAS (software as a service). Aucun
                          logiciel à installer. Une simple connexion internet
                          suffit, Pas de mises à jour à faire par l’utilisateur.
                          Dispose d’une application disponible sur PC, Mac, ou
                          encore sur Smartphone et tablette Le matériel inclut
                          la carte SIM et le boitier GPS.
                        </span>
                      </p>
                      <div
                        class="flex mt-5 flex-col items-start justify-start gap-[3px]"
                      >
                        <div
                          class="relative leading-[22.21px] font-medium mix-blend-normal"
                        >
                          David tracky
                        </div>
                        <div
                          class="relative text-mini-1 leading-[20.19px] font-medium text-cornflowerblue-100 mix-blend-normal"
                        >
                          Vendeure
                        </div>
                      </div>
                    </div>

                    <div class="swiper-slide relative leading-[25px]">
                      <p>
                        <span>TRACKY </span>
                        <span
                          >est une solution SAAS (software as a service). Aucun
                          logiciel à installer. Une simple connexion internet
                          suffit, Pas de mises à jour à faire par l’utilisateur.
                          Dispose d’une application disponible sur PC, Mac, ou
                          encore sur Smartphone et tablette Le matériel inclut
                          la carte SIM et le boitier GPS.
                        </span>
                      </p>
                      <div
                        class="flex mt-5 flex-col items-start justify-start gap-[3px]"
                      >
                        <div
                          class="relative leading-[22.21px] font-medium mix-blend-normal"
                        >
                          David tracky
                        </div>
                        <div
                          class="relative text-mini-1 leading-[20.19px] font-medium text-cornflowerblue-100 mix-blend-normal"
                        >
                          Vendeure
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="flex flex-row items-center justify-end w-full text-base-2 text-darkslategray-300"
                >
                  <div
                    class="flex flex-row items-start justify-start gap-[31px]"
                  >
                    <button
                      class="avis-swiper-button-prev w-[50.5px] rounded-81xl bg-white box-border h-[50.5px] flex flex-row items-center justify-center border-[1px] border-solid border-gainsboro"
                    >
                      <img
                        class="w-[7.7px] relative h-[14.1px] mix-blend-normal"
                        alt=""
                        src="<?= get_template_directory_uri() ?>/assets/images/vector5.svg"
                      />
                    </button>

                    <button
                      class="avis-swiper-button-next w-[50.5px] rounded-81xl bg-cornflowerblue-100 h-[50.5px] flex flex-row items-center justify-center"
                    >
                      <img
                        class="w-[7.7px] relative h-[14.1px] mix-blend-normal"
                        alt=""
                        src="<?= get_template_directory_uri() ?>/assets/images/vector6.svg"
                      />
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <img
            class="max-w-[505px] max-h-[435px] xl:max-w-[605.8px] xl:max-h-[535.1px] w-full h-full object-cover z-[0] lg:ml-[-50px]"
            alt=""
            src="<?= get_template_directory_uri() ?>/assets/images/frame-460@2x.webp"
          />
        </div>
      </section> -->


<?php
get_footer();
?>