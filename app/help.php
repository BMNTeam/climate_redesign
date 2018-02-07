<?php
$title       = 'АИС Агроклимат | Климатические особенности края и биоклиматический потенциал';
$heading     = 'Помошь';
$sub_heading = 'Оставьте нам ваш вопрос';


include_once( './include/header.php' );
?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<section class="content">

    <div class="content-container ">
        <div class="container"
            <div class="row">
                <div class="col-md-12">

                    <div class="block-container clearfix last-container">
                        <div class="container-heading content-header-color">
                            <h4></h4>
                        </div>
                        <div class="container-elements clearfix">

                            <div class="col-md-12">
                               <div class="economy-content--wrapper">
                                   <h2>Укажите ваш E-mail и вопрос</h2>
                                   <br>
                                   <form action="include/submit_email.php" method="POST" id="questions_form" name="questions_form">
                                       <div class="row">

                                           <div class="col-md-6">
                                               <div class="form-group">
                                                   <label for="" class="required-field">Имя</label>
                                                   <input type="text" class="form-control" name="recipient_name" id="recipient_name" placeholder="например: Виктория Сергеевна" >
                                               </div>
                                               <div class="form-group">
                                                   <label for="recipient_email" class="important-field">E-mail</label>
                                                   <input type="email" name="recipient_email" id="recipient_email" placeholder="например: test@gmail.com" class="form-control" >
                                               </div>

                                               <div class="form-group">
                                                   <div class="g-recaptcha" data-sitekey="6LcIUecSAAAAALvtutL3NjjMQ0UVzoNjQgizuOCH"></div>
                                               </div>
                                           </div>
                                           <div class="col-md-6">
                                               <div class="form-group">
                                                   <label for="recipient_question" class="important-fiend">Вопрос:</label>
                                                   <textarea name="recipient_question" id="recipient_question" cols="30" rows="10" class="form-control"  placeholder=""></textarea>
                                               </div>
                                               <h5 class="text-success hidden" id="question_response">Спасибо за ваш вопрос, мы скоро свяжемся с вами</h5>
                                           </div>
                                           <div class="col-md-12">
                                               <div class="form-group">
                                                   <input type="submit" value="Отправить" class="btn btn-success btn-lg">
                                               </div>
                                           </div>
                                       </div>
                                   </form>


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
