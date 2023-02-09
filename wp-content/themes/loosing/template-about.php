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

                        <a href="https://instagram.com/<?php the_sub_field ('team_insta_user'); ?>" target="_blank">
                        <img class="round" src="<?php the_sub_field ('team_photo'); ?>" alt="Very cool and SEO friendly description">
                        @<?php the_sub_field ('team_insta_user'); ?></a>

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