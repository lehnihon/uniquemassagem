( function( $ ) {
	console.log($('#header').offset());
	if(typeof $('#header').offset() ==='undefined'){
		var offset = $('#headerb').offset().top;
    	var $meuMenu = $('#headerb'); // guardar o elemento na memoria para melhorar performance
	}else{
		var offset = $('#header').offset().top;
    	var $meuMenu = $('#header'); // guardar o elemento na memoria para melhorar performance
	}
    $(document).on('scroll', function () {

        if (offset <= $(window).scrollTop()-100) {
            $meuMenu.addClass('fixar');
        } else {
            $meuMenu.removeClass('fixar animated fadeInDown');
        }

    });

} )( jQuery );