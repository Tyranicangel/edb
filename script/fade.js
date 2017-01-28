$(document).ready(function(){
	
	$('.content_options').click(function(){
		var x = $(this).attr('id');
		x = x.substr(0,1);
		$('.content_text').fadeOut(500);
		setTimeout(function(){$('#'+x+'_show').fadeIn(500);},500);
		$('.arrow').fadeOut(500);
		setTimeout(function(){$('#'+x).fadeIn(500);},500);
	}); 
	
});