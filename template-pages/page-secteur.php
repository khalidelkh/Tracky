<?php
/* Template Name: Secteur*/
get_header();
?>

<h1 class="mt-24 text-35xl-5 font-bold leading-[60.69px] text-white">
  Nos Secteur
</h1>

<img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/divider1.svg" alt="" class=" aspect-[20] w-[60px] fill-cornflowerblue-100" />
<div class="mt-24 flex gap-2.5 text-lg leading-6 whitespace-nowrap max-md:mt-10">
  <a href="#" class="!text-cornflowerblue-100">Home</a>
  <img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/icons/double-chevron.svg" alt="" class="shrink-0 my-auto aspect-square w-2.5 fill-cornflowerblue-100" />
  <span class="text-white">Secteur</span>
</div>
</div>
</section>
<!-- * ----- TRANSPORT DE MARCHANDISE ----- * -->
<section class="self-stretch max-w-screen-xl w-full px-5 mx-auto min-h-[854px] flex flex-col py-20 lg:py-0 lg:flex-row items-center justify-center gap-[82px] text-left text-lg text-cornflowerblue-100 font-poppins">
  <div class="max-w-[616px] h-[356px] sm:h-[456px] lg:h-[565px] min-w-72 w-full flex flex-col items-start justify-start relative bg-[url('/wp-content/themes/tracky/assets/images/pages/secteur/truck.webp')] bg-cover bg-no-repeat bg-[top] max-sm:!w-[250px]">
    <img class="w-[117.2px] !m-[0] absolute top-[-46px] -right-10 h-[123.7px] object-cover z-[0]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/logo/logo-without-text.svg" />
  </div>
  <div class="flex flex-col items-start justify-start gap-[29px]">
    <div class="flex flex-col items-start justify-start">
      <h6 class="m-0 relative text-inherit leading-[25.99px] font-bold font-inherit mix-blend-normal">
      TRANSPORTS & LOGISTIQUE
      </h6>
      <h2 class="m-0 relative text-13xl leading-[48.51px] font-bold font-work-sans text-midnightblue">
      Créez une flotte sûre et conforme avec des informations basées sur les données.
      </h2>
    </div>
    <img class="w-[60px] relative h-[3px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/divider8.svg" />

    <div class="flex flex-col items-start justify-start gap-[26px] text-mini text-darkslategray-100">
      <p class="m-0 max-w-[600px] relative leading-[27px] mix-blend-normal">
        <span class="items-center justify-center">AVANTAGES</span><br>
        TRACKY SOLUTIONS évalue les objectifs propres au secteur d’activité de chacun de ses clients pour proposer des solutions permettant de réduire les accidents,
        améliorer la productivité, réduire la consommation de carburant, respecter les réglementations et bien plus encore.
      </p>
      <button class="cursor-pointer [border:none] p-0 bg-cornflowerblue-100 w-[194.9px] rounded-[1.67px] h-[58.6px] flex flex-col items-center justify-center">
        <span class="relative text-base-2 leading-[22.21px] font-semibold font-poppins text-white text-left mix-blend-normal">
          En savoir plus
        </span>
      </button>
    </div>
  </div>
</section>

