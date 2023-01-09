$(document).ready(function(){
	$('.isotops_toggle').click(function(){
		$('.isotops').slideToggle();
	});
	/*check for operating system ----------------------------------------------------------------*/
	if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
		$('.isotops li').click(function(){
			$('.isotops').slideUp();
		});
	}
	/*check for operating system ----------------------------------------------------------------*/
	
	$('.isotops_item').hover(function(){
		$(this).find('.isotops_mask').addClass('wow animated flipInY');
	});
	
});



/*isotops--------------------------------------------------------------------------*/
$(window).load(function(){
    var $container = $('.iso_container');
    $container.isotope({
        filter: '*',
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        }
    });
 
    $('.isotops li').click(function(){
		
        $('.isotops li').removeClass('selected');
        $(this).addClass('selected');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
         });
         return false;
    }); 
});
/*isotops--------------------------------------------------------------------------*/