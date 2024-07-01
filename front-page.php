<?php
get_header('home');
?>

<!-- * ----- Banner ----- * -->
<div class="flex flex-col lg:flex-row items-center justify-between gap-10 w-full">
  <div class="flex flex-col items-start justify-start gap-[42px]">
    <div class="flex flex-col items-start justify-start gap-[8px]">
      <h6 class="relative leading-[26.25px] font-medium mix-blend-normal">
        VIHÉCULES TRACKING
      </h6>
      <h1 class="m-0 max-w-[611px] relative text-35xl-5 leading-[60.58px] font-bold font-work-sans text-white mix-blend-normal">
      Tracky : Aider les entreprises à gérer leurs actifs dans le monde entier.
      </h1>
    </div>

    <div class="flex flex-col items-start justify-start gap-[51px] text-lg-2 text-white">
      <div class="flex flex-row items-center justify-start gap-[20px]">
        <img class="w-[3px] relative h-[80.8px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/divider.svg" />

        <p class="m-0 max-w-[643px] relative leading-[28px]">
        Une gamme de produits adaptés à toutes les entreprises,
         quelle  que soit leur taille.
        </p>
      </div>
      <div class="flex flex-row flex-wrap items-start justify-center md:justify-start gap-y-5 gap-x-[34px]">
        <button class="cursor-pointer p-0 bg-cornflowerblue-100 w-[196.9px] rounded-[1.67px] box-border h-[60.6px] flex flex-col items-center justify-center border-[1px] border-solid border-gainsboro">
          <a href="/solution-web" class="relative text-base-2 leading-[22.21px] font-semibold font-poppins !text-white text-left mix-blend-normal hover:text-white">
            En savoir plus
          </a>
        </button>
        <a href="/demende-un-devis" class="cursor-pointer p-0 bg-cornflowerblue-200 w-[196.9px] rounded-[1.67px] box-border h-[60.6px] flex flex-col items-center justify-center border-[1px] border-solid border-gainsboro">
          <div class="relative text-base-2 leading-[22.21px] font-semibold font-poppins text-white text-left mix-blend-normal ">
            Demande un devis
          </div>
        </a>
      </div>
    </div>
  </div>

  <div class="max-w-[545.2px] w-full rounded-[3.33px] px-5 py-10 bg-white min-h-[527px] flex flex-col items-center justify-center text-[27.3px] text-midnightblue font-work-sans">
    <div class="flex flex-col items-start justify-start gap-[106px]">
      <div class="flex flex-col items-start justify-start gap-[11px]">
        <button class="cursor-pointer [border:none] p-0 bg-cornflowerblue-100 w-[136.3px] rounded-[1.67px] h-[39.3px] flex flex-col items-center justify-center">
          <div class="relative text-mini-1 leading-[20.19px] font-medium font-poppins text-white text-left mix-blend-normal">
            Application
          </div>
        </button>
        <h2 class="m-0 relative text-inherit leading-[39.38px] font-bold font-inherit mix-blend-normal">
          Application mobile
          <br />
          IOS & ANDROID
        </h2>
      </div>
      <div class="flex flex-col items-start justify-start gap-[30px] text-center text-sm text-cornflowerblue-100 font-poppins">
        <div class="max-w-[444.2px] w-full p-5 rounded-[1.67px] bg-whitesmoke-100 flex flex-col items-center justify-center">
          <div class="flex w-full flex-col items-start justify-start gap-[6px]">
            <h6 class="relative leading-[20.19px] font-medium mix-blend-normal">
              SUIVEZ VOTRE VÉHICULE
            </h6>
            <div class="max-w-[403.9px] w-full rounded-[1.33px] bg-white h-[8.1px] flex flex-row items-center justify-start">
              <img class="max-w-[101px] relative rounded-[1.33px] h-[8.1px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/line-active.svg" />

              <img class="w-[15px] relative h-[15px] mix-blend-normal ml-[-7.5px]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/ellipse-839.svg" />
            </div>
            <div class="flex flex-row items-start justify-between w-full text-left text-mini-1 text-gray-100">
              <div class="relative leading-[20.19px] mix-blend-normal">
                <span>25</span>
                <span>
                  <span class="font-semibold font-poppins"> </span>
                  <span>Km</span>
                </span>
              </div>
              <div class="relative leading-[20.19px] text-right mix-blend-normal">
                <span>100</span>
                <span>
                  <span class="font-semibold font-poppins"> </span>
                  <span>Km</span>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-row flex-wrap items-start justify-start gap-[20px]">
          <button class="cursor-pointer p-0 bg-[transparent] w-full sm:w-[212px] rounded-[1.67px] box-border h-[58.6px] flex flex-row items-center justify-center gap-[6px] border-[1px] border-solid border-gainsboro">
            <img class="w-[13.1px] relative h-[16.2px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/vector2.svg" />

            <span class="relative text-base-2 leading-[22.21px] font-semibold font-poppins text-darkslategray-300 text-center mix-blend-normal">
              Play store
            </span>
          </button>
          <button class="cursor-pointer p-0 bg-[transparent] sm:w-[212px] w-full rounded-[1.67px] box-border h-[58.6px] flex flex-row items-center justify-center gap-[6px] border-[1px] border-solid border-gainsboro">
            <img class="w-[16.2px] relative h-[16.2px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/vector3.svg" />

            <div class="relative text-base-2 leading-[22.21px] font-semibold font-poppins text-darkslategray-300 text-center mix-blend-normal">
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
<div class="-mb-24 px-5 xl:px-0 flex w-full max-w-screen-xl flex-col md:flex-row items-start justify-start text-center text-35xl-5 text-midnightblue">
  <div class="w-full shadow-[0px_5px_29px_rgba(33,_52,_48,_0.34)] rounded-t-3xs md:rounded-tl-3xs gap-5 md:rounded-tr-none md:rounded-br-none md:rounded-bl-3xs bg-white py-10 flex flex-row flex-wrap items-center justify-evenly">
    <div class="flex flex-col items-center justify-start gap-[16px]">
      <b class="relative leading-[60.58px] mix-blend-normal">100+</b>
      <img class="w-[60.6px] relative h-[3px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/divider1.svg" />

      <span class="relative text-lg-2 leading-[26.25px] font-semibold text-darkslategray-300 mix-blend-normal">
        Clients Fidèlle
      </span>
    </div>
    <div class="flex flex-col items-center justify-start gap-[15px]">
      <b class="relative leading-[60.58px] mix-blend-normal">3K+</b>
      <img class="w-[60.6px] relative h-[3px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/divider2.svg" />

      <div class="relative text-lg-2 leading-[26.25px] font-semibold text-darkslategray-300 mix-blend-normal">
      Véhicules gérés
      </div>
    </div>
    <div class="flex flex-col items-center justify-start gap-[16px]">
      <b class="relative leading-[60.58px] mix-blend-normal">20+</b>
      <img class="w-[60.6px] relative h-[3px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/divider1.svg" />

      <div class="relative text-lg-2 leading-[26.25px] font-semibold text-darkslategray-300 mix-blend-normal">
      Membre d’équipe
      </div>
    </div>
  </div>
  <div class="md:max-w-[313px] w-full shadow-[0px_5px_29px_rgba(33,_52,_48,_0.34)] rounded-tl-none md:rounded-tr-3xs rounded-b-3xs md:rounded-br-3xs md:rounded-bl-none bg-cornflowerblue-100 flex flex-col items-start justify-center pl-[32px] pr-3 box-border gap-[18px] text-left text-3xl-2 py-[44.5px] text-white">
    <div class="flex flex-col items-start justify-start relative gap-[9px]">
      <div class="relative leading-[28.27px] font-semibold mix-blend-normal z-[0]">
        Une solution selon <br />
        votre métier
      </div>
      <img class="w-[60.6px] absolute !m-[0] top-[-11px] left-[0px] h-[3px] mix-blend-normal z-[1]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/divider3.svg" />
    </div>
    <button class="flex flex-row items-center justify-start gap-[29px] text-base-2 border-none bg-transparent">
      <a href="/secteur" class="relative leading-[22.21px] font-semibold mix-blend-normal !text-white hover:text-white">
        EN SAVOIR PLUS
      </a>
      <img class="w-[14.5px] relative h-[12.1px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/vector4.svg" />
    </button>
  </div>
