<?php
/**
 */

get_header(); ?>

    <section class="row container margin-top-40 margin-bottom-40">
        <div class="col-16 col-l-10 Blog-container">
            <?php
            while (have_posts()) :
            the_post(); ?>
            <img src="<?php the_post_thumbnail_url('large'); ?>" alt="Blog Title">
            <h3><?php the_title() ?></h3>
            <?php the_content() ?>
        </div>
        <?php endwhile; ?>


        <div class="col-16 col-l-6">
            <article class="Blog-newsletter">
                <h2>suscríbase a nuestro blog</h2>
                <p>
                    Suscribase con su correo eléctronico a nuestro blog y reciba notificaciones de nuestros post y
                    noticias.
                </p>
                <input type="text" placeholder="correo eléctronico">
                <div class="row justify-center">
                    <button type="submit">inscribirse</button>
                </div>
            </article>
            <article class="Blog-postRecent">
                <h2>Post recientes</h2>
                <?php
                $the_query = new WP_Query(array('posts_per_page' => 5));
                while ($the_query->have_posts()): $the_query->the_post(); ?>
                    <div class="row Blog-postRecentItem  middle-items">
                        <figure class="col-7">
                            <img class="fit" src="<?php echo  get_the_post_thumbnail_url(); ?>" alt="Blog Title">
                        </figure>
                        <h3 class="col-9"><?php the_title() ?></h3>
                    </div>
                <?php
                endwhile;
                wp_reset_query();
                ?>
            </article>
        </div>
    </section>
<?php
//get_sidebar();
get_footer();
