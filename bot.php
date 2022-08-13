<?
$name= $_POST["name"];
$phone= $_POST["phone"];
$cars= $_POST["cars"];


if ($_SERVER['REQUEST_METHOD']=="POST") {
    if (isset($name)) {
        if (!empty($name)) {
            $name= strip_tags($name);
            $nameTitle = "Имя: ";
        }
    }
    if (isset($phone)) {
        if (!empty($phone)) {
            $phone= strip_tags($phone);
            $phoneTitle = "Телефон: ";
        }
    }
    if (isset($cars)) {
        if (!empty($cars)) {
            $cars= strip_tags($cars);
            $carsTitle = "Машина: ";
        }
    }
    $arr = array(
        $nameTitle => $name,
        $phoneTitle => $phone,
        $carsTitle => $cars,
    );
    
    $text= "";
    foreach ($arr as $key => $value) {
        $text .="<b>".$key."</b>".$value."%0A";
    }

    $token= "5575788934:AAHFURwxrjM8v-ZxdCnTZAJps5awjp3DZkk";

    $chat_id = "-643171349";

    $send = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}","r");

    if ($send) {
    header("Location: ./index.html"); 
    }
} 