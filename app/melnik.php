<?php
$title       = 'Динамика агроклиматических условий возделывания подсолнечника';
$heading     = 'Страница анализа';
$sub_heading = 'здесь вы можете ознакомиться с нашими сервисами';


include_once( './include/header.php' );
?>

<section class="content">

    <div class="content-container ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="block-container clearfix last-container">
                        <div class="container-heading content-header-color">
                            <h4>Динамика агроклиматических условий возделывания подсолнечника</h4>
                        </div>
                        <div class="container-elements clearfix">

                            <div class="col-md-12">
                                <div class="row">
                                    <form action="#" method="POST">
                                        <div class="col-md-6">

                                            <div class="get-period--form">
                                                <div class="form-group">
                                                    <label for="basic_station">Выберите метеостанцию :</label>
                                                    <!--<input type="select" class="form-control" id="usr">-->
                                                    <select class="form-control" name="basic_station"
                                                            id="basic_station">
                                                        <option value="1">Александровское</option>
                                                    </select>
                                                </div> <!--Metastatic-->

                                                <div class="form-group">
                                                    <label for="basic_period">Период по которому будут рассчитаны средние и скользящие значения.</label>
                                                    <input required type="text"
                                                           placeholder="например: 1983 или 1983-2000"
                                                           class="form-control" id="basic_period" name="basic_period">
                                                </div> <!--period-->

                                                <div class="form-group">
                                                    <label for="forecast_value">Прогнозируемое значение коэффициента</label>
                                                    <input required type="text" placeholder="например:?"
                                                           class="form-control" id="forecast_value"
                                                           name="forecast_value">
                                                </div> <!--period-->
                                            </div> <!-- period form-->
                                            <div class="form-group">
                                                <input type="submit" class=" btn btn-default btn-lg show-graph--button"
                                                       value="Показать">
                                            </div>

                                        </div>

                                    </form> <!--GET GRAPH form-->
                                    <hr>
                                    <div class="content">
                                        <div class="col-md-12" style="position: relative;">
                                            <p>
                                                Для оценки степени благоприятности современных изменений агроклиматических условий для возделывания поздних пропашных культур (подсолнечника) был использован коэффициент увлажнения Ю.С. Мельника (1972).
                                            </p>

                                            <p>
                                                Поздние пропашные культуры теплолюбивые. Нижним пределом возделывания подсолнечника является сумма активных температур (> 10°С) в 2000°С.
                                            </p>
                                            <p>
                                                Поскольку сумма активных температур на территории Ставропольского края превышает значение 3000°С то тепло не является лимитирующим фактором возделывания этих культур, тем более при отмеченной динамике роста теплообеспеченности.
                                            </p>
                                            <p>
                                                Ограничивающим фактором для успешного возделывания поздних пропашных культур на Ставрополье является недостаток влаги.
                                            </p>
                                            <p>
                                                В качестве показателя условий возделывания подсолнечника был использован показатель - К, предложенный Ю.С. Мельником (1972) и рассчитываемый по формуле:
                                            </p>



                                            <span class="cyan_italic_text"><center><strong>К = (0,6 * сумма(х1) + сумма(х2)) / (сумма(Т) / 10)</strong></center></span>
                                            <br>
                                            <span class="cyan_italic_text">где,
								<br>
								сумма(х1) - сумма осадков за вневегетационный период (считая от даты перехода осенью средней суточной температуры через 5°С до даты ее перехода через 10°С весной следующего года);
								<br>
								сумма(х2) - сумма осадков за вегетационный период (считая от даты перехода средней суточной температуры воздуха через 10°С весной до даты созревания подсолнечника);
								<br>
								сумма(Т) - сумма средних суточных температур воздуха за период вегетации(считая от даты перехода средней суточной температуры воздуха через 10°С весной до даты созревания подсолнечника)
								</span>
                                            <p>
                                                Связь биопродуктивности подсолнечника и показателя Мельника описывается уравнением:
                                            </p>
                                            <span class="cyan_italic_text"><center><strong>Y = 23,44 * степень((K – 0,46); 0,8)</strong></center></span>
                                            <br>
                                            <span class="cyan_italic_text">где,
								<br>
								Y - урожайность подсолнечника.
								</span>
                                            <p>
                                                Достоинством показателя является возможность учесть увлажнение осенне-зимнего периода, которое оказывает важное влияние на биопродуктивность подсолнечника.
                                            </p>
                                            <p>
                                                Выявленная Мельником зависимость позволяет разрабатывать схемы долгосрочного прогноза продуктивности, поскольку один из основных предикторов (сумма осадков за вневегетационный период) известен уже в начале вегетационного периода.
                                            </p>
                                            <p>
                                                Мельником (1972) было предложено следующее ранжирование зон по условиям увлажнения:
                                            </p>
                                            <span class="red_italic_text">К < 0,6 – сухая;</span>
                                            <br>
                                            <span class="orange_italic_text">К = 0,6 – 1,0 – засушливая;</span>
                                            <br>
                                            <span class="bronze_italic_text">К = 1,01 – 1,4 – недостаточного увлажнения;</span>
                                            <br>
                                            <span class="deep_green_italic_text">К = 1,41 – 1,8 – умеренно влажная;</span>
                                            <br>
                                            <span class="blue_italic_text">К > 1,8 – влажная.</span>
                                            <br>
                                            <br>

                                            <span class="header1"><center>Использованная литература</center></span>
                                            <p><i>
                                                    1. Мельник Ю.С. Климат и произрастание подсолнечника /Ю.С. Мельник. – Л.: Гидрометеоиздат, – 1972. – 143 с.
                                                </i></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div> <!--end similar years-->


</section>
<?php include_once( './include/footer.php' ); ?>
