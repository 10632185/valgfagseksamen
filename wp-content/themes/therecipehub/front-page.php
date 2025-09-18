<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frontpage | The Recipe Hub</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>

<?php
get_header();
?>

<!-- HERO VIDEO -->
<section class="herovideo">
  <video autoplay muted loop playsinline class="hero-video">
    <source src="/wp-content/uploads/2025/09/CINEMATIC-COOKING-B-ROLL-1.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</section>
 
 
  <!-- INTRO -->
  <section class="intro">   
    <h1>THE RECIPE HUB</h1>
    <p>
      Welcome to our universe of flavor and passion for food. Here, we invite you
      into the kitchen, where our skilled chefs share their experiences, creative
      recipes, and love for ingredients. Our kitchen is not just about cooking, but
      about creating experiences.
    </p>
  </section>
 
  <!-- FOOD CARDS -->
<?php
// Get the first recipe type
$types = get_terms('recipe_type', ['hide_empty' => true, 'number' => 1]);
if ($types) :
    $type = $types[0];
?>

<section class="food-section-wrapper">
    <div class="food-section-h2-frontpage">
        <h2><?php echo $type->name; ?></h2>
    </div>

    <div class="food-section"> <!-- container for the cards -->
        <?php
        // Get 3 recipes for this type
        $recipes = new WP_Query([
            'post_type' => 'recipe',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'ASC',
            'tax_query' => [[
                'taxonomy' => 'recipe_type',
                'field' => 'slug',
                'terms' => $type->slug,
            ]],
        ]);

        if ($recipes->have_posts()) :
            while ($recipes->have_posts()) : $recipes->the_post();
        ?>
            <div class="food-card">
                <a href="<?php the_permalink(); ?>">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('medium');
                    } else {
                        echo '<img src="https://via.placeholder.com/250x150" alt="No image">';
                    }
                    ?>
                </a>
                <h4><?php the_title(); ?> - 20min</h4>
                <p><?php echo get_the_excerpt(); ?></p>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No recipes found.</p>';
        endif;
        ?>
    </div> <!-- end cards container -->
</section>

<?php endif; ?>



 
  <!-- CHEF SECTION -->
  <section class="chef-section">
    <div class="chef-card">
      <img src="/wp-content/uploads/2025/09/Marcus_wareing_chef.png" alt="Chef 2">
      <p>
        In our kitchen, you’ll find a very special group of passionate chefs, known as
        “the bearded head chef.” He has a unique background but shares the same love
        for food and fine craftsmanship. The beard has become his trademark, a symbol
        of experience, creativity, and personality.
      </p>
    </div>
 
        <div class="chef-card">
      <p>
        Our head chef is a true storyteller, not just through her words, but through
        the dishes she creates. She is known for her warm smile and sharp eye for detail,
        and her journey in the kitchen has taken her far and wide.
   <br>
        Over the years, she has worked for a wide range of well-known personalities,
        where her ability to combine classic techniques with modern flavors has always
        made an impression. From intimate dinners to large events, she has delivered
        culinary experiences that are remembered long after.
      </p>
    <img src="/wp-content/uploads/2025/09/Seema_chef.png" alt="Chef 1">
    </div>
  </section>


<?php
get_footer()
?>


</body>
</html>