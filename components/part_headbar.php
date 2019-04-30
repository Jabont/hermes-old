<div id="headbar" class="padding">
	<theboxes class="middle">
		<box col="6" mob="8"><inner class="v-middle-wrap">
			<a href="<?=$GLOBALS['site_url']?>">
				<img src="<?=$GLOBALS['logo_url']?>" class="logo auto">
				<h4 class="cl-ci1 inline-block padding-s-hzt"><?=$GLOBALS['site_name']?></h4>
				<span class="cl-white roboto mob-size-s">by IT KMITL</span>
			</a>
		</inner></box>
		<box col="6" mob="4"><inner class="t-right">
			<?php get_headbar_menu($data->page)?>
		</inner></box>
	</theboxes>
</div>