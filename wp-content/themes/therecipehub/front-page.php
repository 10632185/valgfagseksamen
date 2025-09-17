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
  <section class="food-section">
    <div class="food-card">
      <img src=https://thispersondoesnotexist.com/ alt="Food 1">
      <h4>Food name - 20min</h4>
      <p>A lovely dish that has a bomb full of flavours</p>
    </div>
    <div class="food-card">
      <img src=https://thispersondoesnotexist.com/ alt="Food 2">
      <h4>Food name - 20min</h4>
      <p>A lovely dish that has a bomb full of flavours</p>
    </div>
    <div class="food-card">
      <img src=https://thispersondoesnotexist.com/ alt="Food 3">
      <h4>Food name - 20min</h4>
      <p>A lovely dish that has a bomb full of flavours</p>
    </div>
  </section>
 
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