</div>
</section>
<!-- * Géolocalisations par GPS * -->
<section class="self-stretch px-5 mt-52 lg:mt-20 xl:mt-0 max-w-screen-xl mx-auto w-full min-h-[975px] flex flex-col lg:flex-row items-center lg:items-end justify-center pt-0 pb-[125px] box-border gap-[91px] text-left text-lg text-cornflowerblue-100 font-poppins">
  <div class="max-w-[605.8px] max-h-[615.9px] w-full h-full flex flex-row items-start justify-start relative gap-[10px]">
    <div class="!m-[0] bottom-0 left-[0px] flex flex-row items-start justify-start z-[0]">
      <img class="max-w-[525px] relative max-h-[565.4px] w-full h-full object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/img_2x-min.webp" />
    </div>
    <div class="!m-[0] hidden sm:flex absolute right-[0.2px] -bottom-10 flex-row items-start justify-start z-[1]">
      <img class="max-w-[272.6px] relative max-h-[323.1px] w-full h-full object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/img_2x-min.webp" />
    </div>
  </div>

  <div class="flex flex-col items-start justify-start gap-[34px]">
    <div class="flex flex-col items-start justify-start gap-[8px]">
      <div class="flex flex-col items-start justify-start gap-[4px]">
        <h6 class="m-0 relative text-inherit leading-[26.25px] font-medium font-inherit mix-blend-normal">
          Une solution selon votre métier
        </h6>
        <h2 class="m-0 max-w-[606px] relative text-13xl sm:text-21xl-4 leading-[49px] font-bold font-work-sans mix-blend-normal text-midnightblue">
        Créez un monde de différence et mettez le contrôle total au bout de vos doigts.
        </h2>
      </div>
      <img class="w-[60.6px] relative h-[3px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/divider4.svg" />
    </div>
    <p class="m-0 max-w-[606px] relative text-sm leading-[24px] mix-blend-normal text-darkslategray-100">
      <span class="block text-justify">
        <span>
          <span>Tracky Solutions est spécialisée dans les systèmes de suivi des véhicules et de 
          télématique, avec plus de 3 000 systèmes de suivi actifs en Afrique.</span>
        </span>
      </span>
      <span class="block">
        <span>
          <span>&nbsp;</span>
        </span>
      </span>
      <span class="block text-justify">
        <span>Nous fournissons des produits et des services de pointe à tous les types d’entreprises, 
          de celles qui ne possèdent que quelques véhicules aux grandes flottes commerciales. 
          Nos systèmes peuvent être intégrés dans les voitures, les camionnettes, les camions, 
          les motos, les installations, les équipements, les machines et d’autres biens précieux 
          afin de les protéger et de fournir les informations dont vous avez besoin pour gérer 
          votre entreprise plus efficacement.</span>
      </span>
    </p>
    <button class="cursor-pointer [border:none] p-0 bg-cornflowerblue-100 w-[194.9px] rounded-[1.67px] h-[58.6px] flex flex-col items-center justify-center">
      <a href="/solution-web" class="relative text-base-2 leading-[22.21px] font-semibold font-poppins !text-white text-left mix-blend-normal hover:text-white">
        En savoir plus
      </a>
    </button>
  </div>
