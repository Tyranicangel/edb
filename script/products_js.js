$(document).ready(function(){
	//alert(12);
	
	//show_content('infra');
	show_content('products');
	$('#products').addClass('menu_active');
	
	$('.opt_span').click(function(){
		var id;
		$('.opt_span').removeClass('menu_active');
		$(this).addClass('menu_active');
		id = $(this).attr('id');
		show_content(id);
	});
	
	function show_content(id){
		switch(id)
		{
			case 'products':
			$('.content_right').empty();
			$clone1 = $('#loading_button').clone();
			$clone2 = $('#products_main_content_id').clone();
			
			$($clone1).appendTo('.content_right').css('display','inline');
			
			setTimeout(function(){
				$($clone2).appendTo('.content_right').fadeIn(300);
				$($clone1).remove();
			},1000);
			break;	
			
			case 'services':
			$('.content_right').empty();
			$clone1 = $('#loading_button').clone();
			$clone2 = $('#services_main_txt_id').clone();
			
			$($clone1).appendTo('.content_right').css('display','inline');
			
			setTimeout(function(){
				$($clone2).appendTo('.content_right').fadeIn(300);
				$($clone1).remove();
			},1000);
			break;	
		}
	}
	
	 
	$(document).on('mouseenter','.infra_imgs_out_div_class',function(){
		$(this).find('.infra_imgs_in_div_class').fadeOut(300);
	});
	
	$(document).on('mouseleave','.infra_imgs_out_div_class',function(){
		$(this).find('.infra_imgs_in_div_class').fadeIn(300);
	});
	
});