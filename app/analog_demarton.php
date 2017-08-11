<?php
$title       = 'Годы аналоги по индексу аридности ДеМартонна';
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
                            <h4>Годы аналоги по индексу аридности ДеМартонна</h4>
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
                                                    <label for="basic_period">Год: </label>
                                                    <input required type="text"
                                                           placeholder="например: 1999"
                                                           class="form-control" id="basic_period" name="basic_period">
                                                </div> <!--period-->

                                                <div class="form-group">
                                                    <label for="forecast_value">Количество аналогов: </label>
                                                    <input required type="text" placeholder="например:?"
                                                           class="form-control" id="forecast_value"
                                                           name="forecast_value">
                                                </div> <!--period-->
                                            </div> <!-- period form-->


                                        </div>


                                    <hr>
                                    <div class="content">
                                        <div class="col-md-12" style="position: relative;">
                                            <p>В базе данных содержится информация по всем действующим метеостанциям Ставропольского края за период 1961-2009гг.</p>
                                            <p>Выберите метеостанцию и год для поиска его аналога на основании расчета индекса аридности Де Мартонна. Вы можете указать отдельные месяцы года по которым будет осуществлен поиск <strong>аналогов.</strong></p>
                                            <p>Укажите количество аналогов которое будет показано на странице.</p>

                                            <table height="100%" width="35%" cellpadding="5" style="margin: 0 30%" cellspacing="0" border="0">
                                                <th>
                                                    <td align="center" colspan="2"><span class="header3">Месяц</span></td>
                                                </th><tr>
                                                    <td align="center">Январь</td>
                                                    <td align="center"><input type="checkbox" name="MonthsDM[]" value="0"  /></td>
                                                </tr><tr>
                                                    <td align="center">Февраль</td>
                                                    <td align="center"><input type="checkbox" name="MonthsDM[]" value="1"  /></td>
                                                </tr><tr>
                                                    <td align="center">Март</td>
                                                    <td align="center"><input type="checkbox" name="MonthsDM[]" value="2"  /></td>
                                                </tr><tr>
                                                    <td align="center">Апрель</td>
                                                    <td align="center"><input type="checkbox" name="MonthsDM[]" value="3"  /></td>
                                                </tr><tr>
                                                    <td align="center">Май</td>
                                                    <td align="center"><input type="checkbox" name="MonthsDM[]" value="4"  /></td>
                                                </tr><tr>
                                                    <td align="center">Июнь</td>
                                                    <td align="center"><input type="checkbox" name="MonthsDM[]" value="5"  /></td>
                                                </tr><tr>
                                                    <td align="center">Июль</td>
                                                    <td align="center"><input type="checkbox" name="MonthsDM[]" value="6"  /></td>
                                                </tr><tr>
                                                    <td align="center">Август</td>
                                                    <td align="center"><input type="checkbox" name="MonthsDM[]" value="7"  /></td>
                                                </tr><tr>
                                                    <td align="center">Сентябрь</td>
                                                    <td align="center"><input type="checkbox" name="MonthsDM[]" value="8"  /></td>
                                                </tr><tr>
                                                    <td align="center">Октябрь</td>
                                                    <td align="center"><input type="checkbox" name="MonthsDM[]" value="9"  /></td>
                                                </tr><tr>
                                                    <td align="center">Ноябрь</td>
                                                    <td align="center"><input type="checkbox" name="MonthsDM[]" value="10"  /></td>
                                                </tr><tr>
                                                    <td align="center">Декабрь</td>
                                                    <td align="center"><input type="checkbox" name="MonthsDM[]" value="11"  /></td>
                                                </tr><tr>
                                                    <td colspan="4" align="center"><input class="select-al-month--button  btn btn-default btn-sm" type="button" value="выделить все"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="text-center">
                                                        <input type="submit" class=" btn btn-success btn-lg show-graph--button"
                                                               value="Показать">
                                                    </td>
                                                </tr>
                                            </table>

                                        </div>

                                    </form> <!--GET GRAPH form-->
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
