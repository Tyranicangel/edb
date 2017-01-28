$(document).ready(function(){
	$('.map_pointers_class').mouseenter(function(){
		
		if($(this).is(':animated')){
			$(this).stop();
		}
		var ypos=(100-parseInt($(this).css('height')))/2;
		var xpos=(100-parseInt($(this).css('width')))/2;
		
		$(this).animate({"width":'100px',"height":'100px',"border-radius":'50px',"top":'-='+ypos+'px',"left":'-='+xpos+'px'});
		
	});
	$('.map_pointers_class').mouseleave(function(){
		
		if($(this).is(':animated')){
			$(this).stop();
		}
		var ypos=(parseInt($(this).css('height'))-50)/2;
		var xpos=(parseInt($(this).css('width'))-50)/2;
		
		$(this).animate({"width":'50px',"height":'50px',"border-radius":'25px',"top":'+='+ypos+'px',"left":'+='+xpos+'px'});
		
	}); 
	
	$('.comp_boxed_main_class').mouseenter(function(){
		if($(this).attr('id') == 'sse'){
			//alert(123);
			$(this).find('.inside_text_stuff').css('background','rgba(0,0,0,0.5)').fadeIn(300);
			$(this).find('.image_boxed_class').fadeIn(300); 
		}else{
			
		}
	});
	
	$('.comp_boxed_main_class').mouseleave(function(){
		if($(this).attr('id') == 'sse'){
			//alert(123);
			$(this).find('.inside_text_stuff').fadeOut(300);
			$(this).find('.image_boxed_class').fadeOut(300); 
		}
	});
	
});//end