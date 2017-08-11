<?php
$title       = 'Динамика агроклиматических условий возделывания кукурузы';
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
                            <h4>Динамика агроклиматических условий возделывания кукурузы</h4>
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
                                                Для оценки степени благоприятности современных агроклиматических условий для возделывания кукурузы на зерно был использован коэффициент увлажнения Ю.И. Чиркова (1969).
                                            </p>
                                            <p>
                                                Поздние пропашные культуры теплолюбивые. Нижним пределом возделывания кукурузы является сумма активных температур (> 10°С) в 2400 – 2600°С.
                                            </p>
                                            <p>
                                                Поскольку сумма активных температур на территории Ставропольского края превышает значение 3000°С то тепло не является лимитирующим фактором возделывания этой культуры. Ограничивающим фактором для успешного возделывания кукурузы на Ставрополье является недостаток влаги.
                                            </p>
                                            <p>
                                                Кукуруза активно возделывается на территории Ставропольского края в связи с чем, районирование территории по условиям ее возделывания представляет важный практический интерес.
                                            </p>

                                            <p>
                                                В качестве показателя для оценки условий влагообеспеченности кукурузы был использован коэффициент Ю.И. Чиркова (1969):
                                            </p>

                                            <span class="deep_green_italic_text"><center>К = (0,5 * R1 + R2) / (0,18 * сумма(Tв.с.))</center></span>
                                            <br>
                                            <span class="deep_green_italic_text">где,
								<br>
								R1 – осадки осенне-зимнего периода (ноябрь - апрель);
								<br>
								R2 – осадки за период вегетации кукурузы (май - август);
								<br>
								Сумма(Tв.с.) – сумма положительных температур за период вегетации кукурузы (май - август).
								</span>

                                            <p>
                                                Ранжирование условий влагообеспеченности по коэффициенту Чиркова осуществлено по следующей шкале:
                                            </p>
                                            <span class="red_italic_text">K < 0,4 - плохие условия увлажнения (балл 1); </span>
                                            <br>
                                            <span class="orange_italic_text">K = 0,41-0,6 - неудовлетворительные условия (балл 2);</span>
                                            <br>
                                            <span class="bronze_italic_text">K = 0,61–0,8 - неудовлетворительные условия (балл 3);</span>
                                            <br>
                                            <span class="deep_green_italic_text">K = 0,81 – 1,0 - хорошие условия (балл 4)</span>
                                            <br>
                                            <span class="blue_italic_text">K > 1,0 - оптимальные условия (балл 5)</span>

                                            <p>
                                                При оценке влагообеспеченности 3 балла необходимы эпизодические поливы, при оценке 1 и 2 балла орошение является залогом получения высоких урожаев. Иногда по зоне с оценкой увлажнения 4 балла полив также дает положительный эффект.
                                            </p>
                                            </td>
                                            </tr>


                                            <tr valign="top">
                                                <td align="center" valign="top">
                                                    <p>
                                                        В качестве границы производственной целесообразности возделывания кукурузы на зерно используется изогиета суммы осадков за май – август (200мм.). Значение суммы осадков менее 200мм. свидетельствует о большом риске возделывания кукурузы на этой территории.
                                                    </p>

                                                    <span class="header1"><center>Использованная литература</center></span>
                                                    <p><i>
                                                            1. Чирков Ю.И. Агрометеорологические условия и продуктивность кукурузы /Ю.И. Чирков. – Л.: Гидрометеоиздат. – 1969. – 251 с.
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