<!-- * ---- CE QUI NOUS DIFFÉRENCIE ----- * -->
<section class=" self-stretch min-h-[851px] flex flex-col items-center justify-start pt-[110px] px-0 pb-0 box-border relative gap-[118px] text-center text-xl text-cornflowerblue-100 font-poppins">
  <div class="w-full m-0 absolute top-0 bg-[url('/wp-content/themes/tracky/assets/images/bgs/bg-secteur-difference.webp')] bg-no-repeat bg-cover h-full xl:h-auto xl:bottom-20 left-0 max-h-full object-cover z-[0]" alt=""></div>

  <div class="w-full max-w-screen-xl mx-auto flex flex-col items-center justify-start gap-[34px] z-[1] ">
    <div class="flex flex-col items-center justify-start gap-[12px]">
      <h6 class="m-0 relative text-inherit leading-[25.99px] font-semibold font-inherit mix-blend-normal">
        SECTEUR
      </h6>
      <h6 class="m-0 relative text-21xl-4 leading-[45.97px] font-semibold font-inherit text-white mix-blend-normal">
        CE QUI NOUS DIFFÉRENCIE
      </h6>
    </div>
    <img class="w-[60px] relative h-[3px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/divider2.svg" />

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-[34px] text-base text-white">
      <div class=" group max-w-[299.8px] rounded-[3.33px] h-[400px] mt-10 flex flex-col items-center justify-center gap-[22px] bg-transparent hover:bg-white !duration-200 !transition-all">
        <div class="w-[89.9px] rounded-81xl bg-cornflowerblue-100 h-[90px] flex flex-row items-center justify-center">
          <img class="w-[45px] h-[51px] object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/driver-icon.svg" />
        </div>
        <div class="flex flex-col items-center justify-start gap-[8px]">
          <h5 class="relative leading-[27.98px] font-semibold mix-blend-normal group-hover:text-cornflowerblue-100">
            RÉDUIRE LE COÛT
          </h5>
          <p class="relative leading-[28px] mix-blend-normal group-hover:text-darkslategray-100">
          Il est important de recueillir des données sur toutes les dépenses de votre parc de véhicules, de l’entretien au carburant, et de mettre en œuvre des mesures
           pour réduire ces coûts grâce à des méthodes d’optimisation éprouvées.
          </p>
        </div>
      </div>

      <div class="group w-[299.8px] rounded-[3.33px]  h-[400px] flex flex-col items-center justify-center gap-[22px] text-cornflowerblue-100 hover:bg-white !duration-200 !transition-all">
        <div class="w-[89.9px] rounded-81xl bg-cornflowerblue-100 h-[90px] flex flex-row items-center justify-center">
          <img class="w-[45px] h-[51px] object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/driver-icon.svg" />
        </div>
        <div class="flex flex-col items-center justify-start gap-[8px]">
          <div class="relative leading-[27.98px] font-semibold mix-blend-normal text-white group-hover:text-cornflowerblue-100">
          UGMENTER LA SÉCURITÉ
          </div>
          <div class="relative leading-[28px] mix-blend-normal text-white group-hover:text-darkslategray-100">
            <p class="m-0">Pour l’exploitation d’un parc de véhicules, il est essentiel d’améliorer les niveaux de</p>
            <p class="m-0">sécurité. Surveillez, gérez et améliorez la sécurité de votre parc en réduisant les risques.</p>
          </div>
        </div>
      </div>

      <div class="group w-[299.8px] rounded-[3.33px] h-[400px] mt-10 flex flex-col items-center justify-center gap-[22px] hover:bg-white !duration-200 !transition-all">
        <div class="w-[89.9px] rounded-81xl bg-cornflowerblue-100 h-[90px] flex flex-row items-center justify-center">
          <img class="w-[45px] h-[51px] object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/driver-icon.svg" />
        </div>
        <div class="flex flex-col items-center justify-start gap-[8px]">
          <div class="relative leading-[27.98px] font-semibold mix-blend-normal group-hover:text-cornflowerblue-100">
          AMÉLIORER LA GESTION DE LA MAIN-D’ŒUVRE
          </div>
          <div class="relative leading-[28px] mix-blend-normal group-hover:text-darkslategray-100">
            <p class="m-0">Dans le monde des affaires d’aujourd’hui, la concurrence est rude et le rythme effréné. Notre offre peut vous aider à gagner en efficacité et en productivité</p>
            <p class="m-0">, à améliorer la fidélité de vos clients, à vous distinguer et à réduire vos coûts !
            </p>
          </div>
        </div>
      </div>

      <div class="group w-[299.8px] rounded-[3.33px] h-[400px] mt-3 flex flex-col items-center justify-center gap-[22px] hover:bg-white !duration-200 !transition-all">
        <div class="w-[89.9px] rounded-81xl bg-cornflowerblue-100 h-[90px] flex flex-row items-center justify-center">
          <img class="w-[45px] h-[51px] object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/driver-icon.svg" />
        </div>
        <div class="flex flex-col items-center justify-start gap-[8px]">
          <div class="relative leading-[27.98px] font-semibold mix-blend-normal group-hover:text-cornflowerblue-100">
          MAINTENIR LA CONFORMITÉ
          </div>
          <div class="relative leading-[28px] mix-blend-normal group-hover:text-darkslategray-100">
            <p class="m-0">Le respect de la vaste législation relative aux opérations de transport routier exige</p>
            <p class="m-0">une compréhension approfondie des règles de conformité et de leur mise en œuvre efficace dans votre parc.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- * overflowed section * -->
  <div class="px-5 z-50 xl:px-0 flex w-full max-w-screen-xl flex-col md:flex-row items-start justify-start text-center text-35xl-5 text-midnightblue">
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
        <div class="relative leading-[22.21px] font-semibold mix-blend-normal text-white">
          EN SAVOIR PLUS
        </div>
        <img class="w-[14.5px] relative h-[12.1px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/vector4.svg" />
      </button>
    </div>
  </div>
