<?php if (!defined('THINK_PATH')) exit();?>	<table class="table table-bordered table-hover">
		<tr>
			<th><input type="checkbox" id="checkAll"></th>
			<th>ID</th>
			<th>名称</th>
			<th>发表日期</th>
			<th>赞数</th>
			<th>踩数</th>
			<th>点击数</th>
			<th>状态</th>
			<th>栏目</th>
			<th>排序</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
				<td><input type="checkbox" class="id" value="<?php echo ($row["id"]); ?>"></td>
				<td><?php echo ($row["id"]); ?></td>
				<td><?php echo ($row["title"]); ?></td>
				<td><?php echo (date('Y-m-d',$row["timestamp"])); ?></td>
				<td><?php echo ($row["good"]); ?></td>
				<td><?php echo ($row["bad"]); ?></td>
				<td><?php echo ($row["hits"]); ?></td>
				<td><input type="number" value="<?php echo ($row["status"]); ?>" name="status" required="" pattern="[\d]"></td>
				<td><?php echo (getcategory($row["category_id"])); ?></td>
				<td><input type="number" value="<?php echo ($row["rank"]); ?>" name="rank" required="" pattern="[\d]+"></td>
				<td><a href="/admin/article/edit/id/<?php echo ($row["id"]); ?>">编辑</a> </td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
<div class="pagination page">
	<ul>
		<?php echo ($page); ?>
	</ul>
</div>
<input type="hidden" id="url" value="/admin/article/save">