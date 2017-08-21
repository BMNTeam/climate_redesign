<?php
$title       = 'Авторизация';
$heading     = 'Авторизация';
$sub_heading = 'авторизируйтесь или создайте аккаунт для использования нашего сервиса';


include_once( './include/header.php' );
?>

<section class="content">
    <div class="content-container full-screen-height">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="block-container clearfix last-container">
                        <div class="container-heading content-header-color">
                            <h4>Введите имя пользователя и пароль</h4>
                        </div>
                        <div class="container-elements authorization-container clearfix">

                            <div class="col-md-6 ">
                                <br><br>
                                <form action="#" name="registration_form">
                                <div class="input-group input-group-lg">

                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" placeholder="Имя пользователя" aria-describedby="basic-addon1">
                                </div>
                                <br>
                                <div class="input-group input-group-lg">
                                    <span class="input-group-addon" id="basic-addon2"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" placeholder="Пароль" aria-describedby="basic-addon1">
                                </div>
                                    <br>
                                    <div class="input-group input-group-lg full-width-group clearfix">
                                        <div class="row">
                                            <div class="col-xs-9">
                                                <input type="submit" class="btn btn-default btn-lg" value="Войти">
                                                <div class="additional-access--wrapper" >
                                                    <div class="additional-access" id="additionalAccessButton">
                                                        дополнительно
                                                    </div>
                                                    <div class="hidden" id="additionalAccessLinks" >
                                                        <a href="admin/index.php">Как администратор</a> /
                                                        <a href="admin/manager/index.php">Как менеджер</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-3">
                                                <a href="registration.php" class="fr registration-link">Зарегистрироваться</a>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                           <div class="row">
                               <div class="col-md-6  ">
                                    <div class="clearfix">

                                    </div>
                               </div>
                           </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>





</section>
<footer>
<?php include_once( './include/footer.php' ); ?>