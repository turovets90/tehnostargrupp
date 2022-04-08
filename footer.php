<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tehnostargrupp
 */

?>

<footer>
    <div class="container">
        <div class="flex_container">
            <div class="col_left">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'footer_menu',
                    )
                );
                ?>
                <div class="row">
                    <div class="col-12 col-md-8 col_xl">
                        <div class="copyright">© 2021 - <?php echo date('Y')?> tehnostargrupp.by. Все права защищены.</div>
                        <div class="dev">Сайт разработан <a href="https://www.seologic.by/" target="_blank">seologic.by</a></div>
                    </div>
                    <div class="col-12 col-md-4 fj_end"><a class="f_feedback" href="#feedback" data-toggle="modal">Связаться с нами</a></div>
                </div>
            </div>
            <div class="col_right">
                <ul class="c_menu">
                    <?php
                    $phone1 = get_field('telefon_1',23);
                    if( $phone1 ):
                        $link_url1 = $phone1['url'];
                        $link_title1 = $phone1['title'];
                        ?>
                        <li><a class="phone" href="<?php echo esc_url( $link_url1 ); ?>"><?php echo htmlspecialchars_decode( $link_title1 ); ?></a></li>
                    <?php endif; ?>
                    <?php
                    $phone2 = get_field('telefon_2',23);
                    if( $phone1 ):
                        $link_url2 = $phone2['url'];
                        $link_title2 = $phone2['title'];
                        ?>
                        <li><a class="phone" href="<?php echo esc_url( $link_url2 ); ?>"><?php echo htmlspecialchars_decode( $link_title2 ); ?></a></li>
                    <?php endif; ?>
                    <?php if(get_field('location',23)): ?>
                        <li><span class="location"><?php the_field('location',23); ?></span></li>
                    <?php endif; ?>
                    <?php if(get_field('email',23)): ?>
                        <li><a class="email" href="mailto:<?php the_field('email',23); ?>"><?php the_field('email',23); ?></a></li>
                    <?php endif; ?>
                </ul>
                <div class="col_mb">
                    <div class="copyright">© 2021 - <?php echo date('Y')?> tehnostargrupp.by. Все права защищены.</div>
                    <div class="dev">Сайт разработан <a href="https://www.seologic.by/" target="_blank">seologic.by</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal fade" id="feedback" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button class="close" data-dismiss="modal" aria-label="Close"></button>
                <div class="form_box">
                    <div class="title">Рассчитать заказ</div>
                    <div class="sub_title">Заполните форму и мы рассчитаем стоимость заказа</div>
                    <?php echo do_shortcode('[contact-form-7 id="236" title="Рассчитать заказ"]');?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

</body>
</html>
