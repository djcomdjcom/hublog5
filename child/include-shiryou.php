<article class="include-shiryou clearfix wrapper">


	<div class="inbox clearfix">
		<div class="l-box w33 cell01">
			<p class="title txt-lll">資料請求のお申込み</p>

			<p>
				お電話での資料請求も承ります。<br>
				<span>※電話に出たスタッフに</span>
				<span>「<?php echo (get_option('profile_shop_name')) ?>の資料がほしい」</span>
				<span>とお伝えください。</span>
			</p>

		</div>
		<!--L-->


		<div class="r-box w66 clearfix">

			<div class="l-box w50 cell02">
				<div class="inbox">
					お電話でのお問い合わせ
					<br>
					<span class="profile_inquiry_tel">
						<?php
						$profile_inquiry_tel = ( get_option( 'profile_inquiry_tel' ) ) ? get_option( 'profile_inquiry_tel' ) : get_option( 'profile_main_tel' );
						if ( !empty( $profile_inquiry_tel ) ): ?>&nbsp;
						<span class="telnum">
							<?php echo $profile_inquiry_tel; ?>&nbsp;</span>
						<?php endif;
?>
					</span>

					<span class="title">営業時間：<?php echo (get_option('profile_opening_hours')) ?>
					</span>
					<span class="title">定休日：<?php echo (get_option('profile_holiday')) ?></span>
					
					
	<?php if (get_option('profile_opening_hours_hosoku') ):?><br>
	<?php echo  get_option('profile_opening_hours_hosoku');?>
	<?php endif ;?>
					
				</div>

				<p class="btn toshiryou"><a href="/shiryou">無料資料請求はこちら</a>
				</p>
			</div>
			<!--L-->
			<div class="r-box w50 cell03">

				<span class="w100 inc_shiryou-img">
<img src="<?php bloginfo('stylesheet_directory'); ?>/images/inc_shiryou-img.jpg" alt="家づくり資料セットの内容"/>
</span>
			

			</div>
			<!--R-->





		</div>
		<!--R-->

	</div>

</article>
<!--home-shiryou-->