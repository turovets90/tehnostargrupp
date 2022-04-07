<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tehnostargrupp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body <?php body_class(); ?> id="body">

<header>
    <div class="container">
        <div class="top_bar">
            <?php if(get_field('email',23)): ?>
                <div class="col_left">
                    <ul class="c_menu">
                        <li><a class="email" href="mailto:<?php the_field('email',23); ?>"><?php the_field('email',23); ?></a></li>
                    </ul>
                </div>
            <?php endif; ?>
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
                    <li><a class="feedback" href="#feedback" data-toggle="modal">Связаться с нами</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nav_bar">
        <div class="container">
            <div class="flex_container">
                <div class="logo">
                    <?php the_custom_logo(); ?>
                </div>
                <div class="main_menu">
                    <div class="mm_close"></div>
                    <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'main_menu',
                            'menu_id'        => 'primary-menu',
                        )
                    );
                    ?>
                </div>
                <ul class="right_menu">
                    <li>
                        <div class="search_box dropdown">
                            <button class="search_btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <?php get_search_form();?>
                            </div>
                        </div>
                    </li>
                    <li class="mm_btn">
                        <button class="hamburger"><span></span><span></span><span></span></button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>


