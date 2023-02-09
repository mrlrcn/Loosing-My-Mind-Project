        <!-- PREFOOTER -->

        <section id="prefooter">

            <div>

                <h2>Hey! Just blogged...</h2>

                <?php
                    $news = new WP_Query ( array //Creamos variable //Ejecutamos loop
                    (
                        'post_type' => 'post',
                        'posts_per_page' => 3
                    ));
                ?>
                <?php while ( $news -> have_posts() ) : $news -> the_post(); ?> 

                    <article <?php post_class(); ?>>

                        <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                        <time datetime="<?php the_time ( 'Y-m-d' ); ?>"><?php the_time ( 'd.m.Y' ); ?></time>

                    </article>

                <?php endwhile; ?>

                <div class="buttons">
                    
                    <a href="<?php echo home_url ( '/blog/' ); ?>" class="button mini">More articles here</a>

                </div>

            </div>

        </section>

        <!-- FOOTER -->

        <footer>

            <?php bloginfo ( 'description' ); ?>

            <!-- <ul class="social">

                <li><a href="https://instagram.com" target="_blank">Instagram</a></li>
                <li><a href="https://behance.net" target="_blank">Behancé</a></li>

            </ul> -->

            <!-- MENU RRSS "Wordpresizado"-->
            <?php
                wp_nav_menu ( array
                (
                'theme_location' => 'footer-left',
                'container' => false,
                'menu_class' => 'left'
                ));
             ?>

            <!-- <ul class="legal">
                
                <li><a href="cookies.html">Terms of use</a></li>
                <li><a href="cookies.html">Cookies</a></li>

            </ul> -->

            <!-- MENU COSAS LEGALES "Wordpresizado"-->
            <?php
                wp_nav_menu ( array
                (
                'theme_location' => 'footer-right',
                'container' => false,
                'menu_class' => 'right'
                ));
            ?>

        </footer>

        <?php wp_footer(); ?>

    </body>

</html>