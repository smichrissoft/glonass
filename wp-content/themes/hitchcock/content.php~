<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'post-thumb' ); ?>
<?php $category = get_the_category($post->id); ?>
<?php if ($category[0]->name == "События"){ ?>

<a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" <?php post_class('post'); ?> style="background-image: url(<?php echo $thumb['0']; ?>);">

	<div class="post-overlay">
		
		<?php if ( is_sticky() && !is_single() ) : ?>
		
			<p><span class="fa fw fa-star"></span><?php _e('Sticky','hitchcock'); ?></p>
		
		<?php endif; ?>
		
		<div class="archive-post-header">

		    <p class="archive-post-date"><?php the_time(get_option('date_format')); ?></p>
							
		    <?php if ( get_the_title() != '' ) : ?>
		    	<h2 class="archive-post-title"><?php the_title(); ?></h2>
		    	<p style="margin-top: 20px;"><?php $content = get_the_content(); echo substr($content, 0, 250).'...';?></p>
		    <?php endif; ?>
	    
		</div>

	</div>
	
</a> <!-- /post -->

<?php ;} ?>