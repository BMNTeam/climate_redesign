<?php

require_once('../include/databaseConnection.php');

?>
<!DOCTYPE html>
<html lang="ru">
<head>

    <meta charset="utf-8">

    <title>АИС Агроклимат | <?php echo($title); ?></title>
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

                                    <img src="../img/mshsk.png" class="msh-image fl" alt="Логотип СНИИСХ">
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
                                    <img src="../img/sniish-logo.png" class="logo-image fl" alt="Логотип СНИИСХ">
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
                            <li><a class="special-link" href="manager/index.php">Редактировать отображение</a></li>
                            <li><a href="../index.php">Меню</a></li>
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
                        <p class="page-name--main-message">Панель администратора</p>
                        <p class="page-name--description">Здесь вы можете вносить изменеия в базу данных</p>
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
    <div class="content-container full-screen-height">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="block-container">
                        <div class="container-heading content-header-color">
                            <h4> Редактирование базы данных</h4>
                        </div>
                        <div class="container-elements clearfix clearfix last-container">

                            <div class="col-md-12">
                                <div class="economy-content--wrapper">

                                <!--Start information section-->

						        <?php if ( ! empty($_POST)): ?>
                                    <div class="col-md-12">
                                        <div class="current-status bg-success"
                                        ">
                                        <h3>Изменения успешно сохранены</h3>
                                    </div>
						        <?php endif; ?>
                            </div>
                            <!--End information section-->



                            <!--Global sending form-->
                            <form action="index.php" name="get_data" id="get_data" method="<?php
					        //Method which will be use if you want edit data or
					        //just receive information from database
					        if (!$isEditable) {
						        echo "GET";
					        } else {
						        echo "POST";
					        }; ?>">
                                <div class="col-md-6">
                                    <h4>
                                        Выберите метеостанцию
                                    </h4>
                                    <div class="input-group">
                                        <select name="select" class="form-control" name="select_meteostation" id="select_meteostation">
									        <?php foreach ($resultMeteostations as $key => $value): ?>

                                                <option value="<?php echo $value['ID']; ?>" <?php if ($_GET['select'] == $value['ID'] || $value['ID'] == $_POST['MeteostationID']) {
											        echo 'selected';
										        }; ?>> <?php echo($value['Name']) ?></option>
									        <?php endforeach; ?>
                                            <option value="region" <?php     ($_GET["select"] == "region")      ? print "selected": print ""  ?>>Ставропольский край</option>
                                            <option value="first_zone" <?php ($_GET["select"] == "first_zone")  ? print "selected": print ""; ?>>Зона 1</option>
                                            <option value="second_zone"<?php ($_GET["select"] == "second_zone") ? print "selected": print ""; ?>>Зона 2</option>
                                            <option value="third_zone" <?php ($_GET["select"] == "third_zone")  ? print "selected": print ""; ?>>Зона 3</option>
                                            <option value="fourth_zone"<?php ($_GET["select"] == "fourth_zone") ? print "selected": print ""; ?>>Зона 4</option>
                                        </select>

                                    </div>
                                    <div class="form-group">
								        <?php if(!$isEditable): ?>
                                            <input type="checkbox" name="edit" id="edit_checkbox"> Редактировать <br>
								        <?php endif; ?>
                                        <input type="text" placeholder="Год для редактирования" name="year_to_edit" id="year_to_edit" class=" form-control hidden year_to_edit" value="<?php echo $_REQUEST['year_to_edit']; ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="rom">
                                        <div class="col-md-6">
                                            <h4>
                                                Год - начало
                                            </h4>
                                            <div class="form-group">
                                                <input type="text" name="start_year" class="form-control year-input"placeholder="2000"
                                                       value="<?php if( ! empty($_REQUEST['start_year'])){echo $_REQUEST['start_year'];}else{echo '2016';} ; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <h4>
                                                Год - конец
                                            </h4>
                                            <div class="form-group">
                                                <input type="text" name="end_year" class="form-control year-input" placeholder="2015"
                                                       VALUE="<?php echo $_REQUEST['end_year']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
								        <?php if (!$isEditable): ?>
                                            <input class="btn btn-lg btn-default " type="submit" value="Получить">
								        <?php endif; ?>
								        <?php if ($isEditable): ?>
                                            <input class="btn btn-success" type="submit" value="Сохранить" id="saveResults">
                                            <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>"><input class="btn btn-danger button" value="Отмена"></a>
								        <?php endif; ?>
                                    </div>
                                </div>
                                <!--             Temperature section-->
						        <?php if (!empty($_GET['select']) || !empty($_POST)): ?>
							        <?php include_once('views/temperature.php'); ?>
						        <?php endif; ?>
                                <!--End temperature section-->
                            </div>
                            </div>
                            </div>

                        </div>
                        </form>

            </div>
        </div>
    </div>
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


<link rel="stylesheet" href="../css/libs.css">
<link rel="stylesheet" href="../css/main.min.css">
<script src="../js/scripts.min.js"></script>

</body>
</html>
