$(function($) {
	$("#suggestion").click(function(e) {
		if ($('#name').val() == "") {
			$('.modal-body').html("昵称没写");
			$('#myModal').modal();
		} else if ($('#mail').val() == "") {
			$('.modal-body').html("邮箱没写");
			$('#myModal').modal();
		} else if ($('#sugg').val() == "") {
			$('.modal-body').html("建议没写");
			$('#myModal').modal();
		} else {
			$.ajax({
				type: "post",
				url: "accept_sugg.php",
				async: true,
				data: $("form").serialize(),
				success: function(xml) {
					$("#name").val("");
					$("#mail").val("");
					$("#sugg").val("");
					
					$('.modal-body').html(xml);
			        $('#myModal').modal();
					
				},
				error: function(xml, err) {
//					alert('飞的时候掉下来了，重试一下吧');
					$('.modal-body').html("飞的时候掉下来了，重试一下吧");
					$('#myModal').modal();
				}
			});
		}
		return false;
	})



		
});