</section>

<!-- * ---- VOTRE APPLICATION ---- * -->
<section class="m-12 self-stretch px-5 pb-20 lg:pb-16 2xl:px-0 max-w-screen-xl mx-auto flex flex-col-reverse lg:flex-row items-center justify-center gap-[70px] text-left text-lg text-cornflowerblue-100 font-poppins">
  <div class="flex flex-col items-start justify-start gap-12 md:gap-[76px]">
    <div class="flex flex-col items-start justify-start gap-[32px]">
      <div class="flex flex-col items-start justify-start gap-[4px]">
        <h6 class="m-0 relative text-inherit leading-[26.25px] font-bold font-inherit mix-blend-normal">
        PHARMACEUTIQUE
        </h6>
        <h2 class="m-0 relative text-21xl-4 leading-[49px] font-bold font-work-sans overflow-hidden mix-blend-normal text-midnightblue">
        Suivez et protégez votre flotte<br> flexible pour améliorer la sécurité et l’efficacité

        </h2>
      </div>
      <img class="w-[60px] relative h-[3px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/divider8.svg" />

      <div class="flex flex-col items-end justify-start gap-[25px] text-mini text-darkslategray-100">
        <p class="m-0 max-w-[626px] relative leading-[27px]">
        POURQUOI CHOISIR TRACKY SOLUTIONS POUR VOTRE FLOTTE PHARMACEUTIQUE

        </p>
        <div class="max-w-[629.7px] px-6 py-5 rounded-[3px] bg-whitesmoke-200 flex flex-row items-center justify-center gap-[20px] text-base text-midnightblue">
          <img class="w-5 relative h-3.5 mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/double-vergule-icon.svg" />

          <p class="m-0 max-w-[550px] relative leading-[21.99px]">
          <b>.</b> Leader de la télématique de flotte connectée <br>
          <b>.</b> Une couverture géographique inégalée dans plus de 120 pays<br>
          <b>.</b> Spécialisé dans les segments verticaux clés<br>
          <b>.</b> Expérience utilisateur et interface utilisateur de premier plan via une plateforme SaaS primée<br>
          <b>.</b> Taux de fidélisation des clients de 98 %<br>
          <b>.</b> Plus de 5 ans d'expérience dans l'industrie<br>
          <b>.</b> Plus de 500 clients de flottes mondiales<br>
          <b>.</b > Plus de 15 partenaires de distribution<br>
          <b>.</b> Nous faisons avancer le monde en connectant et en protégeant les opérations de flotte de nos clients<br>
          <b>.</b> Contribuer à éviter 23 500 collisions par an<br>
          <b>.</b> Des solutions qui atteignent les objectifs de sécurité, de durabilité, de conformité et d’efficacité

          </p>
        </div>
      </div>
    </div>
    <div class="flex w-full flex-col items-center sm:flex-row sm:items-start justify-start gap-[20px]">
      <button class="cursor-pointer p-0 bg-[transparent] w-[212px] rounded-[1.67px] box-border h-[58.6px] flex flex-row items-center justify-center gap-[7px] border-[1px] border-solid border-gainsboro">
        <img class="w-[13.1px] relative h-[16.2px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/apple-icon.svg" />

        <span class="relative text-base-2 leading-[22.21px] font-semibold font-poppins text-darkslategray-300 text-center mix-blend-normal">
          App store
        </span>
      </button>

      <button class="cursor-pointer p-0 bg-[transparent] w-[212px] rounded-[1.67px] box-border h-[58.6px] flex flex-row items-center justify-center gap-[7px] border-[1px] border-solid border-gainsboro">
        <img class="w-[16.2px] relative h-[16.2px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/google-icon.svg" />

        <span class="relative text-base-2 leading-[22.21px] font-semibold font-poppins text-darkslategray-300 text-center mix-blend-normal">
          Google play
        </span>
      </button>
    </div>
  </div>
  <div class="flex flex-col items-center justify-start text-center text-sm">
    <div class="max-w-[599.7px] max-h-[599.7px]">
      <img class="w-full h-full object-cover" alt="" src="<?= get_template_directory_uri() ?>/assets/images/pages/secteur/votre-app.webp" />
    </div>

    <div class="w-full max-w-xs sm:max-w-[444.2px] p-5 shadow-[0px_4px_16px_rgba(10,_10,_58,_0.2)] rounded-[17px] bg-white flex flex-col items-center justify-center mt-[-50px]">
      <div class="w-full flex flex-col items-start justify-start gap-[6px]">
        <div class="relative leading-[20.19px] font-medium mix-blend-normal">
          SUIVEZ VOTRE VÉHICULE
        </div>
        <div class="max-w-[403.9px] w-full rounded-[1.33px] bg-whitesmoke-200 h-[8.1px] flex flex-row items-center justify-start">
          <img class="w-[101px] relative rounded-[1.33px] h-[8.1px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/line-active.svg" />

          <img class="w-[15px] relative h-[15px] mix-blend-normal ml-[-7.5px]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/ellipse-839.svg" />
        </div>
        <div class="flex w-full flex-row items-start justify-between text-left text-mini-1 text-gray-100">
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
  </div>
