<?php get_header(); ?>
<main id="main">
  <?php while ( have_posts() ) : the_post(); ?>
    <div href="<?php the_permalink(); ?>" class="card">
      <div class="card-page cart-page-front">
        <div class="card-page cart-page-outside">
          <p class="card-band"><?php the_time( get_option( 'date_format' ) ); ?></p>
          <div class="card-front-txt">
            <div class="note-category">
              <!-- カテゴリ出力 -->
              <?php
                $terms = get_the_terms( $post->ID, 'category' );
                if ($terms && ! is_wp_error($terms)): ?>
                <?php foreach($terms as $term): ?>
                <p class="txtStroke"><?php echo $term->name; ?></p>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          
            <h2><?php the_title(); ?></h2>
          </div>
        </div>
        <div class="card-page cart-page-inside">
        </div>
      </div>
      <div class="card-page cart-page-bottom">
        <div class="article-index">
          <a href="<?php the_permalink(); ?>">
            <?php
                global $post;
                //マッチングで<h>タグを取得する
                preg_match_all('/<h[1-6]>.+<\/h[1-6]>/u', $post->post_content, $matches);
                //取得した<h>タグの個数をカウント
                $matches_count = count($matches[0]);
                if(($matches[0])){
                    //<h>タグがある場合
                    ?>
                    <h1>目次</h1>
                    <?php
                    for ($i = 0; $i < $matches_count; $i++){
                        echo  $matches[0][$i];
                    }
                  }else{
                    //<h>タグがない場合
                    if(mb_strlen($post->post_content, 'UTF-8')>200){
                      ?>
                      <div class="article-txt">
                      <?php
                      //pはそのまま残す
                      $content= mb_substr(strip_tags($post->post_content, '<p>'), 0, 600, 'UTF-8');
                      echo $content;
                      ?>
                      </div>
                      <?php
                    }else{
                      echo strip_tags($post->post_content, '<br><span>');
                    }
                }   
            ?>
          </a>
        </div>
      </div>
    </div>
  <?php endwhile; ?>
</main>
<?php get_footer(); ?>
