<?php
/**
 * 投稿者一覧表示用テンプレート
 *
 *loop-authors.php
 */

//表示したいユーザーのログイン名を設定
$authers = array(
	'hublogadmin',
	'tanaka',
	'sato',
);



foreach ($authers as $auther){
	$user_info = get_userdatabylogin( $auther );

/*
以下のURLを参考に、必要な値を表示させる
よく使う項目
・ $user_info->last_name	... 姓
・ $user_info->first_name	... 名
・ $user_info->display_name ... ブログ上の表示名
・ $user_info->user_url		... ウェブサイト
・ $user_info->description	... プロフィール
その他は以下のURLを参考にする
 http://wpdocs.sourceforge.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/get_userdata
*/
?>




<div class="user_info clearfix profile flex50">
	<div class="clearfix">
		<span class="w100 thumbnail">
		<img height="150" width="150" class="photo <?php echo $user_info->nickname; ?>" alt="<?php echo $user_info->post; ?>/<?php echo $user_info->division; ?>/<?php echo $user_info->last_name; ?>&nbsp;<?php echo $user_info->first_name; ?>" src="/wp-content/uploads/userphoto/<?php echo $user_info->id; ?>.jpg">

		</span>
		<div class="user-meta clearfix">
			<div class="user_name">
				<?php 	if  ($user_info->post) :?>
				<?php echo '<span class="post">',($user_info->post),'</span>' ; ?>
				<?php endif; ?>

				<?php 	if ( $user_info->division) :?>
				<?php echo '<span class="division">',($user_info->division),'</span>'; ?>
				<?php endif; ?>

				<em class="fullname cleartype"><?php echo $user_info->last_name; ?>&nbsp;<?php echo $user_info->first_name; ?></em>
			</div>
			<div class="user_description"><?php echo wpautop($user_info->description); ?></div>
		</div>
	</div>
	<?php
	//if ( current_user_can('manage_options') ) { var_dump($user_info); }
	?>
</div>



<?php
}//endforeach
