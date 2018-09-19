<?php get_header(); ?>
    <main class="row container Blog">
        <div class="col-16 col-l-10">
            <?php
            $the_query = new WP_Query(array('posts_per_page' => 3));
            while ($the_query->have_posts()): $the_query->the_post(); ?>
                <article class="col-16 Home-blogNew">
                    <figure>
                        <?php the_post_thumbnail('first_post') ?>
                    </figure>
                    <div class="Home-blogNewText">
                        <h3> <?php the_title() ?> </h3><>
                        <p><?php the_excerpt() ?></p>
                        <div class="row justify-end">
                            <a href="<?php echo get_permalink() ?>">LEER MÁS...</a>
                        </div>
                    </div>
                </article>
            <?php
            endwhile;
            wp_reset_query();
            ?>
        </div>
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
                <h2>Post recomendados</h2>
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
    </main>
<?php get_footer();
