$(document).ready(function() {
	// Preloader
	$(window).load(function(){
        $('#preloader').fadeOut('slow',function(){$(this).remove();});
    });
	// Carrousel
	$('#carousel-example-generic').carousel({
	  interval: false
	 });
	 
	//PANEL-COLLAPSE
	$('.panel-collapse').collapse('hide');
	// CALENDARIO
	$('#calendar').fullCalendar({
		 	monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
            'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
            monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
            'Jul','Ago','Sep','Oct','Nov','Dic'],
            dayNames: ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sábado'],
            dayNamesShort: ['Dom','Lun','Mar','Mie','Juv','Vie','Sab'],
            dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
            weekHeader: 'Sm',
            dateFormat: 'dd/mm/yy',

			editable: true,
			
			events: "json-events.php",
			
			eventDrop: function(event, delta) {
				alert(event.title + ' was moved ' + delta + ' days\n' +
					'(should probably update your database)');
			},
			
			loading: function(bool) {
				if (bool) $('#loading').show();
				else $('#loading').hide();
			}
			
		});
	//
	// handles the carousel thumbnails
    $('[id^=carousel-selector-]').click( function(){
        var id_selector = $(this).attr("id");
        var id = id_selector.substr(id_selector.length -1);
        id = parseInt(id);
        $('#inttributariaCarousel').carousel(id);
        $('[id^=carousel-selector-]').removeClass('selected');
        $(this).addClass('selected');

    });

    // when the carousel slides, auto update
    $('#inttributariaCarousel').on('slid', function (e) {
        var id = $('.item.active').data('slide-number');
        id = parseInt(id);
        $('[id^=carousel-selector-]').removeClass('selected');
        $('[id^=carousel-selector-'+id+']').addClass('selected');
    });
    // Botón desplegable
    $('.despliegaBtn').click(function () {
    	cierroDesplegable(); 	
    	$(this).parent().find('.mas').stop().fadeOut(150,'easeOutQuart');
    	$(this).parent().find('.menos').stop().fadeIn(250,'easeOutQuart');
    	$(this).parent().find('.contDesplegable').stop().slideDown(450,'easeOutQuart');
    	$(this).parent('.despliega').animate({backgroundColor:'#49479d'}, 450,'easeOutQuart');
    	$(this).parent('.despliega2').animate({backgroundColor:'#4d4d4f'}, 450,'easeOutQuart');
		$(this).parent('.despliega3').animate({backgroundColor:'#4d4d4f'}, 450,'easeOutQuart');
    });    
});

//accordion 
$(function () {
	var active = true;
	$('#accordion').on('show.bs.collapse', function () {
		if (active) $('#accordion .in').collapse('hide');
	});
});
// Cierro desplegable
function cierroDesplegable () {	
	$('.menos').click(function () {			
		$(this).parent().find('.menos').fadeOut(150,'easeOutQuart');
		$(this).parent().find('.mas').fadeIn(250,'easeOutQuart');
		$(this).parent().find('.contDesplegable').stop().slideUp(450,'easeOutQuart');
		$(this).parent('.despliega').animate({backgroundColor:'#4d4d4f'}, 0,'easeOutQuart');
		$(this).parent('.despliega2').animate({backgroundColor:'#f79433'}, 0,'easeOutQuart');
		$(this).parent('.despliega3').animate({backgroundColor:'#f79433'}, 0,'easeOutQuart');
	});
}
// Cierro contDespliega2
function cierroDespliega () {	
	$('.contDespliega, .contDespliega2, .contDespliega3').slideUp(450,'easeOutQuart');
};

//Flechas
function abreSubs(opcion){
switch(opcion){
	case 1:
		$('.flechaVerde').stop().animate({left:'5%'},200, 'easeOutCubic');
		cierroDespliega();
		$('.contDespliega').slideDown(450,'easeOutQuart');
	break;
	
	case 2:
		$('.flechaVerde').stop().animate({left:'35%'},200, 'easeOutCubic');
		cierroDespliega();
		$('.contDespliega2').slideDown(450,'easeOutQuart');
	break;

	case 3:
		$('.flechaVerde').stop().animate({left:'75%'},200, 'easeOutCubic');
		cierroDespliega();
		$('.contDespliega3').slideDown(450,'easeOutQuart');
	break;

	}
}
