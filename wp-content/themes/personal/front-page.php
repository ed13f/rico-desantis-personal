<?php get_header(); ?>
<main>
  <section id="projects" class="project-section">
    <?php
      $args = array(
        'category_name' => 'projects',
        'posts_per_page' => 6
      );
      $query = new WP_Query( $args );
      if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
        <article class="project">
          <aside>
            <img src="<? echo get_the_post_thumbnail_url() ?>" class="project-img"alt="hi">
          </aside>
          <article>
            <h2><a href="<? echo the_field('url')?>"><? the_title() ?></a></h2>
            <? the_content() ?>
            <? $tags = get_the_tags() ?>
            <? foreach ($tags as $tag) { ?>
              <span class="project-language"><? echo $tag->name ?></span>
            <? } ?>
          </article>
        </article>
      <?php endwhile; endif; wp_reset_postdata(); ?>
  </section>
  <section id="contact">
    <aside class="contact-header">
      <article class="headshot">
        <?php
          $args = array(
            'category_name' => 'headshot',
            'posts_per_page' => 1
          );
        $query = new WP_Query( $args );
          if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
            <img src="<?php echo get_the_post_thumbnail_url()?>" class="headshot-img" alt="social" />
        <? endwhile; endif; wp_reset_postdata(); ?>
      </article>
      <article class="social-icons">
        <?php
          $args = array(
            'category_name' => 'social-link',
            'posts_per_page' => 3
          );
          $query = new WP_Query( $args );
          if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
            <a href="<? echo get_field('url') ?>" target="_blank"><img src="<?php echo get_the_post_thumbnail_url()?>" class="social-icon" alt="social" /></a>
          <? endwhile; endif; wp_reset_postdata(); ?>
      </article>
      <article class="phone-icons">
        <?php
          $args = array(
            'category_name' => 'phone-number',
            'posts_per_page' => 1
          );
          $query = new WP_Query( $args );
          if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
              <a class="phone-number" href="tel:<? echo get_field("phone_number_href"); ?>" ><? echo get_field("phone_number_text"); ?></a>
          <? endwhile; endif; wp_reset_postdata(); ?>
      </article>
    </aside>
    <article class="skills">
      <h2 class="skills-header">Programming Skills</h2>
      <div class="skills-container">
        <?php
          $args = array(
            'category_name' => 'skills',
            'posts_per_page' => 15
          );
          $query = new WP_Query( $args );
        ?>
        <ul class="skills-list">
        <?php
        $count = 1;
        if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();
          if ($count == 5 || $count == 10){
            the_title("<li class='language-item'>", "</li></ul>");
          } elseif ($count == 6 || $count == 11){
             the_title("<ul class='skills-list'><li class='language-item'>", "</li>");
          } else {
            the_title("<li class='language-item'>", "</li>");
          }
          $count += 1;
        endwhile; endif; wp_reset_postdata(); ?>
        </ul>
      </div>
    </article>
  </section>
</main>
<footer>
</footer>
<?php get_footer(); ?>