</section>

<!-- * ---- TRANSPORT DE MARCHANDISE ---- * -->
<section class="self-stretch px-5 flex flex-col items-center justify-center gap-[53px] text-center text-mid-8 text-cornflowerblue-100 font-poppins">
  <div class="flex flex-col items-center justify-start gap-[25px]">
    <div class="flex flex-col items-center justify-start">
      <h6 class="m-0 relative text-inherit leading-[25.99px] font-bold  font-inherit mix-blend-normal">
      CONSTRUCTION
      </h6>
      <h2 class="m-0 relative  leading-[48.51px] font-bold font-work-sans text-midnightblue text-left mix-blend-normal">
      Atteignez l’excellence opérationnelle sur vos chantiers en gérant efficacement vos actifs.
      </h2>
      <h2 class="m-0 relative text-inherit  leading-[25.99px] font-semibold font-inherit mix-blend-normal">
     OBTENEZ DES SOLUTIONS CIBLÉES POUR UNE SÉCURITÉ ET<br>UNE EFFICACITÉ MAXIMALES.

      </h2>
    </div>
    <img class="w-[60px] relative h-[3px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/divider12.svg" />
  </div>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-[80px] text-21xl text-midnightblue">
    <div class="flex flex-col items-center justify-start gap-[20px]">
      <div class="w-[189.9px] h-[189.9px] flex flex-col items-center justify-center relative gap-[10px]">
        <b class="relative leading-[45.97px] text-21xl-4 z-[0]">75%</b>
        <img class="w-[189.9px] absolute !m-[0] top-[0px] left-[0px] h-[189.9px] mix-blend-normal z-[1]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/circle-progress-75.svg" />
      </div>
      <div class="flex flex-col items-center justify-start gap-[11px] text-xl">
        <h5 class="m-0 relative text-inherit leading-[25.99px] font-semibold font-inherit mix-blend-normal">
        MAXIMISER LA SÉCURITÉ DU CONDUCTEUR
        </h5>
        <p class="m-0 max-w-64 relative text-base leading-[26px] mix-blend-normal text-darkslategray-100">
        Les opérations de construction prospèrent dans des environnements sûrs. Les conducteurs et opérateurs de votre site jouent un rôle crucial dans le bon fonctionnement de vos opérations. Par conséquent, la communication avec les travailleurs à distance est essentielle et la surveillance des heures de service contribue à assurer la sécurité des conducteurs. Notre technologie télématique est bien adaptée au secteur de la construction car elle est conçue pour surveiller les événements de conduite à haut risque comme la marche au ralenti excessive, les freinages brusques, la distraction, la fatigue et la vitesse - qui peuvent tous nuire au maintien des objectifs critiques de sécurité du site. Nos solutions de surveillance des conducteurs constituent une réponse
         sophistiquée et simple pour obtenir les données précieses qui vous aident à prendre des décisions préventives concernant les opérations de votre site en considérant la sécurité des conducteurs comme un aspect clé.
        </p>
      </div>
    </div>

    <div class="flex flex-col items-center justify-start gap-[20px]">
      <div class="w-[189.9px] h-[189.9px] flex flex-col items-center justify-center relative gap-[10px]">
        <b class="relative leading-[45.97px] text-21xl-4 z-[0]">100%</b>
        <img class="w-[189.9px] absolute !m-[0] top-[0px] left-[0px] h-[189.9px] mix-blend-normal z-[1]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/circle-progress-76.svg" />
      </div>
      <div class="flex flex-col items-center justify-start gap-[11px] text-xl">
        <h5 class="m-0 relative text-inherit leading-[25.99px] font-semibold font-inherit mix-blend-normal">
        VISIBILITÉ COMPLÈTE DES ACTIFS ET DES VÉHICULES
        </h5>
        <p class="m-0 max-w-64 relative text-base leading-[26px] mix-blend-normal text-darkslategray-100">
        L'utilisation efficace de notre technologie de gestion de flotte et d'actifs peut vous connecter directement à un moteur pour surveiller les diagnostics cruciaux et contribuer à garantir que les services et les réparations sont effectués dans les délais, évitant ainsi les temps d'arrêt coûteux et gênants. Dans le secteur de la construction, il existe toujours une demande pour une réalisation plus rapide des projets avec une plus grande efficacité et des opérations plus sûres. Les chefs de projet et de site disposent d'un partenaire indispensable qui est TRACKY SOLUTIONS:
        Notre technologie supprime le fardeau de la maintenance des équipements coûteux et évite les temps d'arrêt inutiles grâce à des alertes de maintenance préventive et des calendriers automatiques de réparations. Vous disposez également d’une vue complète de la façon dont les véhicules et les actifs sont utilisés à tout moment, vous donnant ainsi une vue d’ensemble complète pour prendre des décisions et planifier en temps réel.

        </p>
      </div>
    </div>

    <div class="flex flex-col items-center justify-start gap-[20px]">
      <div class="w-[189.9px] h-[189.9px] flex flex-col items-center justify-center relative gap-[10px]">
        <b class="relative leading-[45.97px] text-21xl-4 z-[0]">85%</b>
        <img class="w-[189.9px] absolute !m-[0] top-[0px] left-[0px] h-[189.9px] mix-blend-normal z-[1]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/circle-progress-77.svg" />
      </div>
      <div class="flex flex-col items-center justify-start gap-[11px] text-xl">
        <h5 class="m-0 relative text-inherit leading-[25.99px] font-semibold font-inherit mix-blend-normal">
        PRATIQUES DE CONSTRUCTION ÉCOLOGIQUEMENT DURABLES
        </h5>
        <p class="m-0 max-w-64 relative text-base leading-[26px] mix-blend-normal text-darkslategray-100">
        TRACKY SOLUTIONS s'engage à aider nos clients du secteur de la construction à atteindre leurs objectifs de développement durable grâce à notre technologie progressive qui surveille
        et alerte en temps réel la consommation excessive de carburant. Le secteur de la Construction est particulièrement sensible à l'impact que les opérations peuvent avoir sur l'environnement,
        et notre objectif est de démontrer l'efficacité de la télématique pour améliorer la santé des salariés sur site et aider les entreprises à réduire la taxe sur les émissions carbone.

        </p>
      </div>
    </div>

    <div class="flex flex-col items-center justify-start gap-[20px]">
      <div class="w-[189.9px] h-[189.9px] flex flex-col items-center justify-center relative gap-[10px]">
        <b class="relative leading-[45.97px] text-21xl-4 z-[0]">60%</b>
        <img class="w-[189.9px] absolute !m-[0] top-[0px] left-[0px] h-[189.9px] mix-blend-normal z-[1]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/icons/circle-progress-78.svg" />
      </div>
      <div class="flex flex-col items-center justify-start gap-[11px] text-xl">
        <h5 class="m-0 relative text-inherit leading-[25.99px] font-semibold font-inherit mix-blend-normal">
        LA GESTION<br> D'ACTIFS
        </h5>
        <p class="m-0 max-w-64 relative text-base leading-[26px] mix-blend-normal text-darkslategray-100">
        La gestion des actifs dans le secteur de la construction est un élément essentiel en termes de sécurité, de coûts et d'efficacité. Savoir à tout moment où se trouvent vos équipements lourds, vos outils, vos machines, vos remorques et l'infrastructure de votre bâtiment et comment ils sont utilisés est une priorité pour les opérations peu risquées où la surveillance des coûts et de l'utilisation
        peut éviter des problèmes courants tels que les délais de projet tardifs et les manquements cibles.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- * ----- TRANSPORT DE MARCHANDISE 2 -----* -->
