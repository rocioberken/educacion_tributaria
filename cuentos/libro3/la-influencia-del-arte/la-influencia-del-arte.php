			<div class="main clearfix">
				<ul class="bb-custom-grid" id="bb-custom-grid">
					<li>
						<div class="bb-bookblock">
							<div class="bb-item">
								<img src="cuentos/libro3/la-influencia-del-arte/images/1.jpg" alt="image01"/>
							</div>
							<div class="bb-item">
								<img src="cuentos/libro3/la-influencia-del-arte/images/2.jpg" alt="image01"/>
							</div>
							<div class="bb-item">
								<img src="cuentos/libro3/la-influencia-del-arte/images/3.jpg" alt="image01"/>
							</div>
						</div>
						<nav class="color23 blanco">
							<span class="bb-current" onclick="sonido(1);">1<p id="audio01"></p></span>
							<span onclick="sonido(2);">2</span>
							<span onclick="sonido(3);">3</span>
					    	<div id="controles">
						    	<button onclick="document.getElementById('player').play()">Play</button>
								<button onclick="document.getElementById('player').pause()">Pause</button>
								<button onclick="document.getElementById('player').volume -= 0.1">Vol- </button>
								<button onclick="document.getElementById('player').volume += 0.1">Vol+ </button>
								<button onclick="window.open('audio-cuentos-1.html','_self');">Volver al indice</button>
							</div>
						</nav>
					</li>
				</ul>
			</div>
		</div><!-- /container -->
		<script type="text/javascript">
		$( document ).ready(function() {
     		 $('#audio01').html('<audio id="player" preload><source src="cuentos/libro3/la-influencia-del-arte/audio/1.mp3" type="audio/mp3"</audio>');
				    $('#controles').show('slow');
			});
			function sonido(opcion){
				switch(opcion){
				    case 1:
				    $('#audio01').html('<audio id="player" preload><source src="cuentos/libro3/la-influencia-del-arte/audio/1.mp3" type="audio/mp3"</audio>');
				    $('#controles').show('slow');

				    break;

				    case 2:
				    $('#audio01').html('<audio id="player" preload autoplay="true"><source src="cuentos/libro3/la-influencia-del-arte/audio/2.mp3"  type="audio/mp3"></audio>');
				    $('#controles').show('slow');
				    break;

				    case 3:
			   		$('#audio01').html('<audio id="player" preload autoplay="true"><source src="cuentos/libro3/la-influencia-del-arte/audio/3.mp3"  type="audio/mp3"></audio>');
			   		$('#controles').show('slow');
				    break;
				    }
				}
		</script>
		<script type="text/javascript">
			var Page = (function() {

				var $grid = $( '#bb-custom-grid' );

				return {
					init : function() {
						$grid.find( 'div.bb-bookblock' ).each( function( i ) {

							var $bookBlock = $( this ),
								$nav = $bookBlock.next().children( 'span' ),
								bb = $bookBlock.bookblock( {
									speed : 600,
									shadows : false
								} );

							// add navigation events
							$nav.each( function( i ) {
								$( this ).on( 'click touchstart', function( event ) {
									var $dot = $( this );
									$nav.removeClass( 'bb-current' );
									$dot.addClass( 'bb-current' );
									$bookBlock.bookblock( 'jump', i + 1 );
									return false;
								} );
							} );

							// add swipe events
							$bookBlock.children().on( {
								'swipeleft' : function( event ) {
									$bookBlock.bookblock( 'next' );
									return false;
								},
								'swiperight' : function( event ) {
									$bookBlock.bookblock( 'prev' );
									return false;
								}

							} );

						} );
					}
				};

			})();
		</script>
		<script>
				Page.init();
		</script>
	</body>
</html>