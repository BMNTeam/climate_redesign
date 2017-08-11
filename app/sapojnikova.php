<?php
$title       = 'Динамика агроклиматических условий возделывания ранних яровых колосовых';
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
                            <h4>Динамика агроклиматических условий возделывания ранних яровых колосовых</h4>
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
                                                Оценка условий влагообеспеченности возделывания ранних яровых колосовых культур была проведена на основе модифицированного показателя С.А. Сапожниковой (1958).
                                            </p>

                                            <span class="bronze_italic_text"><center><strong>Ку = (0,4 * R(X-IV) + R(V-VI) / (0,18 * сумма(T(V-VI)))</strong></center></span>
                                            <br>
                                            <span class="bronze_italic_text">где,
								<br>
								R(X-IV) – сумма осадков с октября по апрель;
								<br>
								R(V-VI) – сумма осадков с мая по июнь;
								<br>
								сумма(T(V-VI) – сумма среднесуточных температур май-июнь.
								</span>
                                            <p>
                                                Градация  условий увлажнения продуктивности ранних яровых колосовых культур:
                                            </p>
                                            <span class="red_italic_text">Kу < 0,8 засушливые условия; </span>
                                            <br>
                                            <span class="orange_italic_text">Kу 0,81 – 1,0 слабо засушливые условия;</span>
                                            <br>
                                            <span class="deep_green_italic_text">Kу 1,01 – 1,2 оптимальное увлажнение;</span>
                                            <br>
                                            <span class="blue_italic_text">Kу > 1,2 обильное увлажнение.</span>
                                            <br>
                                            <br>

                                            <span class="header1"><center>Использованная литература</center></span>
                                            <p><i>
                                                    1. Сапожникова С.А. Опыт агроклиматического районирования СССР /С.А. Сапожникова// В кн.: Вопросы агроклиматического районирования СССР. - М., изд. МСХ СССР. – 1958. – С.14 – 37.
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
