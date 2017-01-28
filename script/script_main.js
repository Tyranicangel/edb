$(document).ready(function(){
	//alert(12);
	
	//show_content('infra');
	show_content('awards');
	$('#awards').addClass('menu_active');
	
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
			case 'future_expansions':
			$('.content_right').empty();
			$clone1 = $('#loading_button').clone();
			$clone2 = $('#future_txt_id').clone();
			
			$($clone1).appendTo('.content_right').css('display','inline');
			
			setTimeout(function(){
				$($clone2).appendTo('.content_right').fadeIn(300);
				$($clone1).remove();
			},1000);
			break;
			
			
			case 'people':
			$('.content_right').empty();
			$clone1 = $('#loading_button').clone();
			$clone2 = $('#hr_txt_id').clone();
			
			$($clone1).appendTo('.content_right').css('display','inline');
			
			setTimeout(function(){
				$($clone2).appendTo('.content_right').fadeIn(300);
				$($clone1).remove();
			},1000);
			break;
			
			case 'quality':
			$('.content_right').empty();
			$clone1 = $('#loading_button').clone();
			$clone2 = $('#quality_txt_id').clone();
			
			$($clone1).appendTo('.content_right').css('display','inline');
			
			setTimeout(function(){
				$($clone2).appendTo('.content_right').fadeIn(300);
				$($clone1).remove();
			},1000);
			break;
			
			case 'milestones':
			$('.content_right').empty();
			$clone1 = $('#loading_button').clone();
			$clone2 = $('#milestones_id').clone();
			
			$($clone1).appendTo('.content_right').css('display','inline');
			
			setTimeout(function(){
				$($clone2).appendTo('.content_right').fadeIn(300);
				$($clone1).remove();
			},1000);
			break;
			
			
			case 'growth':
			$('.content_right').empty();
			$clone1 = $('#loading_button').clone();
			$clone2 = $('#growth_txt_id').clone();
			
			$($clone1).appendTo('.content_right').css('display','inline');
			
			setTimeout(function(){
				$($clone2).appendTo('.content_right').fadeIn(300);
				$($clone1).remove();
			},1000);
			break;
			
			case 'vision':
			$('.content_right').empty();
			$clone1 = $('#loading_button').clone();
			$clone2 = $('#msg_frm_the_md_txt').clone();
			
			$($clone1).appendTo('.content_right').css('display','inline');
			
			setTimeout(function(){
				$($clone2).appendTo('.content_right').fadeIn(300);
				$($clone1).remove();
			},1000);
			break;
			
			case 'about':
			$('.content_right').empty();
			$clone1 = $('#loading_button').clone();
			$clone2 = $('#about_sse_id').clone();
			
			$($clone1).appendTo('.content_right').css('display','inline');
			
			setTimeout(function(){
				$($clone2).appendTo('.content_right').fadeIn(300);
				$($clone1).remove();
			},1000);
			break;
			
			case 'awards':
			$('.content_right').empty();
			$clone1 = $('#loading_button').clone();
			$clone2 = $('#awards_sse_id').clone();
			
			$($clone1).appendTo('.content_right').css('display','inline');
			
			setTimeout(function(){
				$($clone2).appendTo('.content_right').fadeIn(300);
				$($clone1).remove();
			},1000);
			break;
			
			
		}
	}
	
	$(document).on('mouseenter','.md_photo_class',function(){
		//alert(123);
		$(this).find('.md_photo_inside_div_class').fadeOut(300);
		
	});
	$(document).on('mouseleave','.md_photo_class',function(){
		//alert(123);
		$(this).find('.md_photo_inside_div_class').fadeIn(300);
		
	});
	
	
});