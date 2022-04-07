<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tehnostargrupp
 */

?>


<div class="results_item" id="post-<?php the_ID(); ?>">
    <a class="title" href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
    </a>
    <div class="excerpt">
        <?php the_excerpt(); ?>
    </div>
</div>

