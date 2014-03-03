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
		<h2>欢迎使用</h2>
		<p><b class="text-info">Just Think</b> 基于ThinkPHP 3.2.1开发。前端采用 HTML5+CSS3，为了得到最好的效果，请使用 Chrom,Firefox,Opera 等浏览器进行访问!</p>
	</div>
		<!--系统信息-->
		<div class="span4">
			<h4>版本信息</h4>
			PHP版本：<?php echo (PHP_VERSION); ?><br>
			框架版本：<?php echo (THINK_VERSION); ?><br>
			GD库版本:<?php echo (GD_VERSION); ?><br>
			程序版本：<?php echo C('VERSION');?>
		</div>
		<div class="span5">
			<h4>服务器信息</h4>
			服务器软件：<?php echo ($_SERVER['SERVER_SOFTWARE']); ?><br>
			服务器域名：<?php echo ($_SERVER['HTTP_HOST']); ?><br>
			服务器IP：<?php echo ($_SERVER['SERVER_ADDR']); ?><br>
			站点目录：<?php echo ($_SERVER['DOCUMENT_ROOT']); ?>
		</div>
	
<footer class="text-center navbar-fixed-bottom">
	&copy; xialeistudio.net
</footer>
<script src="/resource/jquery/jquery-1.8.3.min.js"></script>
<script src="/resource/bootstrap/js/bootstrap.min.js"></script>
<script src="/resource/scojs/js/sco.message.js"></script>

</body>
</html>