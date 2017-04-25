$(document).ready(function(){
    $('.carousel').carousel({
        interval: false
    }); 

    $('.postal').click(function(){
    	$('.postal').each(function(){
    		$(this).removeClass('active');
    	});
    	$(this).addClass('active');
    	$('.postal_saved').val($(this).children().attr('src'));
    	console.log($('.postal_saved').val());
    })
})