<?php
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
require_once('./../../include/DB_itit.php');


//Select all services
$selectServices = $db->query("SELECT * FROM ClimateData_administration");
$servicesVisibility = ($selectServices->fetchAll(PDO::FETCH_ASSOC));

?>
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
        <form action="./../../include/services_administration.php" method="POST" name="saveServicesVisibility" id="saveServicesVisibility">
		<div class="clearfix fixed-menu">
				<div class="container">
					<div class="col-md-12">

						<div class="header-top">

							<div class="header-left fl hidden-sm hidden-xs">

								<figure class="clearfix fl">
									<a href="http://www.mshsk.ru/" class="not-link-style">
										<div class="logo">

											<img src="./../../img/mshsk.png" class="msh-image fl" alt="Логотип СНИИСХ">
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
											<img src="./../../img/sniish-logo.png" class="logo-image fl" alt="Логотип СНИИСХ">
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
									<li><a href="../index.php" class="special-link">Редактировать базу</a></li>
									<li><a href="../../index.php">Меню</a></li>
                                    <input type="submit" value="Сохранить" class="btn btn-success save-visibility--button" id="saveVisibilityStateButton">
                                    <div class="notification-message" id="notificationMessage">
                                        <p>Информация успешно обновлена</p>
                                    </div>
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
							<p class="page-name--main-message">Управление доступом пользователей</p>
							<p class="page-name--description">выберите элементы для отображения в главном меню приложения</p>
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


	<section class="content">

		<div class="content-container">
			<div class="container">

				<div class="row">
					<div class="col-md-12">

						<div class="block-container clearfix">
							<div class="container-heading content-header-color">
								<h4>Справочная информация</h4>
							</div>
							<div class="container-elements clearfix">


								<div class="col-md-3">
									<div class="container-elements-element clearfix">
										<a href="#">

											<div class="service-icon economics-icon-hover">
												<img src="./../../img/icons/svg/economics.svg" class="svg">
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
                                        <input name="<?php echo($servicesVisibility[0]['service_id']) ?>" type="checkbox" <?php ($servicesVisibility[0]['visible'] == 1)?print_r('checked') : print_r('') ?>> Отображать
									</div>
								</div> <!--end service element-->


								<div class="col-md-3">
									<div class="container-elements-element clearfix">
										<a href="#">

											<div class="service-icon ground-icon-hover-color">
												<img src="./../../img/icons/svg/ground.svg" class="svg">
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
                                        <input name="<?php echo($servicesVisibility[1]['service_id']) ?>" type="checkbox" <?php ($servicesVisibility[1]['visible'] == 1)?print_r('checked') : print_r('') ?>> Отображать
									</div>
								</div> <!--end service element-->


								<div class="col-md-3">
									<div class="container-elements-element clearfix">
										<a href="#">

											<div class="service-icon climate-icon-hover">
												<img src="./../../img/icons/svg/climate.svg" class="svg">
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
                                        <input name="<?php echo($servicesVisibility[2]['service_id']) ?>" type="checkbox" <?php ($servicesVisibility[2]['visible'] == 1)?print_r('checked') : print_r('') ?>> Отображать
									</div>
								</div> <!--end service element-->



								<div class="col-md-3">
									<div class="container-elements-element clearfix">
										<a href="#">

											<div class="service-icon decade-data-icon-hover">
												<img src="./../../img/icons/svg/clear_steam.svg" class="svg">
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
                                        <input name="<?php echo($servicesVisibility[3]['service_id']) ?>" type="checkbox" <?php ($servicesVisibility[3]['visible'] == 1)?print_r('checked') : print_r('') ?>> Отображать
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

						<div class="block-container clearfix">
							<div class="container-heading content-header-color">
								<h4>Температура </h4>
							</div>
							<div class="container-elements clearfix">


								<div class="col-md-6">
									<div class="container-elements-element clearfix">
										<a href="/analyze_t.php">

											<div class="service-icon temperature--hover-icon">
												<img src="./../../img/icons/svg/deviations.svg" class="svg">
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
                                        <input name="<?php echo($servicesVisibility[4]['service_id']) ?>" type="checkbox" <?php ($servicesVisibility[4]['visible'] == 1)?print_r('checked') : print_r('') ?>> Отображать
									</div>
								</div> <!--end service element-->


								<div class="col-md-6">
									<div class="container-elements-element clearfix">
										<a href="/temperature_dynamic.php">

											<div class="service-icon temperature--hover-icon">
												<img src="./../../img/icons/svg/dynamic.svg" class="svg">
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
                                        <input name="<?php echo($servicesVisibility[5]['service_id']) ?>" type="checkbox" <?php ($servicesVisibility[5]['visible'] == 1)?print_r('checked') : print_r('') ?>> Отображать
									</div>
								</div> <!--end service element-->


							</div>

						</div>

					</div>


					<div class="col-md-6">

						<div class="block-container clearfix">
							<div class="container-heading content-header-color">
								<h4>Осадки</h4>
							</div>
							<div class="container-elements clearfix">


								<div class="col-md-6">
									<div class="container-elements-element clearfix">
										<a href="/analyze_p.php">

											<div class="service-icon deviation-hover-icon">
												<img src="./../../img/icons/svg/deviations.svg" class="svg">
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
                                        <input name="<?php echo($servicesVisibility[6]['service_id']) ?>" type="checkbox" <?php ($servicesVisibility[6]['visible'] == 1)?print_r('checked') : print_r('') ?>> Отображать
									</div>
								</div> <!--end service element-->


								<div class="col-md-6">
									<div class="container-elements-element clearfix">
										<a href="/precip_dynamic.php">

											<div class="service-icon deviation-hover-icon">
												<img src="./../../img/icons/svg/dynamic.svg" class="svg">
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
                                        <input name="<?php echo($servicesVisibility[7]['service_id']) ?>" type="checkbox" <?php ($servicesVisibility[7]['visible'] == 1)?print_r('checked') : print_r('') ?>> Отображать
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

						<div class="block-container clearfix">
							<div class="container-heading content-header-color">
								<h4>Оперативная информация</h4>
							</div>
							<div class="container-elements clearfix">


								<div class="col-md-3">
									<div class="container-elements-element clearfix">
										<a href="/gtk.php">

											<div class="service-icon economics-icon-hover">
												<img src="./../../img/icons/svg/gidro_coefficient.svg" class="svg">
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
                                        <input name="<?php echo($servicesVisibility[8]['service_id']) ?>" type="checkbox" <?php ($servicesVisibility[8]['visible'] == 1)?print_r('checked') : print_r('') ?>> Отображать
									</div>
								</div> <!--end service element-->


								<div class="col-md-3">
									<div class="container-elements-element clearfix">
										<a href="/walter.php">

											<div class="service-icon ground-icon-hover-color">
												<img src="./../../img/icons/svg/valter.svg" class="svg">
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
                                        <input name="<?php echo($servicesVisibility[9]['service_id']) ?>" type="checkbox" <?php ($servicesVisibility[9]['visible'] == 1)?print_r('checked') : print_r('') ?>> Отображать
									</div>
								</div> <!--end service element-->


								<div class="col-md-3">
									<div class="container-elements-element clearfix">
										<a href="/bcp.php">

											<div class="service-icon climate-potential-hover-icon">
												<img src="./../../img/icons/svg/climate_potential.svg" class="svg">
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
                                        <input name="<?php echo($servicesVisibility[10]['service_id']) ?>" type="checkbox" <?php ($servicesVisibility[10]['visible'] == 1)?print_r('checked') : print_r('') ?>> Отображать
									</div>
								</div> <!--end service element-->



								<div class="col-md-3">
									<div class="container-elements-element clearfix">
										<a href="/continent.php">

											<div class="service-icon decade-data-icon-hover">
												<img src="./../../img/icons/svg/mainland.svg" class="svg">
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
                                        <input name="<?php echo($servicesVisibility[11]['service_id']) ?>" type="checkbox" <?php ($servicesVisibility[11]['visible'] == 1)?print_r('checked') : print_r('') ?>> Отображать
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

						<div class="block-container clearfix">
							<div class="container-heading content-header-color">
								<h4>Агроклиматические условия возделывания сельскохозяйственных культур</h4>
							</div>
							<div class="container-elements clearfix">


								<div class="col-md-3">
									<div class="container-elements-element clearfix">
										<a href="/ylanova.php">

											<div class="service-icon economics-icon-hover">
												<img src="./../../img/icons/svg/ozimaya_wheat.svg" class="svg">
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
                                        <input name="<?php echo($servicesVisibility[12]['service_id']) ?>" type="checkbox" <?php ($servicesVisibility[12]['visible'] == 1)?print_r('checked') : print_r('') ?>> Отображать
									</div>
								</div> <!--end service element-->


								<div class="col-md-3">
									<div class="container-elements-element clearfix">
										<a href="sapojnikova.php">

											<div class="service-icon ground-icon-hover-color">
												<img src="./../../img/icons/svg/yaroviye.svg" class="svg">
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
                                        <input name="<?php echo($servicesVisibility[13]['service_id']) ?>" type="checkbox" <?php ($servicesVisibility[13]['visible'] == 1)?print_r('checked') : print_r('') ?>> Отображать
									</div>
								</div> <!--end service element-->


								<div class="col-md-3">
									<div class="container-elements-element clearfix">
										<a href="/melnik.php">

											<div class="service-icon sunflower-hover-icon">
												<img src="./../../img/icons/svg/sunflower.svg" class="svg">
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
                                        <input name="<?php echo($servicesVisibility[14]['service_id']) ?>" type="checkbox" <?php ($servicesVisibility[14]['visible'] == 1)?print_r('checked') : print_r('') ?>> Отображать
									</div>
								</div> <!--end service element-->



								<div class="col-md-3">
									<div class="container-elements-element clearfix">
										<a href="/chirkov.php">

											<div class="service-icon corn-hover-icon">
												<img src="./../../img/icons/svg/corn.svg" class="svg">
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
                                        <input name="<?php echo($servicesVisibility[15]['service_id']) ?>" type="checkbox" <?php ($servicesVisibility[15]['visible'] == 1)?print_r('checked') : print_r('') ?>> Отображать
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

						<div class="block-container clearfix last-container">
							<div class="container-heading content-header-color">
								<h4>Годы аналоги</h4>
							</div>
							<div class="container-elements clearfix">


								<div class="col-md-3">
									<div class="container-elements-element clearfix">
										<a href="analog_tp.php">

											<div class="service-icon same-years-hover-icon">
												<img src="./../../img/icons/svg/temperature_compearison.svg" class="svg">
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
                                        <input name="<?php echo($servicesVisibility[16]['service_id']) ?>" type="checkbox" <?php ($servicesVisibility[16]['visible'] == 1)?print_r('checked') : print_r('') ?>> Отображать
									</div>
								</div> <!--end service element-->


								<div class="col-md-3">
									<div class="container-elements-element clearfix">
										<a href="analog_demarton.php">

											<div class="service-icon same-years-hover-icon">
												<img src="./../../img/icons/svg/index_comparison.svg" class="svg">
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
                                        <input name="<?php echo($servicesVisibility[17]['service_id']) ?>" type="checkbox" <?php ($servicesVisibility[17]['visible'] == 1)?print_r('checked') : print_r('') ?>> Отображать
									</div>
								</div> <!--end service element-->


							</div>

						</div>

					</div>
				</div>
			</div>

		</div> <!--end similar years-->

        </form>
	</section>
    <footer>
        <div class="top-footer--container">
            <div class="container">
                <br>

                <div class="row">

                    <div class="col-md-4">
                        <p class="footer-info--heading">
                            Адрес:
                        </p>
                        <p class="footer-info--description">
                            356241, Ставропольский край, Шпаковский район,
                            г. Михайловск, ул. Никонова, 49
                        </p>
                    </div>

                    <div class="col-md-4">
                        <p class="footer-info--heading">
                            Телефон:
                        </p>
                        <p class="footer-info--description">
                            <a href="tel:88652611773"> 8-8652-611-773</a> <br>
                            <a href="tel:88655323298"> 8-865-53-2-32-98</a>
                        </p>
                    </div>

                    <div class="col-md-4">
                        <p class="footer-info--heading">
                            Факс:
                        </p>
                        <p class="footer-info--description">
                            <a href="tel:8655323297"> 8-655-32-32-97</a>

                        </p>
                    </div>



                </div>

            </div>

        </div> <!--end top deader footer container -->

        <div class="bottom-footer--container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="footer-info--heading">
                            Copyright 2017 © Лаборатория ГИС-технологий СНИИСХ
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>




    <link rel="stylesheet" href="./../../css/libs.css">
    <link rel="stylesheet" href="./../../css/main.min.css">
    <script src="./../../js/scripts.min.js"></script>

</body>
</html>