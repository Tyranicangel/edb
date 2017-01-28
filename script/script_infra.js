$(document).ready(function(){
	//alert(12);
	
	show_content('infra');
	
	
	function show_content(id){
		switch(id)
		{
			
			
			case 'infra':
			$('.content').empty();
			
			$('#loading_button').appendTo('.content').css('display','inline');
			
			setTimeout(function(){
				$('#infra_total_content').appendTo('.content').fadeIn(300);
				$('#loading_button').remove();
			},1000);
			break;
			
			
		}
	}
	
	$('.infra_imgs_out_div_class').mouseenter(function(){
		//alert(123);
		$(this).find('.infra_imgs_in_div_class').fadeOut(300);
		
	});
	$('.infra_imgs_out_div_class').mouseleave(function(){
		//alert(123);
		$(this).find('.infra_imgs_in_div_class').fadeIn(300);
		
	});
	
});