
<?php



if ( post_custom( 'event-status' ) == 'invitation_on' ):
  ?>
<span class="event-status invitation_on w100 maxw-150 mx-auto">
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_yoyaku.png" alt=""/></span>

<?php
elseif ( post_custom( 'sale-status' ) == 'invitation_off' ):
  ?>
<p class="event-status invitation_off">
受付終了
</p>
<?php else:?>
<span class="event-status invitation_on w100 maxw-180 mx-auto">
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_invitation_on@2x.png"  alt=""/></span>

<?php endif; ?>
