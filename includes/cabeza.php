<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php  echo $titulo; ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/modificacion.css">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="js/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="js/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="js/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="js/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/cssFancybox/jquery.fancybox.css">
<!--===============================================================================================-->
</head>
<style>
	body{
		overflow-x: hidden;
	}
	video{
		width: 100%;
	}
</style>
<body class="animsition">
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="topbar">
				<div class="content-topbar container h-100">
					<div class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								Pueblo Viejo / San Juan
							</span>

							<img class="m-b-1 m-rl-8" src="images/icons/icon-night.webp" alt="IMG">

							<span>
								HI 58° LO 56°
							</span>
						</span>

						<a href="about" class="left-topbar-item">
							Acerca de
						</a>

						<a href="contact" class="left-topbar-item">
							Contacto
						</a>

						<a href="#" class="left-topbar-item" data-toggle="modal" data-target="#mostrar-login">
							Login
						</a>

						<a href="reporte" class="left-topbar-item">
							Reportar un problema
						</a>
					</div>

					<div class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="#">
							<span class="fab fa-youtube"></span>
						</a>
					</div>
				</div>
			</div>

			<div class="modal fade" id="mostrar-login" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<!----<div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>-->
						<div class="row justify-content-center">
								<div class="col-11 col-md-6">
									<form action="" method="" id="area-login" class="">
										<h5 class="text-center text-white">Municipalidad</h5>
										<input type="text" class="form-control mt-1" required="" placeholder="Usuario"/>
										<input type="password" class="form-control mt-2" required="" placeholder="Contrasena"/>
										<input type="submit" class="btn btn-success form-control mt-2" value="Acceder"/>
									</form>
								</div>
						</div>
				</div>
			</div>

			<?php
			if($titulo == "Municipalidad De Pueblo Viejo"){
				include_once("includes/portada.php");
			}
			?>

			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Logo moblie -->		
				<div class="logo-mobile">
					<a href="index"><img src="images/icons/logo-01.webp" alt="IMG-LOGO"></a>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger__squeeze m-r__8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>

			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="topbar-mobile">
					<li class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								Pueblo Viejo / San Juan
							</span>

							<img class="m-b-1 m-rl-8" src="images/icons/icon-night.png" alt="IMG">

							<span>
								HI 58° LO 56°
							</span>
						</span>
					</li>

					<li class="left-topbar">
						<a href="about" class="left-topbar-item">
							Acerca de
						</a>

						<a href="contact" class="left-topbar-item">
							Contacto
						</a>

						<a href="#" class="left-topbar-item" data-toggle="modal" data-target="#mostrar-login">
							Login
						</a>

						<a href="reporte" class="left-topbar-item">
							Reportar un problema
						</a>
						
					</li>

					<li class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="#">
							<span class="fab fa-youtube"></span>
						</a>
					</li>
				</ul>

				<ul class="main-menu-m">
					<li>
						<a href="index">Home</a>
						<ul class="sub-menu-m">
							<li><a href="galeria">Galeria</a></li>
							<li><a href="video">Videos</a></li>
							<li><a href="noticias">Noticias</a></li>
						</ul>

						<span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>

					<li>
						<a href="noticias">Noticias</a>
					</li>

					<li>
						<a href="category-02.html">Entretenimiento</a>
					</li>

					<li>
						<a href="category-01.html">Proyectos</a>
					</li>

					<li>
						<a href="galeria">Galeria</a>
					</li>

					<li>
						<a href="category-01.html">Eventos</a>
					</li>

					<li>
						<a href="video">Videos</a>
					</li>

					<li>
						<a href="#">Trasparencias</a>
						<ul class="sub-menu-m">
							<li><a href="category-01.html">Plan De Desarrollo</a></li>
							<li><a href="category-02.html">Rendicion De Cuenta</a></li>
							<li><a href="blog-grid.html">Lotaip</a></li>
						</ul>

						<span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>
				</ul>
			</div>
			
			<!--  -->
			<div class="wrap-logo container d-none">		
				<div class="row">
                <div class="col-12 imagen_portada">
                    <div class="row mt-5 justify-content-center">
                        <div class="col-12 col-md-3">
                            <div id="logo">
                                <img src="https://preview.lsvr.sk/pressville/wp-content/uploads/sites/2/2017/05/pressville-logo.png" >
                            </div>    
                        </div>
                        <div class="col-12 col-md-9 mt-5">
                            <h1 class="text-center text-md-left">Gobierno Autonomo Descentralizado Municipal Del Canton Puebloviejo</h1>
                        </div>
                    </div>
                </div>
            </div>
			</div>	
			
			<!--  -->
			<div class="wrap-main-nav">
				<div class="main-nav">
					<!-- Menu desktop -->
					<nav class="menu-desktop">
						<a class="logo-stick" href="index">
							<img src="images/icons/logo-01.png" alt="LOGO">
						</a>

						<ul class="main-menu">
							<li class="main-menu-active">
								<a href="index">Home</a>
								<ul class="sub-menu">
									<li><a href="galeria">Galeria</a></li>
									<li><a href="video">Videos</a></li>
									<li><a href="noticias">Noticias</a></li>
								</ul>
							</li>

							<li class="mega-menu-item">
								<a href="noticias">Noticias</a>

								<div class="sub-mega-menu">
									<div class="nav flex-column nav-pills" role="tablist">
										<a class="nav-link active" data-toggle="pill" href="#news-0" role="tab">Todos</a>
										<a class="nav-link" data-toggle="pill" href="#news-1" role="tab">San Juan</a>
										<a class="nav-link" data-toggle="pill" href="#news-2" role="tab">Pechiche</a>
										<a class="nav-link" data-toggle="pill" href="#news-3" role="tab">Pueblo Viejo</a>
									</div>

									<div class="tab-content">
										<div class="tab-pane show active" id="news-0" role="tabpanel">
											<div class="row">
												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/noticia-1.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Visitan las viviendas afectas por las lluvias
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Ayuda
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/noticia-3.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Cuidadanos protestan por servicios basicos
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Ciudadania
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 15
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/noticia-2.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Municipalidad disputa nuevos proyectos
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Municipio
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 12
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-36.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Technology
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 20
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="tab-pane" id="news-1" role="tabpanel">
											<div class="row">
												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-50.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-08.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 12
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-07.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 20
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-06.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 15
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="tab-pane" id="news-2" role="tabpanel">
											<div class="row">
												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-21.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-24.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 15
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-22.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 12
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-23.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 20
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="tab-pane" id="news-3" role="tabpanel">
											<div class="row">
												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-25.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-27.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 20
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-26.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 12
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-34.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 15
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
                                        </div>
                                        

							<li class="mega-menu-item">
								<a href="category-02.html">Entretenimiento</a>

								<div class="sub-mega-menu">
									<div class="nav flex-column nav-pills" role="tablist">
										<a class="nav-link active" data-toggle="pill" href="#enter-1" role="tab">Todos</a>
										<a class="nav-link" data-toggle="pill" href="#enter-2" role="tab">Deportes</a>
									</div>

									<div class="tab-content">
										<div class="tab-pane show active" id="enter-1" role="tabpanel">
											<div class="row">
												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-25.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-27.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 20
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-26.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 12
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-34.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 15
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="tab-pane" id="enter-2" role="tabpanel">
											<div class="row">
												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-35.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-36.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 12
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-37.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 20
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-38.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 15
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="mega-menu-item">
								<a href="category-01.html">Proyectos</a>

								<div class="sub-mega-menu">
									<div class="nav flex-column nav-pills" role="tablist">
										<a class="nav-link active" data-toggle="pill" href="#business-1" role="tab">Todos</a>
									</div>

									<div class="tab-content">
										<div class="tab-pane show active" id="business-1" role="tabpanel">
											<div class="row">
												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/proyect-1.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Puente peatonal en San Juan y pueblo viejo  
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Obras
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/proyect-2.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Hospital esta siendo construido en pueblo viejo
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Obras
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 20
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/proyect-3.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Acantarillado en puerto pechiche
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Obras
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 12
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/proyect-7.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Asfaltado en las calles principales de san juan
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Obras
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 15
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="mega-menu-item">
								<a href="category-02.html">Eventos</a>

								<div class="sub-mega-menu">
									<div class="nav flex-column nav-pills" role="tablist">
										<a class="nav-link active" data-toggle="pill" href="#travel-1" role="tab">Todos</a>
									</div>

									<div class="tab-content">
										<div class="tab-pane show active" id="travel-1" role="tabpanel">
											<div class="row">
												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/evento-1.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Campeonato de indor en el coliseo de pueblo viejo 
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Deportes
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/evento-2.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Concierto en san juan por el dia del padre
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Musica
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 20
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/evento-4.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	5K, organiza la Municipalidad para mejorar la salud
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Deportes
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 15
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01" class="wrap-pic-w hov1 trans-03">
															<img src="images/evento-3.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Orquesta tocaran en puerto pechiche por feriado
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Musica
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 12
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="mega-menu-item">
								<a href="galeria">Galeria</a>

								<div class="sub-mega-menu">
									<div class="nav flex-column nav-pills" role="tablist">
										<a class="nav-link active" data-toggle="pill" href="#life-1" role="tab">Todos</a>
									</div>

									<div class="tab-content">
										<div class="tab-pane show active" id="life-1" role="tabpanel">
											<div class="row">
												<div class="col-3 imagenes">
													<!-- Item post -->	
													<div>
														<a rel="fotos" href="images/2.webp" class="wrap-pic-w hov1 trans-03 foto">
															<img src="images/2.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3 imagenes">
													<!-- Item post -->	
													<div>
														<a rel="fotos" href="images/1.webp" class="wrap-pic-w hov1 trans-03 foto">
															<img src="images/1.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 20
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3 imagenes">
													<!-- Item post -->	
													<div>
														<a rel="fotos" href="images/3.webp" class="wrap-pic-w hov1 trans-03 foto">
															<img src="images/3.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 12
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3 imagenes">
													<!-- Item post -->	
													<div>
														<a rel="fotos" href="images/2.webp" class="wrap-pic-w hov1 trans-03 foto">
															<img src="images/2.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 15
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="mega-menu-item">
								<a href="video">Videos</a>

								<div class="sub-mega-menu">
									<div class="nav flex-column nav-pills" role="tablist">
										<a class="nav-link active" data-toggle="pill" href="#video-1" role="tab">Todos</a>
									</div>

									<div class="tab-content">
										<div class="tab-pane show active" id="video-1" role="tabpanel">
											<div class="row">
												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="#" class="wrap-pic-w hov1 trans-03" data-toggle="modal" data-target="#modal-video-01">
															<button class="pos-absolute fs-32 cl0 hov-cl10 trans-03 m-5" style="color: #17b978;">
																<span class="fab fa-youtube"></span>
															</button>
															<video src="images/principal.mp4" control></video>
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="#" class="wrap-pic-w hov1 trans-03" data-toggle="modal" data-target="#modal-video-01">
															<button class="pos-absolute fs-32 cl0 hov-cl10 trans-03 m-5" style="color: #17b978;">
																<span class="fab fa-youtube"></span>
															</button>
															<img src="images/post-08.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 12
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="#" class="wrap-pic-w hov1 trans-03" data-toggle="modal" data-target="#modal-video-01">
															<button class="pos-absolute fs-32 cl0 hov-cl10 trans-03 m-5" style="color: #17b978;">
																<span class="fab fa-youtube"></span>
															</button>
															<img src="images/post-07.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 20
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="#" class="wrap-pic-w hov1 trans-03" data-toggle="modal" data-target="#modal-video-01">
															<button class="pos-absolute fs-32 cl0 hov-cl10 trans-03 m-5" style="color: #17b978;">
																<span class="fab fa-youtube"></span>
															</button>
															<img src="images/post-06.webp" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 15
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li>
								<a href="#">Trasparencia</a>
								<ul class="sub-menu">
									<li><a href="category-01.html">Plan De Desarrollo</a></li>
									<li><a href="category-02.html">Rendicion De Cuenta</a></li>
									<li><a href="blog-grid.html">Lotaip</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>	
		</div>
	</header>

	<!-- Headline -->
	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
				<span class="text-uppercase cl2 p-r-8">
					Tendencia ahora:
				</span>

				<span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">
					<span class="dis-inline-block slide100-txt-item animated visible-false">
						Luz verde para contruir un hospital en Pueblo Viejo
					</span>
					
					<span class="dis-inline-block slide100-txt-item animated visible-false">
						Partido amistoso entre san juan y venecia
					</span>

					<span class="dis-inline-block slide100-txt-item animated visible-false">
						Se esperan fiestas de la parroquia san juan
					</span>
				</span>
			</div>

			<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
				<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Buscar">
				<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
					<i class="zmdi zmdi-search"></i>
				</button>
			</div>
		</div>
	</div>
