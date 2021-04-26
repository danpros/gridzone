<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<article class="page type-page status-publish hentry">	
	<div class="post-wrapper group">
		<header class="entry-header group">
			<h1 class="entry-title">Page not found!</h1>
		</header>
		<div class="entry-content">
			<div class="entry themeform">
				<p>Please search to find what you're looking for or visit our <a href="<?php echo site_url() ?>">homepage</a> instead.</p>
				<?php echo search() ?>
				<div class="clear"></div>
			</div><!--/.entry-->
		</div>
		<div class="entry-footer group"></div>
	</div>
</article>