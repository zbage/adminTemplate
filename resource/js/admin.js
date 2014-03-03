//加载settings
function loadSettings() {
	$("#list").load("/admin/settings/ajax");
}
function loadCategory() {
	$("#list").load("/admin/category/ajax");
}
function loadTags() {
	$("#list").load("/admin/tags/ajax");
}
function loadArticle() {
	$("#list").load("/admin/article/ajax");
}
//分页点击处理
function page() {
	var ajax;
	if (ajax) {
		ajax.abort();
	}
	$(document).on('click', '.page ul li a', function() {
		ajax = $("#list").load($(this).attr('href'))
		return false;
	});
}
//表格的表单编辑
function tableEdit() {
	var ajax;
	$(document).on('change', '#list table tr td input[type!="checkbox"]', function() {
		var id = $(this).parent().siblings('td:eq(0)').children('input[type="checkbox"]').val();
		var name = $(this).attr('name');
		var value = $(this).val();
		var url = $("#url").val();
		if (id != 0) {
			ajax = $.post(url, {name: name, value: value, id: id}, function(data) {
				if (data.status == 1) {
					$.scojs_message('操作成功完成!', $.scojs_message.TYPE_OK);
				}
				else {
					$.scojs_message('操作失败!'+data.info, $.scojs_message.ERROR);
				}
			}, 'json');
		}
		else {
			ajax = $.post(url, {name: name, value: value}, function(data) {
				if (data.status == 1) {
					$.scojs_message('操作成功完成!', $.scojs_message.TYPE_OK);
				}
				else {
					$.scojs_message('操作失败!'+data.info, $.scojs_message.ERROR);
				}
			}, 'json');
		}
	});
}
//check
function check() {
	$(document).on('click','#checkAll',function(){
		$(".id").each(function(){
			$(this)[0].checked = !$(this)[0].checked;
		});
	});
}
//删除
function remove()
{
	$(document).on('click','#delete',function(){
		var url = $("#delete_url").val();
		if(confirm('确定?')){
			var ajax;
			if(ajax) ajax.abort();
			var t = '';
			$(".id").each(function(){
				if($(this)[0].checked){
					t+=$(this).val()+",";
				}
			});
			ajax = $.get(url,{id:t},function(data){
				if (data.status == 1) {
					$.scojs_message('操作成功完成!', $.scojs_message.TYPE_OK);
					setTimeout('window.location.reload();',2000);
				}
				else {
					$.scojs_message('操作失败!'+data.info, $.scojs_message.ERROR);
				}
			},'json');
		}
	});
}
//初始化
function init() {
	page();
	tableEdit();
	check();
	remove();
	$(document).ajaxStart(function() {
		$("#loading").show();
	});
	$(document).ajaxComplete(function() {
		$("#loading").hide();
	});
}
$(function() {
	init();
	var href = window.location.href;
	if (/.*settings.*/.test(href)) {
		loadSettings();
	}
	else if (/.*category.*/.test(href)) {
		loadCategory();
	}else if (/.*tags.*/.test(href)) {
		loadTags();
	}
	else if (/.*article.*/.test(href)) {
		loadArticle();
	}
});