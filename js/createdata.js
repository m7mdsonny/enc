	$(window).on("load",function() {
 // executes when complete page is fully loaded, including all frames, objects and images
$.post("@inc/data.php?status=create",{},function(data){
});
})