//改变文章标题的点击样式
function titleChange()
{
	$("article.item h4 a").click(function(){
		$(this).html("<i class='icon-spinner icon-spin'></i> 正在跳转...");
	});
}

$(function(){
	titleChange();
});
