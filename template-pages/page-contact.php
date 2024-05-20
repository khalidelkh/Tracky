<?php
/* Template Name: Contact*/
get_header();
?>

<h1 class="mt-24 text-35xl-5 font-bold leading-[60.69px] text-white">
            Contact
          </h1>

          <img
            loading="lazy"
            src="<?= get_template_directory_uri() ?>/assets/images/divider1.svg"
            alt=""
            class=" aspect-[20] w-[60px] fill-cornflowerblue-100"
          />
          <div
            class="mt-24 flex gap-2.5 text-lg leading-6 whitespace-nowrap max-md:mt-10"
          >
            <a href="#" class="text-cornflowerblue-100">Home</a>
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

        

      <section class="flex flex-col justify-end self-stretch xl:pt-20">
        <div
          class="self-center mt-20 max-w-screen-xl mx-auto px-5 xl:px-0 w-full max-md:mt-10"
        >
          <div class="flex gap-5 max-md:flex-col max-md:gap-0">
            <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
              <div class="flex flex-col !pt-1 max-md:mt-10 max-md:max-w-full">
                <h2
                  class="text-lg font-medium leading-7 text-cornflowerblue-100 max-md:max-w-full"
                >
                  Contact
                </h2>
                <h1
                  class="text-4xl font-bold  text-blue-950 max-md:max-w-full"
                >
                  CONTACTEZ-NOUS
                </h1>
                <div
                  class="shrink-0 mt-2 bg-cornflowerblue-100 rounded-sm bg-blend-normal h-[3px] max-w-[250px]"
                ></div>
                <p
                  class="mt-6 text-sm leading-6 text-zinc-700 max-md:max-w-full font-bold" 
                >
                  Toutes les contraintes et besoins que nécessite le transport
                  de marchandises <br />
                  <span class="text-zinc-700">
                    ont été étudiés par nos équipes pour arriver à satisfaire ce
                    créneau très sensible.
                  </span>
                </p>
                <div class="flex gap-4 self-start mt-7">
                  <div
                    class="flex justify-center items-center p-5 bg-cornflowerblue-100 h-[71px] rounded-[50px] w-[71px]"
                  >
                    <img
                      loading="lazy"
                      src="<?= get_template_directory_uri() ?>/assets/images/icons/phone-icon.svg"
                      alt="Phone Icon"
                      class="aspect-square fill-white w-[30px]"
                    />
                  </div>
                  <div class="flex flex-col my-auto font-semibold">
                    <div class="text-base leading-7 text-slate-950 ">
                      Appelez-nous
                    </div>
                    <a href="tel:<?= get_theme_mod('contact_email', '+212 5 28 23 60 87') ?>" class="mt-1.5 text-lg leading-5 text-zinc-700 font-bold">
                      <?= get_theme_mod('contact_phone', '+212 5 28 23 60 87') ?>
                    </a>
                  </div>
                </div>

                <div class="flex gap-4 self-start mt-7">
                  <div
                    class="flex justify-center items-center px-5 py-6 bg-cornflowerblue-100 h-[71px] rounded-[50px] w-[71px]"
                  >
                    <img
                      loading="lazy"
                      src="<?= get_template_directory_uri() ?>/assets/images/icons/email-icon.svg"
                      alt="Email Icon"
                      class="aspect-[1.37] fill-white w-[30px]"
                    />
                  </div>
                  <div
                    class="flex flex-col my-auto font-semibold whitespace-nowrap"
                  >
                    <div class="text-base leading-7 text-slate-950">E-mail</div>
                    <a href="mailto:<?= get_theme_mod('contact_email', 'info@tracky.com') ?>" class="mt-2 text-lg leading-5 text-zinc-700 font-bold">
                      <?= get_theme_mod('contact_email', 'info@tracky.com') ?>
                    </a>
                  </div>
                </div>

                <div class="flex gap-4 mt-7">
                  <div
                    class="flex justify-center items-center px-6 py-5 bg-cornflowerblue-100 h-[72px] rounded-[50px] min-w-[72px] max-md:px-5"
                  >
                    <img
                      loading="lazy"
                      src="<?= get_template_directory_uri() ?>/assets/images/icons/marker-icon.svg"
                      alt="Location Icon"
                      class="aspect-[0.76] fill-white w-[22px]"
                    />
                  </div>
                  <div
                    class="flex flex-col my-auto font-semibold max-md:max-w-full"
                  >
                    <div
                      class="text-base leading-7 text-slate-950 max-md:max-w-full"
                    >
                      Visitez-nous
                    </div>
                    <div
                      class="mt-2 text-lg leading-5 text-zinc-700 max-md:max-w-full font-bold"
                    >
                    <?= get_theme_mod('contact_adress', 'Siège social : Nº A405 Agadir Baya Founty - Agadir') ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex flex-col ml-5 w-6/12 max-md:ml-0 max-md:w-full">
              <form
                class="flex flex-col grow lg:px-12 pt-9 pb-12 w-full text-base leading-6 bg-white rounded max-md:mt-10 max-md:max-w-full"
              >
                <h2
                  class="mx-7 text-3xl  leading-8 text-blue-950 max-md:mr-2.5 max-md:max-w-full font-bold"
                >
                  Remplir le formulaire ci-dessous
                </h2>
                <div class="flex gap-5 mt-7 max-lg:flex-wrap">
                  <div class="flex flex-1 flex-col">
                    <label for="name" class="font-medium text-blue-950"
                      >Nom</label
                    >
                    <input
                      type="text"
                      id="name"
                      placeholder="Votre nom"
                      aria-label="Nom"
                      class="justify-center items-start px-5 py-5 mt-4 border border-solid border-zinc-300 text-zinc-700 !p-4"
                    />
                  </div>
                  <div class="flex flex-1 flex-col">
                    <label for="email" class="font-medium text-blue-950"
                      >Email</label
                    >
                    <input
                      type="email"
                      id="email"
                      placeholder="Votre Email"
                      aria-label="Email"
                      class="justify-center items-start px-5 py-5 mt-4 border border-solid border-zinc-300 text-zinc-700 !p-4"
                    />
                  </div>
                </div>
                <div class="flex gap-5 mt-3.5 max-lg:flex-wrap">
                  <div class="flex flex-1 flex-col">
                    <label for="phone" class="font-medium text-blue-950"
                      >Téléphone</label
                    >
                    <input
                      type="tel"
                      id="phone"
                      placeholder="Votre téléphone"
                      aria-label="Téléphone"
                      class="justify-center items-start px-5 py-5 mt-4 border border-solid border-zinc-300 text-zinc-700 !p-4"
                    />
                  </div>
                  <div class="flex flex-1 flex-col">
                    <label for="subject" class="font-medium text-blue-950"
                      >Sujet</label
                    >
                    <input
                      type="text"
                      id="subject"
                      placeholder="Votre Sujet"
                      aria-label="Sujet"
                      class="justify-center items-start px-5 py-5 mt-4 border border-solid border-zinc-300 text-zinc-700 !p-4"
                    />
                  </div>
                </div>
                <label
                  for="message"
                  class="mt-3.5 font-medium text-blue-950 max-md:max-w-full"
                  >Message</label
                >
                <textarea
                  id="message"
                  placeholder="Tapez votre message"
                  aria-label="Message"
                  class="justify-center items-start px-5 pt-3.5 pb-8 mt-4 border border-solid border-zinc-300 text-zinc-700 max-md:max-w-full"
                ></textarea>
                <button
                  type="submit"
                  class="justify-center items-center px-16 py-5 mt-3.5 font-semibold text-white whitespace-nowrap bg-cornflowerblue-100 rounded-sm max-md:px-5 max-md:max-w-full"
                >
                  ENVOYER
                </button>
              </form>
            </div>
          </div>
        </div>

        
        <iframe
          class="w-full aspect-[3.85] min-h-72 max-md:max-w-full"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d214.10257060133816!2d-9.82045824055208!3d30.84072033344761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdb25dbfb1cfa9e9%3A0xa615b3bfe85b4064!2sSurf%20Time%20Morocco!5e0!3m2!1sfr!2sma!4v1695139564169!5m2!1sfr!2sma"
        >
        </iframe>
      </section>
      

      

<?php
get_footer();
?>