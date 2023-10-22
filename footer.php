<div class="pagination">
    <?php
    $prev_link = get_previous_posts_link('');
    $next_link = get_next_posts_link('');
    
    if ($prev_link || $next_link) {
        echo '<div class="nav-links">';
        echo '<div class="nav-links_prev">';
        echo $prev_link;
        echo '</div>';
        echo '<div class="nav-links_next">';
        echo $next_link;
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>
    <!-- partial -->
    <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
    <?php wp_footer(); ?>
</body>
</html>