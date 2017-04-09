$(document).ready(function(){
    $("#marklaud").click(function(){
		$.ajax({url: "../HTML/bullseye.html", success: function(result){
			$("$content").html(result);
		}});
	});
});