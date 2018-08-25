$(document).ready(function(){
	$(".search input").keypress(function(enter){
		if(enter.which == 13){
			var title_post = $("h1 a").val();
			var search = $(".search input").val();
			String(search);
	        if( search == title_post ){
	        	alert(лул);
	        };
		};
	});
});