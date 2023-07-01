<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<title>AGIP</title>
		<?php include 'js.css.inc.php'; ?>
		<link href="styles/calendarHack.css" rel="stylesheet" />
</head>


<body>
	<div class="js">
	<?php include 'responsive.inc.php'; ?>	
	<div class="cFull relative clearfix">
		<div id="preloader"></div>	 
		<div class="wrap clearfix">		
			<?php include 'header.inc.php'; ?>			
			<div class="container relative clearfix cb p0">
				<div class="contInternas col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
				<?php include 'menuinterna.inc.php'; ?>
					<div class="contSeccion col-lg-8 col-md-8 col-sm-7 col-xs-12">	
						<div class="titular fS23 txL">
							<span class="violeta">Calendario</span>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 relative bgBlanco clearfix p0 mT50">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 p0 relative">
								<div id='loading' style='display:none'>Cargando...</div>
								<div id='calendar' class="relative" data-wow-delay="0.3s"></div>								
							</div>
						</div>
						<!--  -->
					</div>
					<!-- contSeccion -->
				</div>
				<!-- contInternas -->
			</div>
			<!-- container -->
		</div>
		<!-- wrap -->
		<?php include 'footer.inc.php'; ?>	
	</div>
</div>
<script type='text/javascript' src="scripts/wow.min.js"></script>
<script>
	$(document).ready(function(){
		// altura = $(".fc-day-content div:first-child").height() + 18;
		// $(".fc-day-content div:first-child").css({'height':altura});

		$('#leerMas').hover(function () {
			$(this).addClass()
		});
/*
		$( ".fc-button-next" ).click(function() {
			 altura = $(".fc-day-content div:first-child").height() + 18;
			$(".fc-day-content div:first-child").css({'height':altura});
		});		
		
*/
	});

	
	new WOW().init();
</script>
</body>
</html>