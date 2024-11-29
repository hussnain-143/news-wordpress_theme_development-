<?php get_header(); ?>
<div class="main-page">
    <div class="main-content">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?> <div class="page-content">
            <h1 class="post-title"><?php the_title(); ?></h1>
            <h4 class="post-category">Category : <?php the_category(); ?></h4>
            <p class="post-content"> <?php the_excerpt(); ?></p>
            <h4 class="post-author">Author : <?php the_author( );?></h4>
            <h4 class="post-date">Posted on : <?php the_time('F j, Y'); ?></h4>
            </div>
    <?php
        }
    }
    ?>
    </div>
    <?php get_sidebar()?>
</div>
<div class="news-pagination">
    <?php echo paginate_links(); ?>
</div>
<?php get_footer(  )?>
