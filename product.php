<?php
/*
 Template name: Product
 */

get_header();
?>

<?php get_template_part('inc/breadcrumb'); ?>


<div class="container">
    <div class="page_content">
        <div class="flex_container">
            <div class="aside">
                <div class="sidebar_menu">
                    <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'sidebar_menu',
                        )
                    );
                    ?>
                </div>
            </div>
            <div class="content">
                <?php
                the_post();
                the_content();
                ?>
                <?php if(get_field('gallery_title')): ?>
                    <h2><?php the_field('gallery_title'); ?></h2>
                <?php endif; ?>
                <?php if( have_rows('gallery') ): ?>
                    <div class="works_list">
                        <?php while( have_rows('gallery') ): the_row(); ?>
                            <div class="works_list_item">
                                <picture><a href="<?php the_sub_field('gallery_img'); ?>" data-fancybox="gallery"><img src="<?php the_sub_field('gallery_img'); ?>"/></a></picture>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <div class="product_feedback_box">
                    <div class="flex_container">
                        <div class="col_left">
                            <div class="title">Вы можете рассчитать предварительную стоимость вашего заказа</div>
                            <div class="subtitle">Нажмите “Рассчитать заказ” и заполните форму. Мы сообщим вам предварительную стоимость вашего заказа</div>
                        </div>
                        <div class="col_right">
                            <button class="btn_default" data-toggle="modal" data-target="#feedback">Рассчитать заказ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer();?>
