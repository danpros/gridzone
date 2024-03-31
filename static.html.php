<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<?php if (isset($is_front) || config('static.frontpage') === true):?>
<style>.page {padding: 20px;}</style>
<?php endif;?>
<article class="page type-page status-publish hentry">	
	<div class="post-wrapper group">
		<header class="entry-header group">
			<h1 class="entry-title"><?php echo $p->title;?></h1>
			<?php if (authorized($p)) { echo '<span class="edit-post"><a href="'. $p->url .'/edit?destination=post"><i class="far fa-edit"></i> Edit</a></span>'; } ?>
		</header>
		<div class="entry-content">
			<div class="entry themeform">
				<?php echo $p->body;?>
				<div class="clear"></div>
			</div><!--/.entry-->
		</div>
		<div class="entry-footer group">
		
			<ul class="post-nav group">
			<?php if (!empty($prev)): ?>
				<li class="next"><a href="<?php echo($prev['url']); ?>" rel="next"><i class="fas fa-chevron-right"></i><strong><?php echo i18n('Next');?></strong> <span><?php echo($prev['title']); ?></span></a></li>
			<?php endif;?>
			<?php if (!empty($next)): ?>
				<li class="previous"><a href="<?php echo($next['url']); ?>" rel="prev"><i class="fas fa-chevron-left"></i><strong><?php echo i18n('Prev');?></strong> <span><?php echo($next['title']); ?></span></a></li>
			<?php endif;?>
			</ul>
		
		</div>
	</div>
</article>