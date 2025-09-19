<?php get_header(); ?>

<main class="single-recipe">
  <div class="container">
    <div class="left">
      <h1><?php the_title(); ?></h1>
      <div class="meta">
        <span class="meta-item">
            <img src="/wp-content/uploads/2025/09/clock-solid-full.svg" alt="">
            <?php echo get_field('total_time'); ?>
        </span>
        <br>
        <span class="meta-item chart">
            <img src="/wp-content/uploads/2025/09/chart-simple-solid-full.svg" alt="">
            <?php echo get_field('difficulty'); ?>
        </span>
        <span class="meta-item stars">
            <img src="/wp-content/uploads/2025/09/star-solid-full.svg" alt="">
            <img src="/wp-content/uploads/2025/09/star-solid-full.svg" alt="">
            <img src="/wp-content/uploads/2025/09/star-solid-full.svg" alt="">
            <img src="/wp-content/uploads/2025/09/star-solid-full.svg" alt="">
            <img src="/wp-content/uploads/2025/09/star-regular-full.svg" alt="">
            <?php echo get_field('rating'); ?>
        </span>
      </div>
      <p class="description"><?php echo get_field('intro'); ?></p>
      <p class="description"><?php echo get_field('description'); ?></p>
    </div>
    <div class="right">
      <?php the_post_thumbnail('medium'); ?>
    </div>
  </div>
  <div class="bottom">
    <div class="ingredients">
      <h2>Ingredients</h2>
      <p><?php echo nl2br(get_field('ingredients')); ?></p> <!-- Vi havde problem med det stod i en lang snøre, da vi ikke havde adgang til at bruge field typen repeater, fordi den er en pro version ting, desværre. Dog fandt vi ud af, at hvis man bruger nl2br så går den ind og kigger på hvornår brugeren skifter til ny linje og sætter en <br> der, så det går ned på næste linje som ønsket. Vi brugte https://www.w3schools.com/php/func_string_nl2br.asp til det. -->
    </div>
    <div class="recipe-extra">
      <h2>Procedure</h2>
      <p><?php echo nl2br(get_field('procedure')); ?></p>
    </div>
  </div>
</main>

<?php get_footer(); ?>


