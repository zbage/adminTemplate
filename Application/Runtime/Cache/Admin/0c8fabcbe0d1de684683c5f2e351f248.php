<?php if (!defined('THINK_PATH')) exit();?>	<table class="table table-bordered table-hover">
		<tr>
			<th><input type="checkbox" id="checkAll"></th>
			<th>ID</th>
			<th>名称</th>
			<th>别名</th>
		</tr>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
				<td><input type="checkbox" class="id" value="<?php echo ($row["id"]); ?>"></td>
				<td><?php echo ($row["id"]); ?></td>
				<td><input type="text" class="input-large" value="<?php echo ($row["name"]); ?>" name="name"></td>
				<td><?php echo ($row["alias"]); ?></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
<div class="pagination page">
	<ul>
		<?php echo ($page); ?>
	</ul>
</div>
<input type="hidden" id="url" value="/admin/tags/save">