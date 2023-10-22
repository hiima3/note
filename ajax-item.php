require_once '../../../wp-load.php';

$offset         = isset( $_POST['post_num_now'] ) ? $_POST['post_num_now'] : 1;
$posts_per_page = isset( $_POST['post_num_add'] ) ? $_POST['post_num_add'] : 0;

$ajax_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'posts_per_page' => $posts_per_page,
		'offset'         => $offset,
	)
);
?>
<?php if ( $ajax_query->have_posts() ) : ?>
	<?php while ( $ajax_query->have_posts() ) : ?>
		<?php $ajax_query->the_post(); ?>

		<!-- 一覧のアイテム -->

	<?php endwhile; ?>
<?php endif; ?>
<?php
wp_reset_postdata();