      	  $(function(){

$('.EditPenAboutTitle').on('click',function(){
		$(this).hide();
		$(".txtforTitle").hide();
		$("#txtTitleAb").show();
		$("#edit_about_title").show();
		
	});
	$('.EditPenAboutDesc').on('click',function(){
		$(this).hide();
		$(".pDescription").hide();
		$("#txtTitleAbDesc").show();
		$("#edit_about_Desc").show();
		
	});
	$("#edit_about_title").click(function(){
		var txtAboutTitle=$("#txtTitleAb").val();
		var txtAboutTitleLength=$("#txtTitleAb").val().length;
		if(txtAboutTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editAboutTitleIndex",{txtAboutTitle:txtAboutTitle},function(data){
				$("#txtTitleAb").hide();
				$("#edit_about_title").hide();
				$('.EditPenAboutTitle').show();
				$(".txtforTitle").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
		$("#edit_about_Desc").click(function(){
		var txtAboutTitleDesc=$("#txtTitleAbDesc").val();
		var txtAboutTitleDescLength=$("#txtTitleAbDesc").val().length;
		if(txtAboutTitleDescLength > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editAboutTitleDescIndex",{txtAboutTitleDesc:txtAboutTitleDesc},function(data){
				$("#txtTitleAbDesc").hide();
				$("#edit_about_Desc").hide();
				$('.EditPenAboutDesc').show();
				$(".pDescription").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	$('.EditPenAboutTitle1').on('click',function(){
		$(this).hide();
		$(".aboutTitle1").hide();
		$("#txtTitleAb1").show();
		$("#edit_about_Title_1").show();
		
	});	
		$("#edit_about_Title_1").click(function(){
		var txtAboutTitle1=$("#txtTitleAb1").val();
		var txtAboutTitle1Length=$("#txtTitleAb1").val().length;
		if(txtAboutTitle1Length > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editAboutTitle1Index",{txtAboutTitle1:txtAboutTitle1},function(data){
				$("#txtTitleAb1").hide();
				$("#edit_about_Title_1").hide();
				$('.EditPenAboutTitle1').show();
				$(".aboutTitle1").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
		$('.EditPenAboutTitleDesc1').on('click',function(){
		$(this).hide();
		$(".aboutTitleDesc1").hide();
		$("#txtTitleAbDesc1").show();
		$("#edit_about_Title_Desc_1").show();
		$("#integredtyfield").removeClass("d-flex");
		
	});	
	
			$("#edit_about_Title_Desc_1").click(function(){
		var txtTitleAbDesc1=$("#txtTitleAbDesc1").val();
		var txtAboutTitleDesc1Length=$("#txtTitleAbDesc1").val().length;
		if(txtAboutTitleDesc1Length > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editAboutTitleDesc1Index",{txtTitleAbDesc1:txtTitleAbDesc1},function(data){
				$("#txtTitleAbDesc1").hide();
				$("#edit_about_Title_Desc_1").hide();
				$('.EditPenAboutTitleDesc1').show();
				$("#integredtyfield").addClass("d-flex");
				$(".aboutTitleDesc1").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
		$('.EditPenAboutTitle2').on('click',function(){
		$(this).hide();
		$(".aboutTitle2").hide();
		$("#txtTitleAb2").show();
		$("#edit_about_Title_2").show();
		
	});
	
			$("#edit_about_Title_2").click(function(){
		var txtAboutTitle2=$("#txtTitleAb2").val();
		var txtAboutTitle2Length=$("#txtTitleAb2").val().length;
		if(txtAboutTitle2Length > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editAboutTitle2Index",{txtAboutTitle2:txtAboutTitle2},function(data){
				$("#txtTitleAb2").hide();
				$("#edit_about_Title_2").hide();
				$('.EditPenAboutTitle2').show();
				$(".aboutTitle2").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
			$('.EditPenAboutTitleDesc2').on('click',function(){
		$(this).hide();
		$(".aboutTitleDesc2").hide();
		$("#txtTitleAbDesc2").show();
		$("#edit_about_Title_Desc_2").show();
		$("#respectfield").removeClass("d-flex");
		
	});
	
		$("#edit_about_Title_Desc_2").click(function(){
		var txtTitleAbDesc2=$("#txtTitleAbDesc2").val();
		var txtAboutTitleDesc2Length=$("#txtTitleAbDesc2").val().length;
		if(txtAboutTitleDesc2Length > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editAboutTitleDesc2Index",{txtTitleAbDesc2:txtTitleAbDesc2},function(data){
				$("#txtTitleAbDesc2").hide();
				$("#edit_about_Title_Desc_2").hide();
				$(".EditPenAboutTitleDesc2").show();
				$("#respectfield").addClass("d-flex");
				$(".aboutTitleDesc2").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
			$('.EditPenAboutTitle3').on('click',function(){
		$(this).hide();
		$(".aboutTitle3").hide();
		$("#txtTitleAb3").show();
		$("#edit_about_Title_3").show();
		
	});
	
				$("#edit_about_Title_3").click(function(){
		var txtAboutTitle3=$("#txtTitleAb3").val();
		var txtAboutTitle3Length=$("#txtTitleAb3").val().length;
		if(txtAboutTitle3Length > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editAboutTitle3Index",{txtAboutTitle3:txtAboutTitle3},function(data){
				$("#txtTitleAb3").hide();
				$("#edit_about_Title_3").hide();
				$('.EditPenAboutTitle3').show();
				$(".aboutTitle3").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
				$('.EditPenAboutTitleDesc3').on('click',function(){
		$(this).hide();
		$(".aboutTitleDesc3").hide();
		$("#txtTitleAbDesc3").show();
		$("#edit_about_Title_Desc_3").show();
		$("#responsibilityfield").removeClass("d-flex");
		
	});
	
			$("#edit_about_Title_Desc_3").click(function(){
		var txtTitleAbDesc3=$("#txtTitleAbDesc3").val();
		var txtAboutTitleDesc3Length=$("#txtTitleAbDesc3").val().length;
		if(txtAboutTitleDesc3Length > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editAboutTitleDesc3Index",{txtTitleAbDesc3:txtTitleAbDesc3},function(data){
				$("#txtTitleAbDesc3").hide();
				$("#edit_about_Title_Desc_3").hide();
				$(".EditPenAboutTitleDesc3").show();
				$("#responsibilityfield").addClass("d-flex");
				$(".aboutTitleDesc3").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
				$('.EditPenAboutCurosel1').on('click',function(){
		$(this).hide();
		$(".txtCuroselTitle_1").hide();
		$("#txtTitleCurosel1").show();
		$("#edit_about_curosel1").show();
		
	});
	
			$('.EditPenServicesCaption').on('click',function(){
		$(this).hide();
		$(".CaptionServices").hide();
		$("#txt_Services_caption").show();
		$("#edit_Services_caption").show();
		
	});
			$("#edit_Services_caption").click(function(){
		var txt_Services_caption=$("#txt_Services_caption").val();
		var txtServicesCaptionLength=$("#txt_Services_caption").val().length;
		if(txtServicesCaptionLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editServicesIndex",{txt_Services_caption:txt_Services_caption},function(data){
				$("#txt_Services_caption").hide();
				$("#edit_Services_caption").hide();
				$('.EditPenServicesCaption').show();
				$(".CaptionServices").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
		$('.EditPenServicesTitle1').on('click',function(){
		$(this).hide();
		$(".txt_services_title1").hide();
		$("#txt_Services_Title1").show();
		$("#edit_Services_Title_1").show();
		
	});
	
		$("#edit_Services_Title_1").click(function(){
		var txt_Services_Title1=$("#txt_Services_Title1").val();
		var txtServicesTitleLength=$("#txt_Services_Title1").val().length;
		if(txtServicesTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editServicesIndexTitle1",{txt_Services_Title1:txt_Services_Title1},function(data){
				$("#txt_Services_Title1").hide();
				$("#edit_Services_Title_1").hide();
				$('.EditPenServicesTitle1').show();
				$(".txt_services_title1").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
	
	
		$('.EditPenServicesDesc1').on('click',function(){
		$(this).hide();
		$(".txtservicesdesc1").hide();
		$("#txt_Services_Desc1").show();
		$("#edit_Services_Desc_1").show();
		
	});
	
		$("#edit_Services_Desc_1").click(function(){
		var txt_Services_Desc1=$("#txt_Services_Desc1").val();
		var txtServicesDesc1Length=$("#txt_Services_Desc1").val().length;
		if(txtServicesDesc1Length > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editServicesDesc1Index",{txt_Services_Desc1:txt_Services_Desc1},function(data){
				$("#txt_Services_Desc1").hide();
				$("#edit_Services_Desc_1").hide();
				$(".EditPenServicesDesc1").show();
				//$("#responsibilityfield").addClass("d-flex");
				$(".txtservicesdesc1").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
		
		$('.EditPenServicesTitle2').on('click',function(){
		$(this).hide();
		$(".txt_services_title2").hide();
		$("#txt_Services_Title2").show();
		$("#edit_Services_Title_2").show();
		
	});
	
			$("#edit_Services_Title_2").click(function(){
		var txt_Services_Title2=$("#txt_Services_Title2").val();
		var txtServicesTitle2Length=$("#txt_Services_Title2").val().length;
		if(txtServicesTitle2Length > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editServicesIndexTitle2",{txt_Services_Title2:txt_Services_Title2},function(data){
				$("#txt_Services_Title2").hide();
				$("#edit_Services_Title_2").hide();
				$('.EditPenServicesTitle2').show();
				$(".txt_services_title2").show().html(data);
			window.location.href="index.php";
		});
		}
	});
			$('.EditPenServicesDesc2').on('click',function(){
		$(this).hide();
		$(".txtservicesdesc2").hide();
		$("#txt_Services_Desc2").show();
		$("#edit_Services_Desc_2").show();
		
	});
			$("#edit_Services_Desc_2").click(function(){
		var txt_Services_Desc2=$("#txt_Services_Desc2").val();
		var txtServicesDesc2Length=$("#txt_Services_Desc2").val().length;
		if(txtServicesDesc2Length > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editServicesDesc2Index",{txt_Services_Desc2:txt_Services_Desc2},function(data){
				$("#txt_Services_Desc2").hide();
				$("#edit_Services_Desc_2").hide();
				$(".EditPenServicesDesc2").show();
				//$("#responsibilityfield").addClass("d-flex");
				$(".txtservicesdesc2").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
			$('.EditPenServicesTitle3').on('click',function(){
		$(this).hide();
		$(".txt_services_title3").hide();
		$("#txt_Services_Title3").show();
		$("#edit_Services_Title_3").show();
		
	});
	
	$("#edit_Services_Title_3").click(function(){
		var txt_Services_Title3=$("#txt_Services_Title3").val();
		var txtServicesTitle3Length=$("#txt_Services_Title3").val().length;
		if(txtServicesTitle3Length > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editServicesIndexTitle3",{txt_Services_Title3:txt_Services_Title3},function(data){
				$("#txt_Services_Title3").hide();
				$("#edit_Services_Title_3").hide();
				$('.EditPenServicesTitle3').show();
				$(".txt_services_title3").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
	$('.EditPenServicesDesc3').on('click',function(){
		$(this).hide();
		$(".txtservicesdesc3").hide();
		$("#txt_Services_Desc3").show();
		$("#edit_Services_Desc_3").show();
		
	});
	
				$("#edit_Services_Desc_3").click(function(){
		var txt_Services_Desc3=$("#txt_Services_Desc3").val();
		var txtServicesDesc3Length=$("#txt_Services_Desc3").val().length;
		if(txtServicesDesc3Length > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editServicesDesc3Index",{txt_Services_Desc3:txt_Services_Desc3},function(data){
				$("#txt_Services_Desc3").hide();
				$("#edit_Services_Desc_3").hide();
				$(".EditPenServicesDesc3").show();
				//$("#responsibilityfield").addClass("d-flex");
				$(".txtservicesdesc3").show().html(data);
			window.location.href="index.php";
		});
		}
	});
		$('.EditPenServicesTitle4').on('click',function(){
		$(this).hide();
		$(".txt_services_title4").hide();
		$("#txt_Services_Title4").show();
		$("#edit_Services_Title_4").show();
		
	});
	
	$("#edit_Services_Title_4").click(function(){
		var txt_Services_Title4=$("#txt_Services_Title4").val();
		var txtServicesTitle4Length=$("#txt_Services_Title4").val().length;
		if(txtServicesTitle4Length > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editServicesIndexTitle4",{txt_Services_Title4:txt_Services_Title4},function(data){
				$("#txt_Services_Title4").hide();
				$("#edit_Services_Title_4").hide();
				$('.EditPenServicesTitle4').show();
				$(".txt_services_title4").show().html(data);
			window.location.href="index.php";
		});
		}
	});
		$('.EditPenServicesDesc4').on('click',function(){
		$(this).hide();
		$(".txtservicesdesc4").hide();
		$("#txt_Services_Desc4").show();
		$("#edit_Services_Desc_4").show();
		
	});
	
	$("#edit_Services_Desc_4").click(function(){
		var txt_Services_Desc4=$("#txt_Services_Desc4").val();
		var txtServicesDesc4Length=$("#txt_Services_Desc4").val().length;
		if(txtServicesDesc4Length > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editServicesDesc4Index",{txt_Services_Desc4:txt_Services_Desc4},function(data){
				$("#txt_Services_Desc4").hide();
				$("#edit_Services_Desc_4").hide();
				$(".EditPenServicesDesc4").show();
				//$("#responsibilityfield").addClass("d-flex");
				$(".txtservicesdesc4").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
	$('.EditPenFeatures').on('click',function(){
		$(this).hide();
		$(".txtforFeaturesIntoduction").hide();
		$("#txt_Features_Title").show();
		$("#edit_Features_Title").show();
		
	});
	
		$("#edit_Features_Title").click(function(){
		var txt_Features_Title=$("#txt_Features_Title").val();
		var txtFeaturesTitle4Length=$("#txt_Features_Title").val().length;
		if(txtFeaturesTitle4Length > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editFeaturesIndexTitle4",{txt_Features_Title:txt_Features_Title},function(data){
				$("#txt_Features_Title").hide();
				$("#edit_Features_Title").hide();
				$('.EditPenFeatures').show();
				$(".txtforFeaturesIntoduction").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
		$('.EditPenFeaturesTitle1').on('click',function(){
		$(this).hide();
		$(".txtFeaturesTitle1").hide();
		$("#txt_Features_Title1").show();
		$("#edit_Features_Title1").show();
		
	});
	
			$("#edit_Features_Title1").click(function(){
		var txt_Features_Title1=$("#txt_Features_Title1").val();
		var txtFeaturesTitle1Length=$("#txt_Features_Title1").val().length;
		if(txtFeaturesTitle1Length > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editFeaturesTitle1",{txt_Features_Title1:txt_Features_Title1},function(data){
				$("#txt_Features_Title1").hide();
				$("#edit_Features_Title1").hide();
				$('.EditPenFeaturesTitle1').show();
				$(".txtFeaturesTitle1").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
			$('.EditPenFeaturesDesc1').on('click',function(){
		$(this).hide();
		$(".txtfeaturesdesc1").hide();
		$("#txt_Features_Desc1").show();
		$("#edit_Features_Desc_1").show();
		
	});
			$("#edit_Features_Desc_1").click(function(){
		var txt_Features_Desc1=$("#txt_Features_Desc1").val();
		var txtFeaturesDesc1Length=$("#txt_Features_Desc1").val().length;
		if(txtFeaturesDesc1Length > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editFeaturesDesc1Index",{txt_Features_Desc1:txt_Features_Desc1},function(data){
				$("#txt_Features_Desc1").hide();
				$("#edit_Features_Desc_1").hide();
				$(".EditPenFeaturesDesc1").show();
				//$("#responsibilityfield").addClass("d-flex");
				$(".txtfeaturesdesc1").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
			$('.EditPenFeaturesTitle2').on('click',function(){
		$(this).hide();
		$(".txtFeaturesTitle2").hide();
		$("#txt_Features_Title2").show();
		$("#edit_Features_Title2").show();
		
	});
	
				$("#edit_Features_Title2").click(function(){
		var txt_Features_Title2=$("#txt_Features_Title2").val();
		var txtFeaturesTitle2Length=$("#txt_Features_Title2").val().length;
		if(txtFeaturesTitle2Length > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editFeaturesTitle2",{txt_Features_Title2:txt_Features_Title2},function(data){
				$("#txt_Features_Title2").hide();
				$("#edit_Features_Title2").hide();
				$('.EditPenFeaturesTitle2').show();
				$(".txtFeaturesTitle2").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
				$('.EditPenFeaturesDesc2').on('click',function(){
		$(this).hide();
		$(".txtfeaturesdesc2").hide();
		$("#txt_Features_Desc2").show();
		$("#edit_Features_Desc_2").show();
		
	});
	
				$("#edit_Features_Desc_2").click(function(){
		var txt_Features_Desc2=$("#txt_Features_Desc2").val();
		var txtFeaturesDesc2Length=$("#txt_Features_Desc2").val().length;
		if(txtFeaturesDesc2Length > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editFeaturesDesc2Index",{txt_Features_Desc2:txt_Features_Desc2},function(data){
				$("#txt_Features_Desc2").hide();
				$("#edit_Features_Desc_2").hide();
				$(".EditPenFeaturesDesc2").show();
				//$("#responsibilityfield").addClass("d-flex");
				$(".txtfeaturesdesc2").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
				$('.EditPenFeaturesTitle3').on('click',function(){
		$(this).hide();
		$(".txtFeaturesTitle3").hide();
		$("#txt_Features_Title3").show();
		$("#edit_Features_Title3").show();
		
	});
	
					$("#edit_Features_Title3").click(function(){
		var txt_Features_Title3=$("#txt_Features_Title3").val();
		var txtFeaturesTitle3Length=$("#txt_Features_Title3").val().length;
		if(txtFeaturesTitle3Length > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editFeaturesTitle3",{txt_Features_Title3:txt_Features_Title3},function(data){
				$("#txt_Features_Title3").hide();
				$("#edit_Features_Title3").hide();
				$('.EditPenFeaturesTitle3').show();
				$(".txtFeaturesTitle3").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
					$('.EditPenFeaturesDesc3').on('click',function(){
		$(this).hide();
		$(".txtfeaturesdesc3").hide();
		$("#txt_Features_Desc3").show();
		$("#edit_Features_Desc_3").show();
		
	});
	
				$("#edit_Features_Desc_3").click(function(){
		var txt_Features_Desc3=$("#txt_Features_Desc3").val();
		var txtFeaturesDesc3Length=$("#txt_Features_Desc3").val().length;
		if(txtFeaturesDesc3Length > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editFeaturesDesc3Index",{txt_Features_Desc3:txt_Features_Desc3},function(data){
				$("#txt_Features_Desc3").hide();
				$("#edit_Features_Desc_3").hide();
				$(".EditPenFeaturesDesc3").show();
				//$("#responsibilityfield").addClass("d-flex");
				$(".txtfeaturesdesc3").show().html(data);
			window.location.href="index.php";
		});
		}
	});

	$('.EditPenFeaturesDesc4').on('click',function(){
		$(this).hide();
		$(".txtfeaturesdesc4").hide();
		$("#txt_Features_Desc4").show();
		$("#edit_Features_Desc_4").show();	
	});
		
					$("#edit_Features_Desc_4").click(function(){
		var txt_Features_Desc4=$("#txt_Features_Desc4").val();
		var txtFeaturesDesc4Length=$("#txt_Features_Desc4").val().length;
		if(txtFeaturesDesc4Length > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editFeaturesDesc4Index",{txt_Features_Desc4:txt_Features_Desc4},function(data){
				$("#txt_Features_Desc4").hide();
				$("#edit_Features_Desc_4").hide();
				$(".EditPenFeaturesDesc4").show();
				//$("#responsibilityfield").addClass("d-flex");
				$(".txtfeaturesdesc4").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
					$('.EditPenFeaturesTitle5').on('click',function(){
		$(this).hide();
		$(".txtFeaturesTitle5").hide();
		$("#txt_Features_Title5").show();
		$("#edit_Features_Title5").show();
		
	});
	
					$("#edit_Features_Title5").click(function(){
		var txt_Features_Title5=$("#txt_Features_Title5").val();
		var txtFeaturesTitle5Length=$("#txt_Features_Title5").val().length;
		if(txtFeaturesTitle5Length > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editFeaturesTitle5",{txt_Features_Title5:txt_Features_Title5},function(data){
				$("#txt_Features_Title5").hide();
				$("#edit_Features_Title5").hide();
				$('.EditPenFeaturesTitle5').show();
				$(".txtFeaturesTitle5").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
		$('.EditPenFeaturesDesc5').on('click',function(){
		$(this).hide();
		$(".txtfeaturesdesc5").hide();
		$("#txt_Features_Desc5").show();
		$("#edit_Features_Desc_5").show();	
	});
	
						$("#edit_Features_Desc_5").click(function(){
		var txt_Features_Desc5=$("#txt_Features_Desc5").val();
		var txtFeaturesDesc5Length=$("#txt_Features_Desc5").val().length;
		if(txtFeaturesDesc5Length > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editFeaturesDesc5Index",{txt_Features_Desc5:txt_Features_Desc5},function(data){
				$("#txt_Features_Desc5").hide();
				$("#edit_Features_Desc_5").hide();
				$(".EditPenFeaturesDesc5").show();
				//$("#responsibilityfield").addClass("d-flex");
				$(".txtfeaturesdesc5").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
					$('.EditPenFeaturesTitle6').on('click',function(){
		$(this).hide();
		$(".txtFeaturesTitle6").hide();
		$("#txt_Features_Title6").show();
		$("#edit_Features_Title6").show();
		
	});
	
		$("#edit_Features_Title6").click(function(){
		var txt_Features_Title6=$("#txt_Features_Title6").val();
		var txtFeaturesTitle6Length=$("#txt_Features_Title6").val().length;
		if(txtFeaturesTitle6Length > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editFeaturesTitle6",{txt_Features_Title6:txt_Features_Title6},function(data){
				$("#txt_Features_Title6").hide();
				$("#edit_Features_Title6").hide();
				$('.EditPenFeaturesTitle6').show();
				$(".txtFeaturesTitle6").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	$('.EditPenFeaturesDesc6').on('click',function(){
		$(this).hide();
		$(".txtfeaturesdesc6").hide();
		$("#txt_Features_Desc6").show();
		$("#edit_Features_Desc_6").show();	
	});
	
		$("#edit_Features_Desc_6").click(function(){
		var txt_Features_Desc6=$("#txt_Features_Desc6").val();
		var txtFeaturesDesc6Length=$("#txt_Features_Desc6").val().length;
		if(txtFeaturesDesc6Length > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editFeaturesDesc6Index",{txt_Features_Desc6:txt_Features_Desc6},function(data){
				$("#txt_Features_Desc6").hide();
				$("#edit_Features_Desc_6").hide();
				$(".EditPenFeaturesDesc6").show();
				//$("#responsibilityfield").addClass("d-flex");
				$(".txtfeaturesdesc6").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
			$('.EditPenFeaturesTitle7').on('click',function(){
		$(this).hide();
		$(".txtFeaturesTitle7").hide();
		$("#txt_Features_Title7").show();
		$("#edit_Features_Title7").show();
		
	});
	
	$("#edit_Features_Title7").click(function(){
		var txt_Features_Title7=$("#txt_Features_Title7").val();
		var txtFeaturesTitle7Length=$("#txt_Features_Title7").val().length;
		if(txtFeaturesTitle7Length > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editFeaturesTitle7",{txt_Features_Title7:txt_Features_Title7},function(data){
				$("#txt_Features_Title7").hide();
				$("#edit_Features_Title7").hide();
				$('.EditPenFeaturesTitle7').show();
				$(".txtFeaturesTitle7").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
	$('.EditPenFeaturesDesc7').on('click',function(){
		$(this).hide();
		$(".txtfeaturesdesc7").hide();
		$("#txt_Features_Desc7").show();
		$("#edit_Features_Desc_7").show();	
	});
	
	$("#edit_Features_Desc_7").click(function(){
		var txt_Features_Desc7=$("#txt_Features_Desc7").val();
		var txtFeaturesDesc7Length=$("#txt_Features_Desc7").val().length;
		if(txtFeaturesDesc7Length > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editFeaturesDesc7Index",{txt_Features_Desc7:txt_Features_Desc7},function(data){
				$("#txt_Features_Desc7").hide();
				$("#edit_Features_Desc_7").hide();
				$(".EditPenFeaturesDesc7").show();
				//$("#responsibilityfield").addClass("d-flex");
				$(".txtfeaturesdesc7").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
	$('.EditPenQuoteTitle1').on('click',function(){
		$(this).hide();
		$(".txtQuoteTitle1").hide();
		$("#txt_Quote_Title1").show();
		$("#edit_Quote_Title1").show();
		
	});
	
		$("#edit_Quote_Title1").click(function(){
		var txt_Quote_Title1=$("#txt_Quote_Title1").val();
		var txtFQuoteTitle1Length=$("#txt_Quote_Title1").val().length;
		if(txtFQuoteTitle1Length > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editQuoteTitle1",{txt_Quote_Title1:txt_Quote_Title1},function(data){
				$("#txt_Quote_Title1").hide();
				$("#edit_Quote_Title1").hide();
				$('.EditPenQuoteTitle1').show();
				$(".txtQuoteTitle1").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
		$('.EditPenQuoteDesc1').on('click',function(){
		$(this).hide();
		$(".txtQuotedesc1").hide();
		$("#txt_Quote_Desc1").show();
		$("#edit_Quote_desc_1").show();	
	});
	
		$("#edit_Quote_desc_1").click(function(){
		var txt_Quote_Desc1=$("#txt_Quote_Desc1").val();
		var txtQuoteDesc1Length=$("#txt_Quote_Desc1").val().length;
		if(txtQuoteDesc1Length > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editFQuoteDesc1Index",{txt_Quote_Desc1:txt_Quote_Desc1},function(data){
				$("#txt_Quote_Desc1").hide();
				$("#edit_Quote_desc_1").hide();
				$(".EditPenQuoteDesc1").show();
				//$("#responsibilityfield").addClass("d-flex");
				$(".txtQuotedesc1").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
		$('.EditPenOurTeamIntro').on('click',function(){
		$(this).hide();
		$(".ourteamIntro").hide();
		$("#txt_Ourteam_Intro").show();
		$("#edit_OurTeam_Intro").show();
		
	});
	
			$("#edit_OurTeam_Intro").click(function(){
		var txt_Ourteam_Intro=$("#txt_Ourteam_Intro").val();
		var txtOurTeamIntroLength=$("#txt_Ourteam_Intro").val().length;
		if(txtOurTeamIntroLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editOurTeamIntro",{txt_Ourteam_Intro:txt_Ourteam_Intro},function(data){
				$("#txt_Ourteam_Intro").hide();
				$("#edit_OurTeam_Intro").hide();
				$('.EditPenOurTeamIntro').show();
				$(".ourteamIntro").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
		$('.EditPenOurTeamTitle').on('click',function(){
		$(this).hide();
		$(".OurTeamTitle").hide();
		$("#txt_Ourteam_Title").show();
		$("#edit_OurTeam_Title").show();
		
	});
	
				$("#edit_OurTeam_Title").click(function(){
		var txt_Ourteam_Title=$("#txt_Ourteam_Title").val();
		var txtOurTeamTitleLength=$("#txt_Ourteam_Title").val().length;
		if(txtOurTeamTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editOurTeamTitle",{txt_Ourteam_Title:txt_Ourteam_Title},function(data){
				$("#txt_Ourteam_Title").hide();
				$("#edit_OurTeam_Title").hide();
				$('.EditPenOurTeamTitle').show();
				$(".OurTeamTitle").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
			$('.EditPenOurTeamDesc').on('click',function(){
		$(this).hide();
		$(".OurTeamDesctxt").hide();
		$("#txt_OurTeam_Desc").show();
		$("#edit_OurTeam_Desc").show();
		
	});
	
					$("#edit_OurTeam_Desc").click(function(){
		var txt_OurTeam_Desc=$("#txt_OurTeam_Desc").val();
		var txtOurTeamDescLength=$("#txt_OurTeam_Desc").val().length;
		if(txtOurTeamDescLength > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editOurTeamDesc",{txt_OurTeam_Desc:txt_OurTeam_Desc},function(data){
				$("#txt_OurTeam_Desc").hide();
				$("#edit_OurTeam_Desc").hide();
				$('.EditPenOurTeamDesc').show();
				$(".OurTeamDesctxt").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
				$('.EditPenOurClientTitle').on('click',function(){
		$(this).hide();
		$(".ourclientTitle").hide();
		$("#txt_Ourclient_Title").show();
		$("#edit_Client_title").show();
		
	});
	
					$("#edit_Client_title").click(function(){
		var txt_Ourclient_Title=$("#txt_Ourclient_Title").val();
		var txtOurClientTitleLength=$("#txt_Ourclient_Title").val().length;
		if(txtOurClientTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editOurClientTitle",{txt_Ourclient_Title:txt_Ourclient_Title},function(data){
				$("#txt_Ourclient_Title").hide();
				$("#edit_Client_title").hide();
				$('.EditPenOurClientTitle').show();
				$(".ourclientTitle").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
					$('.EditPenOurClientDesc').on('click',function(){
		$(this).hide();
		$(".ourclientDesc").hide();
		$("#txt_OurClient_Desc").show();
		$("#edit_OurClient_Desc").show();
		
	});
	
				$("#edit_OurClient_Desc").click(function(){
		var txt_OurClient_Desc=$("#txt_OurClient_Desc").val();
		var txtOurClientDescLength=$("#txt_OurClient_Desc").val().length;
		if(txtOurClientDescLength > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editOurClientDesc",{txt_OurClient_Desc:txt_OurClient_Desc},function(data){
				$("#txt_OurClient_Desc").hide();
				$("#edit_OurClient_Desc").hide();
				$('.EditPenOurClientDesc').show();
				$(".ourclientDesc").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
	
					$('.EditPenOurNewsTitle').on('click',function(){
		$(this).hide();
		$(".newstitle").hide();
		$("#txt_News_Title").show();
		$("#edit_News_title").show();
		
	});
	
				$("#edit_News_title").click(function(){
		var txt_News_Title=$("#txt_News_Title").val();
		var txtNewsTitleLength=$("#txt_News_Title").val().length;
		if(txtNewsTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editNewsTitle",{txt_News_Title:txt_News_Title},function(data){
				$("#txt_News_Title").hide();
				$("#edit_News_title").hide();
				$('.EditPenOurNewsTitle').show();
				$(".newstitle").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	
				$('.EditPenfooterTitle1').on('click',function(){
		$(this).hide();
		$(".txtfooter").hide();
		$("#txt_footer_Intro").show();
		$("#edit_footer_Intro").show();
		
	});
	
		$("#edit_footer_Intro").click(function(){
		var txt_Footer_Title=$("#txt_footer_Intro").val();
		var txtFooterTitleLength=$("#txt_footer_Intro").val().length;
		if(txtFooterTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editFooterTitle",{txt_Footer_Title:txt_Footer_Title},function(data){
				$("#txt_footer_Intro").hide();
				$("#edit_footer_Intro").hide();
				$('.EditPenfooterTitle1').show();
				$(".txtfooter").show().html(data);
			window.location.href="index.php";
		});
		}
	});
	$("#SaveSetting").on("click",function(){
		var PhonePersonal=$("#PhonePersonal").val();
		var passPersonal=$("#passPersonal").val();
		var phoneLength=$("#PhonePersonal").val().length;
		var patternphone=/^[0-9]*$/;
		var Email=$("#MemberEMail").val();
		var EmailLength=$("#MemberEMail").val().length;
		var patternEmail=/^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;

		if(PhonePersonal==""){
$("#alertphoneP").css("color","red").html("Phone is empty");
}else if(phoneLength<8){
	$("#alertphoneP").css("color","red").html("Phone is less than 8 letter");
}else if(phoneLength >30){
	$("#alertphoneP").css("color","red").html("Phone is greater than 30 letter");
}
else if(!patternphone.test(PhonePersonal)){
	$("#alertphoneP").css("color","red").html("Phone must be numbers only");
}		
else if(Email==""){
$("#alertphoneP").css("color","red").html("Phone is empty");
}else if(EmailLength<8){
	$("#alertphoneP").css("color","red").html("Phone is less than 8 letter");
}else if(EmailLength >30){
	$("#alertphoneP").css("color","red").html("Phone is greater than 30 letter");
}
else if(!patternEmail.test(Email)){
	$("#alertphoneP").css("color","red").html("Phone must be numbers only");
}
else{
$("#alertphoneP").css("color","green").html("Phone is ok");	
$.post("@inc/data.php?status=editProfileData",{PhonePersonal:PhonePersonal,passPersonal:passPersonal,Email:Email},function(data){
	alert("Success");
});
}

	});
$("#Saveprofile").click(function(){
	var EmailUser=$("#EmailUser").val();
	var patternEmail = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
	var Phone=$("#Phone").val();
	var patternPhone=/^[0-9]*$/;
	var twitter=$("#twitter").val();
	var patterntwitter=/^[0-9a-zA-Z-.]*$/;
	var facebook=$("#facebook").val();
	var patternfacebook=/^[0-9a-zA-Z-.]*$/;
	var instagram=$("#instagram").val();
	var patterninstagram=/^[0-9a-zA-Z-.]*$/;
	var linkedin=$("#linkedin").val();
	var patternlinkedin=/^[0-9a-zA-Z-.]*$/;
	var whatsapp=$("#whatsapp").val();
	var WhatsappLength=$("#whatsapp").val().length;
	var patternWhatsapp=/^[0-9]*$/;
	var address=$("#address").val();
	var patternAddress=/^[0-9a-zA-Z]*$/;
	if(EmailUser==""){
$("#alertemail1").css("color","red").html("E-mail is empty");
}
else if(!patternEmail.test(EmailUser)){
	$("#alertemail1").css("color","red").html("E-mail is not valid");
}
else{
$("#alertemail1").css("color","green").html("E-mail is ok");	
}
if(Phone==""){
$("#alertephone").css("color","red").html("Phone is empty");
}
else if(!patternPhone.test(Phone)){
	$("#alertephone").css("color","red").html("Phone must be numbers only");
}else{
		$("#alertephone").css("color","green").html("Phone is ok");

}
	if(twitter==""){
$("#alerttwitter").css("color","red").html("Twitter link is empty");
}

else if(!patterntwitter.test(twitter)){
	$("#alerttwitter").css("color","red").html("Twitter link is not valid link");
}
else{
$("#alerttwitter").css("color","green").html("Twitter link is ok");	
}

	if(facebook==""){
$("#alertfacebook").css("color","red").html("Facebook link is empty");
}

else if(!patternfacebook.test(facebook)){
	$("#alertfacebook").css("color","red").html("Facebook link is not valid link");
}
else{
$("#alertfacebook").css("color","green").html("Facebook link is ok");	
}
	if(instagram==""){
$("#alertinsta").css("color","red").html("Instagram link is empty");
}

else if(!patterninstagram.test(instagram)){
	$("#alertinsta").css("color","red").html("Instagram link is not valid link");
}
else{
$("#alertinsta").css("color","green").html("Instagram link is ok");	
}

	if(linkedin==""){
$("#alertlinkedin").css("color","red").html("Linkedin link is empty");
}

else if(!patternlinkedin.test(linkedin)){
	$("#alertlinkedin").css("color","red").html("Linkedin link is not valid link");
}
else{
$("#alertlinkedin").css("color","green").html("Linkedin link is ok");	
}
if(whatsapp==""){
$("#alertwhatsapp").css("color","red").html("Whatsapp is empty");
}
else if(!patternWhatsapp.test(whatsapp)){
	$("#alertwhatsapp").css("color","red").html("Whatsapp must be numbers only");
}else{
		$("#alertwhatsapp").css("color","green").html("Whatsapp is ok");

}
if(address==""){
$("#alertAddress").css("color","red").html("Address is empty");
}
else{
		$("#alertAddress").css("color","green").html("Address is ok");

}
if(EmailUser!="" &&  Phone!="" && twitter != "" && facebook != "" && instagram != ""  && linkedin != "" && whatsapp != "" && address != "" ){
$.post("@inc/data.php?status=addSocialMedia",{EmailUser:EmailUser,Phone:Phone,twitter:twitter,facebook:facebook,instagram:instagram,linkedin:linkedin,whatsapp:whatsapp,address:address},function(data){
});
}
		  });
		  
$("#Saveslideshow").click(function(){
	 var fd = new FormData();

                var files = $('#SlideshowImage')[0].files;
				var SlideshowTitle1=$('#SlideshowTitle1').val();
				var SlideshowCaption1=$('#SlideshowCaption1').val();
				// Check file selected or not
                if(files.length > 0 ){

                    fd.append('file',files[0]);
                    fd.append('SlideshowTitle',SlideshowTitle1);
                    fd.append('SlideshowCaption',SlideshowCaption1);

                    $.ajax({
                        url:'@inc/data.php?status=addslideshow',
                        type:'post',
                        data:fd,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});
$("#file_desc_4_img").change(function(){
	var fd1 = new FormData();
var filesimgdesc4 = $('#file_desc_4_img')[0].files;
                if(filesimgdesc4.length > 0 ){
				fd1.append('file',filesimgdesc4[0]);
				$.ajax({
                        url:'@inc/data.php?status=changefeaturesimage',
                        type:'post',
                        data:fd1,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="index.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

$("#file_quote_1_img").change(function(){
	var fd2 = new FormData();
var filesimgdescQ1 = $('#file_quote_1_img')[0].files;
                if(filesimgdescQ1.length > 0 ){
				fd2.append('file',filesimgdescQ1[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeQuoteimage',
                        type:'post',
                        data:fd2,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="index.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

$("#Team_img_1").change(function(){
	var fd3 = new FormData();
var filesimgdescTeam1 = $('#Team_img_1')[0].files;
                if(filesimgdescTeam1.length > 0 ){
				fd3.append('file',filesimgdescTeam1[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeTeamimage',
                        type:'post',
                        data:fd3,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="index.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

/* About Page Pen Edit */
				$('.EditPenAboutPageWelcome').on('click',function(){
		$(this).hide();
		$(".txtAboutWelcome").hide();
		$("#txt_AboutPage_Welcome").show();
		$("#edit_AboutPage_Welcome").show();
		
	});
	
					$("#edit_AboutPage_Welcome").click(function(){
		var txt_AboutPage_Welcome=$("#txt_AboutPage_Welcome").val();
		var txtAboutPageWelcomeLength=$("#txt_AboutPage_Welcome").val().length;
		if(txtAboutPageWelcomeLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editAboutPageWelcome",{txt_AboutPage_Welcome:txt_AboutPage_Welcome},function(data){
				$("#txt_AboutPage_Welcome").hide();
				$("#edit_AboutPage_Welcome").hide();
				$('.EditPenAboutPageWelcome').show();
				$(".txtAboutWelcome").show().html(data);
			window.location.href="about.php";
		});
		}
	});
	
					$('.EditPenAboutPageWelcomeEnc').on('click',function(){
		$(this).hide();
		$(".WelcomeENC").hide();
		$("#txt_AboutPage_Welcome_ENC").show();
		$("#edit_AboutPage_Welcome_ENC").show();
		
	});
	
					$("#edit_AboutPage_Welcome_ENC").click(function(){
		var txt_AboutPage_Welcome_ENC=$("#txt_AboutPage_Welcome_ENC").val();
		var txtAboutPageWelcomeEncLength=$("#txt_AboutPage_Welcome_ENC").val().length;
		if(txtAboutPageWelcomeEncLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editAboutPageWelcomeEnc",{txt_AboutPage_Welcome_ENC:txt_AboutPage_Welcome_ENC},function(data){
				$("#txt_AboutPage_Welcome_ENC").hide();
				$("#edit_AboutPage_Welcome_ENC").hide();
				$('.EditPenAboutPageWelcomeEnc').show();
				$(".WelcomeENC").show().html(data);
			window.location.href="about.php";
		});
		}
	});
	
					$('.EditPenAboutPageWelcomeEncTitle').on('click',function(){
		$(this).hide();
		$(".txtWlecomeEncTitle").hide();
		$("#txt_AboutPage_Welcome_ENC_Title").show();
		$("#edit_AboutPage_Welcome_ENC_Title").show();
		
	});
	
						$("#edit_AboutPage_Welcome_ENC_Title").click(function(){
		var txt_AboutPage_Welcome_ENC_Title=$("#txt_AboutPage_Welcome_ENC_Title").val();
		var txtAboutPageWelcomeEnctitleLength=$("#txt_AboutPage_Welcome_ENC_Title").val().length;
		if(txtAboutPageWelcomeEnctitleLength > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editAboutPageWelcomeEncTitle",{txt_AboutPage_Welcome_ENC_Title:txt_AboutPage_Welcome_ENC_Title},function(data){
				$("#txt_AboutPage_Welcome_ENC_Title").hide();
				$("#edit_AboutPage_Welcome_ENC_Title").hide();
				$('.EditPenAboutPageWelcomeEncTitle').show();
				$(".txtWlecomeEncTitle").show().html(data);
			window.location.href="about.php";
		});
		}
	});
	
						$('.EditPenAboutPageWelcomeEncDesc').on('click',function(){
		$(this).hide();
		$(".txtAboutPageDesc").hide();
		$("#txt_AboutPage_Welcome_ENC_Desc").show();
		$("#edit_AboutPage_Welcome_ENC_Desc").show();
		
	});
	
							$("#edit_AboutPage_Welcome_ENC_Desc").click(function(){
		var txt_AboutPage_Welcome_ENC_Desc=$("#txt_AboutPage_Welcome_ENC_Desc").val();
		var txtAboutPageWelcomeEncdescLength=$("#txt_AboutPage_Welcome_ENC_Desc").val().length;
		if(txtAboutPageWelcomeEncdescLength > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editAboutPageWelcomeEncDesc",{txt_AboutPage_Welcome_ENC_Desc:txt_AboutPage_Welcome_ENC_Desc},function(data){
				$("#txt_AboutPage_Welcome_ENC_Desc").hide();
				$("#edit_AboutPage_Welcome_ENC_Desc").hide();
				$('.EditPenAboutPageWelcomeEncDesc').show();
				$(".txtAboutPageDesc").show().html(data);
			window.location.href="about.php";
		});
		}
	});
	
						$('.EditPenAboutPageBusinessTitle').on('click',function(){
		$(this).hide();
		$(".txtBusinessPlanningAboutPage").hide();
		$("#txt_AboutPage_Business_Title").show();
		$("#edit_AboutPage_Business_title").show();
		
	});
	
					$("#edit_AboutPage_Business_title").click(function(){
		var txt_AboutPage_Business_Title=$("#txt_AboutPage_Business_Title").val();
		var txtAboutPageBusinessLength=$("#txt_AboutPage_Business_Title").val().length;
		if(txtAboutPageBusinessLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editAboutPageBusinessTitle",{txt_AboutPage_Business_Title:txt_AboutPage_Business_Title},function(data){
				$("#txt_AboutPage_Business_Title").hide();
				$("#edit_AboutPage_Business_title").hide();
				$('.EditPenAboutPageBusinessTitle').show();
				$(".txtBusinessPlanningAboutPage").show().html(data);
			window.location.href="about.php";
		});
		}
	});
	
					$('.EditPenAboutPageBusinessDesc').on('click',function(){
		$(this).hide();
		$(".txtBusinessPlanningAboutPageDesc").hide();
		$("#txt_AboutPage_Business_Desc").show();
		$("#edit_AboutPage_Businesse_Desc").show();
		$("#BusinessDesc").removeClass("d-flex");
	});
	
	
							$("#edit_AboutPage_Businesse_Desc").click(function(){
		var txt_AboutPage_Business_Desc=$("#txt_AboutPage_Business_Desc").val();
		var txtAboutPageBusinessdescLength=$("#txt_AboutPage_Business_Desc").val().length;
		if(txtAboutPageBusinessdescLength > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editAboutPageBusinessDesc",{txt_AboutPage_Business_Desc:txt_AboutPage_Business_Desc},function(data){
				$("#txt_AboutPage_Business_Desc").hide();
				$("#edit_AboutPage_Businesse_Desc").hide();
				$('.EditPenAboutPageBusinessDesc').show();
				$(".txtBusinessPlanningAboutPageDesc").show().html(data);
				$("#BusinessDesc").addClass("d-flex");
			window.location.href="about.php";
		});
		}
	});
	
						$('.EditPenAboutPageFinalAnalaysisTitle').on('click',function(){
		$(this).hide();
		$(".txtFinalAnalaysisAboutPage").hide();
		$("#txt_AboutPage_FinalAnalaysis_Title").show();
		$("#edit_AboutPage_FinalAnalaysis_title").show();
		
	});
	
					$("#edit_AboutPage_FinalAnalaysis_title").click(function(){
		var txt_AboutPage_FinalAnalaysis_Title=$("#txt_AboutPage_FinalAnalaysis_Title").val();
		var txtAboutPageFinancialAnalaysisLength=$("#txt_AboutPage_FinalAnalaysis_Title").val().length;
		if(txtAboutPageFinancialAnalaysisLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editAboutPageFinancialAnalaysisTitle",{txt_AboutPage_FinalAnalaysis_Title:txt_AboutPage_FinalAnalaysis_Title},function(data){
				$("#txt_AboutPage_FinalAnalaysis_Title").hide();
				$("#edit_AboutPage_FinalAnalaysis_title").hide();
				$('.EditPenAboutPageFinalAnalaysisTitle').show();
				$(".txtFinalAnalaysisAboutPage").show().html(data);
			window.location.href="about.php";
		});
		}
	});
	
					$('.EditPenAboutPageFinancialAnalaysisDesc').on('click',function(){
		$(this).hide();
		$(".txtFinalAnalaysisAboutPageDesc").hide();
		$("#txt_AboutPage_FinancialAnalaysis_Desc").show();
		$("#edit_AboutPage_FinancialAnalaysis_Desc").show();
		$("#FinancialAnalaysisDesc").removeClass("d-flex");
	});
	
					$("#edit_AboutPage_FinancialAnalaysis_Desc").click(function(){
		var txt_AboutPage_FinancialAnalaysis_Desc=$("#txt_AboutPage_FinancialAnalaysis_Desc").val();
		var txtAboutPageFinancialAnalysisDescdescLength=$("#txt_AboutPage_FinancialAnalaysis_Desc").val().length;
		if(txtAboutPageFinancialAnalysisDescdescLength > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editAboutPageFinancialAnalaysisDesc",{txt_AboutPage_FinancialAnalaysis_Desc:txt_AboutPage_FinancialAnalaysis_Desc},function(data){
				$("#txt_AboutPage_FinancialAnalaysis_Desc").hide();
				$("#edit_AboutPage_FinancialAnalaysis_Desc").hide();
				$('.EditPenAboutPageFinancialAnalaysisDesc').show();
				$(".txtFinalAnalaysisAboutPageDesc").show().html(data);
				$("#FinancialAnalaysisDesc").addClass("d-flex");
			window.location.href="about.php";
		});
		}
	});
	
				$('.EditPenAboutPageLegalAdvisoryTitle').on('click',function(){
		$(this).hide();
		$(".txtLegalAdvisoryTitle").hide();
		$("#txt_AboutPage_LegalAdvisory_Title").show();
		$("#edit_AboutPage_LegalAdvisory_title").show();
		
	});
	
			$("#edit_AboutPage_LegalAdvisory_title").click(function(){
		var txt_AboutPage_LegalAdvisory_Title=$("#txt_AboutPage_LegalAdvisory_Title").val();
		var txtAboutPageLegalAdvisoryLength=$("#txt_AboutPage_LegalAdvisory_Title").val().length;
		if(txtAboutPageLegalAdvisoryLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editAboutPageLegalAdvisoryTitle",{txt_AboutPage_LegalAdvisory_Title:txt_AboutPage_LegalAdvisory_Title},function(data){
				$("#txt_AboutPage_LegalAdvisory_Title").hide();
				$("#edit_AboutPage_LegalAdvisory_title").hide();
				$('.EditPenAboutPageLegalAdvisoryTitle').show();
				$(".txtLegalAdvisoryTitle").show().html(data);
			window.location.href="about.php";
		});
		}
	});
	
			$('.EditPenAboutPageLegalAdvisoryDesc').on('click',function(){
		$(this).hide();
		$(".txtLegalAdvisoryDesc").hide();
		$("#txt_AboutPage_LegalAdvisory_Desc").show();
		$("#edit_AboutPage_LegalAdvisory_Desc").show();
		$("#LegalAdvisoryDesc").removeClass("d-flex");
	});
	
		$("#edit_AboutPage_LegalAdvisory_Desc").click(function(){
		var txt_AboutPage_LegalAdvisory_Desc=$("#txt_AboutPage_LegalAdvisory_Desc").val();
		var txtAboutPageLegalAdvisoryDescdescLength=$("#txt_AboutPage_LegalAdvisory_Desc").val().length;
		if(txtAboutPageLegalAdvisoryDescdescLength > 3000){
			alert("Maximam size is 3000");
		}else{
		$.post("@inc/data.php?status=editAboutPageLegalAdvisoryDesc",{txt_AboutPage_LegalAdvisory_Desc:txt_AboutPage_LegalAdvisory_Desc},function(data){
				$("#txt_AboutPage_LegalAdvisory_Desc").hide();
				$("#edit_AboutPage_LegalAdvisory_Desc").hide();
				$('.EditPenAboutPageLegalAdvisoryDesc').show();
				$(".txtLegalAdvisoryDesc").show().html(data);
				$("#LegalAdvisoryDesc").addClass("d-flex");
			window.location.href="about.php";
		});
		}
	});
	
		
	
	/*Services Page*/
	
			$('.EditPenENC_Prof_Services_Services_Page').on('click',function(){
		$(this).hide();
		$(".txtServicesTitleServicesPage").hide();
		$("#txt_ENC_Prof_Services_Services_Page_Title").show();
		$("#edit_ENC_Prof_Services_Services_Page_Title").show();
		
	});
			$("#edit_ENC_Prof_Services_Services_Page_Title").click(function(){
		var txt_ServicesPage_Prof_Services_Title=$("#txt_ENC_Prof_Services_Services_Page_Title").val();
		var txtServicesPageProfServicesLength=$("#txt_ENC_Prof_Services_Services_Page_Title").val().length;
		if(txtServicesPageProfServicesLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editServicesPageProfServicesTitle",{txt_ServicesPage_Prof_Services_Title:txt_ServicesPage_Prof_Services_Title},function(data){
				$("#txt_ENC_Prof_Services_Services_Page_Title").hide();
				$("#edit_ENC_Prof_Services_Services_Page_Title").hide();
				$('.EditPenENC_Prof_Services_Services_Page').show();
				$(".txtServicesTitleServicesPage").show().html(data);
			window.location.href="service.php";
		});
		}
	});
	
		$('.EditPenServicesPage_ProfServices_Desc').on('click',function(){
		$(this).hide();
		$(".txtServicesPageProfServicesDesc").hide();
		$("#txt_ServicesPage_ProfServices_Desc").show();
		$("#edit_ServicesPage_ProfServices_Desc").show();
	});
	
			$("#edit_ServicesPage_ProfServices_Desc").click(function(){
		var txt_ServicesPage_ProfServices_Desc=$("#txt_ServicesPage_ProfServices_Desc").val();
		var txtServicesPageProfServicesDescLength=$("#txt_ServicesPage_ProfServices_Desc").val().length;
		if(txtServicesPageProfServicesDescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editServicesPageProfServicesDesc",{txt_ServicesPage_ProfServices_Desc:txt_ServicesPage_ProfServices_Desc},function(data){
				$("#txt_ServicesPage_ProfServices_Desc").hide();
				$("#edit_ServicesPage_ProfServices_Desc").hide();
				$('.EditPenServicesPage_ProfServices_Desc').show();
				$(".txtServicesPageProfServicesDesc").show().html(data);
			window.location.href="service.php";
		});
		}
	});
	
			$('.EditPenENC_PPDIOO_Services_Page').on('click',function(){
		$(this).hide();
		$(".txtPPDIOOServicesPageTitle").hide();
		$("#txt_ENC_PPDIOO_Services_Page_Title").show();
		$("#edit_ENC_PPDIOO_Services_Page_Title").show();
		
	});
	
		$("#edit_ENC_PPDIOO_Services_Page_Title").click(function(){
		var txt_ENC_PPDIOO_Services_Page_Title=$("#txt_ENC_PPDIOO_Services_Page_Title").val();
		var txtPPDIOOServicesPageLength=$("#txt_ENC_PPDIOO_Services_Page_Title").val().length;
		if(txtPPDIOOServicesPageLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editServicesPagePPDIOOTitle",{txt_ENC_PPDIOO_Services_Page_Title:txt_ENC_PPDIOO_Services_Page_Title},function(data){
				$("#txt_ENC_PPDIOO_Services_Page_Title").hide();
				$("#edit_ENC_PPDIOO_Services_Page_Title").hide();
				$('.EditPenENC_PPDIOO_Services_Page').show();
				$(".txtPPDIOOServicesPageTitle").show().html(data);
			window.location.href="service.php";
		});
		}
	});
	
			$('.EditPenServicesPage_PPDIOO_Desc').on('click',function(){
		$(this).hide();
		$(".txtPPDIODesc").hide();
		$("#txt_ServicesPage_PPDIOO_Desc").show();
		$("#edit_ServicesPage_PPDIOO_Desc").show();
	});
	
			$("#edit_ServicesPage_PPDIOO_Desc").click(function(){
		var txt_ServicesPage_PPDIOO_Desc=$("#txt_ServicesPage_PPDIOO_Desc").val();
		var txtServicesPagePPDIOODescLength=$("#txt_ServicesPage_PPDIOO_Desc").val().length;
		if(txtServicesPagePPDIOODescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editServicesPagePPDIOODesc",{txt_ServicesPage_PPDIOO_Desc:txt_ServicesPage_PPDIOO_Desc},function(data){
				$("#txt_ServicesPage_PPDIOO_Desc").hide();
				$("#edit_ServicesPage_PPDIOO_Desc").hide();
				$('.EditPenServicesPage_PPDIOO_Desc').show();
				$(".txtPPDIODesc").show().html(data);
			window.location.href="service.php";
		});
		}
	});
	
	$('.EditPenENC_SLAResident_Services_Page').on('click',function(){
		$(this).hide();
		$(".txtSLAResidentTitle").hide();
		$("#txt_ENC_SLAResident_Services_Page_Title").show();
		$("#edit_ENC_SLAResident_Services_Page_Title").show();
		
	});
	
			$("#edit_ENC_SLAResident_Services_Page_Title").click(function(){
		var txt_ENC_SLAResident_Services_Page_Title=$("#txt_ENC_SLAResident_Services_Page_Title").val();
		var txtSLAResidentServicesPageLength=$("#txt_ENC_SLAResident_Services_Page_Title").val().length;
		if(txtSLAResidentServicesPageLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editServicesPageSLAResidentTitle",{txt_ENC_SLAResident_Services_Page_Title:txt_ENC_SLAResident_Services_Page_Title},function(data){
				$("#txt_ENC_SLAResident_Services_Page_Title").hide();
				$("#edit_ENC_SLAResident_Services_Page_Title").hide();
				$('.EditPenENC_SLAResident_Services_Page').show();
				$(".txtSLAResidentTitle").show().html(data);
			window.location.href="service.php";
		});
		}
	});
	
		$('.EditPenServicesPage_SLAResident_Desc').on('click',function(){
		$(this).hide();
		$(".txtSLAResidentDesc").hide();
		$("#txt_ServicesPage_SLAResident_Desc").show();
		$("#edit_ServicesPage_SLAResident_Desc").show();
		
	});
	
				$("#edit_ServicesPage_SLAResident_Desc").click(function(){
		var txt_ServicesPage_SLAResident_Desc=$("#txt_ServicesPage_SLAResident_Desc").val();
		var txtServicesPageSLAResidentDescLength=$("#txt_ServicesPage_SLAResident_Desc").val().length;
		if(txtServicesPageSLAResidentDescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editServicesPageSLAResidentDesc",{txt_ServicesPage_SLAResident_Desc:txt_ServicesPage_SLAResident_Desc},function(data){
				$("#txt_ServicesPage_SLAResident_Desc").hide();
				$("#edit_ServicesPage_SLAResident_Desc").hide();
				$('.EditPenServicesPage_SLAResident_Desc').show();
				$(".txtSLAResidentDesc").show().html(data);
			window.location.href="service.php";
		});
		}
	});
	
		$('.EditPenENC_HelpDesk_Services_Page_Title').on('click',function(){
		$(this).hide();
		$(".txtHelpDeskTitle").hide();
		$("#txt_ENC_HelpDesk_Services_Page_Title").show();
		$("#edit_ENC_HelpDesk_Services_Page_Title").show();
		
	});
	
					$("#edit_ENC_HelpDesk_Services_Page_Title").click(function(){
		var txt_ENC_HelpDesk_Services_Page_Title=$("#txt_ENC_HelpDesk_Services_Page_Title").val();
		var txtServicesPageHelpDeskTitleLength=$("#txt_ENC_HelpDesk_Services_Page_Title").val().length;
		if(txtServicesPageHelpDeskTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editServicesPageHelpDeskTitle",{txt_ENC_HelpDesk_Services_Page_Title:txt_ENC_HelpDesk_Services_Page_Title},function(data){
				$("#txt_ENC_HelpDesk_Services_Page_Title").hide();
				$("#edit_ENC_HelpDesk_Services_Page_Title").hide();
				$('.EditPenENC_HelpDesk_Services_Page_Title').show();
				$(".txtHelpDeskTitle").show().html(data);
			window.location.href="service.php";
		});
		}
	});
	
			$('.EditPenServicesPage_HelpDesk_Desc').on('click',function(){
		$(this).hide();
		$(".txtHelpDeskDesc").hide();
		$("#txt_ServicesPage_HelpDesk_Desc").show();
		$("#edit_ServicesPage_HelpDesk_Desc").show();
		
	});
	
				$("#edit_ServicesPage_HelpDesk_Desc").click(function(){
		var txt_ServicesPage_HelpDesk_Desc=$("#txt_ServicesPage_HelpDesk_Desc").val();
		var txtServicesPageHelpDeskDescLength=$("#txt_ServicesPage_HelpDesk_Desc").val().length;
		if(txtServicesPageHelpDeskDescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editServicesPageHelpDeskDesc",{txt_ServicesPage_HelpDesk_Desc:txt_ServicesPage_HelpDesk_Desc},function(data){
				$("#txt_ServicesPage_HelpDesk_Desc").hide();
				$("#edit_ServicesPage_HelpDesk_Desc").hide();
				$('.EditPenServicesPage_HelpDesk_Desc').show();
				$(".txtHelpDeskDesc").show().html(data);
			window.location.href="service.php";
		});
		}
	});
	
		$('.EditPenENC_GlobalField_Services_Page_Title').on('click',function(){
		$(this).hide();
		$(".txtGlobalFieldTitle").hide();
		$("#txt_ENC_GlobalField_Services_Page_Title").show();
		$("#edit_ENC_GlobalField_Services_Page_Title").show();
		
	});
	
			$("#edit_ENC_GlobalField_Services_Page_Title").click(function(){
		var txt_ENC_GlobalField_Services_Page_Title=$("#txt_ENC_GlobalField_Services_Page_Title").val();
		var txtServicesPageGlobalFieldTitleLength=$("#txt_ENC_GlobalField_Services_Page_Title").val().length;
		if(txtServicesPageGlobalFieldTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editServicesPageGlobalFieldTitle",{txt_ENC_GlobalField_Services_Page_Title:txt_ENC_GlobalField_Services_Page_Title},function(data){
				$("#txt_ENC_GlobalField_Services_Page_Title").hide();
				$("#edit_ENC_GlobalField_Services_Page_Title").hide();
				$('.EditPenENC_GlobalField_Services_Page_Title').show();
				$(".txtGlobalFieldTitle").show().html(data);
			window.location.href="service.php";
		});
		}
	});
	
			$('.EditPenServicesPage_GlobalField_Desc').on('click',function(){
		$(this).hide();
		$(".txtGlobalFieldDesc").hide();
		$("#txt_ServicesPage_GlobalField_Desc").show();
		$("#edit_ServicesPage_GlobalField_Desc").show();
		
	});
	
					$("#edit_ServicesPage_GlobalField_Desc").click(function(){
		var txt_ServicesPage_GlobalField_Desc=$("#txt_ServicesPage_GlobalField_Desc").val();
		var txtServicesPageGlobalFieldDescLength=$("#txt_ServicesPage_GlobalField_Desc").val().length;
		if(txtServicesPageGlobalFieldDescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editServicesPageGlobalFieldDesc",{txt_ServicesPage_GlobalField_Desc:txt_ServicesPage_GlobalField_Desc},function(data){
				$("#txt_ServicesPage_GlobalField_Desc").hide();
				$("#edit_ServicesPage_GlobalField_Desc").hide();
				$('.EditPenServicesPage_GlobalField_Desc').show();
				$(".txtGlobalFieldDesc").show().html(data);
			window.location.href="service.php";
		});
		}
	});
	
			$('.EditPenENC_GlobalProf_Services_Page_Title').on('click',function(){
		$(this).hide();
		$(".txtGlobalProf").hide();
		$("#txt_ENC_GlobalProf_Services_Page_Title").show();
		$("#edit_ENC_GlobalProf_Services_Page_Title").show();
		
	});
	
		$("#edit_ENC_GlobalProf_Services_Page_Title").click(function(){
		var txt_ENC_GlobalProf_Services_Page_Title=$("#txt_ENC_GlobalProf_Services_Page_Title").val();
		var txtServicesPageGlobalProfTitleLength=$("#txt_ENC_GlobalProf_Services_Page_Title").val().length;
		if(txtServicesPageGlobalProfTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editServicesPageGlobalProfTitle",{txt_ENC_GlobalProf_Services_Page_Title:txt_ENC_GlobalProf_Services_Page_Title},function(data){
				$("#txt_ENC_GlobalProf_Services_Page_Title").hide();
				$("#edit_ENC_GlobalProf_Services_Page_Title").hide();
				$('.EditPenENC_GlobalProf_Services_Page_Title').show();
				$(".txtGlobalProf").show().html(data);
			window.location.href="service.php";
		});
		}
	});
	
			$('.EditPenServicesPage_GlobalProf_Desc').on('click',function(){
		$(this).hide();
		$(".txtGlobalProfDesc").hide();
		$("#txt_ServicesPage_GlobalProf_Desc").show();
		$("#edit_ServicesPage_GlobalProf_Desc").show();
		
	});
	
			$("#edit_ServicesPage_GlobalProf_Desc").click(function(){
		var txt_ServicesPage_GlobalProf_Desc=$("#txt_ServicesPage_GlobalProf_Desc").val();
		var txtServicesPageGlobalProfDescLength=$("#txt_ServicesPage_GlobalProf_Desc").val().length;
		if(txtServicesPageGlobalProfDescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editServicesPageGlobalProfDesc",{txt_ServicesPage_GlobalProf_Desc:txt_ServicesPage_GlobalProf_Desc},function(data){
				$("#txt_ServicesPage_GlobalProf_Desc").hide();
				$("#edit_ServicesPage_GlobalProf_Desc").hide();
				$('.EditPenServicesPage_GlobalProf_Desc').show();
				$(".txtGlobalProfDesc").show().html(data);
			window.location.href="service.php";
		});
		}
	});
	
				$('.EditPenENC_Penetrationtesting_Services_Page_Title').on('click',function(){
		$(this).hide();
		$(".txtPenetrationtestingTitle").hide();
		$("#txt_ENC_Penetrationtesting_Services_Page_Title").show();
		$("#edit_ENC_Penetrationtesting_Services_Page_Title").show();
		
	});
	
			$("#edit_ENC_Penetrationtesting_Services_Page_Title").click(function(){
		var txt_ENC_Penetrationtesting_Services_Page_Title=$("#txt_ENC_Penetrationtesting_Services_Page_Title").val();
		var txtServicesPagePenetrationtestingTitleLength=$("#txt_ENC_Penetrationtesting_Services_Page_Title").val().length;
		if(txtServicesPagePenetrationtestingTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editServicesPagePenetrationtestingTitle",{txt_ENC_Penetrationtesting_Services_Page_Title:txt_ENC_Penetrationtesting_Services_Page_Title},function(data){
				$("#txt_ENC_Penetrationtesting_Services_Page_Title").hide();
				$("#edit_ENC_Penetrationtesting_Services_Page_Title").hide();
				$('.EditPenENC_Penetrationtesting_Services_Page_Title').show();
				$(".txtPenetrationtestingTitle").show().html(data);
			window.location.href="service.php";
		});
		}
	});
	
				$('.EditPenServicesPage_PenetrationTesting_Desc').on('click',function(){
		$(this).hide();
		$(".txtPenetrationtestingDesc").hide();
		$("#txt_ServicesPage_PenetrationTesting_Desc").show();
		$("#edit_ServicesPage_PenetrationTesting_Desc").show();
		
	});
	
				$("#edit_ServicesPage_PenetrationTesting_Desc").click(function(){
		var txt_ServicesPage_PenetrationTesting_Desc=$("#txt_ServicesPage_PenetrationTesting_Desc").val();
		var txtServicesPagePenetrationTestingDescLength=$("#txt_ServicesPage_PenetrationTesting_Desc").val().length;
		if(txtServicesPagePenetrationTestingDescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editServicesPagePenetrationTestingDesc",{txt_ServicesPage_PenetrationTesting_Desc:txt_ServicesPage_PenetrationTesting_Desc},function(data){
				$("#txt_ServicesPage_PenetrationTesting_Desc").hide();
				$("#edit_ServicesPage_PenetrationTesting_Desc").hide();
				$('.EditPenServicesPage_PenetrationTesting_Desc').show();
				$(".txtPenetrationtestingDesc").show().html(data);
			window.location.href="service.php";
		});
		}
	});
	
					$('.EditPenENC_HumanResource_Services_Page_Title').on('click',function(){
		$(this).hide();
		$(".txtHumanResourceTitle").hide();
		$("#txt_ENC_HumanResource_Services_Page_Title").show();
		$("#edit_ENC_HumanResource_Services_Page_Title").show();
		
	});
	
				$("#edit_ENC_HumanResource_Services_Page_Title").click(function(){
		var txt_ENC_HumanResource_Services_Page_Title=$("#txt_ENC_HumanResource_Services_Page_Title").val();
		var txtServicesPageHumanResourceTitleLength=$("#txt_ENC_HumanResource_Services_Page_Title").val().length;
		if(txtServicesPageHumanResourceTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editServicesPageHumanResourceTitle",{txt_ENC_HumanResource_Services_Page_Title:txt_ENC_HumanResource_Services_Page_Title},function(data){
				$("#txt_ENC_HumanResource_Services_Page_Title").hide();
				$("#edit_ENC_HumanResource_Services_Page_Title").hide();
				$('.EditPenENC_HumanResource_Services_Page_Title').show();
				$(".txtHumanResourceTitle").show().html(data);
			window.location.href="service.php";
		});
		}
	});
	
					$('.EditPenServicesPage_HumanResource_Desc').on('click',function(){
		$(this).hide();
		$(".txtHumanResourceDesc").hide();
		$("#txt_ServicesPage_HumanResource_Desc").show();
		$("#edit_ServicesPage_HumanResource_Desc").show();
		
	});
	
					$("#edit_ServicesPage_HumanResource_Desc").click(function(){
		var txt_ServicesPage_HumanResource_Desc=$("#txt_ServicesPage_HumanResource_Desc").val();
		var txtServicesPageHumanResourceDescLength=$("#txt_ServicesPage_HumanResource_Desc").val().length;
		if(txtServicesPageHumanResourceDescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editServicesPageHumanResourceDesc",{txt_ServicesPage_HumanResource_Desc:txt_ServicesPage_HumanResource_Desc},function(data){
				$("#txt_ServicesPage_HumanResource_Desc").hide();
				$("#edit_ServicesPage_HumanResource_Desc").hide();
				$('.EditPenServicesPage_HumanResource_Desc').show();
				$(".txtHumanResourceDesc").show().html(data);
			window.location.href="service.php";
		});
		}
	});
	/* Service Page Image*/
	$("#file_Service1_img").change(function(){
	var fd1 = new FormData();
var filesimgService1 = $('#file_Service1_img')[0].files;
                if(filesimgService1.length > 0 ){
				fd1.append('file',filesimgService1[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeService1image',
                        type:'post',
                        data:fd1,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="service.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

	$("#file_Service2_img").change(function(){
	var fd2 = new FormData();
var filesimgService2 = $('#file_Service2_img')[0].files;
                if(filesimgService2.length > 0 ){
				fd2.append('file',filesimgService2[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeService2image',
                        type:'post',
                        data:fd2,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="service.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

	$("#file_Service3_img").change(function(){
	var fd3 = new FormData();
var filesimgService3 = $('#file_Service3_img')[0].files;
                if(filesimgService3.length > 0 ){
				fd3.append('file',filesimgService3[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeService3image',
                        type:'post',
                        data:fd3,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="service.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

	$("#file_Service4_img").change(function(){
	var fd4 = new FormData();
var filesimgService4 = $('#file_Service4_img')[0].files;
                if(filesimgService4.length > 0 ){
				fd4.append('file',filesimgService4[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeService4image',
                        type:'post',
                        data:fd4,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="service.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

	$("#file_Service5_img").change(function(){
	var fd5 = new FormData();
var filesimgService5 = $('#file_Service5_img')[0].files;
                if(filesimgService5.length > 0 ){
				fd5.append('file',filesimgService5[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeService5image',
                        type:'post',
                        data:fd5,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="service.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

	$("#file_Service6_img").change(function(){
	var fd6 = new FormData();
var filesimgService6 = $('#file_Service6_img')[0].files;
                if(filesimgService6.length > 0 ){
				fd6.append('file',filesimgService6[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeService6image',
                        type:'post',
                        data:fd6,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="service.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

	$("#file_Service7_img").change(function(){
	var fd7 = new FormData();
var filesimgService7 = $('#file_Service7_img')[0].files;
                if(filesimgService7.length > 0 ){
				fd7.append('file',filesimgService7[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeService7image',
                        type:'post',
                        data:fd7,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="service.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

	$("#file_Service8_img").change(function(){
	var fd8 = new FormData();
var filesimgService8 = $('#file_Service8_img')[0].files;
                if(filesimgService8.length > 0 ){
				fd8.append('file',filesimgService8[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeService8image',
                        type:'post',
                        data:fd8,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="service.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

					$('.EditPenENC_NetworkSecurity_Solution_Page').on('click',function(){
		$(this).hide();
		$(".txtNetworkSecurityTitle").hide();
		$("#txt_ENC_NetworkSecurity_Solution_Page_Title").show();
		$("#edit_ENC_NetworkSecurity_Solution_Page_Title").show();
		
	});
	
					$("#edit_ENC_NetworkSecurity_Solution_Page_Title").click(function(){
		var txt_ENC_NetworkSecurity_Solution_Page_Title=$("#txt_ENC_NetworkSecurity_Solution_Page_Title").val();
		var txtSolutionPageNetworkSecurityTitleLength=$("#txt_ENC_NetworkSecurity_Solution_Page_Title").val().length;
		if(txtSolutionPageNetworkSecurityTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editSolutionPageNetworkSecurityTitle",{txt_ENC_NetworkSecurity_Solution_Page_Title:txt_ENC_NetworkSecurity_Solution_Page_Title},function(data){
				$("#txt_ENC_NetworkSecurity_Solution_Page_Title").hide();
				$("#edit_ENC_NetworkSecurity_Solution_Page_Title").hide();
				$('.EditPenENC_NetworkSecurity_Solution_Page').show();
				$(".txtNetworkSecurityTitle").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
						$('.EditPenSoltuionPage_NetworkSecurity_Desc').on('click',function(){
		$(this).hide();
		$(".txtNetworkSecurityDesc").hide();
		$("#txt_SolutionPage_NetworkSecurity_Desc").show();
		$("#edit_SolutionPage_NetworkSecurity_Desc").show();
		
	});
	
						$("#edit_SolutionPage_NetworkSecurity_Desc").click(function(){
		var txt_SolutionPage_NetworkSecurity_Desc=$("#txt_SolutionPage_NetworkSecurity_Desc").val();
		var txtSolutionPageNetworkSecurityDescLength=$("#txt_SolutionPage_NetworkSecurity_Desc").val().length;
		if(txtSolutionPageNetworkSecurityDescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editSolutionPageNetworkSecurityDesc",{txt_SolutionPage_NetworkSecurity_Desc:txt_SolutionPage_NetworkSecurity_Desc},function(data){
				$("#txt_SolutionPage_NetworkSecurity_Desc").hide();
				$("#edit_SolutionPage_NetworkSecurity_Desc").hide();
				$('.EditPenSoltuionPage_NetworkSecurity_Desc').show();
				$(".txtNetworkSecurityDesc").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
						$('.EditPenENC_IPTelephony_Solution_Page').on('click',function(){
		$(this).hide();
		$(".txtIPTelephonyTitle").hide();
		$("#txt_ENC_IPTelephony_Solution_Page_Title").show();
		$("#edit_ENC_IPTelephony_Solution_Page_Title").show();
		
	});
	
			$("#edit_ENC_IPTelephony_Solution_Page_Title").click(function(){
		var txt_ENC_IPTelephony_Solution_Page_Title=$("#txt_ENC_IPTelephony_Solution_Page_Title").val();
		var txtSolutionPageIPTelephonyTitleLength=$("#txt_ENC_IPTelephony_Solution_Page_Title").val().length;
		if(txtSolutionPageIPTelephonyTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editSolutionPageIPTelephonyTitle",{txt_ENC_IPTelephony_Solution_Page_Title:txt_ENC_IPTelephony_Solution_Page_Title},function(data){
				$("#txt_ENC_IPTelephony_Solution_Page_Title").hide();
				$("#edit_ENC_IPTelephony_Solution_Page_Title").hide();
				$('.EditPenENC_IPTelephony_Solution_Page').show();
				$(".txtIPTelephonyTitle").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
		$('.EditPenSoltuionPage_IPTelephony_Desc').on('click',function(){
		$(this).hide();
		$(".txtIPTelephonyDesc").hide();
		$("#txt_SolutionPage_IPTelephony_Desc").show();
		$("#edit_SolutionPage_IPTelephony_Desc").show();
		
	});
	
						$("#edit_SolutionPage_IPTelephony_Desc").click(function(){
		var txt_SolutionPage_IPTelephony_Desc=$("#txt_SolutionPage_IPTelephony_Desc").val();
		var txtSolutionPageIPTelephonyDescLength=$("#txt_SolutionPage_IPTelephony_Desc").val().length;
		if(txtSolutionPageIPTelephonyDescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editSolutionPageIPTelephonyDesc",{txt_SolutionPage_IPTelephony_Desc:txt_SolutionPage_IPTelephony_Desc},function(data){
				$("#txt_SolutionPage_IPTelephony_Desc").hide();
				$("#edit_SolutionPage_IPTelephony_Desc").hide();
				$('.EditPenSoltuionPage_IPTelephony_Desc').show();
				$(".txtIPTelephonyDesc").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
						$('.EditPenENC_Routing_Solution_Page').on('click',function(){
		$(this).hide();
		$(".txtRoutingTitle").hide();
		$("#txt_ENC_Routing_Solution_Page_Title").show();
		$("#edit_ENC_Routing_Solution_Page_Title").show();
		
	});
	
			$("#edit_ENC_Routing_Solution_Page_Title").click(function(){
		var txt_ENC_Routing_Solution_Page_Title=$("#txt_ENC_Routing_Solution_Page_Title").val();
		var txtSolutionPageRoutingTitleLength=$("#txt_ENC_Routing_Solution_Page_Title").val().length;
		if(txtSolutionPageRoutingTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editSolutionPageRoutingTitle",{txt_ENC_Routing_Solution_Page_Title:txt_ENC_Routing_Solution_Page_Title},function(data){
				$("#txt_ENC_Routing_Solution_Page_Title").hide();
				$("#edit_ENC_Routing_Solution_Page_Title").hide();
				$('.EditPenENC_Routing_Solution_Page').show();
				$(".txtRoutingTitle").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
						$('.EditPenSoltuionPage_Routing_Desc').on('click',function(){
		$(this).hide();
		$(".txtRoutingDesc").hide();
		$("#txt_SolutionPage_Routing_Desc").show();
		$("#edit_SolutionPage_Routing_Desc").show();
		
	});
	
					$("#edit_SolutionPage_Routing_Desc").click(function(){
		var txt_SolutionPage_Routing_Desc=$("#txt_SolutionPage_Routing_Desc").val();
		var txtSolutionPageRoutingDescLength=$("#txt_SolutionPage_Routing_Desc").val().length;
		if(txtSolutionPageRoutingDescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editSolutionPageRoutingDesc",{txt_SolutionPage_Routing_Desc:txt_SolutionPage_Routing_Desc},function(data){
				$("#txt_SolutionPage_Routing_Desc").hide();
				$("#edit_SolutionPage_Routing_Desc").hide();
				$('.EditPenSoltuionPage_Routing_Desc').show();
				$(".txtRoutingDesc").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
					$('.EditPenENC_Wireless_Solution_Page').on('click',function(){
		$(this).hide();
		$(".txtWirelessTitle").hide();
		$("#txt_ENC_Wireless_Solution_Page_Title").show();
		$("#edit_ENC_Wireless_Solution_Page_Title").show();
		
	});
	
		$("#edit_ENC_Wireless_Solution_Page_Title").click(function(){
		var txt_ENC_Wireless_Solution_Page_Title=$("#txt_ENC_Wireless_Solution_Page_Title").val();
		var txtSolutionPageWirelessTitleLength=$("#txt_ENC_Wireless_Solution_Page_Title").val().length;
		if(txtSolutionPageWirelessTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editSolutionPageWirelessTitle",{txt_ENC_Wireless_Solution_Page_Title:txt_ENC_Wireless_Solution_Page_Title},function(data){
				$("#txt_ENC_Wireless_Solution_Page_Title").hide();
				$("#edit_ENC_Wireless_Solution_Page_Title").hide();
				$('.EditPenENC_Wireless_Solution_Page').show();
				$(".txtWirelessTitle").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
							$('.EditPenSoltuionPage_Wireless_Desc').on('click',function(){
		$(this).hide();
		$(".txtWirelessDesc").hide();
		$("#txt_SolutionPage_Wireless_Desc").show();
		$("#edit_SolutionPage_Wireless_Desc").show();
		
	});
	
					$("#edit_SolutionPage_Wireless_Desc").click(function(){
		var txt_SolutionPage_Wireless_Desc=$("#txt_SolutionPage_Wireless_Desc").val();
		var txtSolutionPageWirelessDescLength=$("#txt_SolutionPage_Wireless_Desc").val().length;
		if(txtSolutionPageWirelessDescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editSolutionPageWirelessDesc",{txt_SolutionPage_Wireless_Desc:txt_SolutionPage_Wireless_Desc},function(data){
				$("#txt_SolutionPage_Wireless_Desc").hide();
				$("#edit_SolutionPage_Wireless_Desc").hide();
				$('.EditPenSoltuionPage_Wireless_Desc').show();
				$(".txtWirelessDesc").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
					$('.EditPenENC_DataCenters_Solution_Page').on('click',function(){
		$(this).hide();
		$(".txtDataCentersTitle").hide();
		$("#txt_ENC_DataCenters_Solution_Page_Title").show();
		$("#edit_ENC_DataCenters_Solution_Page_Title").show();
		
	});
	
		$("#edit_ENC_DataCenters_Solution_Page_Title").click(function(){
		var txt_ENC_DataCenters_Solution_Page_Title=$("#txt_ENC_DataCenters_Solution_Page_Title").val();
		var txtSolutionPageDataCentersTitleLength=$("#txt_ENC_DataCenters_Solution_Page_Title").val().length;
		if(txtSolutionPageDataCentersTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editSolutionPageDataCentersTitle",{txt_ENC_DataCenters_Solution_Page_Title:txt_ENC_DataCenters_Solution_Page_Title},function(data){
				$("#txt_ENC_DataCenters_Solution_Page_Title").hide();
				$("#edit_ENC_DataCenters_Solution_Page_Title").hide();
				$('.EditPenENC_DataCenters_Solution_Page').show();
				$(".txtDataCentersTitle").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
								$('.EditPenSoltuionPage_DataCenters_Desc').on('click',function(){
		$(this).hide();
		$(".txtDataCentersDesc").hide();
		$("#txt_SolutionPage_DataCenters_Desc").show();
		$("#edit_SolutionPage_DataCenters_Desc").show();
		
	});
	
						$("#edit_SolutionPage_DataCenters_Desc").click(function(){
		var txt_SolutionPage_DataCenters_Desc=$("#txt_SolutionPage_DataCenters_Desc").val();
		var txtSolutionPageDataCentersDescLength=$("#txt_SolutionPage_DataCenters_Desc").val().length;
		if(txtSolutionPageDataCentersDescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editSolutionPageDataCentersDesc",{txt_SolutionPage_DataCenters_Desc:txt_SolutionPage_DataCenters_Desc},function(data){
				$("#txt_SolutionPage_DataCenters_Desc").hide();
				$("#edit_SolutionPage_DataCenters_Desc").hide();
				$('.EditPenSoltuionPage_DataCenters_Desc').show();
				$(".txtDataCentersDesc").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
						$('.EditPenENC_Server_Solution_Page').on('click',function(){
		$(this).hide();
		$(".txtforServerTitle").hide();
		$("#txt_ENC_Server_Solution_Page_Title").show();
		$("#edit_ENC_Server_Solution_Page_Title").show();
		
	});
	
			$("#edit_ENC_Server_Solution_Page_Title").click(function(){
		var txt_ENC_Server_Solution_Page_Title=$("#txt_ENC_Server_Solution_Page_Title").val();
		var txtSolutionPageServerTitleLength=$("#txt_ENC_Server_Solution_Page_Title").val().length;
		if(txtSolutionPageServerTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editSolutionPageServerTitle",{txt_ENC_Server_Solution_Page_Title:txt_ENC_Server_Solution_Page_Title},function(data){
				$("#txt_ENC_Server_Solution_Page_Title").hide();
				$("#edit_ENC_Server_Solution_Page_Title").hide();
				$('.EditPenENC_Server_Solution_Page').show();
				$(".txtforServerTitle").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
				$('.EditPenSoltuionPage_Server_Desc').on('click',function(){
		$(this).hide();
		$(".txtforServerDesc").hide();
		$("#txt_SolutionPage_Server_Desc").show();
		$("#edit_SolutionPage_Server_Desc").show();
		
	});
	
					$("#edit_SolutionPage_Server_Desc").click(function(){
		var txt_SolutionPage_Server_Desc=$("#txt_SolutionPage_Server_Desc").val();
		var txtSolutionPageServerDescLength=$("#txt_SolutionPage_Server_Desc").val().length;
		if(txtSolutionPageServerDescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editSolutionPageServerDesc",{txt_SolutionPage_Server_Desc:txt_SolutionPage_Server_Desc},function(data){
				$("#txt_SolutionPage_Server_Desc").hide();
				$("#edit_SolutionPage_Server_Desc").hide();
				$('.EditPenSoltuionPage_Server_Desc').show();
				$(".txtforServerDesc").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
				$('.EditPenENC_Security_Solution_Page').on('click',function(){
		$(this).hide();
		$(".txtforSecurityTitle").hide();
		$("#txt_ENC_Security_Solution_Page_Title").show();
		$("#edit_ENC_Security_Solution_Page_Title").show();
		
	});
	
			$("#edit_ENC_Security_Solution_Page_Title").click(function(){
		var txt_ENC_Security_Solution_Page_Title=$("#txt_ENC_Security_Solution_Page_Title").val();
		var txtSolutionPageSecurityTitleLength=$("#txt_ENC_Security_Solution_Page_Title").val().length;
		if(txtSolutionPageSecurityTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editSolutionPageSecurityTitle",{txt_ENC_Security_Solution_Page_Title:txt_ENC_Security_Solution_Page_Title},function(data){
				$("#txt_ENC_Security_Solution_Page_Title").hide();
				$("#edit_ENC_Security_Solution_Page_Title").hide();
				$('.EditPenENC_Security_Solution_Page').show();
				$(".txtforSecurityTitle").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
				$('.EditPenSoltuionPage_Security_Desc').on('click',function(){
		$(this).hide();
		$(".txtforSecurityDesc").hide();
		$("#txt_SolutionPage_Security_Desc").show();
		$("#edit_SolutionPage_Security_Desc").show();
		
	});
	
					$("#edit_SolutionPage_Security_Desc").click(function(){
		var txt_SolutionPage_Security_Desc=$("#txt_SolutionPage_Security_Desc").val();
		var txtSolutionPageSecurityDescLength=$("#txt_SolutionPage_Security_Desc").val().length;
		if(txtSolutionPageSecurityDescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editSolutionPageSecurityDesc",{txt_SolutionPage_Security_Desc:txt_SolutionPage_Security_Desc},function(data){
				$("#txt_SolutionPage_Security_Desc").hide();
				$("#edit_SolutionPage_Security_Desc").hide();
				$('.EditPenSoltuionPage_Security_Desc').show();
				$(".txtforSecurityDesc").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
		$('.EditPenENC_Virtualization_Solution_Page').on('click',function(){
		$(this).hide();
		$(".txtforVirtualizationTitle").hide();
		$("#txt_ENC_Virtualization_Solution_Page_Title").show();
		$("#edit_ENC_Virtualization_Solution_Page_Title").show();
		
	});
	
		$("#edit_ENC_Virtualization_Solution_Page_Title").click(function(){
		var txt_ENC_Virtualization_Solution_Page_Title=$("#txt_ENC_Virtualization_Solution_Page_Title").val();
		var txtSolutionPageVirtualizationTitleLength=$("#txt_ENC_Virtualization_Solution_Page_Title").val().length;
		if(txtSolutionPageVirtualizationTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editSolutionPageVirtualizationTitle",{txt_ENC_Virtualization_Solution_Page_Title:txt_ENC_Virtualization_Solution_Page_Title},function(data){
				$("#txt_ENC_Virtualization_Solution_Page_Title").hide();
				$("#edit_ENC_Virtualization_Solution_Page_Title").hide();
				$('.EditPenENC_Virtualization_Solution_Page').show();
				$(".txtforVirtualizationTitle").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
					$('.EditPenSoltuionPage_Virtualization_Desc').on('click',function(){
		$(this).hide();
		$(".txtforVirtualizationDesc").hide();
		$("#txt_SolutionPage_Virtualization_Desc").show();
		$("#edit_SolutionPage_Virtualization_Desc").show();
		
	});
	
			$("#edit_SolutionPage_Virtualization_Desc").click(function(){
		var txt_SolutionPage_Virtualization_Desc=$("#txt_SolutionPage_Virtualization_Desc").val();
		var txtSolutionPageVirtualizationDescLength=$("#txt_SolutionPage_Virtualization_Desc").val().length;
		if(txtSolutionPageVirtualizationDescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editSolutionPageVirtualizationDesc",{txt_SolutionPage_Virtualization_Desc:txt_SolutionPage_Virtualization_Desc},function(data){
				$("#txt_SolutionPage_Virtualization_Desc").hide();
				$("#edit_SolutionPage_Virtualization_Desc").hide();
				$('.EditPenSoltuionPage_Virtualization_Desc').show();
				$(".txtforVirtualizationDesc").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
			$('.EditPenENC_Power_Solution_Page').on('click',function(){
		$(this).hide();
		$(".txtforPowerTitle").hide();
		$("#txt_ENC_Power_Solution_Page_Title").show();
		$("#edit_ENC_Power_Solution_Page_Title").show();
		
	});
	
			$("#edit_ENC_Power_Solution_Page_Title").click(function(){
		var txt_ENC_Power_Solution_Page_Title=$("#txt_ENC_Power_Solution_Page_Title").val();
		var txtSolutionPagePowerTitleLength=$("#txt_ENC_Power_Solution_Page_Title").val().length;
		if(txtSolutionPagePowerTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editSolutionPagePowerTitle",{txt_ENC_Power_Solution_Page_Title:txt_ENC_Power_Solution_Page_Title},function(data){
				$("#txt_ENC_Power_Solution_Page_Title").hide();
				$("#edit_ENC_Power_Solution_Page_Title").hide();
				$('.EditPenENC_Power_Solution_Page').show();
				$(".txtforPowerTitle").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
						$('.EditPenSoltuionPage_Power_Desc').on('click',function(){
		$(this).hide();
		$(".txtforPowerDesc").hide();
		$("#txt_SolutionPage_Power_Desc").show();
		$("#edit_SolutionPage_Power_Desc").show();
		
	});
	
				$("#edit_SolutionPage_Power_Desc").click(function(){
		var txt_SolutionPage_Power_Desc=$("#txt_SolutionPage_Power_Desc").val();
		var txtSolutionPagePowerDescLength=$("#txt_SolutionPage_Power_Desc").val().length;
		if(txtSolutionPagePowerDescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editSolutionPagePowerDesc",{txt_SolutionPage_Power_Desc:txt_SolutionPage_Power_Desc},function(data){
				$("#txt_SolutionPage_Power_Desc").hide();
				$("#edit_SolutionPage_Power_Desc").hide();
				$('.EditPenSoltuionPage_Power_Desc').show();
				$(".txtforPowerDesc").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
				$('.EditPenENC_Software_Solution_Page').on('click',function(){
		$(this).hide();
		$(".txtforSoftwareTitle").hide();
		$("#txt_ENC_Software_Solution_Page_Title").show();
		$("#edit_ENC_Software_Solution_Page_Title").show();
		
	});
	
				$("#edit_ENC_Software_Solution_Page_Title").click(function(){
		var txt_ENC_Software_Solution_Page_Title=$("#txt_ENC_Software_Solution_Page_Title").val();
		var txtSolutionPageSoftwareTitleLength=$("#txt_ENC_Software_Solution_Page_Title").val().length;
		if(txtSolutionPageSoftwareTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editSolutionPageSoftwareTitle",{txt_ENC_Software_Solution_Page_Title:txt_ENC_Software_Solution_Page_Title},function(data){
				$("#txt_ENC_Software_Solution_Page_Title").hide();
				$("#edit_ENC_Software_Solution_Page_Title").hide();
				$('.EditPenENC_Software_Solution_Page').show();
				$(".txtforSoftwareTitle").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
							$('.EditPenSoltuionPage_Software_Desc').on('click',function(){
		$(this).hide();
		$(".txtforSoftwareDesc").hide();
		$("#txt_SolutionPage_Software_Desc").show();
		$("#edit_SolutionPage_Software_Desc").show();
		
	});
	
					$("#edit_SolutionPage_Software_Desc").click(function(){
		var txt_SolutionPage_Software_Desc=$("#txt_SolutionPage_Software_Desc").val();
		var txtSolutionPageSoftwareDescLength=$("#txt_SolutionPage_Software_Desc").val().length;
		if(txtSolutionPageSoftwareDescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editSolutionPageSoftwareDesc",{txt_SolutionPage_Software_Desc:txt_SolutionPage_Software_Desc},function(data){
				$("#txt_SolutionPage_Software_Desc").hide();
				$("#edit_SolutionPage_Software_Desc").hide();
				$('.EditPenSoltuionPage_Software_Desc').show();
				$(".txtforSoftwareDesc").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	
					$('.EditPenENC_ENCMicrosoftSolution_Solution_Page').on('click',function(){
		$(this).hide();
		$(".txtENCMicrosoftSolutionTitle").hide();
		$("#txt_ENC_ENCMicrosoftSolution_Solution_Page_Title").show();
		$("#edit_ENC_ENCMicrosoftSolution_Solution_Page_Title").show();
		
	});
	
					$("#edit_ENC_ENCMicrosoftSolution_Solution_Page_Title").click(function(){
		var txt_ENC_ENCMicrosoftSolution_Solution_Page_Title=$("#txt_ENC_ENCMicrosoftSolution_Solution_Page_Title").val();
		var txtSolutionPageENCMicrosoftSolutionTitleLength=$("#txt_ENC_ENCMicrosoftSolution_Solution_Page_Title").val().length;
		if(txtSolutionPageENCMicrosoftSolutionTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=editSolutionPageENCMicrosoftSolutionTitle",{txt_ENC_ENCMicrosoftSolution_Solution_Page_Title:txt_ENC_ENCMicrosoftSolution_Solution_Page_Title},function(data){
				$("#txt_ENC_ENCMicrosoftSolution_Solution_Page_Title").hide();
				$("#edit_ENC_ENCMicrosoftSolution_Solution_Page_Title").hide();
				$('.EditPenENC_ENCMicrosoftSolution_Solution_Page').show();
				$(".txtENCMicrosoftSolutionTitle").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
						$('.EditPenSoltuionPage_ENCMicrosoftSolution_Desc').on('click',function(){
		$(this).hide();
		$(".txtENCMicrosoftSolutionDesc").hide();
		$("#txt_ENCMicrosoftSolution_Solution_Page_Desc").show();
		$("#edit_ENCMicrosoftSolution_Solution_Page_Desc").show();
		
	});
	
						$("#edit_ENCMicrosoftSolution_Solution_Page_Desc").click(function(){
		var txt_ENCMicrosoftSolution_Solution_Page_Desc=$("#txt_ENCMicrosoftSolution_Solution_Page_Desc").val();
		var txtSolutionPageENCMicrosoftSolutionDescLength=$("#txt_ENCMicrosoftSolution_Solution_Page_Desc").val().length;
		if(txtSolutionPageENCMicrosoftSolutionDescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editSolutionPageENCMicrosoftSolutionDesc",{txt_ENCMicrosoftSolution_Solution_Page_Desc:txt_ENCMicrosoftSolution_Solution_Page_Desc},function(data){
				$("#txt_ENCMicrosoftSolution_Solution_Page_Desc").hide();
				$("#edit_ENCMicrosoftSolution_Solution_Page_Desc").hide();
				$('.EditPenSoltuionPage_ENCMicrosoftSolution_Desc').show();
				$(".txtENCMicrosoftSolutionDesc").show().html(data);
			window.location.href="solutions.php";
		});
		}
	});
	/*Solution page image*/
	$("#file_Solution1_img").change(function(){
	var fd1 = new FormData();
var filesimgsol1 = $('#file_Solution1_img')[0].files;
                if(filesimgsol1.length > 0 ){
				fd1.append('file',filesimgsol1[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeSolutionimage1',
                        type:'post',
                        data:fd1,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="solutions.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

	$("#file_Solution2_img").change(function(){
	var fd2 = new FormData();
var filesimgsol2 = $('#file_Solution2_img')[0].files;
                if(filesimgsol2.length > 0 ){
				fd2.append('file',filesimgsol2[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeSolutionimage2',
                        type:'post',
                        data:fd2,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="solutions.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

	$("#file_Solution3_img").change(function(){
	var fd3 = new FormData();
var filesimgsol3 = $('#file_Solution3_img')[0].files;
                if(filesimgsol3.length > 0 ){
				fd3.append('file',filesimgsol3[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeSolutionimage3',
                        type:'post',
                        data:fd3,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="solutions.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

	$("#file_Solution4_img").change(function(){
	var fd4 = new FormData();
var filesimgsol4 = $('#file_Solution4_img')[0].files;
                if(filesimgsol4.length > 0 ){
				fd4.append('file',filesimgsol4[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeSolutionimage4',
                        type:'post',
                        data:fd4,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="solutions.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

	$("#file_Solution5_img").change(function(){
	var fd5 = new FormData();
var filesimgsol5 = $('#file_Solution5_img')[0].files;
                if(filesimgsol5.length > 0 ){
				fd5.append('file',filesimgsol5[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeSolutionimage5',
                        type:'post',
                        data:fd5,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="solutions.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

	$("#file_Solution6_img").change(function(){
	var fd6 = new FormData();
var filesimgsol6 = $('#file_Solution6_img')[0].files;
                if(filesimgsol6.length > 0 ){
				fd6.append('file',filesimgsol6[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeSolutionimage6',
                        type:'post',
                        data:fd6,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="solutions.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

	$("#file_Solution7_img").change(function(){
	var fd7 = new FormData();
var filesimgsol7 = $('#file_Solution7_img')[0].files;
                if(filesimgsol7.length > 0 ){
				fd7.append('file',filesimgsol7[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeSolutionimage7',
                        type:'post',
                        data:fd7,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="solutions.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

	$("#file_Solution8_img").change(function(){
	var fd8 = new FormData();
var filesimgsol8 = $('#file_Solution8_img')[0].files;
                if(filesimgsol8.length > 0 ){
				fd8.append('file',filesimgsol8[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeSolutionimage8',
                        type:'post',
                        data:fd8,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="solutions.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

	$("#file_Solution9_img").change(function(){
	var fd9 = new FormData();
var filesimgsol9 = $('#file_Solution9_img')[0].files;
                if(filesimgsol9.length > 0 ){
				fd9.append('file',filesimgsol9[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeSolutionimage9',
                        type:'post',
                        data:fd9,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="solutions.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

	$("#file_Solution10_img").change(function(){
	var fd10 = new FormData();
var filesimgsol10 = $('#file_Solution10_img')[0].files;
                if(filesimgsol10.length > 0 ){
				fd10.append('file',filesimgsol10[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeSolutionimage10',
                        type:'post',
                        data:fd10,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="solutions.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

	$("#file_Solution11_img").change(function(){
	var fd11 = new FormData();
var filesimgsol11 = $('#file_Solution11_img')[0].files;
                if(filesimgsol11.length > 0 ){
				fd11.append('file',filesimgsol11[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeSolutionimage11',
                        type:'post',
                        data:fd11,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="solutions.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

	$("#file_AddClient_img").change(function(){
	var fd1 = new FormData();
var filesimgclient1 = $('#file_AddClient_img')[0].files;
                if(filesimgclient1.length > 0 ){
				fd1.append('file',filesimgclient1[0]);
				$.ajax({
                        url:'@inc/data.php?status=AddClientimage',
                        type:'post',
                        data:fd1,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="client.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});
/*Client Page*/
$(".closeicon").on("click",function(){
var imageid=$(this).attr("id");
$.post("@inc/data.php?status=deleteClientimage",{imageid:imageid},function(data){
	alert(data);
window.location.href="client.php";
});
});
/*Partner Page*/

$('.EditPenpartnerParagraph_Desc').on('click',function(){
		$(this).hide();
		$(".partnerParagraph").hide();
		$("#txt_partnerParagraph_Desc").show();
		$("#edit_partnerParagraph_Desc").show();
		
	});
	
						$("#edit_partnerParagraph_Desc").click(function(){
		var txt_partnerParagraph_Desc=$("#txt_partnerParagraph_Desc").val();
		var txtpartnerParagraphDescLength=$("#txt_partnerParagraph_Desc").val().length;
		if(txtpartnerParagraphDescLength > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=editpartnerParagraphDesc",{txt_partnerParagraph_Desc:txt_partnerParagraph_Desc},function(data){
				$("#txt_partnerParagraph_Desc").hide();
				$("#edit_partnerParagraph_Desc").hide();
				$('.EditPenpartnerParagraph_Desc').show();
				$(".partnerParagraph").show().html(data);
			window.location.href="partner.php";
		});
		}
	});
	
						$('.EditPenENC_partnerParagraph_Page').on('click',function(){
		$(this).hide();
		$(".Ourpartnership").hide();
		$("#txt_partnerParagraph_Title").show();
		$("#edit_ENC_OurPartner_Title").show();
		
	});
	
					$("#edit_ENC_OurPartner_Title").click(function(){
		var txt_partnerParagraph_Title=$("#txt_partnerParagraph_Title").val();
		var txtOurpartnershipTitleLength=$("#txt_partnerParagraph_Title").val().length;
		if(txtOurpartnershipTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=edittxtOurpartnershipTitle",{txt_partnerParagraph_Title:txt_partnerParagraph_Title},function(data){
				$("#txt_partnerParagraph_Title").hide();
				$("#edit_ENC_OurPartner_Title").hide();
				$('.EditPenENC_partnerParagraph_Page').show();
				$(".Ourpartnership").show().html(data);
			window.location.href="partner.php";
		});
		}
	});
	
		$("#file_AddPartnerPartnership_img").change(function(){
	var fd1 = new FormData();
var filesimgPartnerPartnership = $('#file_AddPartnerPartnership_img')[0].files;
                if(filesimgPartnerPartnership.length > 0 ){
				fd1.append('file',filesimgPartnerPartnership[0]);
				$.ajax({
                        url:'@inc/data.php?status=AddfilesimgPartnerPartnershipimage',
                        type:'post',
                        data:fd1,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="partner.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

$(".closeiconPartnership").on("click",function(){
var partnership=$(this).attr("id");
$.post("@inc/data.php?status=deletePartnership",{partnership:partnership},function(data){
	alert(data);
window.location.href="partner.php";
});
});

		$("#file_AddPartnerGlobal_img").change(function(){
	var fd2 = new FormData();
var filesimgPartnerGlobal = $('#file_AddPartnerGlobal_img')[0].files;
                if(filesimgPartnerGlobal.length > 0 ){
				fd2.append('file',filesimgPartnerGlobal[0]);
				$.ajax({
                        url:'@inc/data.php?status=AddfilesimgPartnerGlobalimage',
                        type:'post',
                        data:fd2,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="partner.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

$(".closeiconGlobal").on("click",function(){
var partnershipGlobal=$(this).attr("id");
$.post("@inc/data.php?status=deleteGlobal",{partnershipGlobal:partnershipGlobal},function(data){
	alert(data);
window.location.href="partner.php";
});
});

		$("#file_AddPartnerSystem_img").change(function(){
	var fd3 = new FormData();
var filesimgPartnerSystem = $('#file_AddPartnerSystem_img')[0].files;
                if(filesimgPartnerSystem.length > 0 ){
				fd3.append('file',filesimgPartnerSystem[0]);
				$.ajax({
                        url:'@inc/data.php?status=AddfilesimgPartnerSystemimage',
                        type:'post',
                        data:fd3,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="partner.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

$(".closeiconSystem").on("click",function(){
var partnershipSystem=$(this).attr("id");
$.post("@inc/data.php?status=deleteSystem",{partnershipSystem:partnershipSystem},function(data){
	alert(data);
window.location.href="partner.php";
});
});

		$("#file_AddPartnerNetwork_img").change(function(){
	var fd4 = new FormData();
var filesimgPartnerNetwork = $('#file_AddPartnerNetwork_img')[0].files;
                if(filesimgPartnerNetwork.length > 0 ){
				fd4.append('file',filesimgPartnerNetwork[0]);
				$.ajax({
                        url:'@inc/data.php?status=AddfilesimgPartnerNetworkimage',
                        type:'post',
                        data:fd4,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="partner.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

$(".closeiconNetwork").on("click",function(){
var partnershipNetwork=$(this).attr("id");
$.post("@inc/data.php?status=deleteNetwork",{partnershipNetwork:partnershipNetwork},function(data){
	alert(data);
window.location.href="partner.php";
});
});

		$("#file_AddPartnerNetworkPassive_img").change(function(){
	var fd5 = new FormData();
var filesimgPartnerNetworkPassive = $('#file_AddPartnerNetworkPassive_img')[0].files;
                if(filesimgPartnerNetworkPassive.length > 0 ){
				fd5.append('file',filesimgPartnerNetworkPassive[0]);
				$.ajax({
                        url:'@inc/data.php?status=AddfilesimgPartnerNetworkPassiveimage',
                        type:'post',
                        data:fd5,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="partner.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

$(".closeiconNetworkPassive").on("click",function(){
var partnershipNetworkPassive=$(this).attr("id");
$.post("@inc/data.php?status=deleteNetworkPassive",{partnershipNetworkPassive:partnershipNetworkPassive},function(data){
	alert(data);
window.location.href="partner.php";
});
});

		$("#file_AddPartnerServerDesktop_img").change(function(){
	var fd6 = new FormData();
var filesimgPartnerServerDesktop = $('#file_AddPartnerServerDesktop_img')[0].files;
                if(filesimgPartnerServerDesktop.length > 0 ){
				fd6.append('file',filesimgPartnerServerDesktop[0]);
				$.ajax({
                        url:'@inc/data.php?status=AddfilesimgPartnerServerDesktopimage',
                        type:'post',
                        data:fd6,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="partner.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

$(".closeiconServerDesktop").on("click",function(){
var partnershipServerDesktop=$(this).attr("id");
$.post("@inc/data.php?status=deleteServerDesktop",{partnershipServerDesktop:partnershipServerDesktop},function(data){
	alert(data);
window.location.href="partner.php";
});
});

		$("#file_AddPartnerSecurity_img").change(function(){
	var fd7 = new FormData();
var filesimgPartnerSecurity = $('#file_AddPartnerSecurity_img')[0].files;
                if(filesimgPartnerSecurity.length > 0 ){
				fd7.append('file',filesimgPartnerSecurity[0]);
				$.ajax({
                        url:'@inc/data.php?status=AddfilesimgPartnerSecurityimage',
                        type:'post',
                        data:fd7,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="partner.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

$(".closeiconSecurity").on("click",function(){
var partnershipSecurity=$(this).attr("id");
$.post("@inc/data.php?status=deleteSecurity",{partnershipSecurity:partnershipSecurity},function(data){
	alert(data);
window.location.href="partner.php";
});
});
		$("#file_AddPartnerUPS_img").change(function(){
	var fd8 = new FormData();
var filesimgPartnerUPS = $('#file_AddPartnerUPS_img')[0].files;
                if(filesimgPartnerUPS.length > 0 ){
				fd8.append('file',filesimgPartnerUPS[0]);
				$.ajax({
                        url:'@inc/data.php?status=AddfilesimgPartnerUPSimage',
                        type:'post',
                        data:fd8,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="partner.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});


$(".closeiconUPS").on("click",function(){
var partnershipUPS=$(this).attr("id");
$.post("@inc/data.php?status=deleteUPS",{partnershipUPS:partnershipUPS},function(data){
	alert(data);
window.location.href="partner.php";
});
		  });
		  
		$("#file_AddPartnerNetworkManage_img").change(function(){
	var fd9 = new FormData();
var filesimgPartnerNetworkManage = $('#file_AddPartnerNetworkManage_img')[0].files;
                if(filesimgPartnerNetworkManage.length > 0 ){
				fd9.append('file',filesimgPartnerNetworkManage[0]);
				$.ajax({
                        url:'@inc/data.php?status=AddfilesimgPartnerNetworkManageimage',
                        type:'post',
                        data:fd9,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="partner.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

$(".closeiconNetworkManage").on("click",function(){
var partnershipNetworkManage=$(this).attr("id");
$.post("@inc/data.php?status=deleteNetworkManage",{partnershipNetworkManage:partnershipNetworkManage},function(data){
	alert(data);
window.location.href="partner.php";
});
		  });
		  
						$('.EditPenENC_GlobalReach_Page').on('click',function(){
		$(this).hide();
		$(".txtGlobalReachTitle").hide();
		$("#txt_ENC_GlobalReach_Page_Title").show();
		$("#edit_ENC_GlobalReach_Page_Title").show();
		
	});
	
					$("#edit_ENC_GlobalReach_Page_Title").click(function(){
		var txt_ENC_GlobalReach_Page_Title=$("#txt_ENC_GlobalReach_Page_Title").val();
		var txtGlobalReachTitleLength=$("#txt_ENC_GlobalReach_Page_Title").val().length;
		if(txtGlobalReachTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=edittxtGlobalReachTitle",{txt_ENC_GlobalReach_Page_Title:txt_ENC_GlobalReach_Page_Title},function(data){
				$("#txt_ENC_GlobalReach_Page_Title").hide();
				$("#edit_ENC_GlobalReach_Page_Title").hide();
				$('.EditPenENC_GlobalReach_Page').show();
				$(".txtGlobalReachTitle").show().html(data);
			window.location.href="globalreach.php";
		});
		}
	});
	
						$('.EditPenGlobalReach_Desc1').on('click',function(){
		$(this).hide();
		$(".txtGlobalReachDesc1").hide();
		$("#txt_GlobalReach_Desc1").show();
		$("#edit_GlobalReach_Desc1").show();
		
	});
	
					$("#edit_GlobalReach_Desc1").click(function(){
		var txt_GlobalReach_Desc1=$("#txt_GlobalReach_Desc1").val();
		var txtGlobalReachDesc1Length=$("#txt_GlobalReach_Desc1").val().length;
		if(txtGlobalReachDesc1Length > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=edittxtGlobalReachDesc1",{txt_GlobalReach_Desc1:txt_GlobalReach_Desc1},function(data){
				$("#txt_GlobalReach_Desc1").hide();
				$("#edit_GlobalReach_Desc1").hide();
				$('.EditPenGlobalReach_Desc1').show();
				$(".txtGlobalReachDesc1").show().html(data);
			window.location.href="globalreach.php";
		});
		}
	});
	
							$('.EditPenGlobalReach_Desc2').on('click',function(){
		$(this).hide();
		$(".txtGlobalReachDesc2").hide();
		$("#txt_GlobalReach_Desc2").show();
		$("#edit_GlobalReach_Desc2").show();
		
	});
	
						$("#edit_GlobalReach_Desc2").click(function(){
		var txt_GlobalReach_Desc2=$("#txt_GlobalReach_Desc2").val();
		var txtGlobalReachDesc2Length=$("#txt_GlobalReach_Desc2").val().length;
		if(txtGlobalReachDesc2Length > 5000){
			alert("Maximam size is 5000");
		}else{
		$.post("@inc/data.php?status=edittxtGlobalReachDesc2",{txt_GlobalReach_Desc2:txt_GlobalReach_Desc2},function(data){
				$("#txt_GlobalReach_Desc2").hide();
				$("#edit_GlobalReach_Desc2").hide();
				$('.EditPenGlobalReach_Desc2').show();
				$(".txtGlobalReachDesc2").show().html(data);
			window.location.href="globalreach.php";
		});
		}
	});
	
	$("#file_GlobalReach1_img").change(function(){
	var fd1 = new FormData();
var filesGlobalReach1 = $('#file_GlobalReach1_img')[0].files;
                if(filesGlobalReach1.length > 0 ){
				fd1.append('file',filesGlobalReach1[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeGlobalReachimage1',
                        type:'post',
                        data:fd1,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="globalreach.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

	$("#file_GlobalReach2_img").change(function(){
	var fd2 = new FormData();
var filesGlobalReach2 = $('#file_GlobalReach2_img')[0].files;
                if(filesGlobalReach2.length > 0 ){
				fd2.append('file',filesGlobalReach2[0]);
				$.ajax({
                        url:'@inc/data.php?status=changeGlobalReachimage2',
                        type:'post',
                        data:fd2,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="globalreach.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

$(".DeleteSlideshow").on("click",function(){
var DeleteSlideshow=$(this).attr("id");
$.post("@inc/data.php?status=DeleteSlideshowImage",{DeleteSlideshow:DeleteSlideshow},function(data){
	alert(data);
window.location.href="SlideShowControl.php";
});
		  });

$("#file_Partner_img").change(function(){
	var fd1 = new FormData();
var filesPartnerBanner = $('#file_Partner_img')[0].files;
                if(filesPartnerBanner.length > 0 ){
				fd1.append('file',filesPartnerBanner[0]);
				$.ajax({
                        url:'@inc/data.php?status=AddFilePartnerBanner',
                        type:'post',
                        data:fd1,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="ClientControl.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});


$(".DeletePartnerBanner").on("click",function(){
var DeletePartnerBanner=$(this).attr("id");
$.post("@inc/data.php?status=DeletePartnerBannerImage",{DeletePartnerBanner:DeletePartnerBanner},function(data){
	alert(data);
window.location.href="ClientControl.php";
});
		  });
		  
	$("#file_Client_img").change(function(){
	var fd1 = new FormData();
var filesClientBanner = $('#file_Client_img')[0].files;
                if(filesClientBanner.length > 0 ){
				fd1.append('file',filesClientBanner[0]);
				$.ajax({
                        url:'@inc/data.php?status=AddFileClinerBanner',
                        type:'post',
                        data:fd1,
                        contentType: false,
                        processData: false,
                        success:function(response){
                           alert(response);
						   			window.location.href="PartnerControl.php";

                        }
                    });
                }else{
                    alert("Please select a file.");
                }
});

$(".DeleteClientBanner").on("click",function(){
var DeleteClientBanner=$(this).attr("id");
$.post("@inc/data.php?status=DeleteClientBannerImage",{DeleteClientBanner:DeleteClientBanner},function(data){
	alert(data);
window.location.href="PartnerControl.php";
});
		  });
$('.EditPenENC_general_manager_Page').on("click",function(){
			$(this).hide();
		$("#generalmanager").hide();
		$("#txt_ENC_GeneralManager_Title").show();
		$("#edit_General_manager_Page_Title").show();
		
});	

					$("#edit_General_manager_Page_Title").click(function(){
		var txt_ENC_GeneralManager_Title=$("#txt_ENC_GeneralManager_Title").val();
		var txtGeneralManagerTitleLength=$("#txt_ENC_GeneralManager_Title").val().length;
		if(txtGeneralManagerTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=edittxtGeneralmanagerTitle",{txt_ENC_GeneralManager_Title:txt_ENC_GeneralManager_Title},function(data){
				$("#txt_ENC_GeneralManager_Title").hide();
				$("#edit_General_manager_Page_Title").hide();
				$('.EditPenENC_general_manager_Page').show();
				$("#generalmanager").show().html(data);
			window.location.href="contactus.php";
		});
		}
	});
	
	$('.EditPenENC_Sales_manager_Page').on("click",function(){
			$(this).hide();
		$("#Salesmanager").hide();
		$("#txt_ENC_SalesManager_Title").show();
		$("#edit_Sales_manager_Page_Title").show();
		
});

					$("#edit_Sales_manager_Page_Title").click(function(){
		var txt_ENC_SalesManager_Title=$("#txt_ENC_SalesManager_Title").val();
		var txtSalesManagerTitleLength=$("#txt_ENC_SalesManager_Title").val().length;
		if(txtSalesManagerTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=edittxtSalesmanagerTitle",{txt_ENC_SalesManager_Title:txt_ENC_SalesManager_Title},function(data){
				$("#txt_ENC_SalesManager_Title").hide();
				$("#edit_Sales_manager_Page_Title").hide();
				$('.EditPenENC_Sales_manager_Page').show();
				$("#Salesmanager").show().html(data);
			window.location.href="contactus.php";
		});
		}
	});
		$('.EditPenENC_Sales_managermail_Page').on("click",function(){
			$(this).hide();
		$("#SalesmanagerEmail").hide();
		$("#txt_ENC_SalesManagermail_Title").show();
		$("#edit_Sales_managermail_Page_Title").show();
		
});

					$("#edit_Sales_managermail_Page_Title").click(function(){
		var txt_ENC_SalesManagermail_Title=$("#txt_ENC_SalesManagermail_Title").val();
		var txtSalesManagermailTitleLength=$("#txt_ENC_SalesManagermail_Title").val().length;
		if(txtSalesManagermailTitleLength > 150){
			alert("Maximam size is 150");
		}else{
		$.post("@inc/data.php?status=edittxtSalesmanagermailTitle",{txt_ENC_SalesManagermail_Title:txt_ENC_SalesManagermail_Title},function(data){
				$("#txt_ENC_SalesManagermail_Title").hide();
				$("#edit_Sales_managermail_Page_Title").hide();
				$('.EditPenENC_Sales_managermail_Page').show();
				$("#SalesmanagerEmail").show().html(data);
			window.location.href="contactus.php";
		});
		}
	});
	
	$("#AboutTitleIntroColor").change(function(){
	var color=$("#AboutTitleIntroColor").val();
	$.post("@inc/data.php?status=AboutTitleIntroColor",{color:color},function(data){
		alert(data);
					window.location.href="index.php";
	});
	});
	$("#AboutTitleimageColor").change(function(){
	var color2=$("#AboutTitleimageColor").val();
	$.post("@inc/data.php?status=AboutTitleimageColor",{color2:color2},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
	
	$("#ServiceTitleColor").change(function(){
	var color=$("#ServiceTitleColor").val();
	$.post("@inc/data.php?status=ServiceTitleColor",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
	
		$("#AboutServiceImageColor").change(function(){
	var color=$("#AboutServiceImageColor").val();
	$.post("@inc/data.php?status=AboutServiceImageColor",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
	
		$("#ServiceTitleColor1").change(function(){
	var color=$("#ServiceTitleColor1").val();
	$.post("@inc/data.php?status=ServiceTitleColor1",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
	
		$("#ServiceTitleColor2").change(function(){
	var color=$("#ServiceTitleColor2").val();
	$.post("@inc/data.php?status=ServiceTitleColor2",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
	
			$("#ServiceTitleColor3").change(function(){
	var color=$("#ServiceTitleColor3").val();
	$.post("@inc/data.php?status=ServiceTitleColor3",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
	
				$("#ServiceTitleColor4").change(function(){
	var color=$("#ServiceTitleColor4").val();
	$.post("@inc/data.php?status=ServiceTitleColor4",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
	
				$("#FeaturesCaptionColor").change(function(){
	var color=$("#FeaturesCaptionColor").val();
	$.post("@inc/data.php?status=FeaturesCaptionColor",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
			$("#FeaturesTitle1Color").change(function(){
	var color=$("#FeaturesTitle1Color").val();
	$.post("@inc/data.php?status=FeaturesTitle1Color",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
	
				$("#FeaturesTitle2Color").change(function(){
	var color=$("#FeaturesTitle2Color").val();
	$.post("@inc/data.php?status=FeaturesTitle2Color",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
	
			$("#FeaturesTitle3Color").change(function(){
	var color=$("#FeaturesTitle3Color").val();
	$.post("@inc/data.php?status=FeaturesTitle3Color",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
	
			$("#FeaturesDesc4Color").change(function(){
	var color=$("#FeaturesDesc4Color").val();
	$.post("@inc/data.php?status=FeaturesDesc4Color",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
	
				$("#FeaturesTitle5Color").change(function(){
	var color=$("#FeaturesTitle5Color").val();
	$.post("@inc/data.php?status=FeaturesTitle5Color",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
					$("#FeaturesTitle6Color").change(function(){
	var color=$("#FeaturesTitle6Color").val();
	$.post("@inc/data.php?status=FeaturesTitle6Color",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
						$("#FeaturesTitle7Color").change(function(){
	var color=$("#FeaturesTitle7Color").val();
	$.post("@inc/data.php?status=FeaturesTitle7Color",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
	
					$("#QuoteTitleColor").change(function(){
	var color=$("#QuoteTitleColor").val();
	$.post("@inc/data.php?status=QuoteTitleColor",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
	
				$("#OurTeamIntroColor").change(function(){
	var color=$("#OurTeamIntroColor").val();
	$.post("@inc/data.php?status=OurTeamIntroColor",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
	
			$("#OurTeamTitleColor").change(function(){
	var color=$("#OurTeamTitleColor").val();
	$.post("@inc/data.php?status=OurTeamTitleColor",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
	
	$("#OurClientTitleColor").change(function(){
	var color=$("#OurClientTitleColor").val();
	$.post("@inc/data.php?status=OurClientTitleColor",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
	
	$("#NewsTitleColor").change(function(){
	var color=$("#NewsTitleColor").val();
	$.post("@inc/data.php?status=NewsTitleColor",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
	
		$("#NewsbackgroundColor").change(function(){
	var color=$("#NewsbackgroundColor").val();
	$.post("@inc/data.php?status=NewsbackgroundColor",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
	
	$("#FooterTitleColor").change(function(){
	var color=$("#FooterTitleColor").val();
	$.post("@inc/data.php?status=FooterTitleColor",{color:color},function(data){
		alert(data);
					window.location.href="index.php";

	});
	});
	
		$("#AboutWelcomeColor").change(function(){
	var color=$("#AboutWelcomeColor").val();
	$.post("@inc/data.php?status=AboutWelcomeColor",{color:color},function(data){
		alert(data);
					window.location.href="about.php";

	});
	});
	
		$("#AboutENCColor").change(function(){
	var color=$("#AboutENCColor").val();
	$.post("@inc/data.php?status=AboutENCColor",{color:color},function(data){
		alert(data);
					window.location.href="about.php";

	});
	});
	
			$("#AboutENCTitleColor").change(function(){
	var color=$("#AboutENCTitleColor").val();
	$.post("@inc/data.php?status=AboutENCTitleColor",{color:color},function(data){
		alert(data);
					window.location.href="about.php";

	});
	});
	
			$("#AboutbackgroundColor").change(function(){
	var color=$("#AboutbackgroundColor").val();
	$.post("@inc/data.php?status=AboutbackgroundColor",{color:color},function(data){
		alert(data);
					window.location.href="about.php";

	});
	});
		$("#ServiceProfColor").change(function(){
	var color=$("#ServiceProfColor").val();
	$.post("@inc/data.php?status=ServiceProfColor",{color:color},function(data){
		alert(data);
					window.location.href="service.php";

	});
	});
	
	$("#ServicePPDIOOColor").change(function(){
	var color=$("#ServicePPDIOOColor").val();
	$.post("@inc/data.php?status=ServicePPDIOOColor",{color:color},function(data){
		alert(data);
					window.location.href="service.php";

	});
	});
	
	$("#ServiceSLAColor").change(function(){
	var color=$("#ServiceSLAColor").val();
	$.post("@inc/data.php?status=ServiceSLAColor",{color:color},function(data){
		alert(data);
					window.location.href="service.php";

	});
	});
	
	$("#ServiceHelpDeskColor").change(function(){
	var color=$("#ServiceHelpDeskColor").val();
	$.post("@inc/data.php?status=ServiceHelpDeskColor",{color:color},function(data){
		alert(data);
					window.location.href="service.php";

	});
	});
	
	$("#ServiceGlobalFieldColor").change(function(){
	var color=$("#ServiceGlobalFieldColor").val();
	$.post("@inc/data.php?status=ServiceGlobalFieldColor",{color:color},function(data){
		alert(data);
					window.location.href="service.php";

	});
	});
		$("#ServiceGlobalProfColor").change(function(){
	var color=$("#ServiceGlobalProfColor").val();
	$.post("@inc/data.php?status=ServiceGlobalProfColor",{color:color},function(data){
		alert(data);
					window.location.href="service.php";

	});
	});
	
		$("#ServicePenetrationTestingColor").change(function(){
	var color=$("#ServicePenetrationTestingColor").val();
	$.post("@inc/data.php?status=ServicePenetrationTestingColor",{color:color},function(data){
		alert(data);
					window.location.href="service.php";

	});
	});
	
	$("#ServiceHumanResourceColor").change(function(){
	var color=$("#ServiceHumanResourceColor").val();
	$.post("@inc/data.php?status=ServiceHumanResourceColor",{color:color},function(data){
		alert(data);
					window.location.href="service.php";

	});
	});
	
		$("#SolutionNetworkSecurityColor").change(function(){
	var color=$("#SolutionNetworkSecurityColor").val();
	$.post("@inc/data.php?status=SolutionNetworkSecurityColor",{color:color},function(data){
		alert(data);
					window.location.href="solutions.php";

	});
	});
	
		$("#SolutionIPColor").change(function(){
	var color=$("#SolutionIPColor").val();
	$.post("@inc/data.php?status=SolutionIPColor",{color:color},function(data){
		alert(data);
					window.location.href="solutions.php";

	});
	});
	
		$("#SolutionRoutingColor").change(function(){
	var color=$("#SolutionRoutingColor").val();
	$.post("@inc/data.php?status=SolutionRoutingColor",{color:color},function(data){
		alert(data);
					window.location.href="solutions.php";

	});
	});
	
		$("#SolutionWirelessColor").change(function(){
	var color=$("#SolutionWirelessColor").val();
	$.post("@inc/data.php?status=SolutionWirelessColor",{color:color},function(data){
		alert(data);
					window.location.href="solutions.php";

	});
	});
	
			$("#SolutionDataCenterColor").change(function(){
	var color=$("#SolutionDataCenterColor").val();
	$.post("@inc/data.php?status=SolutionDataCenterColor",{color:color},function(data){
		alert(data);
					window.location.href="solutions.php";

	});
	});
	
	$("#SolutionServerColor").change(function(){
	var color=$("#SolutionServerColor").val();
	$.post("@inc/data.php?status=SolutionServerColor",{color:color},function(data){
		alert(data);
					window.location.href="solutions.php";

	});
	});
	
	$("#SolutionSecurityColor").change(function(){
	var color=$("#SolutionSecurityColor").val();
	$.post("@inc/data.php?status=SolutionSecurityColor",{color:color},function(data){
		alert(data);
					window.location.href="solutions.php";

	});
	});
	
		$("#SolutionVirtualizationColor").change(function(){
	var color=$("#SolutionVirtualizationColor").val();
	$.post("@inc/data.php?status=SolutionVirtualizationColor",{color:color},function(data){
		alert(data);
					window.location.href="solutions.php";

	});
	});
	
		$("#SolutionPowerColor").change(function(){
	var color=$("#SolutionPowerColor").val();
	$.post("@inc/data.php?status=SolutionPowerColor",{color:color},function(data){
		alert(data);
					window.location.href="solutions.php";

	});
	});
	
	$("#SolutionSoftwareColor").change(function(){
	var color=$("#SolutionSoftwareColor").val();
	$.post("@inc/data.php?status=SolutionSoftwareColor",{color:color},function(data){
		alert(data);
					window.location.href="solutions.php";

	});
	});
	
		$("#SolutionENCMicrosoftSolutionColor").change(function(){
	var color=$("#SolutionENCMicrosoftSolutionColor").val();
	$.post("@inc/data.php?status=SolutionENCMicrosoftSolutionColor",{color:color},function(data){
		alert(data);
					window.location.href="solutions.php";

	});
	});
	
	$("#PartnershipColor").change(function(){
	var color=$("#PartnershipColor").val();
	$.post("@inc/data.php?status=PartnershipColor",{color:color},function(data){
		alert(data);
					window.location.href="partner.php";

	});
	});
	
		$("#GlobalReachColor").change(function(){
	var color=$("#GlobalReachColor").val();
	$.post("@inc/data.php?status=GlobalReachColor",{color:color},function(data){
		alert(data);
					window.location.href="globalreach.php";

	});
	});
		  });