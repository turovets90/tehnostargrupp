<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
         404. Страница не найдена
        </h1>
    </div>
</div>

<div class="container">
    <div class="page_content">
        <div class="content">
           <p>Страница не найдена. Запрашиваемая страница не найдена или была перемещена по другому адресу</p>
            <?php get_search_form(); ?>
            <ul class="all_pages">
                <?php wp_list_pages( ) ?>
            </ul>
        </div>
    </div>
</div>

<?php
get_footer();
