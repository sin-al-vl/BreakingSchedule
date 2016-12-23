
$(function() {

  	var slider = $('.slider'),
    sliderContent = slider.html(),
    slideWidth = $('.slidewrapper').outerWidth(),
    slideCount = $('.slide').length,

    slideNum = 1,
  	index = 0,
  	clickBullets=0,
    sliderInterval = 3000,
    animateTime = 1000,
    margin = 0;
 
	for (var i=0; i<slideCount; i++){

		html=$('.bullets').html() + '<li></li>';
		$('.bullets').html(html);
	}

	var  bullets = $('.slidewrapper .bullets li');
	$('.slidewrapper .bullets li:first').addClass('active');

	$('.slider').css('margin-left', 0);
	// $('.bullets').css('margine-left', slideWidth/2 - $('.bullets li').outerWidth*slideCount/2);

	function nextSlide(){
		interval = window.setInterval(animate, sliderInterval);
	}
 
	function animate(){
		if (margin==-(slideCount-1)*slideWidth){
			margin=0;
		}else{
			margin = margin - slideWidth;
		}
		slider.animate({'marginLeft':margin},animateTime);

		if (clickBullets==0){
		    bulletsActive();
		}else{
		    slideNum=index+1;
		}
	}
 
	function bulletsActive(){

		if (slideNum!=slideCount){

			slideNum++;
			$('.bullets .active').removeClass('active').next('li').addClass('active');

		}else if (slideNum==slideCount){

			slideNum=1;
			$('.bullets li').removeClass('active').eq(0).addClass('active');
		}
	}

	function sliderStop(){
		window.clearInterval(interval);
	}
 
  
	bullets.click(function() {
		if (slider.is(':animated')) { return false; }
			sliderStop();
			index = bullets.index(this);

		//bullets nummered from 1!!!
		margin=-slideWidth*(index-1);

		$('.bullets li').removeClass('active').eq(index).addClass('active');

		clickBullets=1;
		animate();
		clickBullets=0;
	});
 
 	$('.slidewrapper').hover(function(){
 		sliderStop();
    },function(){
    	nextSlide();
    });
 
 	nextSlide();
});
