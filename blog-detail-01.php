<?php
    $titulo = "Noticia 17";
    include_once("includes/cabeza.php");
?>

	<!-- Content -->
	<section class="bg0 p-b-140 p-t-10">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-30">
					<div class="p-r-10 p-r-0-sr991">
						<!-- Blog Detail -->
						<div class="p-b-70">
							<a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
								Eventos
							</a>

							<h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
								La alcaldia de pueblo viejo organiza un concierto donde seran invitado artistas nacionales por los dias de carnaval
							</h3>
							
							<div class="flex-wr-s-s p-b-40">
								<span class="f1-s-3 cl8 m-r-15">
									<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
										Alcd: Marcos Gonzales 
									</a>

									<span class="m-rl-3">-</span>

									<span>
										Feb 18
									</span>
								</span>

								<span class="f1-s-3 cl8 m-r-15">
									5239 Views
								</span>

								<a href="#" class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">
									0 Comment
								</a>
							</div>

							<div class="wrap-pic-max-w p-b-30">
								<img src="images/blog-list-01.webp" alt="IMG">
							</div>

							<p class="f1-s-11 cl6 p-b-25">
								Curabitur volutpat bibendum molestie. Vestibulum ornare gravida semper. Aliquam a dui suscipit, fringilla metus id, maximus leo. Vivamus sapien arcu, mollis eu pharetra vitae, condimentum in orci. Integer eu sodales dolor. Maecenas elementum arcu eu convallis rhoncus. Donec tortor sapien, euismod a faucibus eget, porttitor quis libero. 
							</p>

							<p class="f1-s-11 cl6 p-b-25">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet est vel orci luctus sollicitudin. Duis eleifend vestibulum justo, varius semper lacus condimentum dictum. Donec pulvinar a magna ut malesuada. In posuere felis diam, vel sodales metus accumsan in. Duis viverra dui eu pharetra pellentesque. Donec a eros leo. Quisque sed ligula vitae lorem efficitur faucibus. Praesent sit amet imperdiet ante. Nulla id tellus auctor, dictum libero a, malesuada nisi. Nulla in porta nibh, id vestibulum ipsum. Praesent dapibus tempus erat quis aliquet. Donec ac purus id sapien condimentum feugiat.
							</p>

							<p class="f1-s-11 cl6 p-b-25">
								Praesent vel mi bibendum, finibus leo ac, condimentum arcu. Pellentesque sem ex, tristique sit amet suscipit in, mattis imperdiet enim. Integer tempus justo nec velit fringilla, eget eleifend neque blandit. Sed tempor magna sed congue auctor. Mauris eu turpis eget tortor ultricies elementum. Phasellus vel placerat orci, a venenatis justo. Phasellus faucibus venenatis nisl vitae vestibulum. Praesent id nibh arcu. Vivamus sagittis accumsan felis, quis vulputate
							</p>

							<!-- Share -->
							<?php include_once("includes/compartir_en_redes.php"); ?>
						</div>

						<!-- Leave a comment -->
						<?php include_once("includes/form_comentarios.php"); ?>
					</div>
				</div>
				
				<!-- Sidebar -->
				<div class="col-md-10 col-lg-4 p-b-30">
					<div class="p-l-10 p-rl-0-sr991 p-t-70">						
						<!-- Category -->
						<?php include_once("includes/categoria.php"); ?>

						<!-- Archive -->
						
						<!-- Popular Posts -->
						<div class="p-b-30">
							<?php include_once("includes/post_popular.php"); ?>
						</div>

						<!-- Tag -->
						<div>
							<?php include_once("includes/tag.php"); ?>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php include_once("includes/pie.php"); ?>