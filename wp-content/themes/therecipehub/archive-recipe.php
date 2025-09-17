<?php
get_header();
?>

    <main class="recipe-guide">

  <section class="hero">
    <img src="/wp-content/uploads/2025/09/pumpkinsoup-1536x864.jpg" alt="Creamy soup bowls" class="hero-image" />
    <div class="recipeBodytext">
      <h1>Recipes that bring together flavor and joy</h1>
      <p>
        Whether you're looking for a quick meal in under 30 minutes, a classic family favorite, or something to impress the guests, we've got you covered. With so many delicious options from different cuisines and cooking styles to try, you can elevate your dishes to the next level without it having to be complicated.
      </p>
    </div>
  </section>

<?php
$recipe_types = get_terms([
  'taxonomy' => 'recipe_type',
  'hide_empty' => true,
]);

if (!empty($recipe_types) ) :
  foreach ( $recipe_types as $type ) :
?>

  <section class="recipeCategory">
    <div class="heading-row">
      <h2><?php echo ($type->name); ?></h2>
      <a href="<?php echo (get_term_link($type)); ?>" class="taglink">View more..</a>
      <!-- Jeg blev træt af at skrive hele url stringen ud hele tiden, og spurgte så en chatrobot om der var en lettere mulighed. Den forklarede mig så "get_term_link", som selv går ind og fanger url'en, sluggen osv. Dette er en meget hurtigere måde at gøre det på, samt mere sikkert da hvis man opdatere sin slug ikke skal ind og opdatere i koden, og derfor kan brugeren heller ikke f'e det op :-)
      Yderligere har vi også kigget her for hjælp til netop dette https://developer.wordpress.org/reference/functions/get_term_link/ - så vi bedre kunne forstå hvordan den fanger vores taxonomi, som man så evt. kan bruge til at se alle af en bestemt type.
      -->
    </div>

    <div class="gallery">
      <?php
      $recipes_query = new WP_Query([
        'post_type' => 'recipe',
        'posts_per_page' => 3,
        'tax_query' => [[
          'taxonomy' => 'recipe_type',
          'field' => 'slug',
          'terms' => $type->slug,
        ]],
      ]);

      if ($recipes_query->have_posts() ) :
        while ( $recipes_query->have_posts() ) : $recipes_query->the_post();
          if ( has_post_thumbnail() ) :
      ?>
        <div class="recipeIndividualItem">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?><!-- Vi tilføjer alt teksten til at værende billedets titel, da det typisk har noget med billedet at gøre og er en ret godt quick fix (håber det virker) -->
            </a>
            <p class="recipeIndividualTitle">
                <?php echo get_the_title(); ?>
            </p>
        </div>

            
      <?php
          endif;
        endwhile;
        wp_reset_postdata();
      else :
        echo '<p>No recipes found in this category.</p>';
      endif;
      ?>
    </div>
  </section>

<?php
  endforeach;
endif;
?>

</main>

<?php
get_footer()
?>