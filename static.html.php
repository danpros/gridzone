<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<?php if (isset($is_front) || config('static.frontpage') === true):?>
<style>.page {padding: 20px;}</style>
<?php endif;?>
<article class="page type-page status-publish hentry">	
	<div class="post-wrapper group">
		<header class="entry-header group">
			<h1 class="entry-title"><?php echo $p->title;?></h1>
			<?php if (login()) { echo '<span class="edit-post"><a href="'. $p->url .'/edit?destination=post"><i class="far fa-edit"></i> Edit</a></span>'; } ?>
		</header>
		<div class="entry-content">
			<div class="entry themeform">
				<?php echo $p->body;?>
				<div class="clear"></div>
			</div><!--/.entry-->
		</div>
		<div class="entry-footer group"></div>
	</div>
</article>