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
<!--    <script src="http://code.jivosite.com/widget/Gm8J010U0z" async></script>-->
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="a260b8d9-0d22-4be6-b727-69c208065c8c";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

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
                <td style="text-align:center;"><label>Выберите платежную систему</label><label></label></td>
            </tr>
        </table>
    </div>
    <div class="container-fluid">
        <div class="creditCardForm">
                        <div class="payment">
                    <div class="form-group" id="pay-now">

                    </div>

            </div>
        </div>
        <div>
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