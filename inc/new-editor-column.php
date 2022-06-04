<?php

function add_post_column( $columns ){
	$columns['post_id_clmn'] = 'ID'; // $columns['Column ID'] = 'Column Title';
	return $columns;
}
add_filter('manage_posts_columns', 'add_post_column', 5);

function column_post_content( $column, $id ){
	if( $column === 'post_id_clmn')
		echo $id;
}
add_action('manage_posts_custom_column', 'column_post_content', 5, 2);



function add_page_column( $columns ){
	$columns['page_id_clmn'] = 'ID'; // $columns['Column ID'] = 'Column Title';
	return $columns;
}
add_filter('manage_pages_columns', 'add_page_column', 5);

function column_page_content( $column, $id ){
	if( $column === 'page_id_clmn')
		echo $id;
}
add_action('manage_pages_custom_column', 'column_page_content', 5, 2);
?>