<div class="flex-s-s">
								<span class="f1-s-12 cl5 p-t-1 m-r-15">
									Compartir:
								</span>
								
								<div class="flex-wr-s-s size-w-0">
									<a href="https://www.facebook.com/sharer/sharer.php?u=" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-facebook-f m-r-7"></i>
										Facebook
									</a>

									<a href="https://twitter.com/intent/tweet?text=[]&url=[url]&hashtags=[hashtag]" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-twitter m-r-7"></i>
										Twitter
									</a>

									<a href="https://api.whatsapp.com/send?text=[text]" class="dis-block f1-s-13 cl0 bg-success borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
										<i class="fab fa-whatsapp m-r-7"></i>
										Whatsapp
									</a>
								</div>
</div>

<script type="text/javascript">
	var dir = window.document.URL;
	var tit = window.document.title;
	document.querySelector('.facebook').href += dir;
	document.querySelector('.twitter').href = `https://twitter.com/intent/tweet?text=${tit}&url=${dir}&hashtags=Social_Students`;
	document.querySelector('.whatsapp').href = `https://api.whatsapp.com/send?text=Me interesa el tema ${tit} tu tambien deberias leerlo ${dir}`;
</script>