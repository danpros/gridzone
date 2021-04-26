<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<div class="masonry" id="masonry">
<?php foreach ($posts as $p):?>
<?php $img = get_image($p->body);?>
	<article class="masonry-item post hentry">
		<div class="masonry-inner">
		<?php if (!empty($posts)) { ?>
			<?php if (!empty($p->image) || !empty($img)  || empty($vidTmb)) :?>
			<div class="entry-top">
				<a class="entry-thumbnail" href="<?php echo $p->url;?>">
					<?php if (!empty($p->image)) {?>
					<img src="<?php echo $p->image;?>" width="100%">
					<?php } elseif (!empty($p->video)) {?>
					<img src="//img.youtube.com/vi/<?php echo get_video_id($p->video);?>/sddefault.jpg" width="100%">
					<span class="thumb-icon"><i class="fas fa-play"></i></span>
					<?php } elseif (!empty($p->audio)) {?>
					<img src="<?php echo site_url();?>themes/gridzone/img/soundcloud.jpg" width="100%">
					<span class="thumb-icon"><i class="fas fa-volume-up"></i></span>
					<?php } elseif (!empty($img)) {?>
					<img src="<?php echo $img;?>" width="100%">
					<?php } ?>
				</a>
				
				<div class="entry-category"><?php echo $p->category;?></div>
			</div>
			<?php endif;?>

			<?php if (!empty($p->link)) {?>
			<h2 class="entry-title">
				<a href="<?php echo $p->link;?>" target="_blank" rel="bookmark"><?php echo $p->title;?> <i class="fas fa-external-link-alt"></i></a>
			</h2><!--/.entry-title-->
			<?php } elseif (!empty($p->quote)) {?>
			<h2 class="entry-title">
				<a href="<?php echo $p->url;?>" rel="bookmark"><blockquote><i class="fas fa-quote-left"></i> <?php echo $p->quote;?> <i class="fas fa-quote-right"></i></blockquote></a>
			</h2><!--/.entry-title-->
			<?php } else {?>
			<h2 class="entry-title">
				<a href="<?php echo $p->url;?>" rel="bookmark"><?php echo $p->title;?></a>
			</h2><!--/.entry-title-->
			<?php } ?>
			
			<?php if (empty($p->image) && empty($img) && empty($p->video) && empty($p->audio) && empty($p->quote)) :?>
				<div class="entry-meta"><?php echo $p->description;?></div>
			<?php endif;?>
			<ul class="entry-meta group">
				<li class="entry-date"><i class="far fa-calendar"></i> <?php echo format_date($p->date);?></li>
				<li class="entry-comments"><a class="entry-comments" href="http://demo.alx.media/gridzone/2019/07/07/combining-design/#comments"><i class="far fa-comment"></i><span>4</span></a></li>
			</ul>
		<?php } else { ?>
			<h2 class="entry-title">
				Posts not found!
			</h2><!--/.entry-title-->
		<?php } ?>			
		</div>
	</article><!--/.post-->	
<?php endforeach;?>
</div>

<?php if (!empty($posts)): ?>
<?php if (!empty($pagination['prev']) || !empty($pagination['next'])): ?>
<div class="pagination group">
    <div class="wp-pagenavi">
        <?php if (!empty($pagination['prev'])): ?>
            <a class="prev page-numbers" href="?page=<?php echo $page - 1 ?>">«</a>
        <?php endif; ?>
        <span class="page-numbers"><?php echo $pagination['pagenum'];?></span>
        <?php if (!empty($pagination['next'])): ?>
            <a class="next page-numbers" href="?page=<?php echo $page + 1 ?>">»</a>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>
<?php endif;?>