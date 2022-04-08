<?php
/*
 Template name: Contacts
 */

get_header();
?>

<?php get_template_part('inc/breadcrumb'); ?>

<div class="container">
    <div class="page_content">
        <div class="content">
            <?php if(get_field('map')): ?>
                <div class="map"><?php the_field('map'); ?></div>
            <?php endif; ?>
            <div class="contacts_form_row">
                <div class="col_left">
                    <?php
                    the_post();
                    the_content();
                    ?>
                </div>
                <div class="col_right">
                    <div class="form_box">
                        <div class="title">Остались вопросы?</div>
                        <div class="sub_title">Заполните форму и мы рассчитаем стоимость заказа</div>
                        <?php echo do_shortcode('[contact-form-7 id="236" title="Рассчитать заказ"]');?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>
