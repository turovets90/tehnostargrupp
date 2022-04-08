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
                <div class="desc">
                    <?php
                    the_post();
                    the_content();
                    ?>
                </div>
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
                            <div class="title">
                                <?php
                                if(get_field('order_block_title')):
                                    echo the_field('order_block_title');
                                else:
                                    echo 'Вы можете рассчитать предварительную стоимость вашего заказа';
                                endif;
                                ?>
                            </div>
                            <div class="subtitle">
                                <?php
                                if(get_field('order_block_text')):
                                    echo the_field('order_block_text');
                                else:
                                    echo 'Нажмите “Рассчитать заказ” и заполните форму. Мы сообщим вам предварительную стоимость вашего заказа';
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="col_right">
                            <button class="btn_default" data-toggle="modal" data-target="#feedback">
                                <?php
                                if(get_field('order_btn_text')):
                                    echo the_field('order_btn_text');
                                else:
                                    echo 'Рассчитать заказ';
                                endif;
                                ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>
