$(function($) {
	$('#login').click(function(e) {
		if ($('#loginName').val() == "") {
			alert("用户名没写");
		} else if ($('#loginPassword').val() == '') {
			alert("密码没写");
		} else {
			$.ajax({
				type: "post",
				url: "accept_login.php",
				async: true,
				data: $("form").serialize(),
				success: function(xml) {
					if(xml==1){
						window.location.href="?c=admin&a=adminInsertArticle";
					}else{
						alert("登陆失败！！！");
					}
//					alert(xml);
					
				},
				error: function(xml, err) {
					alert("error");
				}
			});
		}
		return false;
	})

	
});