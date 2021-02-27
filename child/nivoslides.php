<?php
/**
 * flexslider.php 
 *
 * @テーマ名	hublog
 * 全てのサイドバーに表示されるパーツ
 */
?>


<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/js/nivo/nivo-slider.css" media="screen" />
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/nivo/jquery.nivo.slider.pack.js"></script>



<script type="text/javascript">
$(window).load(function() {
    $('#slideshow').nivoSlider({
        effect: 'boxRandom,boxRain,boxRainReverse', // 画像切り替え時のアニメーション
        slices: 15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed: 500, // アニメーション速度(ms)
        pauseTime: 3000, // 画像切り替えまでの時間(ms)
        startSlide:0, // 初めに表示する画像（1枚目～表示：0）
        directionNavHide:true, // マウスホバー時のみdirectionNavを表示
        controlNav:true, // コントロールナビの表示
        controlNavThumbs:false, // コントロールナビに画像サムネイルを使用
        keyboardNav:true, // スライドをキーボードで操作
        pauseOnHover: true, // マウスホバー時に切り替えを一時停止
        manualAdvance: false, // 自動スライドしない
        captionOpacity:0.8, // キャプションの透過度
        prevText: 'Prev', // 前ボタンの名前
        nextText: 'Next', // 次ボタンの名前
        randomStart: false, // 最初に表示する画像をランダムに
        beforeChange: function(){}, // スライド切り替え前のコールバック関数
        afterChange: function(){}, // スライド切り替え後のコールバック関数
        slideshowEnd: function(){}, //　全ての画像を表示した後のコールバック関数
        lastSlide: function(){}, // 最後の画像が表示された後スライドショーをSTOP
        afterLoad: function(){} // スライドのロードが完了したときのコールバック関数
    });
});
</script>
	
<style>
</style>
	


<div class="nivoSlider posts" id="slideshow">

<?php //スライドショー
     global $post;
     $my_posts= get_posts(array(
			'post_type' => ('slideimage'),
			'showposts' => 99,

			'orderby' => date,
			'order' => ASC
     ));
     foreach($my_posts as $post):setup_postdata($post);
?>
<?php get_template_part('looppart', 'home-slider'); ?>
<?php endforeach; ?>
<?php wp_reset_query(); ?>


</div>


