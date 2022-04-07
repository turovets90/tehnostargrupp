<?php
/*
 Template name: Sertificates
 */

get_header();
?>

<?php get_template_part('inc/breadcrumb'); ?>


<div class="container">
    <div class="page_content">
        <div class="content">
            <?php
                the_post();
                the_content();
            ?>
            <?php if( have_rows('sertifikaty') ): ?>
                <ul class="row gallery_row">
                    <?php while( have_rows('sertifikaty') ): the_row(); ?>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 item">
                            <div class="gallery_item">
                                <a href="<?php the_sub_field('s_image'); ?>" data-fancybox="gallery">
                                    <img class="img_thumbnail" src="<?php the_sub_field('s_image'); ?>"/>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer();?>
