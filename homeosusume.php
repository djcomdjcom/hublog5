<?php
/**
 * homeosusume.php
 * @テーマ名	daioo-r
 * @更新日付	2012.09.06
 *
 */
?>



					 <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php get_template_part('looppart', 'bukken'); ?>
                        <?php endwhile; ?>
    
                        <?php else: ?>
                      <div class="post noentry">
                        <p>申し訳ございません<br />
                        現在、公開可能な物件がございません。<br />
												</p>
                      </div>
    
                    <?php endif; ?>


