<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<title>
		
		Just Think
	</title>
	<meta charset="UTF-8">
	<link href="/resource/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/resource/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="/resource/scojs/css/scojs.css" rel="stylesheet">
	<link href="/resource/css/style.css" rel="stylesheet">
	
	
</head>
<header>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href="#">Just Think</a>

				<div class="nav-collapse collapse">
					<ul class="nav">
						<li><a href="/" target="_blank"><i class="icon-home"></i> 首页</a></li>
						<li class="dropdown">
							<a href="/" data-target="#" class="zh dropdown-toggle" data-toggle="dropdown"><i
								class="icon-cogs"></i> 核心管理 <b class="caret"></b> </a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
								<li><a href="<?php echo U('settings/index');?>"><i class="icon-wrench"></i> 配置管理</a> </li>
								<li><a href="<?php echo U('category/index');?>"><i class="icon-list-alt"></i> 栏目管理</a> </li>
								<li><a href="<?php echo U('tags/index');?>"><i class="icon-tags"></i> 标签管理</a> </li>
								<li><a href="<?php echo U('article/index');?>"><i class="icon-file-text"></i> 文章管理</a> </li>
								<li><a href="<?php echo U('link/index');?>"><i class="icon-link"></i> 友情链接</a> </li>
								<li><a href="<?php echo U('comments/index');?>"><i class="icon-comments"></i> 评论管理</a> </li>
							</ul>
						</li>

						<li class="dropdown">
							<a href="/" data-target="#" class="zh dropdown-toggle" data-toggle="dropdown"><i
								class="icon-repeat"></i> 缓存清除 <b class="caret"></b> </a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
								<li><a href="<?php echo U('cache/settings');?>"><i class="icon-cogs"></i> 配置缓存</a> </li>
								<li><a href="<?php echo U('cache/category');?>"><i class="icon-list-alt"></i> 栏目缓存</a> </li>
								<li><a href="<?php echo U('cache/tags');?>"><i class="icon-tags"></i> 标签缓存</a> </li>
								<li><a href="<?php echo U('cache/article');?>"><i class="icon-file-text"></i> 文章缓存</a> </li>
								<li><a href="<?php echo U('cache/link');?>"><i class="icon-link"></i> 友链缓存</a> </li>
								<li><a href="<?php echo U('cache/all');?>"><i class="icon-screenshot"></i> 全部清除</a> </li>
							</ul>
						</li>
					</ul>
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="/" data-target="#" class="zh dropdown-toggle" data-toggle="dropdown"><i
								class="icon-user"></i> 个人中心 <b class="caret"></b> </a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
								<li><a href="#" class="zh"><i class="icon-lock"></i> 修改密码</a></li>
								<li><a href="#" class="zh"><i class="icon-edit"></i> 修改资料</a></li>
								<li><a href="<?php echo U('logout');?>" class="zh"><i class="icon-share-alt"></i> 退出登录</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>
<body>

	<div class="hero-unit">
		<h2>文章管理</h2>
	</div>
	<input type="hidden" id="delete_url" value="/admin/article/delete">
	<div class="btn-group span2">
		<a href="<?php echo U('add');?>" class="btn"><i class="icon-plus-sign"></i> </a>
		<button class="btn" id="delete"><i class="icon-trash"></i> </button>
		<a href="" class="btn"><i class="icon-refresh"></i> </a>
	</div>
	<div class="progress progress-striped active span4 hide" id="loading" style="width: 300px">
		<div class="bar" style="width: 100%;"></div>
	</div>
	<div class="clearfix"></div>
	<p></p>
	<div id="list">
	</div>

<footer class="text-center navbar-fixed-bottom">
	&copy; xialeistudio.net
</footer>
<script src="/resource/jquery/jquery-1.8.3.min.js"></script>
<script src="/resource/bootstrap/js/bootstrap.min.js"></script>
<script src="/resource/scojs/js/sco.message.js"></script>

	<script src="/resource/js/admin.js"></script>

</body>
</html>