<?php /* Template Name: Find dealer */ ?>
<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header(); ?>

<section class="dealers">
    <?php while ( have_posts() ) : the_post(); ?>

        <div class="dealers__intro">
            <div class="container container-xsml">
                <h1 class="text-center"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
        </div>

        <?php while ( have_rows('dealers') ) : the_row(); ?>

            <div class="dealers__grid container">
                <div class="dealers__grid-item">
                    <?php $image = get_sub_field('logo'); ?>
				    <img src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
                    <h3>
                        <?= get_sub_field('title'); ?>
                    </h3>
                    <div class="content">
                        <?= get_sub_field('content'); ?>
                    </div>
                </div>
            </div>
        
        <?php endwhile; ?>

    <?php endwhile; // end of the loop. ?>
</section>

<?php get_footer(); ?>