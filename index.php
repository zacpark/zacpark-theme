<?php get_header(); ?>

   
  <div id="content">
    <p class="gy">杂 草 &nbsp;&nbsp; 旅 行 &nbsp;&nbsp; 朋 友</p>
    <!-- 主循环开始 -->
    <?php if (have_posts()) : ?>
    <!-- 排除其余分类 -->
    <?php query_posts('cat=-3,-1'); ?>
    <?php while (have_posts()) : the_post(); ?>

      <div class="post" id="post-<?php the_ID();?>">
            <div class="left">
              <a href="<?php the_permalink();?>" title="<?php the_title();?>" class="img_a">
                  <!-- 活动封面 -->
                  <div><?php the_post_thumbnail('thumb_index');?></div>
                    <div class="touming"></div>
                    <div class="wenz">
                      <!-- 活动标题 -->
                      <h2><?php the_title();?></h2>
                      <!-- 活动描述 -->
                      <p><?php the_excerpt();?></p>
                    </div>
              </a>
            </div>
            <div class="right">
              <!-- 活动期数 -->
              <span class="sz"><?php echo get_post_meta($post->ID, "Event_Vol",true);?></span>
            </div>
            <div class="clear"></div>
      </div>
    <?php endwhile; ?>
    <?php else: ?>
      <div class="post">
        <h2><?php_e('Not Found');?></h2>
      </div> 
    <?php endif; ?>
    <!-- 主循环结束 -->
  </div>


<?php get_footer(); ?>