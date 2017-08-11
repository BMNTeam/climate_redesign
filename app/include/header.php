<?php include_once('head.php'); ?>
<body>
<header>

	<div class="clearfix fixed-menu">
		<div class="container">
			<div class="col-md-12">

				<div class="header-top">

					<div class="header-left fl hidden-sm hidden-xs">

						<figure class="clearfix fl">
							<a href="http://www.mshsk.ru/" class="not-link-style">
								<div class="logo">

									<img src="img/mshsk.png" class="msh-image fl" alt="Логотип СНИИСХ">
									<div class="sniish_text msh_text fl">
										<p>Министерство селького</p>
										<p>хозяйства края</p>
									</div>
								</div>
							</a>
						</figure>

						<figure class="clearfix fl">
							<a href="http://sniish.ru" class="not-link-style">
								<div class="logo fl">
									<img src="img/sniish-logo.png" class="logo-image fl" alt="Логотип СНИИСХ">
									<div class="sniish_text fl">
										<p>Ставропольский</p>
										<p>НИИСХ</p>
									</div>
								</div>
							</a>
						</figure>



					</div> <!--header left-->

					<div class="header-right fr">
						<menu class="main-menu">
							<li><a href="/index.php">Меню</a></li>
							<li><a href="#">Метеостанции края</a></li>
							<li><a href="#">Помощь</a></li>
							<li><a href="#">Выйти</a></li>
						</menu>
					</div><!--header right-->

				</div> <!--header top-->
			</div> <!--column-->
		</div> <!--container-->
	</div>
	<br><br>
	<div class="header-page-name">
		<div class="overlay-image-layer">

			<div class="container">
				<div class="col-md-10 col-sm-7">
					<div class="page-name--heading">
						<p class="page-name--main-message"><?php echo($heading); ?></p>
						<p class="page-name--description"><?php echo ($sub_heading); ?></p>
					</div>
				</div>
				<div class="col-md-2 col-sm-5 hidden-xs">
					<div class="temperature ">
						<i id="loadingAnimation" class="fa fa-spinner fa-pulse fa-3x fa-fw padding-top-fix"></i>
						<div class="hidden-content hidden">
							<p class="current-temperature" >
								<span id="temperatureValue">32</span>
								<span id="estimateIn">℃</span>
							</p>
							<p class="current-temperature--city">
								Ставрополь
							</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

</header>