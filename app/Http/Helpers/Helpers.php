<?php

function countDownTimer($rideCountDown){

// dd($rideCountDown);
    $dateTime = strtotime($rideCountDown['month'].' '.$rideCountDown['day'].','. $rideCountDown['year'].' '.$rideCountDown['eta_hour'].':'.$rideCountDown['eta_minuite'].':'.$rideCountDown['eta_second']);

    return date("F d, Y H:i:s", $dateTime);

}

function getId($length = 12)
{
    $characters = 'abcdefghijklmnopqrstuvwxyz123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function userId($length = 6){
    $characters = 'abcdefghijklmnopqrstuvwxyz12345678998765432165748390';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;

}
