    <?php get_header(); ?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo get_bloginfo('template_directory'); ?>/img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Clean Blog</h1>
              <span class="subheading">A Blog Theme by Start Bootstrap</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="post-preview">
              <a href="post.html">
                <h2 class="post-title">
                  <?php the_title(); ?>
                </h2>
                <!--<h3 class="post-subtitle">-->
                <!--</h3>-->
              </a>
              <?php the_content(); ?>
              <p class="post-meta">Posted by
                <a href="#">Start Bootstrap</a>
                <?php the_time('F jS, Y'); ?>
              </p>
            </div>
            <hr>
          <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
          <!-- Pager -->
          <div class="clearfix">
            <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
          </div>
        </div>
      </div>
    </div>

    <hr>

    <?php get_footer(); ?>