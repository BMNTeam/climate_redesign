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
                                                    <label for="forecast_value">Прогнозируемое значение континентальности</label>
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
                                                Проведение агроклиматического районирования территории края по континентальности климата позволяет дополнить характеристику территории по тепло и влагообеспеченности такими значимыми для сельскохозяйственных культур параметрами как степень контрастности климата.
                                            </p>

                                            <p>
                                                В качестве показателя степени континентальности использована годовая амплитуда температуры, выраженная в процентах от средней для данной широты.
                                            </p>
                                            <p>
                                                Чем континентальнее климат, тем короче весенний и осенний сезоны. Короткие сезоны определяют необходимость проведения сельскохозяйственных работ в сжатые сроки. Чаще всего с усилением континентальности возрастает разрыв между продолжительностью беззаморозкового и основного вегетационного периодов. Соотношение продолжительности этих периодов указывает на степень заморозкоопасности. Меньшая заморозкоопасность характерна для территорий с положительными отклонениями. Чем больше положительные отклонения, тем благоприятнее температурные условия для произрастания плодовых и овощных культур.
                                            </p>
                                            <p>
                                                Установлено, что с увеличением континентальности заметно повышается качество зерна. Наиболее тесная связь отмечена между содержанием белка и среднегодовой амплитудой температуры воздуха, которая является необходимым условием для определения континентальности климата. Районы с амплитудами температуры воздуха от 20° до 40°C характеризуются высоким содержанием белка, в районах с амплитудой ниже 20°C пшеница низкобелковая.
                                            </p>


                                            <p>
                                                Континентальность определялась по показателю Н.Н. Иванова (1948):
                                            </p>

                                            <span class="brown_italic_text"><center><strong>К = А * 100 / 0,33 * широта</strong></center></span>
                                            <br>
                                            <span class="brown_italic_text">где,
								<br>
								А – годовая амплитуда температуры из среднемесячных значений;
								<br>
								широта – широта местности;
								</span>

                                            <p>
                                                По Иванову, К = 100% означает уравновешенное влияние континентов и океанов на климат, при К < 100% преобладает влияние океанов, при К > 100% - влияние континентов. Для территории России значение показателя К изменяются примерно от 100 до 300% (Природно-сельскохозяйственное районирование…, 1975).
                                            </p>

                                            <span class="header1"><center>Использованная литература</center></span>
                                            <p><i>
                                                    1. Иванов Н.Н. Ландшафтно-климатические зоны земного шара /Н.Н. Иванов. - М.-Л.: Изд. АН СССР, – 1948. – 130с.<br>

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
