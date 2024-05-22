<?php
/* Template Name: Demender un devis*/
get_header();
?>

<h1 class="mt-24 text-35xl-5 font-bold leading-[60.69px] text-white">
            Demande un devis
          </h1>

          <img
            loading="lazy"
            src="<?= get_template_directory_uri() ?>/assets/images/divider1.svg"
            alt=""
            class="m-0 aspect-[20] w-[60px] fill-cornflowerblue-100"
          />
          <div
            class="mt-24 flex gap-2.5 text-lg leading-6 whitespace-nowrap max-md:mt-10"
          >
            <a href="#" class="!text-cornflowerblue-100">Home</a>
            <img
              loading="lazy"
              src="<?= get_template_directory_uri() ?>/assets/images/icons/double-chevron.svg"
              alt=""
              class="shrink-0 my-auto aspect-square w-2.5 fill-cornflowerblue-100"
            />
            <span class="text-white">Contact</span>
          </div>
        </div>
      </section>

            <!-- * Contactez-nous * -->
            <section
        class="max-w-screen-xl mx-auto flex justify-center items-center self-stretch px-16 py-20 max-md:px-5"
      >
        <div class="flex flex-col items-center mt-32 max-w-full max-md:mt-10">
          <div>
            <h1 class="text-lg text-center font-medium leading-7 text-sky-500">
              Contact
            </h1>
            <h2 class="text-21xl font-bold leading-[48.4px] text-midnightblue">
              CONTACTEZ-NOUS
            </h2>
            <div
              class="shrink-0 mt-6 w-16 bg-sky-500 rounded-sm bg-blend-normal h-[3px]"
            ></div>
          </div>
          <p
            class="mt-6 font-normal text-font-semibold leading-6 text-center text-zinc-700 max-md:max-w-full"
          >
            Toutes les contraintes et besoins que nécessite le transport de
            marchandises <br />
            <span class="text-zinc-700"
              >ont été étudiés par nos équipes pour arriver à satisfaire ce
              créneau trés sensible.</span
            >
          </p>
          <img
            loading="lazy"
            src="<?= get_template_directory_uri() ?>/assets/images/pages/demande-devis/demende-devis-image.png"
            alt="Decorative image related to contact"
            class="self-stretch mt-24 w-full aspect-[2.63] max-md:mt-10 max-md:max-w-full"
          />
          <?= do_shortcode('[contact-form-7 id="d2481f4" title="Demander un devis"]') ?>
          <!-- <form
            class="md:-mt-24 grid gap-6 z-10 px-14 py-16 text-base leading-6 bg-white w-full rounded max-w-[883px] max-md:px-0"
          >
            <h2
              class="self-center text-center text-4xl font-bold leading-8 text-midnightblue"
            >
              DEMANDEZ VOTRE DEVIS
            </h2>
            <img
              loading="lazy"
              src="<?= get_template_directory_uri() ?>/assets/images/divider1.svg"
              alt=""
              class="self-center mx-auto aspect-[20] fill-sky-500 w-[60px]"
            />
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="flex flex-col">
                <label for="name" class="font-medium text-midnightblue"
                  >Nom</label
                >
                <input
                  type="text"
                  id="name"
                  placeholder="Votre nom"
                  aria-label="Votre nom"
                  class="justify-center items-start px-5 py-5 mt-4 bg-white border border-solid border-zinc-300 text-zinc-700 !p-4"
                />
              </div>
              <div class="flex flex-col">
                <label for="email" class="font-medium text-midnightblue"
                  >Email</label
                >
                <input
                  type="email"
                  id="email"
                  placeholder="Votre Email"
                  aria-label="Votre Email"
                  class="justify-center items-start px-5 py-5 mt-4 bg-white border border-solid border-zinc-300 text-zinc-700 !p-4"
                />
              </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="flex flex-col">
                <label for="phone" class="font-medium text-midnightblue"
                  >Téléphone</label
                >
                <input
                  type="tel"
                  id="phone"
                  placeholder="Votre téléphone"
                  aria-label="Votre téléphone"
                  class="justify-center items-start px-5 py-5 mt-4 bg-white border border-solid border-zinc-300 text-zinc-700 !p-4"
                />
              </div>
              <div class="flex flex-col">
                <label for="city" class="font-medium text-midnightblue"
                  >Ville</label
                >
                <input
                  type="text"
                  id="city"
                  placeholder="Votre Ville"
                  aria-label="Votre Ville"
                  class="justify-center items-start px-5 py-5 mt-4 bg-white border border-solid border-zinc-300 text-zinc-700 !p-4"
                />
              </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="flex flex-col">
                <label for="vehicle" class="font-medium text-midnightblue"
                  >Type de Véhicule</label
                >
                <select
                  id="vehicle"
                  aria-label="Type de Véhicule"
                  class="justify-center items-start px-5 py-5 mt-4 bg-white border border-solid border-zinc-300 text-zinc-700 !p-4"
                >
                  <option>Voiture</option>
                </select>
              </div>
              <div class="flex flex-col">
                <label for="city2" class="font-medium text-midnightblue"
                  >Ville</label
                >
                <input
                  type="text"
                  id="city2"
                  placeholder="Votre Ville"
                  aria-label="Votre Ville"
                  class="justify-center items-start px-5 py-5 mt-4 bg-white border border-solid border-zinc-300 text-zinc-700 !p-4"
                />
              </div>
            </div>
            <div class="flex flex-col">
              <label
                for="message"
                class="mt-6 font-medium text-midnightblue max-md:max-w-full"
                >Message</label
              >
              <textarea
                id="message"
                placeholder="Tapez votre message"
                aria-label="Tapez votre message"
                class="items-start px-5 pt-3.5 pb-24 mt-4 bg-white border border-solid border-zinc-300 text-zinc-700 max-md:max-w-full "
              ></textarea>
            </div>
            <button
              type="submit"
              class="justify-center items-center self-center px-16 py-5 mt-16 font-semibold text-white whitespace-nowrap bg-cornflowerblue-100 rounded-sm w-full mx-auto max-w-[500px] max-md:px-5 max-md:mt-10"
            >
              ENVOYER
            </button>
          </form> -->
        </div>
      </section>

<?php
get_footer();
?>