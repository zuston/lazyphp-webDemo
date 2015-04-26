$(function($) {
	$('#insert').click(function(e) {
		if ($('#articleType').val() == "") {
			alert("文章类型没写");
		} else if ($('#articleName').val() == '') {
			alert("文章标题没写");
		} else if($('#article').val()==''){
			alert("文章你还没写呢");
		}
		else {
			$.ajax({
				type: "post",
				url: "adminInsertArticle.php",
				async: true,
				data: $("form").serialize(),
				success: function(xml) {
					if(xml==1){
						alert("发布成功");
						$('#articleType').val('') ;
						$('#articleName').val('') ;
						$('#article').val('');
					}else{
						alert("发布文章失败哎！！！不信再试一次吧，难为你！！！");
					}
//					alert(xml);
					
				},
				error: function(xml, err) {
					alert("发布文章失败");
				}
			});
			
		}
		return false;
	})

	
});