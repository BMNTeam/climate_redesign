<?php
$title       = 'Динамика биоклиматического потенциала территории';
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
                            <h4>Динамика биоклиматического потенциала территории</h4>
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
                                                    <label for="basic_period">Период по которому будут расчитаны средние
                                                        значения: </label>
                                                    <input required type="text"
                                                           placeholder="например: 1983 или 1983-2000"
                                                           class="form-control" id="basic_period" name="basic_period">
                                                </div> <!--period-->

                                                <div class="form-group">
                                                    <label for="forecast_value">Прогнозируемое значение
                                                        биоклиматичческого потенциала</label>
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

                                            Для рационального ведения сельскохозяйственного производства очень важны
                                            климатические параметры, которые наиболее тесно связаны с продуктивностью
                                            сельскохозяйственных культур и составляют сельскохозяйственный потенциал
                                            климата. В качестве сельскохозяйственного потенциала климата используется
                                            биоклиматический потенциал (БКП) по Д.И. Шашко (1967).
                                            Применение БКП позволяет дать сравнительную межрегиональную оценку земель,
                                            через относительные значения биоклиматического потенциала, синтезирующего
                                            влияние на биологическую продуктивность основных факторов климата – тепла и
                                            влаги. Очевидным плюсом использования БКП является возможность определить не
                                            только биологическую продуктивность, но и получить фактические значения
                                            климатически обусловленной продуктивности зерновых культур исходя из
                                            значения биоклиматического потенциала (Шашко, 1985). Биоклиматический
                                            потенциал рассчитывался по формуле:


                                            </p>


                                            <span class="violet_italic_text"><center><strong>БКП = Кр(КУ) * (сумма Так / сумма Тбаз)</strong></center></span>
                                            <br>
                                            <span class="violet_italic_text">где,
								<br>
								Кр(КУ) - коэффициент роста по годовому показателю атмосферного увлажнения;
								<br>
								сумма Так - сумма средних суточных температур воздуха за период активной вегетации;
								<br>
								сумма Тбаз - базисная сумма средних суточных температур воздуха за период активной вегетации;
								<br>
                                                               <br>
                                                                <span class="violet_italic_text"><center><strong>КУ = Ос / ДВ</strong></center></span>
<br>
								<span class="violet_italic_text">где,
								<br>
								Ос - годовое количество осадков;
<br>
ДВ - сумма ежедневных дефицитов влажности воздуха.
<br>
                                                               <br>
                                                                <span class="violet_italic_text"><center><strong>Кр = log10(КУ * 20)</strong></center></span>

								</span>

								<p>
								Градация биоклиматического потенциала и биологической продуктивности:
								</p>
								<span class="red_italic_text">БКП 1,21-1,6 <strong>пониженная продуктивность</strong> 14,0-19,5 ц/га;*</span>
								<br>
<br>
								<span class="orange_italic_text">БКП 1,61-2,2 <strong>средняя продуктивность</strong> 19,6-27,6 ц/га;*</span>
								<br>
<br>
								<span class="deep_green_italic_text">БКП 2,21-2,8 <strong>повышенная продуктивность</strong> 27,7-35,7 ц/га;*</span>
								<br>
<br>
								<span class="blue_italic_text">БКП 2,81-3,4 <strong>повышенная продуктивность</strong> 35,8-43,7 ц/га.*</span>

<p>
<i>* - климатически обусловленная урожайность.</i>
								</p>

								<span class="header1"><center>Использованная литература</center></span>
								<p><i>
								1. Шашко Д.И. Агроклиматические ресурсы СССР /Д.И. Шашко. Л.: Гидрометеоиздат. – 1985. – 248с.
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
