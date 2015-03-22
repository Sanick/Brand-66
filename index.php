<?php get_header(); ?>

    <section class="container col-sm-7 col-sm-offset-1">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="blog-post">
                    <h2 class="post-title"><?php the_title(); ?> </h2>
                    <span class="post-date"><?php the_time('F.j.Y') ?></span>
                    <?php the_excerpt(); ?>
                    <div class="social-post">
                        <a class="twitter" href="#">Twitter</a>
                        <a class="f-share" href="#">Share</a>
                        <a class="f-like" href="#">Like</a>
                    </div>
                    <div class="blog-video">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/DzXtTdsJLtQ" frameborder="0" allowfullscreen></iframe>
                    </div>
                </article>
        <?php endwhile; ?>
        <!-- post navigation -->
        <?php else: ?>
        <!-- no posts found -->
        <?php endif; ?>     

                
                <article class="blog-post">
                    <h2 class="post-title">Jack Crossing</h2>
                    <span class="post-date">August 7, 2013</span>
                    <p>
                        While window shopping this morning on Behance, I ran across some
                        stunning photographic pieces by designer Jack Crossing. Very nice,
                        surreal imagery. Makes me long for the days of album art.
                    </p>
                    <div class="social-post">
                        <a class="twitter" href="#">Twitter</a>
                        <a class="f-share" href="#">Share</a>
                        <a class="f-like" href="#">Like</a>
                    </div>
                    <img class="post-image" src="<?php bloginfo ('template_url') ?>/images/post-img.jpg" width="627" height="627" alt="post-image"/>
                </article>
                <div class="blog-pagination">
                    <a class="old" href="#">Old</a>
                    <a class="new" href="#">New</a>
                </div>
    </section>
    
    <?php get_sidebar(); ?>

    <section class="soc-section">
        <ul>
            <li><a href="#" class="insta">insta</a></li>
            <li><a href="#" class="twitter">twitter</a></li>
            <li><a href="#" class="email-icon">email</a></li>
        </ul>
    </section>
    
    <?php get_footer(); ?>