<section class="self-stretch max-w-screen-xl mx-auto py-20 px-5 flex flex-col lg:flex-row items-center justify-center gap-y-10 gap-x-16 xl:gap-x-[90px] text-left text-mid-8 text-cornflowerblue-100 font-poppins">
  <div class="max-w-[600px] max-h-[580px]">
    <img class="h-full w-full" src="<?= get_template_directory_uri() ?>/assets/images/pages/secteur/track-gps-logo.webp" alt="" />
  </div>
  <div class="flex flex-col items-start justify-start gap-[29px]">
    <div class="flex flex-col items-start justify-start">
      <h6 class="m-0 relative text-inherit leading-[25.99px] font-bold font-inherit mix-blend-normal">
      LA GESTION DES DÉCHETS
      </h6>
      <h2 class="m-0 relative text-13xl leading-[48.51px] font-bold font-work-sans text-midnightblue">
      Simplifiez la surveillance du parc<br> de gestion des déchets grâce aux<br> solutions télématiques
      </h2>
    </div>
    <img class="w-[60px] relative h-[3px] mix-blend-normal" alt="" src="<?= get_template_directory_uri() ?>/assets/images/divider8.svg" />

    <div class="flex flex-col items-start justify-start gap-[26px] text-mini text-darkslategray-100">
      <p class="m-0 max-w-[600px] relative leading-[27px] mix-blend-normal">
        <span class="items-center justify-center lg:ml-48 text-lime-700 max-sm:ml-20">FICACITÉ ET DURABILITÉ</span><br><br>
        <span class="justify-center items-center text-black">EXPÉRIENCE DE VÉHICULE CONNECTÉ</span><br>
        <span class="justify-center items-center text-cornflowerblue-100">TÉLÉMATIQUE DES VÉHICULES</span><br>
        En suivant et en surveillant les camions d'élimination des déchets, vous pouvez optimiser
       les itinéraires et garantir que les déchets sont éliminés de la manière la plus efficace possible. Notre télémétrie véhicule est un outil
       indispensable dans votre arsenal d’efficacité. La télématique sophistiquée de
       TRACKY SOLUTIONS vous fournit des données sur votre flotte et vos actifs, vous aidant à comprendre l'emplacement, le suivi en direct, les performances des véhicules et des conducteurs,
       la planification de la maintenance, la consommation de carburant et bien plus encore.<br><br>
       <span class="text-fuchsia-900">CONTACTEZ TRACKY SOLUTIONS POUR ATTEINDRE VOS OBJECTIFS DE FLOTTE DE GESTION DES DÉCHETS</span><br>
       Si vous recherchez une solution télématique de gestion des déchets pour améliorer les économies, la sécurité et la conformité, contactez TRACKY SOLUTIONS. Nous comprenons vos besoins uniques et proposons des solutions sur mesure pour votre flotte de gestion des déchets.<br> 
      Nos forfaits répondent à divers aspects, en tenant compte de la taille de la flotte, du type de véhicule et des objectifs d'amélioration.<br> 
      Notre équipe assure une transition fluide vers cette technologie, quelle que soit votre familiarité avec celle-ci.<br><br>
      N'attendez pas : contactez TRACKY SOLUTIONS dès aujourd'hui pour lancer le processus !
      </p>
      <button class="cursor-pointer p-0 bg-cornflowerblue-100 w-[196.9px] rounded-[1.67px] box-border h-[60.6px] flex flex-col items-center justify-center border-[1px] border-solid border-gainsboro">
          <a href="/demende-un-devis" class="relative text-base-2 leading-[22.21px] font-semibold font-poppins !text-white text-left mix-blend-normal hover:text-white">
          Demander un devis
          </a>
        </button>
      <!-- <div class="flex w-full flex-col items-start justify-start gap-[11px] text-lg text-midnightblue">
        <div class="w-full flex flex-col items-start justify-start gap-[18px]">
          <div class="w-full flex flex-row items-start justify-between">
            <h6 class="relative leading-[25.99px] font-semibold mix-blend-normal">
              Tracking suivie
            </h6>
            <span class="relative leading-[25.99px] text-darkslategray-100 text-right mix-blend-normal">
              68km
            </span>
          </div>
          <div class="w-full max-w-[599.7px] rounded-[1.33px] bg-whitesmoke-100 h-2 flex flex-col items-start justify-start">
            <div class="w-3/5 h-2 bg-cornflowerblue-100"></div>
          </div>
        </div>

        <div class="w-full flex flex-col items-start justify-start gap-[18px]">
          <div class="w-full flex flex-row items-start justify-between">
            <h6 class="relative leading-[25.99px] font-semibold mix-blend-normal">
              Kilométrage
            </h6>
            <span class="relative leading-[25.99px] text-darkslategray-100 text-right mix-blend-normal">
              68km
            </span>
          </div>
          <div class="w-full max-w-[599.7px] rounded-[1.33px] bg-whitesmoke-100 h-2 flex flex-col items-start justify-start">
            <div class="w-3/5 h-2 bg-cornflowerblue-100"></div>
          </div>
        </div>
      </div> -->
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