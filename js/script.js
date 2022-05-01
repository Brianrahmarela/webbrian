// Pagescroll animated menu
//event pada saat link di klik
$(document).ready(function(){
	var scrollLink = $('.scroll');
	
	//smooth scrolling
	scrollLink.click(function(e){
		e.preventDefault();
		$('body,html').animate({
			scrollTop: $(this.hash).offset().top - 260
		}, 1300);
	});
	
	// Active link switching
	$(window).scroll(function(){
		var scrollbarLocation = $(this).scrollTop();
		
		scrollLink.each(function(){
			var sectionOffset = $(this.hash).offset().top - 300;
			if ( sectionOffset <= scrollbarLocation ) {
				$(this).parent().addClass('active');
				$(this).parent().siblings().removeClass('active');
			}
		})
	})
})


