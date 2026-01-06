$(function(){
$(".EditPenENC_Developer_Page").click(function(){
	$(this).hide();
	$("#dev").hide();
	$("#txt_ENC_Developer_Title").show();
	$("#txt_ENC_Developer_href_Title").show();
	$("#edit_ENC_Developer_Page_Title").show();
});

$("#edit_ENC_Developer_Page_Title").click(function(){
		var txt_ENC_Developer_href_Title=$("#txt_ENC_Developer_href_Title").val();

		$.post("@inc/data.php?status=editDevlink",{txt_ENC_Developer_href_Title:txt_ENC_Developer_href_Title},function(data){
				$("#txt_ENC_Developer_Title").hide();
				$("#txt_ENC_Developer_href_Title").hide();
				$("#edit_ENC_Developer_Page_Title").hide();
				$('.EditPenENC_Developer_Page').show();
				$('#dev').show();
			window.location.href="index.php";
		});
		
});
})