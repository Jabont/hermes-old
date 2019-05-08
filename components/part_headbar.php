<div id="headbar" class="padding">
	<theboxes class="middle">
		<box col="6" mob="8"><inner class="<?php if ($data->page != 'editor'): ?>v-middle-wrap<?php else: ?>v-bottom-wrap<?php endif ?>">
			<a href="<?=$GLOBALS['site_url']?>">
				<img src="<?=$GLOBALS['logo_url']?>" class="logo auto">
			</a>
			<?php if ($data->page != 'editor'): ?>
				<a href="<?=$GLOBALS['site_url']?>">
					<h4 class="cl-ci1 inline-block padding-s-hzt"><?=$GLOBALS['site_name']?></h4>
					<span class="cl-white roboto mob-size-s">by IT KMITL</span>
				</a>
				<?php else: ?>
					<span class="b7 h8 padding-hzt">Example 1</span> 
					<span class="typcn h8 typcn-pencil"></span>
			<?php endif ?>

		</a>
	</inner></box>
	
	<box col="6" mob="4"><inner class="t-right">
		<?php get_headbar_menu($data->page)?>
	</inner></box>
</theboxes>
</div>