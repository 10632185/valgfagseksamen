<?php
/* Template Name: Chefs Page */
get_header(); ?>
<main>
  <section class="intro-weekly-chefs">
    <h1>Meet Our Passionate Head Chefs</h1>
    <p>
      Behind every dish we serve stands passion, experience, and a unique story.
      Our head chefs are not just masters of their craft—they are creative souls
      who love to experiment, innovate, and teach. Each recipe is infused with
      their unique taste, flair, and technique.
    </p>
  </section>
  <section class="featured-chef">
    <h2>This Week's Chef</h2>
    <?php
    $weekly_query = new WP_Query([
        'post_type' => 'weekly_chef',
        'posts_per_page' => 1,
        'post_status' => 'publish',
    ]);
    if ($weekly_query->have_posts()) :
        while ($weekly_query->have_posts()) : $weekly_query->the_post(); ?>
          <div class="chef-card">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('medium'); ?>
            <?php endif; ?>
            <div>
              <h3><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata();
    else : ?>
        <p>No featured chef available at the moment.</p>
    <?php endif; ?>
  </section>
  <section class="other-chefs">
    <h2>Meet our culinary artists – OUR CHEFS</h2>
    <div class="chef-grid">
      <?php
      $chef_query = new WP_Query([
          'post_type' => 'chef_profile',
          'posts_per_page' => -1,
          'post_status' => 'publish',
      ]);

      if ($chef_query->have_posts()) :
          while ($chef_query->have_posts()) : $chef_query->the_post(); ?>
            <div class="chef-card circle-style">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('thumbnail'); ?>
              <?php endif; ?>
              <h3><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>
            </div>
          <?php endwhile;
          wp_reset_postdata();
      else : ?>
          <p>No chef profiles found.</p>
      <?php endif; ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>
