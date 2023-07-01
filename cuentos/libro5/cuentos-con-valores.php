			<div class="main clearfix">
				<ul class="bb-custom-grid" id="bb-custom-grid">
					<li>
						<div class="bb-bookblock">
							<div class="bb-item">
								<img src="cuentos/libro5/images/14.jpg" alt="image01"/>
							</div>
							<div class="bb-item">
								<img src="cuentos/libro5/images/15.jpg" alt="image01"/>
							</div>
							<div class="bb-item">
								<img src="cuentos/libro5/images/16.jpg" alt="image01"/>
							</div>
							<div class="bb-item">
								<img src="cuentos/libro5/images/17.jpg" alt="image01"/>
							</div>
							
							<div class="bb-item">
								<img src="cuentos/libro5/images/18.jpg" alt=""/>
							</div>
							<div class="bb-item">
								<img src="cuentos/libro5/images/19.jpg" alt=""/>
							</div>
							<div class="bb-item">
								<img src="cuentos/libro5/images/20.jpg" alt=""/>
							</div>
							<div class="bb-item">
								<img src="cuentos/libro5/images/21.jpg" alt=""/>
							</div>
							<div class="bb-item">
								<img src="cuentos/libro5/images/22.jpg" alt=""/>
							</div>
							<div class="bb-item">
								<img src="cuentos/libro5/images/23.jpg" alt=""/>
							</div>
							<div class="bb-item">
								<img src="cuentos/libro5/images/24.jpg" alt=""/>
							</div>
							<div class="bb-item">
								<img src="cuentos/libro5/images/25.jpg" alt=""/>
							</div>
							<div class="bb-item">
								<img src="cuentos/libro5/images/26.jpg" alt=""/>
							</div>
							
						</div>
						<!--
						<nav class="color32 blanco">
							<span class="bb-current" onclick="sonido(2);">1<p id="audio01"></p></span>
							<span onclick="sonido();">2</span>
							<span onclick="sonido();">3</span>
							<span onclick="sonido();">4</span>
							<span onclick="sonido();">5</span>
							<span onclick="sonido();">6</span>
							<span onclick="sonido();">7</span>
							<span onclick="sonido();">8</span>
							<span onclick="sonido();">9</span>
							<span onclick="sonido();">10</span>
							<span onclick="sonido();">11</span>
							<span onclick="sonido();">12</span>
							<span onclick="sonido();">13</span>
							
							
							
							
					    	<div id="controles">
							
						    	<button onclick="document.getElementById('player').play()">Play</button>
								<button onclick="document.getElementById('player').pause()">Pause</button>
								<button onclick="document.getElementById('player').volume -= 0.1">Vol- </button>
								<button onclick="document.getElementById('player').volume += 0.1">Vol+ </button>
								<button onclick="window.open('audio-cuentos-4.php','_self');">Volver al indice</button>
							</div>
						</nav>
						-->
					</li>
				</ul>
			</div>
		</div><!-- /container -->
		<!--
		<script type="text/javascript">
		$( document ).ready(function() {
			$('#audio01').html('<audio id="player" preload><source src="cuentos/libro3/asalto-virtual/audio/1.mp3" type="audio/mp3"</audio>');
				    $('#controles').show('slow');
			});
			function sonido(opcion){
				switch(opcion){
				    case 1:
				    $('#audio01').html('<audio id="player" preload><source src="cuentos/libro3/asalto-virtual/audio/1.mp3" type="audio/mp3"</audio>');
				    $('#controles').show('slow');

				    break;

				    case 2:
				    $('#audio01').html('<audio id="player" preload autoplay="true"><source src="cuentos/libro3/asalto-virtual/audio/2.mp3"  type="audio/mp3"></audio>');
				    $('#controles').show('slow');
				    break;

				    case 3:
			   		$('#audio01').html('<audio id="player" preload autoplay="true"><source src="cuentos/libro3/asalto-virtual/audio/3.mp3"  type="audio/mp3"></audio>');
			   		$('#controles').show('slow');
				    break;

				     case 4:
				    $('#audio01').html('<audio id="player" preload autoplay="true"><source src="cuentos/libro3/asalto-virtual/audio/4.mp3"  type="audio/mp3"></audio>');
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
		</script>-->
	</body>
</html>