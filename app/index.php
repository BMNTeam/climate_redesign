<?php require_once('./include/DB_itit.php');


//Select all services
$selectServices = $db->query("SELECT * FROM ClimateData_administration");
$servicesVisibility = ($selectServices->fetchAll(PDO::FETCH_ASSOC));


function isVisibleBlock($servicesVisibility, $start, $end){
    $is_visible = false;
	for($i = $start; $i < $end; $i++ ) {
		if( ! $servicesVisibility[$i][visible] == 0){
			$is_visible = true;
			return $is_visible;
		}
	}
	return $is_visible;
}

$help_block_visible         = isVisibleBlock($servicesVisibility, 0, 4);
$temperature_block_visible  = isVisibleBlock($servicesVisibility, 4, 6);
$precipitations_visible     = isVisibleBlock($servicesVisibility, 6, 8);
$operative_info_visible     = isVisibleBlock($servicesVisibility, 8, 12);
$conditions_block_visible   = isVisibleBlock($servicesVisibility, 12, 16);
$same_years_block_visible   = isVisibleBlock($servicesVisibility, 16, 18);


?>

<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>АИС Агроклимат | Сервисы</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<style>
		body { opacity: 0; overflow-x: hidden; }
		html { background-color: #fff; }
	</style>

</head>

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
									<li><a href="#">Меню</a></li>
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
							<p class="page-name--main-message">Главное меню</p>
							<p class="page-name--description">здесь вы можете ознакомиться с нашими сервисами</p>
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

	<section class="warning-copyright">
		<div class="container">

		</div>
	</section>

	<section class="content">
		<div class="content-container">
			<div class="container">

				<!--Warning message-->
				<div class="row">
					<div class="col-md-12">
						<div class="warning-message">
							<p class="footer-info--heading">
								При использовании материалов ИАС «Агроклиматический потенциал Ставропольского края» <b>обязательно цитирование</b>:
							</p>
							<p class="footer-info--description">
								<blockquote>
									Информационно-аналитическая система «Агроклиматический потенциал Ставропольского края»/С.А.Антонов, Л.И.Желнакова, О.В. Петин.
									– Электронный ресурс. – Михайловск: ГНУ Ставропольский НИИСХ Россельхозакадемии, 2010. Режим доступа: http://www.sniish.ru/climate/ Загл. с экрана.
									Дата доступа: 01.07.2017
								</blockquote>
							</p>
						</div>
					</div>
				</div> <!--Warning message-->

				<div class="row">
					<div class="col-md-12">

						<div class="block-container clearfix  <?php echo(( ! $help_block_visible) ? 'hidden' : ''); ?>">
							<div class="container-heading content-header-color">
								<h4>Справочная информация</h4>
							</div>
							<div class="container-elements clearfix">


								<div class="col-md-3 <?php echo(( ! $servicesVisibility[0][visible]) ? 'hidden' : ''); ?>">
									<div class="container-elements-element clearfix">
										<a href="economy.php">

											<div class="service-icon economics-icon-hover">
												<img src="img/icons/svg/economics.svg" class="svg">
											</div>
											<div class="service-description">
												<p>
													Получите оперативную информацию о текущем состоянии эконоики в крае
												</p>
											</div>
										</a>
									</div>
									<div class="service-name">
										<h5>
											Экономика АПК
										</h5>
									</div>
								</div> <!--end service element-->


								<div class="col-md-3 <?php echo((!$servicesVisibility[1][visible]) ? 'hidden' : ''); ?>">
									<div class="container-elements-element clearfix">
										<a href="soil.php">

											<div class="service-icon ground-icon-hover-color">
												<img src="img/icons/svg/ground.svg" class="svg">
											</div>
											<div class="service-description">
												<p>
													Получите оперативную информацию о текущем состоянии почв в крае
												</p>
											</div>
										</a>
									</div>
									<div class="service-name">
										<h5>
											Почвы
										</h5>
									</div>
								</div> <!--end service element-->


								<div class="col-md-3 <?php echo(( ! $servicesVisibility[2][visible]) ? 'hidden' : ''); ?>">
									<div class="container-elements-element clearfix">
										<a href="climate_info.php">

											<div class="service-icon climate-icon-hover">
												<img src="img/icons/svg/climate.svg" class="svg">
											</div>
											<div class="service-description">
												<p>
													Получите оперативную информацию о текущем состоянии почв в крае
												</p>
											</div>
										</a>
									</div>
									<div class="service-name">
										<h5>
											Климат
										</h5>
									</div>
								</div> <!--end service element-->



								<div class="col-md-3 <?php echo((! $servicesVisibility[3][visible]) ? 'hidden' : ''); ?>">
									<div class="container-elements-element clearfix">
										<a href="#">

											<div class="service-icon decade-data-icon-hover">
												<img src="img/icons/svg/clear_steam.svg" class="svg">
											</div>
											<div class="service-description">
												<p>
													Получите оперативную информацию о текущем состоянии почв в крае
												</p>
											</div>
										</a>
									</div>
									<div class="service-name">
										<h5>
											Чистые пары
										</h5>
									</div>
								</div> <!--end service element-->


							</div>

						</div>

					</div>
				</div>
			</div>

		</div>


		<div class="content-container half-size">
			<div class="container">
				<div class="row">
					<div class="col-md-6">

						<div class="block-container clearfix <?php echo(( ! $temperature_block_visible) ? 'hidden' : '')  ; ?>">
							<div class="container-heading content-header-color">
								<h4>Температура </h4>
							</div>
							<div class="container-elements clearfix">


								<div class="col-md-6 <?php echo(( ! $servicesVisibility[4][visible]) ? 'hidden' : ''); ?>">
									<div class="container-elements-element clearfix">
										<a href="/analyze_t.php">

											<div class="service-icon temperature--hover-icon">
												<img src="img/icons/svg/deviations.svg" class="svg">
											</div>
											<div class="service-description">
												<p>
													Получите оперативную информацию о текущем состоянии эконоики в крае
												</p>
											</div>
										</a>
									</div>
									<div class="service-name">
										<h5>
											Отклонения
										</h5>
									</div>
								</div> <!--end service element-->


								<div class="col-md-6 <?php echo(( ! $servicesVisibility[5][visible]) ? 'hidden' : ''); ?>">
									<div class="container-elements-element clearfix">
										<a href="/temperature_dynamic.php">

											<div class="service-icon temperature--hover-icon">
												<img src="img/icons/svg/dynamic.svg" class="svg">
											</div>
											<div class="service-description">
												<p>
													Получите оперативную информацию о текущем состоянии почв в крае
												</p>
											</div>
										</a>
									</div>
									<div class="service-name">
										<h5>
											Динамика
										</h5>
									</div>
								</div> <!--end service element-->


							</div>

						</div>

					</div>


					<div class="col-md-6">

						<div class="block-container clearfix <?php echo(( ! $precipitations_visible ) ? 'hidden' : '')  ; ?>">
							<div class="container-heading content-header-color">
								<h4>Осадки</h4>
							</div>
							<div class="container-elements clearfix">


								<div class="col-md-6 <?php echo(( ! $servicesVisibility[6][visible]) ? 'hidden' : ''); ?>">
									<div class="container-elements-element clearfix">
										<a href="/analyze_p.php">

											<div class="service-icon deviation-hover-icon">
												<img src="img/icons/svg/deviations.svg" class="svg">
											</div>
											<div class="service-description">
												<p>
													Получите оперативную информацию о текущем состоянии эконоики в крае
												</p>
											</div>
										</a>
									</div>
									<div class="service-name">
										<h5>
											Отклонения
										</h5>
									</div>
								</div> <!--end service element-->


								<div class="col-md-6 <?php echo((! $servicesVisibility[7][visible]) ? 'hidden' : ''); ?>">
									<div class="container-elements-element clearfix">
										<a href="/precip_dynamic.php">

											<div class="service-icon deviation-hover-icon">
												<img src="img/icons/svg/dynamic.svg" class="svg">
											</div>
											<div class="service-description">
												<p>
													Получите оперативную информацию о текущем состоянии почв в крае
												</p>
											</div>
										</a>
									</div>
									<div class="service-name">
										<h5>
											Динамика
										</h5>
									</div>
								</div> <!--end service element-->


							</div>

						</div>

					</div>
				</div>
			</div>

		</div>  <!--End half-size container-->

		<div class="content-container">
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="block-container clearfix <?php echo(( ! $operative_info_visible ) ? 'hidden' : '')  ; ?>">
							<div class="container-heading content-header-color">
								<h4>Оперативная информация</h4>
							</div>
							<div class="container-elements clearfix">


								<div class="col-md-3 <?php echo((!$servicesVisibility[8][visible]) ? 'hidden' : ''); ?>">
									<div class="container-elements-element clearfix">
										<a href="/gtk.php">

											<div class="service-icon economics-icon-hover">
												<img src="img/icons/svg/gidro_coefficient.svg" class="svg">
											</div>
											<div class="service-description">
												<p>
													Получите оперативную информацию о текущем состоянии эконоики в крае
												</p>
											</div>
										</a>
									</div>
									<div class="service-name">
										<h5>
											Гидротермический коэффициент
										</h5>
									</div>
								</div> <!--end service element-->


								<div class="col-md-3 <?php echo((!$servicesVisibility[9][visible]) ? 'hidden' : ''); ?>">
									<div class="container-elements-element clearfix">
										<a href="/walter.php">

											<div class="service-icon ground-icon-hover-color">
												<img src="img/icons/svg/valter.svg" class="svg">
											</div>
											<div class="service-description">
												<p>
													Получите оперативную информацию о текущем состоянии почв в крае
												</p>
											</div>
										</a>
									</div>
									<div class="service-name">
										<h5>
											Климадиаграмма Вальтера
										</h5>
									</div>
								</div> <!--end service element-->


								<div class="col-md-3 <?php echo((!$servicesVisibility[10][visible]) ? 'hidden' : ''); ?>">
									<div class="container-elements-element clearfix">
										<a href="/bcp.php">

											<div class="service-icon climate-potential-hover-icon">
												<img src="img/icons/svg/climate_potential.svg" class="svg">
											</div>
											<div class="service-description">
												<p>
													Получите оперативную информацию о текущем состоянии почв в крае
												</p>
											</div>
										</a>
									</div>
									<div class="service-name">
										<h5>
											Биоклиматический потенциал
										</h5>
									</div>
								</div> <!--end service element-->



								<div class="col-md-3 <?php echo((!$servicesVisibility[11][visible]) ? 'hidden' : ''); ?>">
									<div class="container-elements-element clearfix">
										<a href="/continent.php">

											<div class="service-icon decade-data-icon-hover">
												<img src="img/icons/svg/mainland.svg" class="svg">
											</div>
											<div class="service-description">
												<p>
													Получите оперативную информацию о текущем состоянии почв в крае
												</p>
											</div>
										</a>
									</div>
									<div class="service-name">
										<h5>
											Континентальность
										</h5>
									</div>
								</div> <!--end service element-->


							</div>

						</div>

					</div>
				</div>
			</div>

		</div> <!--end operative information-->


		<div class="content-container">
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="block-container clearfix <?php echo(( ! $conditions_block_visible) ? 'hidden' : '')  ; ?>">
							<div class="container-heading content-header-color">
								<h4>Агроклиматические условия возделывания сельскохозяйственных культур</h4>
							</div>
							<div class="container-elements clearfix">


								<div class="col-md-3 <?php echo((!$servicesVisibility[12][visible]) ? 'hidden' : ''); ?>">
									<div class="container-elements-element clearfix">
										<a href="/ylanova.php">

											<div class="service-icon economics-icon-hover">
												<img src="img/icons/svg/ozimaya_wheat.svg" class="svg">
											</div>
											<div class="service-description">
												<p>
													Получите оперативную информацию о текущем состоянии эконоики в крае
												</p>
											</div>
										</a>
									</div>
									<div class="service-name">
										<h5>
											Озимая пшеница
										</h5>
									</div>
								</div> <!--end service element-->


								<div class="col-md-3 <?php echo((!$servicesVisibility[13][visible]) ? 'hidden' : ''); ?>">
									<div class="container-elements-element clearfix">
										<a href="sapojnikova.php">

											<div class="service-icon ground-icon-hover-color">
												<img src="img/icons/svg/yaroviye.svg" class="svg">
											</div>
											<div class="service-description">
												<p>
													Получите оперативную информацию о текущем состоянии почв в крае
												</p>
											</div>
										</a>
									</div>
									<div class="service-name">
										<h5>
											Яровые колосовые
										</h5>
									</div>
								</div> <!--end service element-->


								<div class="col-md-3 <?php echo((!$servicesVisibility[14][visible]) ? 'hidden' : ''); ?>">
									<div class="container-elements-element clearfix">
										<a href="/melnik.php">

											<div class="service-icon sunflower-hover-icon">
												<img src="img/icons/svg/sunflower.svg" class="svg">
											</div>
											<div class="service-description">
												<p>
													Получите оперативную информацию о текущем состоянии почв в крае
												</p>
											</div>
										</a>
									</div>
									<div class="service-name">
										<h5>
											Подсолнечник
										</h5>
									</div>
								</div> <!--end service element-->



								<div class="col-md-3 <?php echo((!$servicesVisibility[15][visible]) ? 'hidden' : ''); ?>">
									<div class="container-elements-element clearfix">
										<a href="/chirkov.php">

											<div class="service-icon corn-hover-icon">
												<img src="img/icons/svg/corn.svg" class="svg">
											</div>
											<div class="service-description">
												<p>
													Получите оперативную информацию о текущем состоянии почв в крае
												</p>
											</div>
										</a>
									</div>
									<div class="service-name">
										<h5>
											Кукуруза
										</h5>
									</div>
								</div> <!--end service element-->


							</div>

						</div>

					</div>
				</div>
			</div>

		</div> <!--end agroclimate conditions-->


		<div class="content-container ">
			<div class="container">
				<div class="row">
					<div class="col-md-12">

						<div class="block-container clearfix last-container <?php echo(( ! $same_years_block_visible ) ? 'hidden' : '')  ; ?>">
							<div class="container-heading content-header-color">
								<h4>Годы аналоги</h4>
							</div>
							<div class="container-elements clearfix">


								<div class="col-md-3 <?php echo((!$servicesVisibility[16][visible]) ? 'hidden' : ''); ?>">
									<div class="container-elements-element clearfix">
										<a href="analog_tp.php">

											<div class="service-icon same-years-hover-icon">
												<img src="img/icons/svg/temperature_compearison.svg" class="svg">
											</div>
											<div class="service-description">
												<p>
													Получите оперативную информацию о текущем состоянии эконоики в крае
												</p>
											</div>
										</a>
									</div>
									<div class="service-name">
										<h5>
											По температуре
										</h5>
									</div>
								</div> <!--end service element-->


								<div class="col-md-3 <?php echo((!$servicesVisibility[17][visible]) ? 'hidden' : ''); ?>">
									<div class="container-elements-element clearfix">
										<a href="analog_demarton.php">

											<div class="service-icon same-years-hover-icon">
												<img src="img/icons/svg/index_comparison.svg" class="svg">
											</div>
											<div class="service-description">
												<p>
													Получите оперативную информацию о текущем состоянии почв в крае
												</p>
											</div>
										</a>
									</div>
									<div class="service-name">
										<h5>
											По индексу аридности
										</h5>
									</div>
								</div> <!--end service element-->


							</div>

						</div>

					</div>
				</div>
			</div>

		</div> <!--end similar years-->


	</section>
	<?php include_once ('./include/footer.php'); ?>
