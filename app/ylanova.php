<?php
$title       = 'Динамика показателя континентальности климата';
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
                            <h4>Динамика показателя континентальности климата</h4>
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
                                                Согласно  методике,  разработанной  Е.С.  Улановой (1973),  условия весенне-летнего  периода  формируют  продуктивность  озимой  пшеницы  и представлены  двумя  инерционными  факторами:  весенним  запасом продуктивной влаги в метровом слое почвы посевов пшеницы и состоянием культуры во время возобновления весенней вегетации. </p>
                                            <p>
                                                Как  показали исследования Л.И.  Желнаковой (1992)  существует достоверная  связь (r = 0,95)  между  этим  показателем  Улановой  и продуктивностью озимой пшеницы по непаровым предшественникам. В связи с тем, что длинные ряды наблюдений за запасами продуктивной влаги в почве существует не на всех метеостанциях края, в качестве  показателя  косвенно  определяющего  весенние  влагозапасы, использовалась  сумма осенне-зимних осадков за период (ноябрь–март) с коэффициентом 0,5.
                                            </p>
                                            <p>
                                                Эта модификация показателя была апробирована автором  при районировании агроклиматических условий формирования биологической продуктивности озимой пшеницы в зоне черноземов и каштановых почв (Уланова, 1975).
                                            </p>
                                            <p>
                                                Рассчитывалась по следующей формуле (Уланова, 1973):
                                            </p>

                                            <span class="deep_green_italic_text"><center><strong>К = (0,5 R(X-III) + Rв.с.) / (0,01 * сумма(Tв.с.))</strong></center></span>
                                            <br>
                                            <span class="deep_green_italic_text">где,
								<br>
								R(X-III) – сумма осадков с октября по март;
								<br>
								Rв.с. – сумма осадков от возобновления вегетации озимой пшеницы весной до восковой спелости;
								<br>
								Rв.с. – сумма осадков от возобновления вегетации озимой пшеницы весной до восковой спелости;
								<br>
								Сумма(Tв.с.) – сумма среднесуточных активных температур (выше 5 градусов) от возобновления весенней вегетации до восковой спелости.
								</span>

                                            <p>
                                                На основе связи условий влагообеспеченности весенне-летнего периода с  урожайностью  озимой  пшеницы  Е.С.  Улановой (1975)  предложена следующая  градация  условий  формирования  продуктивности  озимой пшеницы:
                                            </p>
                                            <span class="red_italic_text">K < 12 – неблагоприятные, плохие условия;</span>
                                            <br>
                                            <span class="orange_italic_text">К от 12 до 18 – недостаточно благоприятные условия;</span>
                                            <br>
                                            <span class="deep_green_italic_text">К от 18 до 23 – удовлетворительные условия;</span>
                                            <br>
                                            <span class="blue_italic_text">К > 23 – хорошие условия.</span>
                                            <br>
                                            <br>
                                            <span class="header1"><center>Использованная литература</center></span>
                                            <p><i>
                                                    1. Уланова  Е.С.  Агрометеорологические  условия  и  урожайность  озимой пшеницы / Е.С. Уланова. - Л.: Гидрометеоиздат. – 1975 – 302с.<br>
                                                    2. Уланова  Е.С.  Методика  агроклиматического  районирования  условий формирования  урожайности  озимой  пшеницы  в  черноземной  зоне  в весенне-летний  период /Е.С.  Уланова //  Труды  ГМЦ  СССР. 1973. – Вып.111. – С. 65–69. <br>
                                                    3. Желнакова  Л.И.  Оптимизация  использования  почвенно-климатических ресурсов  Центрального  Предкавказья  для  производства  зерна  озимой пшеницы  с  помощью  чистых  паров:  Автореф.  дис. ...  канд.  с-х.  наук /Л.И. Желнакова. – Ставрополь. – 1992. – 25 с.
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
