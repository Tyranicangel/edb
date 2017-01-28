$(document).ready(function(){
	//alert(12);
	
	//show_content('infra');
	show_content('careers');
	
	$(document).on('click','#view_curretn_post_id',function(){
		//alert(123);
		var id;
		id = $(this).attr('id');
		show_content(id); 
	});
	
	function show_content(id){
		switch(id)
		{
			case 'careers':
			$('.content').empty();
			$clone1 = $('#loading_button').clone();
			$clone2 = $('#careers_main_id').clone();
			
			$($clone1).appendTo('.content').css('display','inline');
			
			setTimeout(function(){
				$($clone2).appendTo('.content').fadeIn(300);
				$($clone1).remove();
			},1000);
			break;	
			
			case 'view_curretn_post_id':
			$('.content').empty();
			$clone1 = $('#loading_button').clone();
			$clone2 = $('.careers_main').clone();
			
			$($clone1).appendTo('.content').css('display','inline');
			
			setTimeout(function(){
				$($clone2).appendTo('.content').fadeIn(300);
				$($clone1).remove();
			},1000);
			break;	
		}
	}	
});