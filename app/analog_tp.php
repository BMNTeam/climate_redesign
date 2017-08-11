<?php
$title       = 'Годы аналоги по тепло- и влагообеспеченности';
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
                            <h4>Годы аналоги по тепло- и влагообеспеченности</h4>
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
                                            <p>В базе данных содержится информация по всем действующим метеостанциям Ставропольского края за период 1961г. по сегодняшний день</p>
                                            <p>Выберите метеостанцию и год для поиска его аналога. Вы можете указать отдельные месяца года и климатические параметры (осадки и температура) по которым будет осуществлен поиск.</p>
                                            <p>Укажите количество аналогов которое будет показано на странице.</p>
                                            <p>При поиске года аналога для сельскохозяйственного года необходимо указывать год, которым заканчивается сельскохозяйственный год. Например: при поиске года аналога 2014-2015 с/х года, в поле год необходимо указывать 2015г.</p>
                                            <br>
                                            <table height="100%" width="35%" cellpadding="5" style="margin: 0 30%" cellspacing="0" border="0">
                                                <tr>
                                                    <td align="center" width="10%"><span class="red"><strong>Температура</strong></span></td>
                                                    <td align="center" ><span class="header3">Месяц</span></td>
                                                    <td align="center"><span class="blue"><strong>Осадки</strong></span></td>
                                                </tr>

                                                <tr>
                                                    <td align="center"><input type="checkbox" name="MonthsTemp[]" value="0"  /></td>
                                                    <td align="center"><span class="simple_text">Январь</span></td>
                                                    <td align="center"><input type="checkbox" name="MonthsPrecip[]" value="0"  /></td>
                                                </tr><tr>
                                                    <td align="center"><input type="checkbox" name="MonthsTemp[]" value="1"  /></td>
                                                    <td align="center"><span class="simple_text">Февраль</span></td>
                                                    <td align="center"><input type="checkbox" name="MonthsPrecip[]" value="1"  /></td>
                                                </tr><tr>
                                                    <td align="center"><input type="checkbox" name="MonthsTemp[]" value="2"  /></td>
                                                    <td align="center"><span class="simple_text">Март</span></td>
                                                    <td align="center"><input type="checkbox" name="MonthsPrecip[]" value="2"  /></td>
                                                </tr><tr>
                                                    <td align="center"><input type="checkbox" name="MonthsTemp[]" value="3"  /></td>
                                                    <td align="center"><span class="simple_text">Апрель</span></td>
                                                    <td align="center"><input type="checkbox" name="MonthsPrecip[]" value="3"  /></td>
                                                </tr><tr>
                                                    <td align="center"><input type="checkbox" name="MonthsTemp[]" value="4"  /></td>
                                                    <td align="center"><span class="simple_text">Май</span></td>
                                                    <td align="center"><input type="checkbox" name="MonthsPrecip[]" value="4"  /></td>
                                                </tr><tr>
                                                    <td align="center"><input type="checkbox" name="MonthsTemp[]" value="5"  /></td>
                                                    <td align="center"><span class="simple_text">Июнь</span></td>
                                                    <td align="center"><input type="checkbox" name="MonthsPrecip[]" value="5"  /></td>
                                                </tr><tr>
                                                    <td align="center"><input type="checkbox" name="MonthsTemp[]" value="6"  /></td>
                                                    <td align="center"><span class="simple_text">Июль</span></td>
                                                    <td align="center"><input type="checkbox" name="MonthsPrecip[]" value="6"  /></td>
                                                </tr><tr>
                                                    <td align="center"><input type="checkbox" name="MonthsTemp[]" value="7"  /></td>
                                                    <td align="center"><span class="simple_text">Август</span></td>
                                                    <td align="center"><input type="checkbox" name="MonthsPrecip[]" value="7"  /></td>
                                                </tr><tr>
                                                    <td align="center"><input type="checkbox" name="MonthsTemp[]" value="8"  /></td>
                                                    <td align="center"><span class="simple_text">Сентябрь</span></td>
                                                    <td align="center"><input type="checkbox" name="MonthsPrecip[]" value="8"  /></td>
                                                </tr><tr>
                                                    <td align="center"><input type="checkbox" name="MonthsTemp[]" value="9"  /></td>
                                                    <td align="center"><span class="simple_text">Октябрь</span></td>
                                                    <td align="center"><input type="checkbox" name="MonthsPrecip[]" value="9"  /></td>
                                                </tr><tr>
                                                    <td align="center"><input type="checkbox" name="MonthsTemp[]" value="10"  /></td>
                                                    <td align="center"><span class="simple_text">Ноябрь</span></td>
                                                    <td align="center"><input type="checkbox" name="MonthsPrecip[]" value="10"  /></td>
                                                </tr><tr>
                                                    <td align="center"><input type="checkbox" name="MonthsTemp[]" value="11"  /></td>
                                                    <td align="center"><span class="simple_text">Декабрь</span></td>
                                                    <td align="center"><input type="checkbox" name="MonthsPrecip[]" value="11"  /></td>
                                                </tr><tr><td colspan="2" align="right"><p><strong>Сельскохозяйственный год</strong></p></td>
                                                    <td align="center"><input type="checkbox" name="agro_year" value="1" /></td>
                                                </tr><tr>
                                                    <td colspan="4" align="center"><input class="select-al-month--button  btn btn-default btn-sm" type="button" value="выделить все"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" class="text-center">
                                                        <input type="submit" class=" btn btn-success btn-lg show-graph--button"
                                                               value="Показать">
                                                    </td>
                                                </tr>
                                                </tbody>

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
