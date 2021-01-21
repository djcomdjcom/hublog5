<?php
/**
 * looppart-side_event.php
 *
 * @テーマ名	hublog
 * @更新日付	2012.04.05
 *
 */
?>
<article id="post-<?php the_ID(); ?>" class="post clearfix style-event  <?php if (in_category('event-closed')) echo 'closed'; ?>">
    <?php if ( is_new( WHATSNEW_TTL ) ) : ?>
    <span class="tmb-icon new">新着</span>
    <?php endif; ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="thumbnail"> <span class="attachment">
    <?php
    if ( function_exists( 'the_post_image' ) ) {
      if ( the_post_image( 'medium' ) === false ) {
        ?>
    <img src="<?php echo get_template_image('noimage');?>" alt="No Image" />
    <?php
    }
    }
    ?>
    </span> </a>
    <div class="metabox">
      <p class="title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s'), the_title_attribute('echo=0')); ?>">
        <?php if(post_custom('catchcopy')) :?>
        <?php echo nl2br ( post_custom('catchcopy') ); ?>
        <?php else :?>
        <?php the_title(); ?>
        <?php endif ;?>
        </a></p>
      <div class="event-meta">
        <?php if (in_category('event-closed')) : ?>
        <span class="event-closed cleartype"> このイベントは終了しました。<br />
        ありがとうございました。 </span>
        <?php endif  ?>
        <span class="event-date"> <span>開催日：</span><?php echo post_custom('event-date'); ?> </span> <span class="event-hour"> <span>開催時間：</span><?php echo post_custom('event-hour'); ?> </span> <span class="event-at"> <span>開催場所：</span><?php echo post_custom('event-at'); ?> </span> </div>
      <!--event-nmeta--> 
      
      <span class="todetail"> <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">詳細・参加方法</a> </span> </div>
    <!--metabox--> 
  
  <?php edit_post_link(__('Edit'), ''); ?>
</article>