</section>
<!-- * Localisez vos Véhicule (TODO: add swiper) * -->
<section class="self-stretch pt-16 pb-16 md:pb-20 xl:pb-[145px] flex flex-col items-center justify-start gap-[42px] text-center text-xl-2 text-cornflowerblue-100 font-poppins">
  <div class="flex flex-col items-center justify-start gap-[35px]">
    <div class="flex flex-col items-center justify-start gap-[12px]">
      <h6 class="relative leading-[26.25px] font-semibold">
        Localisez vos Véhicule
      </h6>
      <b class="relative text-13xl leading-normal sm:text-21xl-4 sm:leading-[52px] font-work-sans mix-blend-normal text-midnightblue">
      UNE PANOPLIE D'OPTION ET D'OUTILS<br>
       POUR GERER VOTRE FLOTE
      </b>
    </div>
    <img class="w-[60.6px] relative h-[3px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/divider1.svg" />
  </div>

  <div class="swiper w-full h-full">
    <div class="flex flex-row items-start justify-start gap-[41px]">
      <!-- Swiper container -->
      <div class="localize-your-vehicle-swiper  px-5 max-w-screen-xl overflow-hidden mx-auto h-full w-full">
        <!-- Swiper prev button -->
        <button class="group localize-your-vehicle-swiper-button-prev w-[50.5px] hidden absolute top-1/2 left-[2%] 2xl:left-[5%] rounded-81xl bg-white box-border h-[50.5px] lg:flex flex-row items-center justify-center z-[0] border-[1px] border-solid border-gainsboro hover:!bg-cornflowerblue-100">

          <div style="
                
                    -webkit-mask: url(<?= get_template_directory_uri() ?>/assets/images/vector5.svg) no-repeat center;
                    mask: url(<?= get_template_directory_uri() ?>/assets/images/vector5.svg) no-repeat center;
                  " class="faq-icon w-3 h-3 bg-gray-500 group-hover:!bg-white"></div>
        </button>

        <!-- Swiper wrapper -->
        <div class="swiper-wrapper h-full w-full">
          <div class=" vehicule swiper-slide !h-[400px] flex flex-col items-start justify-end pt-0 pb-[50px] pr-0 pl-[30px] box-border gap-[8px] bg-[url('/wp-content/themes/tracky/assets/images/frame-407_3x-min.webp')] bg-cover bg-no-repeat bg-[top]">
            <div class="relative leading-[26.25px] font-semibold mix-blend-normal">
              Secteur
            </div>
            <div class="relative text-left leading-[38px] mix-blend-normal text-13xl font-work-sans">
              <b>PARTICULIER</b>
              <p class="text-white m-0">
                OU PERSONNEL
                <img 
                class="text-4xl font-awesome-5-pro text-cornflowerblue-100"
                alt=""
                src="<?= get_template_directory_uri() ?>/assets/images/icons/svgviewer-output (10).svg"
                >              
              </p>
            </div>
          </div>

          <div class=" vehicule swiper-slide !h-[400px] flex flex-col items-start justify-end pt-0 pb-[50px] pr-0 pl-[30px] box-border gap-[8px] bg-[url('/wp-content/themes/tracky/assets/images/Frame-408-_1_.webp')] bg-cover bg-no-repeat bg-[top]">
            <div class="relative leading-[26.25px] font-semibold mix-blend-normal">
              Secteur
            </div>
            <div class="relative text-left leading-[38px] mix-blend-normal text-13xl font-work-sans">
              <b>CAR &</b>
              <p class="text-white m-0">
                TRANSPORT
                <img 
                class="text-4xl font-awesome-5-pro text-cornflowerblue-100"
                alt=""
                src="<?= get_template_directory_uri() ?>/assets/images/icons/svgviewer-output (10).svg"
                >
              </p>
            </div>
          </div>

          <div class=" vehicule swiper-slide !h-[400px] flex flex-col items-start justify-end pt-0 pb-[50px] pr-0 pl-[30px] box-border gap-[8px] bg-[url('/wp-content/themes/tracky/assets/images/Frame-409.webp')] bg-cover bg-no-repeat bg-[top]">
            <div class="relative leading-[26.25px] font-semibold mix-blend-normal">
              Secteur
            </div>
            <div class="relative text-left leading-[38px] mix-blend-normal text-13xl font-work-sans">
              <b>TRANSPORT</b>
              <p class="text-white m-0">
                DE MARCHANDISSE
                <img 
                class="text-4xl font-awesome-5-pro text-cornflowerblue-100"
                alt=""
                src="<?= get_template_directory_uri() ?>/assets/images/icons/svgviewer-output (10).svg"
                >
              </p>
            </div>
          </div>

          <div class=" vehicule swiper-slide !h-[400px] flex flex-col items-start justify-end pt-0 pb-[50px] pr-0 pl-[30px] box-border gap-[8px] bg-[url('/wp-content/themes/tracky/assets/images/frame-407_3x-min.webp')] bg-cover bg-no-repeat bg-[top]">
            <div class="relative leading-[26.25px] font-semibold mix-blend-normal">
              Secteur
            </div>
            <div class="relative text-left leading-[38px] mix-blend-normal text-13xl font-work-sans">
              <b>PARTICULIER</b>
              <p class="text-white m-0">
                OU PERSONNEL
                <img 
                class="text-4xl font-awesome-5-pro text-cornflowerblue-100"
                alt=""
                src="<?= get_template_directory_uri() ?>/assets/images/icons/svgviewer-output (10).svg"
                >             
               </p>
            </div>
          </div>
        </div>

        <!-- Swiper next button -->
        <button class="group localize-your-vehicle-swiper-button-next absolute hidden top-1/2 right-[2%] 2xl:right-[5%] w-[50.5px] rounded-81xl bg-white h-[50.5px] lg:flex flex-row items-center justify-center z-[0] hover:!bg-cornflowerblue-100">

          <div style="
                
                    -webkit-mask: url(<?= get_template_directory_uri() ?>/assets/images/vector6.svg) no-repeat center;
                    mask: url(<?= get_template_directory_uri() ?>/assets/images/vector6.svg) no-repeat center;
                  " class="faq-icon w-3 h-3 bg-gray-500 group-hover:!bg-white"></div>
        </button>

        <!-- Swiper pagination -->
        <div class="localize-your-vehicle-swiper-pagination mt-3"></div>
      </div>
    </div>
  </div>
