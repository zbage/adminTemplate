<?php if (!defined('THINK_PATH')) exit(); if(empty($list)): ?><i class="icon-comments-alt icon-2x"></i> 暂无评论，快来留下你的第一条评论吧！
	<?php else: ?>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i; if(($i) == "1"): ?><div class="comment">
				<p class="pull-left"><i class="icon-user"></i> 昵称：<?php echo (htmlspecialchars_decode($row["name"])); ?></p>
				<p class="pull-right">沙发</p>
				<div class="clearfix"></div>
				<p><i class="icon-time"></i> <?php echo (date('Y-m-d H:i:s',$row["timestamp"])); ?> <i class="icon-map-marker"></i> <?php echo (replaceaddress(long2ip($row["address"]))); ?></p>
				<p><?php echo (htmlspecialchars_decode($row["content"])); ?></p>
				<?php else: ?>
				<div class="comment">
					<p><i class="icon-user"></i> 昵称：<?php echo (htmlspecialchars_decode($row["name"])); ?></p>
					<p><i class="icon-time"></i> <?php echo (date('Y-m-d H:i:s',$row["timestamp"])); ?> <i class="icon-map-marker"></i> <?php echo (replaceaddress(long2ip($row["address"]))); ?></p>
					<p><?php echo (htmlspecialchars_decode($row["content"])); ?></p>
				</div>
			</div><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>