<?php
/*
 Template name: Category
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
            <?php
            $args = array(
                'sort_order'   => 'ASC',
                'sort_column'  => 'menu_order',
                'child_of'     => 0,
                'parent'       => get_the_ID(),
                'post_status'  => 'publish',
            );
            $category_list = get_pages( $args );
            ?>
            <div class="row category_row">
                <?php foreach( $category_list as $post ){?>
                    <div class="col-12 col-sm-6 col-xl-4 item">
                        <div class="category_item">
                            <picture>
                                <img class="img_thumbnail" src="<?php the_post_thumbnail_url(); ?>"/>
                                <?php if(get_field('ikonka',$post->ID)) :?>
                                    <span class="icon">
                                        <img src="<?php the_field('ikonka',$post->ID); ?>"/>
                                    </span>
                                <?php endif; ?>
                            </picture>
                            <div class="category_name">
                                <?php the_title(); ?>
                            </div>
                            <a class="more" href="<?php the_permalink(); ?>">Подробнее</a>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>