</section>




<!-- * Notre Solution * -->
<section class="self-stretch py-16 xl:py-0 min-h-[617px] px-5 2xl:px-0 flex flex-row items-start justify-center text-left text-xl-2 text-cornflowerblue-100 font-poppins">
  <div class="grid place-items-center max-w-screen-xl grid-cols-1 md:grid-cols-2 xl:grid-cols-3 w-full items-center justify-between gap-[31px]">
    <div class="flex flex-col items-start justify-start gap-[26px]">
      <div class="flex flex-col items-start justify-start gap-[23px]">
        <div class="flex flex-col items-start justify-start gap-[12px]">
          <h6 class="m-0 relative text-inherit leading-[26.25px] font-semibold font-inherit mix-blend-normal">
            Notre Solution
          </h6>
          <h2 class="m-0 max-w-[414px] relative text-13xl lg:text-21xl-4 leading-[46.44px] font-bold font-work-sans [display:-webkit-inline-box] overflow-hidden text-ellipsis mix-blend-normal text-midnightblue">
          Avec notre logiciel facile à utiliser, vous verrez rapidement les avantages
          </h2>
        </div>
        <img class="w-[60.6px] relative h-[3px] mix-blend-normal" src="<?= get_template_directory_uri() ?>/assets/images/divider4.svg" alt="" />
      </div>

      <div class="flex flex-col items-start justify-start gap-[20px] text-sm text-darkslategray-100">
        <p class="m-0 max-w-[413.9px] relative leading-[25px]">
          <span class="block">
            <span>Notre logiciel de suivi en ligne est simple d’utilisation et offre une gamme de 
              fonctionnalités adaptées à vos besoins. Il est disponible sur une application mobile, ce 
              qui le rend idéal pour les propriétaires et les gestionnaires de flotte qui sont souvent 
              absents du bureau.</span>
          </span>
          <br />
          <span class="block">
            <span>D’autres intégrations de données uniques sont disponibles pour les clients qui ont des 
            besoins plus avancés.
            </span>
          </span>
        </p>
        <button class="cursor-pointer [border:none] p-0 bg-cornflowerblue-100 w-[194.9px] rounded-[1.67px] h-[58.6px] flex flex-col items-center justify-center">
          <a href="/solution-web" class="relative text-base-2 leading-[22.21px] font-semibold font-poppins !text-white text-left mix-blend-normal hover:text-white">
            En savoir plus
          </a>
        </button>
      </div>
    </div>


    <div class=" max-w-[416px] h-[504px] w-full flex flex-row items-center justify-center bg-[url('/wp-content/themes/tracky/assets/images/frame-421@3x.webp')] bg-cover bg-no-repeat bg-[top]">
      <div class="w-[101px] rounded-81xl bg-cornflowerblue-100 h-[101px] flex flex-row items-center justify-center">
        <img class="w-[22px] relative h-[23.5px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/polygon.svg" />
      </div>
    </div>

    <div class="flex flex-col items-start justify-start gap-[10px] text-center text-white">
      <div class="flex flex-row items-start justify-start gap-[23px]">
        <div class="flex flex-row items-start justify-start pt-2.5 px-0 pb-0">
          <div class="w-[54px] rounded-81xl bg-cornflowerblue-100 h-[54px] flex flex-row items-center justify-center">
            <div class="relative leading-[26.25px] font-semibold mix-blend-normal">
              01
            </div>
          </div>
        </div>
        <div class="flex flex-col items-start justify-start gap-[6px] text-left text-lg-2 text-midnightblue font-work-sans">
          <h6 class="m-0 relative text-inherit leading-[26.25px] font-bold font-inherit mix-blend-normal">
            CARTOGRAPHIE
          </h6>
          <p class="m-0 max-w-[333.2px] relative text-sm leading-[24px] font-poppins text-darkslategray-100 [display:-webkit-inline-box] overflow-hidden text-ellipsis [-webkit-line-clamp:3] [-webkit-box-orient:vertical] mix-blend-normal">
          Visualisation de votre flotte sur carte avec une cartographie respectant l’intégrité 
          territoriale de chaque pays.
          </p>
        </div>
      </div>
      <div class="flex flex-row items-start justify-start gap-[23px]">
        <div class="flex flex-row items-start justify-start pt-2.5 px-0 pb-0">
          <div class="w-[54px] rounded-81xl bg-cornflowerblue-100 h-[54px] flex flex-row items-center justify-center">
            <div class="relative leading-[26.25px] font-semibold mix-blend-normal">
              02
            </div>
          </div>
        </div>
        <div class="flex flex-col items-start justify-start gap-[6px] text-left text-lg-2 text-midnightblue font-work-sans">
          <h6 class="m-0 relative text-inherit leading-[26.25px] font-bold font-inherit mix-blend-normal">
            GESTION DE CARBURANT
          </h6>
          <p class="m-0 max-w-[339.8px] relative text-sm leading-[24px] font-poppins text-darkslategray-100">
          Nous avons développé grâce à notre expérience des outils pour avoir une 
          consommation correcte.
          </p>
        </div>
      </div>
      <div class="flex flex-row items-start justify-start gap-[23px]">
        <div class="flex flex-row items-start justify-start pt-2.5 px-0 pb-0">
          <div class="w-[54px] rounded-81xl bg-cornflowerblue-100 h-[54px] flex flex-row items-center justify-center">
            <div class="relative leading-[26.25px] font-semibold mix-blend-normal">
              03
            </div>
          </div>
        </div>
        <div class="flex flex-col items-start justify-start gap-[5px] text-left text-lg-2 text-midnightblue font-work-sans">
          <h6 class="m-0 relative text-inherit leading-[26.25px] font-bold font-inherit mix-blend-normal">
            RAPPORTS AUTOMATIQUE
          </h6>
          <p class="m-0 max-w-[333.2px] relative text-sm leading-[24px] font-poppins text-darkslategray-100 [display:-webkit-inline-box] overflow-hidden text-ellipsis [-webkit-line-clamp:3] [-webkit-box-orient:vertical] mix-blend-normal">
          Configuration et planification des rapports envoyés par emails selon des paramètres 
          prédéfinis par l’utilisateur.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- * Notre Produits * -->
