<?php 
get_header(); ?>
<div class="container">
	<div id="takira-single" class="takira-content">


		<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header>
				<h1><?php the_title(); ?></h1>
			</header>
			<?php if ( get_post_gallery() ) : ?>
			<div class="takira-col-md-4">
				<div class="takira_padding_right_20">
					<?php the_content(); ?>
				</div>
			</div>
			<div class="takira-col-md-8">
				<?php 
				$gallery = get_post_gallery( get_the_ID(), false );
				$ids = explode(',', $gallery['ids']);
				$src = $gallery['src'];
				$i = 0;
				if ( $src ) {
					foreach ( $src as $attachment ) {
						$thumb_img = get_post( $ids[$i] );
						if ($thumb_img->post_excerpt=='') {
							$caption='';
						} else {
					      $caption =	'<div class="t-caption">'.$thumb_img->post_excerpt.'</div>';
					  }
						$image = aq_resize($attachment, 730, null, true);
						if ($image == false) {
							$image = $attachment;
						} 
						?><div class="prot_image_wrapper"><a class="prot_image" href="<?php echo $image ?>"><img src="<?php echo $image ?>" alt="" /></a><?php echo $caption?></div>
						<?php $i++;}
					} ?>
				</div>
			<?php else: ?>
			<div class="takira-col-md-12">
					<?php the_content(); ?>
			</div>
		<?php endif;?>
		<div style="clear:both"></div>
	</article><!-- #post -->
<?php endwhile; // end of the loop. ?>

</div>
</div>
<?php get_footer(); ?>l