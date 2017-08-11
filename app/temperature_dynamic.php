<?php
$title = 'Анализ динамики температур';
$heading = 'Страница анализа';
$sub_heading = 'здесь вы можете ознакомиться с нашими сервисами';


include_once ('./include/header.php');
?>

<section class="content">

    <div class="content-container ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="block-container clearfix last-container">
                        <div class="container-heading content-header-color">
                            <h4>Динамика температуры воздуха</h4>
                        </div>
                        <div class="container-elements clearfix">

                            <div class="col-md-12">
                                <div class="row">
                                    <form action="#" method="POST">
                                        <div class="col-md-12">

                                            <div class="get-period--form">
                                                <div class="form-group">
                                                    <label for="basic_station">Выберите метеостанцию :</label>
                                                    <!--<input type="select" class="form-control" id="usr">-->
                                                    <select class="form-control" name="basic_station" id="basic_station">
                                                        <option value="1">Александровское</option>
                                                    </select>
                                                </div> <!--Metastatic-->

                                                <div class="form-group">
                                                    <label for="basic_station">Выберите месяц :</label>
                                                    <table class="table--dynamic" height="100%" width="100%" cellpadding="5" cellspacing="0" border="0">
                                                        <tbody><tr>
                                                            <td align="center"><p>Январь</p></td>
                                                            <td align="center"><p>Февраль</p></td>
                                                            <td align="center"><p>Март</p></td>
                                                            <td align="center"><p>Апрель</p></td>
                                                            <td align="center"><p>Май</p></td>
                                                            <td align="center"><p>Июнь</p></td>
                                                            <td align="center"><p>Июль</p></td>
                                                            <td align="center"><p>Август</p></td>
                                                            <td align="center"><p>Сентябрь</p></td>
                                                            <td align="center"><p>Октябрь</p></td>
                                                            <td align="center"><p>Ноябрь</p></td>
                                                            <td align="center"><p>Декабрь</p></td>
                                                            <td align="center"><p>Выделить/Снять выделение</td>
                                                        </tr><tr>
                                                            <td align="center"><input type="checkbox" name="MonthsDM[]" value="0"></td>
                                                            <td align="center"><input type="checkbox" name="MonthsDM[]" value="1"></td>
                                                            <td align="center"><input type="checkbox" name="MonthsDM[]" value="2"></td>
                                                            <td align="center"><input type="checkbox" name="MonthsDM[]" value="3"></td>
                                                            <td align="center"><input type="checkbox" name="MonthsDM[]" value="4"></td>
                                                            <td align="center"><input type="checkbox" name="MonthsDM[]" value="5"></td>
                                                            <td align="center"><input type="checkbox" name="MonthsDM[]" value="6"></td>
                                                            <td align="center"><input type="checkbox" name="MonthsDM[]" value="7"></td>
                                                            <td align="center"><input type="checkbox" name="MonthsDM[]" value="8"></td>
                                                            <td align="center"><input type="checkbox" name="MonthsDM[]" value="9"></td>
                                                            <td align="center"><input type="checkbox" name="MonthsDM[]" value="10"></td>
                                                            <td align="center"><input type="checkbox" name="MonthsDM[]" value="11"></td>
                                                            <td align="center"><input class="select-al-month--button  btn btn-default btn-sm" class="" type="button" value="выделить все"></td>
                                                        </tr></tbody></table>
                                                </div> <!--period-->

                                                <div class="form-group">
                                                    <label for="basic_period">Период по которому будут рассчитаны средние и скользящие значения: </label>
                                                    <input required type="text" placeholder="например: 1995-2005"
                                                           class="form-control" id="basic_period" name="basic_period">
                                                </div> <!--period-->

                                                <div class="form-group">
                                                    <label for="temperature_forecast">Прогнозируемое значение температуры: </label>
                                                    <input required type="text" placeholder="например:?"
                                                           class="form-control" id="temperature_forecast" name="temperature_forecast">
                                                </div> <!--forecast-->
                                            </div> <!-- period form-->
                                            <div class="form-group">
                                                <input type="submit" class=" btn btn-default btn-lg show-graph--button" value="Показать">
                                            </div>

                                        </div>


                                    </form> <!--GET GRAPH form-->
                                    <hr>
                                    <div class="content">
                                        <div class="col-md-12">
                                            <h3>Статистика</h3>
                                            <br>

                                            <span class="red_italic_text">Средняя арифметическая: <strong>0</strong></span>
                                            <br>
                                            <span class="red_italic_text">Ошибка среднего: <strong>0</strong></span>
                                            <br>
                                            <span class="red_italic_text">Стандартное отклонение: <strong>0</strong></span>
                                            <br>
                                            <span class="red_italic_text">Дисперсия: <strong>0</strong></span>
                                            <br>
                                            <span class="red_italic_text">Коэффициент вариации: <strong>0%</strong></span>
                                            <br>
                                            <span class="red_italic_text">Коэффициент корреляции (год-температура): <strong>0</strong></span>

                                            <br>
                                            <br>
                                            <span class="red_italic_text">Уравнение регрессии: <strong>y = 0*x + 0 Коэффициент аппроксимации = 0</strong></span>
                                            <br>
                                            <span class="red_italic_text">х - номер года; 1961 год - х = 1; 2012 год - х = 52.</span>
                                            <br><br>

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
<?php include_once ('./include/footer.php'); ?>