<section class="mt-12 self-stretch min-h-[812px] pb-16 xl:pb-0 px-5 max-w-screen-xl 2xl:px-0 mx-auto flex flex-col items-center justify-start gap-[48px] text-left text-xl-2 text-cornflowerblue-100 font-poppins">
  <div class="flex flex-col items-center justify-start">
    <h6 class="m-0 relative text-inherit leading-[26.25px] font-semibold font-inherit mix-blend-normal">
      Notre Solution
    </h6>
    <h2 class="m-0 relative text-13xl sm:text-21xl-4 leading-[46.44px] font-bold font-work-sans text-midnightblue mix-blend-normal">
      NOS PRODUITS
    </h2>
  </div>
  <div class="flex flex-col items-center justify-start gap-[30px] text-mid">
    <img class="w-[60.6px] relative h-[3px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/divider5.svg" />
    <div class="flex flex-col items-center justify-start gap-[95px]">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 items-start justify-start !gap-[65px]">
        <?php
        // WP Query to get products with 'Show in Home page' checked
        $args = array(
          'post_type' => 'produit',
          'posts_per_page' => 4,
          'meta_query' => array(
            array(
              'key' => 'show_in_home_page',
              'value' => '1',
              'compare' => '=='
            )
          )
        );
        $products = new WP_Query($args);

        // Loop through the products
        if ($products->have_posts()) :
          while ($products->have_posts()) : $products->the_post();
            $product_image = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . "/assets/images/Frame-589-min.webp";
            $product_title = get_the_title();
        ?>
            <div class="flex flex-col items-center justify-start gap-[50px]">
              <img class="w-[237.9px] h-[237.9px] object-contain shadow-2xl  " alt="<?php echo esc_attr($product_title); ?>" src="<?php echo esc_url($product_image); ?>" />
              <div class="flex flex-col items-center justify-start gap-[1px]">
                <div class="relative leading-[26.25px] font-semibold mix-blend-normal">
                  PRODUIT
                </div>
                <b class="relative text-5xl leading-[28.27px] font-work-sans text-midnightblue text-center mix-blend-normal">
                  <?php echo esc_html($product_title); ?>
                </b>
              </div>
            </div>
        <?php
          endwhile;
          wp_reset_postdata();
        else :
          echo '<p>Aucun produit à afficher.</p>';
        endif;
        ?>
      </div>
      <button class="cursor-pointer [border:none] p-0 bg-cornflowerblue-100 w-[194.9px] rounded-[1.67px] h-[58.6px] flex flex-col items-center justify-center">
        <a href="/produit" class="relative text-base-2 leading-[22.21px] font-semibold font-poppins !text-white text-left mix-blend-normal hover:text-white">
          En savoir plus
        </a>
      </button>
    </div>
  </div>
