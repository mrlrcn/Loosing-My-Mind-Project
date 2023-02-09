<?php get_header(); ?>

  <!-- MAIN -->

    <main>

        <!-- BLOG -->

        <section id="blog">

            <header id="intro">

                <h1>Blog <span>mind and copy</span></h1>
                <p>A truly fun and rewarding compilation of freak stuff written and written by myself, the author.</p>

            </header>

            <?php while ( have_posts() ) : the_post(); ?>
            
                <article <?php post_class(); ?>>

                    <header>

                        <h2><a href="blog-the-usgs-collection-now-at-moma.html"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?>
                        <!-- AQUI PONEMOS EL CAMPO PERSONALIZADO (PLUGIN ACF) CON EL NOMBRE QUE LE HAYAMOS DADO (read_more_text)-->
                        <a class="button mini" href="<?php the_permalink(); ?>"><?php the_field ( 'read_more_text' ); ?></a> 

                    </header>

                    <figure>

                        <a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'medium' ); ?></a>

                    </figure>

                </article>

            <?php endwhile; ?>

        </section>

        </main>

<?php get_footer(); ?>