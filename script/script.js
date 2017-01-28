$(document).ready(function(){
	
	var count=1;
	
	slideshow();
	
function slideshow()
{
	
	$('.holder').css({'width':$('.holder').find('.slide').length*100+'%'});
	$('.slide').css({'width':100/$('.holder').find('.slide').length+'%'});
	$('#tag1').css({'height':'120px','top':'450px'});
	text_animate(count);
	setInterval(function(){move_holder()},5000);
	
}
function text_animate(count_text){
	$('#tag'+count).find('#text1').animate({'top':'0px','opacity':'1'},600);
	setTimeout(function(){$('#tag'+count).find('#text2').animate({'top':'0px','opacity':'1'},600);},600);
	setTimeout(function(){$('#tag'+count).find('#text3').animate({'top':'0px','opacity':'1'},600);},1200);
}
function text_reset(count_reset){
	$('#tag'+count).find('#text1').css({'top':'5px','opacity':'0'});
	$('#tag'+count).find('#text2').css({'top':'5px','opacity':'0'});
	$('#tag'+count).find('#text3').css({'top':'5px','opacity':'0'});
}
function move_holder()
{
	var no_of_iters=$('.holder').find('.slide').length;
	if(count<no_of_iters)
	{
		$('#tag'+count).fadeOut(500);
		
		setTimeout(function(){text_reset(count);$('#tag'+count).css({'height':'0px','top':'510px'}).fadeIn(100);$('.holder').animate({'left':'-'+(count*100)+'%'},600);count++;setTimeout(function(){$('#tag'+count).animate({'top':'450px','height':'120px'},700,function(){text_animate(count);});},1200);},500);
	}
	else
	{
		$('#tag'+count).fadeOut(500);
		
		setTimeout(function(){text_reset(count);$('#tag'+count).css({'height':'0px','top':'510px'}).fadeIn(100);$('.holder').animate({'left':'0%'},600);count=1;setTimeout(function(){$('#tag'+count).animate({'top':'450px','height':'120px'},700,function(){text_animate(count);});},1200);},500);
	}
}

	
});