</section>

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
                    <div
                      class="swiper-slide max-w-[646.2px] relative leading-[25px]"
                    >
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

                    <div
                      class="swiper-slide max-w-[646.2px] relative leading-[25px]"
                    >
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

<!-- * Nos blog * -->
<!-- <section
        class="self-stretch min-h-[767px] w-full pb-20 xl:pb-0 max-w-screen-xl mx-auto px-5 xl:px-0 flex flex-col items-center justify-start gap-[40px] text-center text-xl-2 text-cornflowerblue-100 font-poppins"
      >
        <div class="flex flex-col items-center justify-start gap-[1px]">
          <h6
            class="m-0 relative text-inherit leading-[26.25px] font-semibold font-inherit mix-blend-normal"
          >
            Nos Blogs
          </h6>
          <h2
            class="m-0 relative text-13xl sm:leading-normal sm:text-21xl-4 leading-[46.44px] font-bold font-work-sans text-midnightblue mix-blend-normal"
          >
            NOS ACTUALITÉES
          </h2>
        </div>
        <img
          class="w-[60.6px] relative h-[3px] mix-blend-normal"
          alt=""
          src="<?= get_template_directory_uri() ?>/assets/images/divider1.svg"
        />

        <div
          class="grid grid-cols-1 place-items-center md:grid-cols-2 xl:grid-cols-3 w-full items-start justify-start gap-[30px] text-left text-mini-1 text-white"
        >
          <div class="flex w-full flex-col items-start justify-center">
            <div
              class="max-w-[414px] w-full h-[252.4px] flex flex-col items-end justify-start pt-5 pb-0 pr-5 pl-0 box-border bg-[url('/wp-content/themes/tracky/assets/images/frame-465@3x.webp')] bg-cover bg-no-repeat bg-[top]"
            >
              <div
                class="w-[132.3px] rounded-[1.67px] bg-cornflowerblue-100 h-[40.4px] flex flex-col items-center justify-center"
              >
                <h2
                  class="relative leading-[20.19px] font-medium mix-blend-normal"
                >
                  TRANSPORT
                </h2>
              </div>
            </div>

            <div
              class="max-w-[394px] w-full rounded-tl-none rounded-tr-xl rounded-b-none bg-white h-[293px] flex flex-col items-start justify-end gap-[35px] mt-[-30px] text-darkslategray-200"
            >
              <div class="flex flex-row items-start justify-start gap-[18px]">
                <div class="flex flex-row items-center justify-start gap-[7px]">
                  <img
                    class="w-[13.1px] relative h-[14.1px] mix-blend-normal"
                    alt=""
                    src="<?= get_template_directory_uri() ?>/assets/images/vector7.svg"
                  />

                  <span
                    class="w-[138px] relative leading-[20.19px] font-medium inline-block h-[18px] shrink-0 mix-blend-normal"
                  >
                    September 15, 2022
                  </span>
                </div>
                <div class="flex flex-row items-center justify-start gap-[7px]">
                  <img
                    class="w-[14.1px] relative h-[12.4px] mix-blend-normal"
                    alt=""
                    src="<?= get_template_directory_uri() ?>/assets/images/vector8.svg"
                  />

                  <div
                    class="w-[103px] relative leading-[20.19px] font-medium inline-block h-[18px] shrink-0 mix-blend-normal"
                  >
                    No Comments
                  </div>
                </div>
              </div>

              <div
                class="flex flex-col items-start justify-start gap-[26px] text-3xl-2 text-midnightblue font-work-sans"
              >
                <b class="relative leading-[28.27px] mix-blend-normal">
                  DOLOR IPSUM POREM <br />
                  AMET CONCESSE BIDOLOR
                </b>
                <div
                  class="flex flex-col items-start justify-start gap-[15px] text-sm text-darkslategray-100 font-poppins"
                >
                  <img
                    class="w-[60.6px] relative h-[3px] mix-blend-normal"
                    alt=""
                    src="<?= get_template_directory_uri() ?>/assets/images/divider4.svg"
                  />

                  <p
                    class="max-w-[360.7px] font-normal relative leading-[25px]"
                  >
                    <b>TRACKY </b>
                    <span
                      >est une solution SAAS (software as a service). Aucun
                      logiciel à installer. Une simple connexion internet
                      suffit, Pas de mises à jour à faire par
                      l’utilisateur.</span
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="flex w-full flex-col items-start justify-center">
            <div
              class="max-w-[414px] w-full h-[252.4px] flex flex-col items-end justify-start pt-5 pb-0 pr-5 pl-0 box-border bg-[url('/wp-content/themes/tracky/assets/images/frame-465@3x.webp')] bg-cover bg-no-repeat bg-[top]"
            >
              <div
                class="w-[132.3px] rounded-[1.67px] bg-cornflowerblue-100 h-[40.4px] flex flex-col items-center justify-center"
              >
                <h2
                  class="relative leading-[20.19px] font-medium mix-blend-normal"
                >
                  TRANSPORT
                </h2>
              </div>
            </div>

            <div
              class="max-w-[394px] w-full rounded-tl-none rounded-tr-xl rounded-b-none bg-white h-[293px] flex flex-col items-start justify-end gap-[35px] mt-[-30px] text-darkslategray-200"
            >
              <div class="flex flex-row items-start justify-start gap-[18px]">
                <div class="flex flex-row items-center justify-start gap-[7px]">
                  <img
                    class="w-[13.1px] relative h-[14.1px] mix-blend-normal"
                    alt=""
                    src="<?= get_template_directory_uri() ?>/assets/images/vector7.svg"
                  />

                  <span
                    class="w-[138px] relative leading-[20.19px] font-medium inline-block h-[18px] shrink-0 mix-blend-normal"
                  >
                    September 15, 2022
                  </span>
                </div>
                <div class="flex flex-row items-center justify-start gap-[7px]">
                  <img
                    class="w-[14.1px] relative h-[12.4px] mix-blend-normal"
                    alt=""
                    src="<?= get_template_directory_uri() ?>/assets/images/vector8.svg"
                  />

                  <div
                    class="w-[103px] relative leading-[20.19px] font-medium inline-block h-[18px] shrink-0 mix-blend-normal"
                  >
                    No Comments
                  </div>
                </div>
              </div>

              <div
                class="flex flex-col items-start justify-start gap-[26px] text-3xl-2 text-midnightblue font-work-sans"
              >
                <b class="relative leading-[28.27px] mix-blend-normal">
                  DOLOR IPSUM POREM <br />
                  AMET CONCESSE BIDOLOR
                </b>
                <div
                  class="flex flex-col items-start justify-start gap-[15px] text-sm text-darkslategray-100 font-poppins"
                >
                  <img
                    class="w-[60.6px] relative h-[3px] mix-blend-normal"
                    alt=""
                    src="<?= get_template_directory_uri() ?>/assets/images/divider4.svg"
                  />

                  <p
                    class="max-w-[360.7px] font-normal relative leading-[25px]"
                  >
                    <b>TRACKY </b>
                    <span
                      >est une solution SAAS (software as a service). Aucun
                      logiciel à installer. Une simple connexion internet
                      suffit, Pas de mises à jour à faire par
                      l’utilisateur.</span
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="flex w-full flex-col items-start justify-center">
            <div
              class="max-w-[414px] w-full h-[252.4px] flex flex-col items-end justify-start pt-5 pb-0 pr-5 pl-0 box-border bg-[url('/wp-content/themes/tracky/assets/images/frame-465@3x.webp')] bg-cover bg-no-repeat bg-[top]"
            >
              <div
                class="w-[132.3px] rounded-[1.67px] bg-cornflowerblue-100 h-[40.4px] flex flex-col items-center justify-center"
              >
                <h2
                  class="relative leading-[20.19px] font-medium mix-blend-normal"
                >
                  TRANSPORT
                </h2>
              </div>
            </div>

            <div
              class="max-w-[394px] w-full rounded-tl-none rounded-tr-xl rounded-b-none bg-white h-[293px] flex flex-col items-start justify-end gap-[35px] mt-[-30px] text-darkslategray-200"
            >
              <div class="flex flex-row items-start justify-start gap-[18px]">
                <div class="flex flex-row items-center justify-start gap-[7px]">
                  <img
                    class="w-[13.1px] relative h-[14.1px] mix-blend-normal"
                    alt=""
                    src="<?= get_template_directory_uri() ?>/assets/images/vector7.svg"
                  />

                  <span
                    class="w-[138px] relative leading-[20.19px] font-medium inline-block h-[18px] shrink-0 mix-blend-normal"
                  >
                    September 15, 2022
                  </span>
                </div>
                <div class="flex flex-row items-center justify-start gap-[7px]">
                  <img
                    class="w-[14.1px] relative h-[12.4px] mix-blend-normal"
                    alt=""
                    src="<?= get_template_directory_uri() ?>/assets/images/vector8.svg"
                  />

                  <div
                    class="w-[103px] relative leading-[20.19px] font-medium inline-block h-[18px] shrink-0 mix-blend-normal"
                  >
                    No Comments
                  </div>
                </div>
              </div>

              <div
                class="flex flex-col items-start justify-start gap-[26px] text-3xl-2 text-midnightblue font-work-sans"
              >
                <b class="relative leading-[28.27px] mix-blend-normal">
                  DOLOR IPSUM POREM <br />
                  AMET CONCESSE BIDOLOR
                </b>
                <div
                  class="flex flex-col items-start justify-start gap-[15px] text-sm text-darkslategray-100 font-poppins"
                >
                  <img
                    class="w-[60.6px] relative h-[3px] mix-blend-normal"
                    alt=""
                    src="<?= get_template_directory_uri() ?>/assets/images/divider4.svg"
                  />

                  <p
                    class="max-w-[360.7px] font-normal relative leading-[25px]"
                  >
                    <b>TRACKY </b>
                    <span
                      >est une solution SAAS (software as a service). Aucun
                      logiciel à installer. Une simple connexion internet
                      suffit, Pas de mises à jour à faire par
                      l’utilisateur.</span
                    >
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->





<?php
get_footer();
?>