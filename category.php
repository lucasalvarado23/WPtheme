<?php
/**
* A Simple Category Template
*/
 
get_header(); ?> 
 
<section id="primary" class="site-content">
<div id="content" role="main">
 
<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>
 
<header class="archive-header">
 
<?php if(is_category( 'Featured' )) : ?>
    <h1 class="archive-title">Featured Articles:</h1>
<?php  else: ?>
    <h1 class="archive-title">Category Archive: <?php single_cat_title(); ?> </h1>
<?php endif; ?>
 
</header>
 
<?php
 
// The Loop
while ( have_posts() ) : the_post(); ?>
<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
 
<div class="entry">
<?php the_content(); ?>
 
 <p class="postmetadata"><?php
  comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
?></p>
</div>
 
<?php endwhile; 
 
else: ?>
<p>Sorry, no posts matched your criteria.</p>
 
 
<?php endif; ?>
</div>
</section>
 
 
<?php get_sidebar(); ?>
<?php get_footer(); ?>