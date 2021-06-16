$(document).ready(function() {
	$(".tinh").change(function(){
		var matp = $(".tinh").val();
		// alert(matp);
		$.post("data.php",{matp: matp}, function(data){
			$(".huyen").html(data);
		})
	})
})
$(document).ready(function() {
	$(".huyen").change(function(){
		var maqh = $(".huyen").val();
		// alert(maqh);
		$.post("data.php",{maqh: maqh}, function(data){
			$(".xa").html(data);
		})
	})
})