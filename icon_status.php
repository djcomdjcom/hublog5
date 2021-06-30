
<?php
if ( post_custom( 'event-status' ) == 'invitation_afewleft' ): ?>

<span class="event-status invitation_afewleft w100">
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_invitation_afewleft@2x.png" alt="残りわずか"/></span>

<?php
elseif ( post_custom( 'sale-status' ) == 'invitation_off' ): ?>

<span class="event-status invitation_off w100 ">
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_invitation_off@2x.png" alt="受付終了"/></span>

<?php else:?>

<span class="event-status invitation_on w100 ">
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/icon_invitation_on@2x.png"  alt="予約受付中"/></span>
<?php endif; ?>

