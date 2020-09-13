<?php 
// Tự động thêm <title>
// =============================
add_theme_support('title-tag');
// =============================
// Trình soạn thảo editor về phiên bản cũ
// =============================
add_filter('use_block_editor_for_post', '__return_false');
// Đăng ký và sử dụng style
require_once(get_template_directory() . '/inc/enqueue.php');
?>