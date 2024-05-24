<?php
$categories = get_terms(array(
    'taxonomy' => 'catégorie',
    'hide_empty' => false,
));
?>



<?php

// Get All Product
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
  'post_type'      => 'produit',
  'post_status'    => 'publish',
  'posts_per_page' => 6,
  'paged' => $paged
);

$all_product_posts = new WP_Query($args);

$Catégories = get_taxonomies();


$categories = get_terms(array(
  'taxonomy' => 'catégorie',
  'hide_empty' => false,
));
?>



<section class="flex flex-col w-full max-w-screen-xl mx-auto px-5 py-14 xl:px-0 xl:py-32 2xl:py-44">
  <h6 class="w-full text-lg font-medium leading-7 text-cornflowerblue-100 max-md:max-w-full">
    Nos Produits
  </h6>
  <h2 class="mt-1 w-full text-21xl-4 font-bold sm:leading-[49px] text-blue-950 text-ellipsis max-md:max-w-full">
    PRODUITS LES PLUS <br class="hidden md:block" />
    POPULAIRES
  </h2>
  <img loading="lazy" src="<?= get_template_directory_uri() ?>/assets/images/divider4.svg" alt="" class="mt-8 aspect-[20] !fill-cornflowerblue-100 w-[61px]" />
  <p class="mt-8 max-w-4xl w-full font-normal text-base leading-6 text-ellipsis text-zinc-700 max-md:max-w-full">
    Toutes les contraintes et besoins que nécessite le transport de
    marchandises ont été étudiés par nos équipes pour arriver à satisfaire
    ce créneau trés sensible. Nous vous offrons des solutions sur mesure
    pour pouvoir gérer votre flotte. Gérer le kilomètrage parcouru, la
    consommation de carburant, les pannes moteur, les alertes,
    l'historique des trajets...
  </p>
  
    

      
    

    <div class="categories flex gap-3 self-start mt-28 text-sm font-medium leading-5 text-zinc-700 max-md:mt-10">
            <!-- <button class="category-button product-filter-button active" data-id="0">
                All
            </button> -->
        <?php foreach ($categories as $category): ?>
            <button class="category-button product-filter-button" data-id="<?php echo esc_attr($category->term_id); ?>">
                <?php echo esc_html($category->name); ?>
            </button>
        <?php endforeach; ?>
  </div>


  <section id="products-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 mt-8 w-full max-md:max-w-full ">
    <?php if ($all_product_posts->have_posts()) : ?>


      <?php while ($all_product_posts->have_posts()) :


        $all_product_posts->the_post();
        $product_id = $all_product_posts->ID;
        // Featured Image
        $image_url = get_the_post_thumbnail_url($product_id, 'full') ?: get_template_directory_uri() . "/assets/images/Frame-589-min.webp";

      ?>
        <article class="group aspect-square overflow-y-hidden flex relative flex-col">
          <div class="flex flex-col grow justify-center w-full bg-white rounded border-2 transition-all duration-200 group-hover:border-4 border-cornflowerblue-100 border-solid max-md:px-5 max-md:mt-7">
            <img loading="lazy" src="<?= $image_url ?>" alt="" class="mt-3 px-7 w-full aspect-[1.37]" />
            <button class="justify-center transition-all duration-200 -bottom-full group-hover:bottom-0 w-full left-0 absolute items-center px-16 py-5 mt-8 bg-cornflowerblue-100 rounded-sm max-md:px-5 !text-white">
              <?= the_title(); ?>
            </button>
          </div>
        </article>
      <?php endwhile; ?>
  </section>

  <?php // Pagination
      $total_pages = $all_product_posts->max_num_pages;

      if ($total_pages > 1) {

        $current_page = max(1, get_query_var('paged'));

        $pagination_links = paginate_links(array(
          'base'      => get_pagenum_link(1) . '%_%',
          'format'    => '/page/%#%',
          'current'   => $current_page,
          'total'     => $total_pages,
          'mid_size'  => 1,
          'prev_next' => false,
          'type'      => 'array'
        ));

        if (is_array($pagination_links)) : ?>
      <div class="Tracky-pagination flex gap-5 self-center px-5 mt-20 text-lg font-semibold leading-6 text-center text-gray-800 whitespace-nowrap max-md:mt-10">
        <?php
          foreach ($pagination_links as $link) {
            // Add leading zeros to numbers
            echo preg_replace_callback('/>[\d]+</', function ($matches) {
              return '>' . str_pad(trim($matches[0], '><'), 2, '0', STR_PAD_LEFT) . '<';
            }, $link);
          }
        ?>
      </div>
    <?php endif; ?>
  <?php }
      wp_reset_postdata();
    else : ?>
  <p class="text-black">No product found.</p>
<?php endif; ?>
</section>
