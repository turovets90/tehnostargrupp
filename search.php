<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package tehnostargrupp
 */

get_header();
?>


<div class="page_content_header">
    <div class="container">
        <div class="breadcrumb_scroll_block">
            <ul class="breadcrumb_list">
                <li>
                    <a class="home" href="/">
                        <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.75 15.5V10.25H11.25V15.5H15.625V8.5H18.25L9.5 0.625L0.75 8.5H3.375V15.5H7.75Z" fill="#312F30"/>
                        </svg>
                    </a>
                </li>
                <?php if(function_exists('bcn_display')) {
                    bcn_display();
                }?>
            </ul>
        </div>
        <h1 class="page_title">
            Поиск
        </h1>
    </div>
</div>

<div class="container">
    <div class="page_content">
        <div class="content">
            <?php get_search_form(); ?>
            <div class="result_count">
                Найдено: <?php /* Search Count */ $allsearch = new WP_Query("s=$s&showposts=-1");
                $count = $allsearch->post_count; _e('');
                echo $count . ' ';
                wp_reset_query(); ?>
            </div>
            <?php if ( have_posts() ) : ?>
                <div class="results">
                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content', 'search' );
                    endwhile;
                    the_posts_navigation();
                else :
                    get_template_part( 'template-parts/content', 'none' );?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer();
