<!--[if !IE]><!-->
  <link rel="stylesheet/less" type="text/css" href="styles/styles.css" />
<!--<![endif]-->

<link href="styles/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!--[if IE]>
    <link href="styles/_styles.css" rel="stylesheet"  type="text/css"  />
<![endif]-->
<!-- <link href="styles/styles.css" rel="stylesheet"  type="text/css"  /> -->
<link href="styles/GenCSS.min.css" rel="stylesheet"  type="text/css"  />
<link href="styles/animate.min.css" rel="stylesheet" type="text/css" />
<link href="styles/fullcalendar.css" rel="stylesheet" />
<link href="styles/fullcalendar.print.css" rel="stylesheet" media="print" />
<link rel="stylesheet" type="text/css" href="styles/bookblock.css" />
<link rel="stylesheet" type="text/css" href="styles/revista.css" />
<link rel="stylesheet" type="text/css" href="styles/styles_libros.css" />
<!-- custom demo style -->

<script type="text/javascript" src="scripts/jquery.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type='text/javascript' src="scripts/modernizr.js"></script>
<script type='text/javascript' src='scripts/bootstrap.min.js'></script>
<script type="text/javascript" src="scripts/less.js"></script>
<script type='text/javascript' src='scripts/respond.min.js'></script>
<script type="text/javascript" src="scripts/mousewheel.js"></script>
<script type="text/javascript" src="scripts/easing.js"></script>
<script type="text/javascript" src="scripts/acciones.js"></script>
<script type="text/javascript" src="scripts/fullcalendar.min.js"></script>
<script type="text/javascript" src="scripts/swfobject.js"></script>
<script type="text/javascript" src="scripts/jquery.validate.min.js"></script>
<script type="text/javascript" src="scripts/menssage.esp.js"> </script>
<script type="text/javascript" src="scripts/recaptcha_ajax.js"> </script>
<script type="text/javascript" src="scripts/jquery.cookie.js"></script>

<script src="scripts/modernizr.custom.js"></script>
<script src="scripts/jquerypp.custom.js"></script>
<script src="scripts/jquery.bookblock.js"></script>
<script src='scripts/jquery.zoom.js'></script>
<script src="scripts/acciones_libros.js"></script>
		
<!-- <link rel="shortcut icon" href="images/favicon.ico"> -->
<link rel="shortcut icon" href="images/favicon.png">

<script>		
$(function(){

     $('a[href*=#]').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 1500);

                 return false;

            }

       }

   });

});
</script>
