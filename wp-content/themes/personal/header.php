<html>
<head>
  <title>Rico De Santis</title>
  <?php wp_head() ?>
  <meta name="viewport" content="initial-scale = 1.0,maximum-scale = 1.0" />
</head>
<body>
  <header id="home">
    <section>
      <nav class="nav-bar-container">
        <aside class="logo-container">
          <? $query = new WP_Query( array(
              'category_name' => 'logo',
              'posts_per_page' => 1)
          );
          if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
                <img src="<? echo get_the_post_thumbnail_url() ?>" class="logo"alt="logo">
            <? endwhile; endif; wp_reset_postdata(); ?>
        </aside>
        <article class="nav-right primary-nav">
          <?
            $defaults = array(
              'container' => true,
              'menu' => 'Main'
            );
            wp_nav_menu($defaults);
          ?>
        </article>
      </nav>
        <div class="header-container">
          <?php
            $args = array(
              'category_name' => 'header',
              'posts_per_page' => 1
            );
            $query = new WP_Query( $args );
             if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
             <div class="header-content">
                <h2><? the_title(); ?></h2>
                <? the_content();?>
             </div>

            <img class="header-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Project Header">
          <?php endwhile; endif; wp_reset_postdata(); ?>
          <div class="header-scroll_trigger"></div>
        </div>
    </section>
  </header>

