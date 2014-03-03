<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>
			
	首页
 - <?php echo ($settings["sitename"]); ?>
	</title>
	<meta charset="UTF-8">
	<meta name="keywords" content="<?php echo ($settings["keywords"]); ?>">
	<meta name="description" content="<?php echo ($settings["description"]); ?>">
	<link href="/resource/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/resource/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="/resource/css/style.css" rel="stylesheet">
	
</head>
<body>
<header>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand en" href="/">Just Think</a>

				<div class="nav-collapse collapse">
					<ul class="nav">
						<?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('home/category/'.$row['alias']);?>" title="<?php echo ($row["name"]); ?>"><i class="icon-star"></i> <?php echo ($row["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<ul class="nav pull-right">
						<li>
								<form action="<?php echo U('/home/search');?>" method="get" class="form-inline form-search" style="margin: 8px 0">
									<fieldset>
										<div class="input-append">
											<input type="text" maxlength="20" required="" placeholder="输入关键词,长度必须大于5" pattern="[\w]{5,}" class="search-query" autocomplete="off" name="keywords" id="keywords">
											<button type="submit" class="btn"><i class="icon-search"></i> </button>
										</div>
									</fieldset>
								</form>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>

	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span7">
				<!--body-->
				<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><article class="item">
						<h4><a href="/home/article/<?php echo ($row["alias"]); ?>"><?php echo ($row["title"]); ?></a> <span class="label label-important"><i class="icon-eye-open"></i> <?php echo ($row["hits"]); ?></span></h4>
						<p><i class="icon-calendar"></i> <?php echo (date('Y-m-d',$row["timestamp"])); ?> 分类：<a href="/home/category/<?php echo (getcategoryalias($row["category_id"])); ?>"><?php echo (getcategory($row["category_id"])); ?></a></p>
						<p><?php echo ($row["description"]); ?></p>
					</article><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="span4">
				<!--info-->
			</div>
		</div>
	</div>

<footer class="navbar-fixed-bottom text-center">&copy; 2014 xialeistudio.net</footer>
<script src="/resource/jquery/jquery-1.8.3.min.js"></script>
<script src="/resource/bootstrap/js/bootstrap.min.js"></script>

	<script src="/resource/js/home.js"></script>

</body>
</html>