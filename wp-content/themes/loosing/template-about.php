<?php /* Template name: About */ ?>

<?php get_header(); the_post(); ?>

<main>    
    <section id="about">

        <header id="intro">

                <h1><?php the_title(); ?> <span><?php the_field ( 'page_subtitle' ); ?></span></h1>
                <p><?php the_field ( 'page_intro' ); ?></p>

        </header>

        <figure>

        <?php the_post_thumbnail(); ?>

        </figure>

         <div>

                <div class="info">

                    <?php the_content(); ?>
                
                </div>

                <div class="team">
                    <!-- Repeater Loop -->
                    <?php while( have_rows('team_buddy') ) : the_row(); ?>

                    <!-- Creamos una variable PHP -->
                    <!-- Cambiamos the_sub_field ('team_insta_user'); por la variable-->
                    <?php $instagramUser = get_sub_field ('team_insta_user'); ?>
                    <!-- Ya que pedimos 2 veces lo mismo al servidor, podemos guardarlo en una variable para ahorrar unos segundos en carga -->
                        <a href="https://instagram.com/<?php echo $instagramUser; ?>" target="_blank">
                        <!-- Esto: <img class="round" src="< ?php the_sub_field ('team_photo'); ?>" alt="Very cool and SEO friendly description">
                    coge la URL de la imagen, para usarlo con ID: -->
                        <?php echo wp_get_attachment_image (get_sub_field ('team_photo'), '', '', array('class' => 'round') ); ?>
                        @<?php echo $instagramUser; ?></a>

                    <?php endwhile; ?>
                </div>

        </div>

        <div class="buttons">                 
                <a href="#" class="button">Like it? Shop Shop!</a>
                <a href="index.html" class="button mini">Wanna see pics</a>
        </div>

    </section>

</main>
<?php get_footer(); ?>