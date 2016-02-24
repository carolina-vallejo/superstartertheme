$(window).ready(function(){

	console.log('voy!!!!');

	/*--Menu toogle functions--*/
	onclicks($('.menu-toggle'));


	/*--clean loader---*/
	$('.runloader').fadeOut(300, function(){
	    	$('.loader').css({
	    		'-webkit-animation': 'none',
	  			'animation': 'none'
	    	});
	});


	/*------Scroll-----------*/
	var m_lastScrollTop = 0;
	$( window ).scroll(function() {
		var $m_getscroll=$( window ).scrollTop();

		//Scroll UP & DOWN
	   	var st = $m_getscroll;
	   	if (st > m_lastScrollTop){  //////////////////DOWNNN

	   	} else if($m_getscroll<2){  //////////////////UPPPP

	   	
	   	}
	  	m_lastScrollTop = st;
	}); //---scroll
	
	
	$(window).resize(function(){



	});

});

/*---on clicks---*/
function onclicks($elem){

	$elem.on('click',function(e){
		$(this).toggleClass('is-active');
	});	
}

