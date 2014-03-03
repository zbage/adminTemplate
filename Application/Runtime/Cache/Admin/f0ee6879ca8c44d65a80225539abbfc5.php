<?php if (!defined('THINK_PATH')) exit();?>	<table class="table table-bordered table-hover">
		<tr>
			<th width="15%">配置说明</th>
			<th width="70%">配置值</th>
			<th width="15%">配置名称</th>
		</tr>
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($row["tips"]); ?></td>
				<td><input type="text" class="input-xxlarge" style="width: 95%" value="<?php echo ($row["value"]); ?>" name="<?php echo ($row["name"]); ?>"></td>
				<td><span class="label label-info font16"><?php echo ($row["name"]); ?></span></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
<div class="pagination page">
	<ul>
		<?php echo ($page); ?>
	</ul>
</div>
<input type="hidden" id="url" value="/admin/settings/save">