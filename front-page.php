<?php get_header(); ?>

<main>
    <div class="container">
        <div class="m_catalog">
            <div class="m_catalog_item">
                <a class="m_catalog_item_link large" href="<?php $b_link1 = get_field('big_card_link_1'); echo $b_link1['url']; ?>" style="background-image:url(<?php the_field('big_card_img_1'); ?>)">
                    <div class="m_catalog_item_content">
                        <div class="title"><?php the_field('big_card_title_1'); ?></div>
                        <?php if(get_field('big_card_desc_1')): ?>
                            <div class="desc"><?php the_field('big_card_desc_1'); ?></div>
                        <?php endif; ?>
                        <div class="more">Подробнее</div>
                    </div>
                </a>
            </div>
            <div class="m_catalog_item">
                <a class="m_catalog_item_link large" href="<?php $b_link2 = get_field('big_card_link_2'); echo $b_link2['url']; ?>" style="background-image:url(<?php the_field('big_card_img_2'); ?>)">
                    <div class="m_catalog_item_content">
                        <div class="title"><?php the_field('big_card_title_2'); ?></div>
                        <?php if(get_field('big_card_desc_2')): ?>
                            <div class="desc"><?php the_field('big_card_desc_2'); ?></div>
                        <?php endif; ?>
                        <div class="more">Подробнее</div>
                    </div>
                </a>
            </div>
            <div class="m_catalog_item">
                <a class="m_catalog_item_link" href="<?php $s_link1 = get_field('small_card_link_1'); echo $s_link1['url']; ?>" style="background-image:url(<?php the_field('small_card_img_1'); ?>)">
                    <div class="m_catalog_item_content">
                        <div class="title"><?php the_field('small_card_title_1'); ?></div>
                        <?php if(get_field('small_card_desc_1')): ?>
                            <div class="desc"><?php the_field('small_card_desc_1'); ?></div>
                        <?php endif; ?>
                        <div class="more">Подробнее</div>
                    </div>
                </a>
                <a class="m_catalog_item_link" href="<?php $s_link2 = get_field('small_card_link_2'); echo $s_link2['url']; ?>" style="background-image:url(<?php the_field('small_card_img_2'); ?>)">
                    <div class="m_catalog_item_content">
                        <div class="title"><?php the_field('small_card_title_2'); ?></div>
                        <?php if(get_field('small_card_desc_2')): ?>
                            <div class="desc"><?php the_field('small_card_desc_2'); ?></div>
                        <?php endif; ?>
                        <div class="more">Подробнее</div>
                    </div>
                </a>
            </div>
        </div>

        <?php if( have_rows('work_gallery') ): ?>
            <div class="main_works">
                <div class="main_h2"><?php the_field('work_title'); ?></div>
                <div class="main_excerpt"><?php the_field('work_desc'); ?></div>
                <div class="works_list">
                    <?php while( have_rows('work_gallery') ): the_row(); ?>
                        <div class="works_list_item">
                            <picture><a href="<?php the_sub_field('work_img'); ?>" data-fancybox="gallery"><img src="<?php the_sub_field('work_img'); ?>"/></a></picture>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if( have_rows('part_list') ): ?>
            <div class="main_partners">
                <div class="main_h2"><?php the_field('part_title'); ?></div>
                <div class="main_excerpt"><?php the_field('part_desc'); ?></div>
                <div class="partners_list">
                    <?php while( have_rows('part_list') ): the_row(); ?>
                        <div class="partners_list_item">
                            <picture><img src="<?php the_sub_field('part_img'); ?>"/></picture>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="main_form_box">
            <div class="flex_container">
                <div class="col_left">
                    <div class="title"><?php the_field('form_title'); ?></div>
                    <div class="subtitle"><?php the_field('form_desc'); ?></div>
                </div>
                <div class="col_right">
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Форма на главной"]');?>
                </div>
            </div>
        </div>
        <div class="main_seotext">
            <h1 class="main_h2"><?php the_title(); ?></h1>
            <div class="desc">
               <?php
                   the_post();
                   the_content();
               ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
