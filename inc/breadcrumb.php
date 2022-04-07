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
            <?php (is_archive())?the_archive_title():the_title(); ?>
        </h1>
    </div>
</div>