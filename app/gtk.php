<?php
$title = 'Гидротермический коэффициент';
$heading = 'Гидротермический коэффициент';
$sub_heading = 'здесь вы можете ознакомиться с нашими сервисами';


include_once ('./include/header.php');
?>

<section class="warning-copyright">
    <div class="container">

    </div>
</section>

<section class="content">

    <div class="content-container ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="block-container clearfix last-container">
                        <div class="container-heading content-header-color">
                            <h4>Температура воздуха. Анализ отклонений.</h4>
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
                                                    <select class="form-control" name="basic_station" id="basic_station">
                                                        <option value="1">Александровское</option>
                                                    </select>
                                                </div> <!--Metastatic-->

                                                <div class="form-group">
                                                    <label for="basic_period">Период: </label>
                                                    <input required type="text" placeholder="например: 1995-2005"
                                                           class="form-control" id="basic_period" name="basic_period">
                                                </div> <!--period-->
                                            </div> <!-- period form-->

                                            <div class="form-group">
                                                <input type="submit" class=" btn btn-default btn-lg show-graph--button" value="Показать">
                                            </div>

                                        </div>

                                    </form> <!--GET GRAPH form-->
                                    <div class="content">
                                        <div class="col-md-12" style="position: relative;">
                                            <p>В базе данных содержится информация по всем действующим метеостанциям Ставропольского края за период 1961г. по настоящее время</p>
                                            <?php
                                            require_once('./admin/charts/index.php');
                                            createSpecialColumnChart($first_region,$special_array_for_third_chart, $temperature_sum);
                                            ?>
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