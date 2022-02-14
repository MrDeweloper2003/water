<?php

/*@Sayfer_Uz - @Bot_YaratishUz*/

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$anb8 = file_get_contents('http://obhavo.uz/andijan'); $ex1=explode("\n",$anb8);
$obh = file_get_contents('https://fa.weather.town/uz/forecast/uzbekistan/andijan/andijon/');
$ex = explode('title="Havo harorati"',$obh);
$exi = explode('right-container',$ex[1]);
$ubk = str_replace($exi[1],' ',$ex[1]);
$ubk1 = str_replace('dir="ltr">',' ',$ubk);
$ubk2 = str_replace('<div class="informer-main-page__container fleft right-container',' ',$ubk1);
$ubk3 = str_replace('&deg;C</div>',' ',$ubk2);
$ubk4 = str_replace('</div>',' ',$ubk3);
$obhavo = trim("$ubk4");
$time=date("H:i",strtotime("5 hour"));
$kun=date("d",strtotime("5 hour"));
$input = ["Bu yerga ozim haqimda yozishim kkmi","Salom"];
$rand=array_rand($input);
$text="$input[$rand]";
$nik = ["☆Cody☆","печатает...","❤️Cody❤️"];
$nikrand=array_rand($nik);
$niktxt="$nik[$nikrand]";
$MadelineProto->account->updateProfile(['first_name'=>"$niktxt|$time",'about'=>"📆$kun</>
⏰$time</>⛅️ $obhavo | $text"]);
$MadelineProto->account->updateStatus(['offline' => false, ]);
?>