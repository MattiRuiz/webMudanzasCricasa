//Inicia el Document Ready
$(document).ready(function(){	
/*----------------- Funcion GOTOP -----------------*/
	/*
	Para que funcioner en cuenta lo siguiente
		0- Tener descargada y vinculada la libreria "Jquery"
		1- Tener descargada y vinculada la libreria "Jquery Easing"
		2- Colocar al enlace donde hago click la clase "scroll-to"
		3- Colocar en el elemento de destino un ID
		4- Colocar en el "href" del enlace donde hago click el nombre de ID que coloque en el elemento de destino
		5- Colocar en el atributo "Title" del enlace donde hago click el mismo nombre que el ID

		NOTA: 
			1- El nº 2000 es la cantidad de ms que dura el efecto. Puede cambiarse a gusto
			2- "easeOutExpo" es el efecto que realiza. Puede cambiarse por otro (ver documentación de Jquery Easing)
	*/
	$('.scroll-to').click(function() {
       var elementClicked = $(this).attr("title");
       var destination = $('#' + elementClicked).offset().top;
       $("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, 2000, 'easeOutExpo');
       return false;
    });

$('.navbar-nav>li>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});
    
}); //Finaliza el Document Ready
