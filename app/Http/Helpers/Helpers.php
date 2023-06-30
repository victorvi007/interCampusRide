<?php

function countDownTimer($rideCountDown){

// dd($rideCountDown);
    $dateTime = strtotime($rideCountDown['month'].' '.$rideCountDown['day'].','. $rideCountDown['year'].' '.$rideCountDown['eta_hour'].':'.$rideCountDown['eta_minuite'].':'.$rideCountDown['eta_second']);

    return date("F d, Y H:i:s", $dateTime);

}
