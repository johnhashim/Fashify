<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fashify
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="sidebar widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<style>
.ad{
	height: auto;
    padding: 9px 5px;
    margin: auto;
    box-shadow: 0px 0px 5px #777;
    background: #fff;
    overflow: hidden;
	border: 1px solid #eee;
	border-radius: 4px;	
	text-align: center;
}
.advert{
	
}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  .advertize{
	display:none;
}
}

</style>
<div class="advert">
<div class="ad">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 970by250 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:600px"
     data-ad-client="ca-pub-7616051391644176"
     data-ad-slot="7650038623"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>
</aside><!-- #secondary -->
