<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<!doctype html>
<html lang="<?php echo blog_language();?>">
<head>
    <?php echo head_contents();?>
    <title><?php echo $title;?></title>
    <meta name="description" content="<?php echo $description; ?>"/>
    <link rel="canonical" href="<?php echo $canonical; ?>" />
<link rel="stylesheet" id="gridzone-style-css" href="<?php echo theme_path();?>css/style.css" type="text/css" media="all">
<link rel="stylesheet" id="gridzone-responsive-css" href="<?php echo theme_path();?>css/responsive.css" type="text/css" media="all" />
<link rel="stylesheet" id="gridzone-font-awesome-css" href="<?php echo theme_path();?>fonts/all.min.css" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo theme_path();?>js/jquery.js" id="jquery-core-js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap" rel="stylesheet"> 
</head>

<body class="home blog col-2cl <?php if (!is_index()):?>single<?php endif;?>">

<a class="skip-link screen-reader-text" href="#page">Skip to content</a>

<div id="wrapper">
<?php if (facebook()) { echo facebook(); } ?>
<?php if (login()) { toolbar(); } ?>
	<div id="header-sticky">
		<header id="header" class="hide-on-scroll-down nav-menu-dropdown-left">

			<div class="group">
				<h1 class="site-title"><a href="<?php echo site_url();?>" rel="home"><?php echo blog_title();?></a></h1>
				<p class="site-description"><?php echo blog_tagline();?></p>

				<div id="wrap-nav-header" class="wrap-nav">
					<nav id="nav-header-nav" class="main-navigation nav-menu">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<span class="screen-reader-text">Expand Menu</span>
							<div class="menu-toggle-icon"><span></span><span></span><span></span></div>
						</button>
						<div class="menu-header-container">
							<?php echo menu('menu');?>
						</div>		
					</nav>
				</div>
			</div>
			
		</header><!--/#header-->
	</div><!--/#header-sticky-->
	
	<div class="sidebar s2 group">
			<div class="search-trap-focus">
				<button class="toggle-search">
					<svg class="svg-icon" id="svg-search" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"><path d="M38.710696,48.0601792 L43,52.3494831 L41.3494831,54 L37.0601792,49.710696 C35.2632422,51.1481185 32.9839107,52.0076499 30.5038249,52.0076499 C24.7027226,52.0076499 20,47.3049272 20,41.5038249 C20,35.7027226 24.7027226,31 30.5038249,31 C36.3049272,31 41.0076499,35.7027226 41.0076499,41.5038249 C41.0076499,43.9839107 40.1481185,46.2632422 38.710696,48.0601792 Z M36.3875844,47.1716785 C37.8030221,45.7026647 38.6734666,43.7048964 38.6734666,41.5038249 C38.6734666,36.9918565 35.0157934,33.3341833 30.5038249,33.3341833 C25.9918565,33.3341833 22.3341833,36.9918565 22.3341833,41.5038249 C22.3341833,46.0157934 25.9918565,49.6734666 30.5038249,49.6734666 C32.7048964,49.6734666 34.7026647,48.8030221 36.1716785,47.3875844 C36.2023931,47.347638 36.2360451,47.3092237 36.2726343,47.2726343 C36.3092237,47.2360451 36.347638,47.2023931 36.3875844,47.1716785 Z" transform="translate(-20 -31)"></path></svg>
					<svg class="svg-icon" id="svg-close" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 16 16"><polygon fill="" fill-rule="evenodd" points="6.852 7.649 .399 1.195 1.445 .149 7.899 6.602 14.352 .149 15.399 1.195 8.945 7.649 15.399 14.102 14.352 15.149 7.899 8.695 1.445 15.149 .399 14.102"></polygon></svg>
				</button>
				
				<div class="search-expand">
					<div class="search-expand-inner">
						<form class="searchform themeform" >
						<div>
						<input type="text" class="search" name="search" onblur="if(this.value=='')this.value='<?php echo i18n('Search_for');?>';" onfocus="if(this.value=='<?php echo i18n('Search_for');?>')this.value='';" value="<?php echo i18n('Search_for');?>">
						</div>
						</form>					
					</div>
				</div>
				
			</div>
			
			<ul class="social-links">
				<?php if(!empty(config('social.facebook'))):?>
				<li><a rel="nofollow" class="social-tooltip" title="Facebook" href="<?php echo config('social.facebook');?>"><i class="fab fa-facebook"></i></a></li>
				<?php endif;?>
				<?php if(!empty(config('social.twitter'))):?>
				<li><a rel="nofollow" class="social-tooltip" title="Twitter" href="<?php echo config('social.twitter');?>"><i class="fab fa-twitter"></i></a></li>
				<?php endif;?>
				<?php if(!empty(config('social.github'))):?>
				<li><a rel="nofollow" class="social-tooltip" title="GitHub" href="<?php echo config('social.github');?>"><i class="fab fa-github"></i></a></li>
				<?php endif;?>
				<li><a class="social-tooltip" title="RSS" href="<?php echo site_url();?>feed/rss"><i class="fas fa-rss"></i></a></li>
			</ul>			
							
	</div>
	
	
	<div class="container" id="page">
		<div class="container-inner">			
			<div class="main">
				<div class="main-inner group">
					<div class="content">
					
						<?php if (isset($is_front)):?>
							<div id="profile" class="pad group">
								<div id="profile-inner">
									<div id="profile-image"><img src="<?php echo theme_path();?>img/avatar.png" alt="<?php echo blog_title();?>"></div>
									<div id="profile-name"><?php echo blog_tagline();?></div>
									<div id="profile-description"><?php echo blog_description();?></div>
								</div>
							</div>
						<?php endif;?>
						
						<?php if (isset($is_category)):?>
						<div class="page-title group">
							<div class="page-title-inner group">
								<h1><i class="far fa-folder"></i><?php echo $category->title;?></h1>
								<div class="notebox"><?php echo $category->body;?></div>			
							</div><!--/.page-title-inner-->
						</div>
						<?php endif;?>
						
						<?php if (isset($is_tag)):?>
						<div class="page-title group">
							<div class="page-title-inner group">
								<h1><i class="fas fa-tags"></i><?php echo $tag->title;?></h1>		
							</div><!--/.page-title-inner-->
						</div>
						<?php endif;?>
						
						<?php if (isset($is_archive)):?>
						<div class="page-title group">
							<div class="page-title-inner group">
								<h1><i class="fas fa-calendar-alt"></i><?php echo $archive->title;?></h1>		
							</div><!--/.page-title-inner-->
						</div>
						<?php endif;?>
						
						<?php if (isset($is_search)):?>
						<div class="page-title group">
							<div class="page-title-inner group">
								<h1><i class="fas fa-search"></i><?php echo $search->title;?></h1>		
							</div><!--/.page-title-inner-->
						</div>
						<?php endif;?>
						
						<?php if (isset($is_type)):?>
						<div class="page-title group">
							<div class="page-title-inner group">
								<h1><i class="fas fa-search"></i><?php echo $type->title;?></h1>		
							</div><!--/.page-title-inner-->
						</div>
						<?php endif;?>
						
						<?php if (isset($is_profile)):?>
						<div class="page-title group">
							<div class="page-title-inner group">
								<h1><i class="far fa-user"></i><?php echo $name;?></h1>
								<div class="notebox"><?php echo $about;?></div>			
							</div><!--/.page-title-inner-->
						</div>
						<?php endif;?>
						
						<?php if (isset($is_blog)):?>
						<div class="page-title group">
							<div class="page-title-inner group">
								<h1><i class="fas fa-blog"></i>Blog</h1>		
							</div><!--/.page-title-inner-->
						</div>
						<?php endif;?>
						

						<?php echo content();?>

					</div><!--/.content-->


					<div class="sidebar s1">
		
						<div class="sidebar-content">

							<?php if (!isset($is_front) && !isset($is_blog)):?>
							<div id="recent-posts" class="widget widget_recent_entries">
							<h3 class="group"><span><?php echo i18n("Recent_posts");?></span></h3>
								<?php echo recent_posts();?>
							</div>
							<?php endif;?>
							
							<?php if (config('views.counter') === 'true') :?>
							<?php if (isset($is_front) || isset($is_blog)):?>
							<div id="popular-posts" class="widget widget_popular_entries">
							<h3 class="group"><span><?php echo i18n("Popular_posts");?></span></h3>
								<?php echo popular_posts();?>
							</div>
							<?php endif;?>
							<?php endif;?>
							
							<?php if (disqus()): ?>
							<div id="recent-posts" class="widget">
							<h3 class="group"><span><?php echo i18n("Comments");?></span></h3>
								<script src="//<?php echo config('disqus.shortname');?>.disqus.com/recent_comments_widget.js?num_items=5&amp;hide_avatars=0&amp;avatar_size=48&amp;excerpt_length=200&amp;hide_mods=0" type="text/javascript"></script><style>li.dsq-widget-item {padding-top:15px;} img.dsq-widget-avatar {margin-right:5px;} ul.dsq-widget-list {padding-left:0px}</style>
							</div>
							<?php endif;?>

							<div id="alxtabs" class="widget widget_alx_tabs" style="margin-bottom: 40px;">

								<ul class="alx-tabs-nav group tab-count-3">
									<li class="alx-tab tab-category active"><a href="#tab-category" title="<?php echo i18n("Categories");?>"><i class="fas fa-folder"></i><span><?php echo i18n("Categories");?></span></a></li>
									<li class="alx-tab tab-calendar-alt"><a href="#tab-archive" title="<?php echo i18n("Archives");?>"><i class="fas fa-calendar-alt"></i><span><?php echo i18n("Archives");?></span></a></li>
									<li class="alx-tab tab-tags"><a href="#tab-tags" title="<?php echo i18n("Tags");?>"><i class="fas fa-tags"></i><span><?php echo i18n("Tags");?></span></a></li>
								</ul>


								<div class="alx-tabs-container">

									<div id="tab-category" class="alx-tab group" style="">
									<?php echo category_list();?>
									</div><!--/.alx-tab-->

									<div id="tab-archive" class="alx-tab group" style="display: none;">
									<ul class="archives-list">
										<?php echo archive_list('month-year');?>
									</ul>
									</div><!--/.alx-tab-->


									<div id="tab-tags" class="alx-tab group" style="display: none;">
									<?php echo tag_cloud();?>
									</div><!--/.alx-tab-->

								</div>

							</div>
							
							
						</div><!--/.sidebar-content-->
						
					</div><!--/.sidebar-->

				</div><!--/.main-inner-->
			</div><!--/.main-->	
		</div><!--/.container-inner-->
	</div><!--/.container-->
	
	<div class="clear"></div>
	
	<footer id="footer">	
		<div id="footer-bottom">
			
			<a id="back-to-top" href="#"><i class="fas fa-angle-up"></i></a>
				
			<div class="pad group">
				<div class="grid one-full">
										
					<div id="copyright"><?php echo copyright();?></div><!--/#copyright-->
					<div id="credit"><span>Design by <a href="http://alx.media/" rel="nofollow" target="_blank">Alx</a>.</span></div><!--/#credit-->
										
					<ul class="social-links">
						<?php if(!empty(config('social.facebook'))):?>
						<li><a rel="nofollow" class="social-tooltip" title="Facebook" href="<?php echo config('social.facebook');?>"><i class="fab fa-facebook"></i></a></li>
						<?php endif;?>
						<?php if(!empty(config('social.twitter'))):?>
						<li><a rel="nofollow" class="social-tooltip" title="Twitter" href="<?php echo config('social.twitter');?>"><i class="fab fa-twitter"></i></a></li>
						<?php endif;?>
						<?php if(!empty(config('social.github'))):?>
						<li><a rel="nofollow" class="social-tooltip" title="GitHub" href="<?php echo config('social.github');?>"><i class="fab fa-github"></i></a></li>
						<?php endif;?>
						<li><a rel="nofollow" class="social-tooltip" title="RSS" href="<?php echo site_url();?>feed/rss"><i class="fas fa-rss"></i></a></li>
					</ul>
					
				</div>
							
			</div><!--/.pad-->

		</div><!--/#footer-bottom-->

	</footer><!--/#footer-->
	
</div><!--/#wrapper-->
<script type="text/javascript">
	/* <![CDATA[ */
	var screenReaderText = {"expand":"expand child menu","collapse":"collapse child menu"};
	/* ]]> */
</script>	
<script type="text/javascript" src="<?php echo theme_path();?>js/imagesloaded.pkgd.min.js" id="gridzone-nav-script-js"></script>
<script type="text/javascript" src="<?php echo theme_path();?>js/jq-sticky-anything.min.js" id="gridzone-nav-script-js"></script>
<script type="text/javascript" src="<?php echo theme_path();?>js/masonry.pkgd.min.js" id="gridzone-nav-script-js"></script>
<script type="text/javascript" src="<?php echo theme_path();?>js/nav.js" id="gridzone-nav-script-js"></script>
<script type="text/javascript" src="<?php echo theme_path();?>js/scripts.js" id="gridzone-nav-script-js"></script>
<?php if (analytics()): ?><?php echo analytics() ?><?php endif; ?>
</body>
</html>