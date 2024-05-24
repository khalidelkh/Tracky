<?php

$args = array(
  'post_type' => 'avis',
  'posts_per_page' => 2
);

$avis =  get_posts($args);

$recent_post = $avis[0];
?>


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
            <?php
            if ($avis) :
              foreach ($avis as $avi) :
                $job = get_field('job', $avi->ID);
                // var_dump($avis);
            ?>  
              <p>
              <?= wp_strip_all_tags($avi->post_content) ?>
              </p>
              <div
                class="flex mt-5 flex-col items-start justify-start gap-[3px]"
              >
                <div
                  class="relative leading-[22.21px] font-medium mix-blend-normal"
                >
                <?= wp_strip_all_tags($avi->post_title) ?>
                
                </div>
                <div
                  class="relative text-mini-1 leading-[20.19px] font-medium text-cornflowerblue-100 mix-blend-normal"
                >
                <?= wp_strip_all_tags($avi->job) ?> 
                </div>
              </div>
              <?php endforeach; ?>
              <?php endif; ?>
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

<section class="self-stretch min-h-[856px] pt-20 xl:pt-0 px-5 xl:px-0 flex flex-row items-end justify-center pb-16 xl:pb-[126px] box-border text-left text-xl-2 text-cornflowerblue-100 font-poppins">
  <div class="flex w-full max-w-screen-xl mx-auto flex-col-reverse lg:flex-row items-center lg:items-start justify-start">
    <div class="flex flex-col items-start justify-start pt-2.5 px-0 pb-0 z-[1]">
      <div class="max-w-[747.1px] rounded-[3.33px] bg-white flex flex-col items-start justify-center py-12 sm:px-[50px] box-border gap-[18px]">
        <div class="flex flex-col items-start justify-start gap-[5px] z-[2]">
          <h6 class="m-0 relative text-inherit leading-[26.25px] font-semibold font-inherit mix-blend-normal">
            Avis Clients
          </h6>
          <h2 class="m-0 relative text-13xl leading-normal sm:text-21xl-4 sm:leading-[46.44px] font-bold font-work-sans mix-blend-normal text-midnightblue">
            Ce que les gens disent de notre <br />
            Organisation
          </h2>
        </div>
        <img class="w-[60.6px] relative h-[3px] mix-blend-normal z-[1]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/divider6.svg" />


        <div class="swiper max-w-80 sm:max-w-none w-full items-start justify-start gap-[5px] z-[0] text-sm text-darkslategray-100">
          <div class="avis-swiper w-full overflow-hidden">
            <div class="swiper-wrapper w-full">
              <div class="swiper-slide relative leading-[25px]">
                <p>
                  <?= wp_strip_all_tags($recent_post->post_content) ?>
                </p>
                <div class="flex mt-5 flex-col items-start justify-start gap-[3px]">
                  <div class="relative leading-[22.21px] font-medium mix-blend-normal">
                    <?= wp_strip_all_tags($recent_post->post_title) ?>
                  </div>
                  <div class="relative text-mini-1 leading-[20.19px] font-medium text-cornflowerblue-100 mix-blend-normal">
                    <?= wp_strip_all_tags($recent_post->job) ?>
                  </div>
                </div>
              </div>

              <div class="swiper-slide relative leading-[25px]">
                <p>
                  <?= wp_strip_all_tags($avi->post_content) ?>
                </p>
                <div class="flex mt-5 flex-col items-start justify-start gap-[3px]">
                  <div class="relative leading-[22.21px] font-medium mix-blend-normal">
                    <?= wp_strip_all_tags($avi->post_title) ?>
                  </div>
                  <div class="relative text-mini-1 leading-[20.19px] font-medium text-cornflowerblue-100 mix-blend-normal">
                    <?= wp_strip_all_tags($avi->job) ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="flex flex-row items-center justify-end w-full text-base-2 text-darkslategray-300">
            <div class="flex flex-row items-start justify-start gap-[31px]">
              <button class="group avis-swiper-button-prev w-[50.5px] rounded-81xl bg-white box-border h-[50.5px] flex flex-row items-center justify-center border-[1px] border-solid border-gainsboro hover:!bg-cornflowerblue-100">
                <div style="
                    -webkit-mask: url(<?= get_template_directory_uri() ?>/assets/images/vector5.svg) no-repeat center;
                    mask: url(<?= get_template_directory_uri() ?>/assets/images/vector5.svg) no-repeat center;
                  " class="faq-icon w-3 h-3 bg-gray-500 group-hover:!bg-white"></div>
              </button>

              <button class="group avis-swiper-button-next w-[50.5px] rounded-81xl bg-white h-[50.5px] flex flex-row items-center justify-center border-gainsboro hover:!bg-cornflowerblue-100">
                <div style="
                
                    -webkit-mask: url(<?= get_template_directory_uri() ?>/assets/images/vector6.svg) no-repeat center;
                    mask: url(<?= get_template_directory_uri() ?>/assets/images/vector6.svg) no-repeat center;
                  " class="faq-icon w-3 h-3 bg-gray-500 group-hover:!bg-white"></div>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <img class="max-w-[505px] max-h-[435px] xl:max-w-[605.8px] xl:max-h-[535.1px] w-full h-full object-cover z-[0] lg:ml-[-50px]" alt="" src="<?= get_template_directory_uri() ?>/assets/images/frame-460@2x.webp" />
  </div>
</section>