<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>
			
	<?php echo ($data["title"]); ?>
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
				<article>
					<h3><?php echo ($data["title"]); ?></h3>

					<p><i class="icon-calendar"></i> <?php echo (date('Y-m-d',$data["timestamp"])); ?> 分类：<a href="/home/category/<?php echo (getcategoryalias($data["category_id"])); ?>"><?php echo (getcategory($data["category_id"])); ?></a></p>

					<p>简介：<?php echo ($data["description"]); ?></p>
					<section class="content">
						<?php echo ($data["content"]); ?>
						<div class="operation span2">
							<button class="btn" id="good"><i class="icon-hand-up"></i> <span id="goods"><?php echo ($data["good"]); ?></span></button>
							<button class="btn" id="bad"><i class="icon-hand-down"></i> <span id="bads"><?php echo ($data["bad"]); ?></span> </button>
						</div>
						<div class="share">
							<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a
								href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
							<script>window._bd_share_config = {"common": {"bdSnsKey": {}, "bdText": "", "bdMini": "2", "bdMiniList": false, "bdPic": "", "bdStyle": "1", "bdSize": "16"}, "share": {}, "image": {"viewList": [
								"qzone", "tsina", "tqq", "renren", "weixin"
							], "viewText": "分享到：", "viewSize": "16"}, "selectShare": {"bdContainerClass": null, "bdSelectMiniList": ["qzone", "tsina", "tqq", "renren", "weixin"]}};
							with (document)0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+ ~(-new Date()/36e5)];</script>
						</div>
						<div class="clearfix"></div>
					</section>
				</article>
				<p></p>

				<p id="loading" class="hidden"><i class="icon-spin icon-spinner icon-2x"></i> 加载中...</p>
				<section class="comments">
					<div id="comments">
					</div>
				</section>
				<section class="comments">
					<form action="/home/comments/post" method="post" id="form">
						<input type="hidden" name="article_id" value="<?php echo ($data["id"]); ?>">
						<fieldset>
							<div class="control-group">
								<label class="control-label"><i class="icon-user"></i> 昵称</label>

								<div class="controls">
									<input type="text" name="name" id="name" required="" class="input-xlarge" maxlength="10" placeholder="输入你的昵称~">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label"><i class="icon-envelope"></i> 邮箱</label>

								<div class="controls">
									<input type="email" name="email" id="email" required="" class="input-xlarge" maxlength="40" placeholder="输入你邮箱~">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label"><i class="icon-star"></i> 评论内容</label>

								<div class="controls">
									<textarea id="content" name="content" required="" rows="6" maxlength="256" class="input-xxlarge" placeholder="快来评论吧！">
									</textarea>
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<button class="btn btn-info"><i class="icon-comments"></i> 评论</button>
								</div>
							</div>
						</fieldset>
					</form>
				</section>
			</div>
			<div class="span4">
				<!--info-->
			</div>
		</div>
	</div>

<footer class="navbar-fixed-bottom text-center">&copy; 2014 xialeistudio.net</footer>
<script src="/resource/jquery/jquery-1.8.3.min.js"></script>
<script src="/resource/bootstrap/js/bootstrap.min.js"></script>

	<script src="/resource/jquery/jquery.form.js"></script>
	<script>
		$(function() {
			$(document).ajaxStart(function(){
				$("#loading").show();
			})
			$(document).ajaxComplete(function(){
				$("#loading").hide();
			});
			$("#comments").load('/home/comments/ajax/alias/<?php echo ($data["alias"]); ?>');
			$("#content").html('');
			$("#form").submit(function() {
				$(this).ajaxSubmit(function(data){
					if(data.status == 1){
						var html = '<div class="comment"><p><i class="icon-user"></i> 昵称：'+data.data.name+'</p>' +
						           '<p><i class="icon-time"></i> '+data.data.time+' <i class="icon-map-marker"></i> '+data.data.address+'</p>' +
						           '<p>'+data.data.content+'</p></div>';
						$("#comments").append(html);
						$("#form")[0].reset();
					}else{
						alert(data.info);
					}
				},'json');
				return false;
			});
			$("#good,#bad").click(function(){
				var $button = $(this);
				var id = $(this).attr('id');
				var ajax;
				if(ajax) ajax.abort;
				$button.prop('disabled',true);
				ajax = $.get('/home/article/api/id/<?php echo ($data["id"]); ?>',{type:id},function(data){
					if(data == 1)
					{
						$("#"+id+"s").text(parseInt($("#"+id+"s").text())+1);
					}else{
						alert('您已经操作过啦!');
					}
					$button.prop('disabled',false);
				});
			});
		});
	</script>

</body>
</html>