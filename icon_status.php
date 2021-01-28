<?php
if ( post_custom( 'event-status' ) == '予約受付中' ):
  ?>
<p class="event-status invitation_on">
予約受付中
</p>

<?php
elseif ( post_custom( 'sale-status' ) == '受付終了' ):
  ?>
<p class="event-status invitation_off">
受付終了
</p>
<?php else:?>

<?php endif; ?>
