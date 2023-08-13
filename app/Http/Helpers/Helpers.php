<?php



function arrival_time($rideCountDown){


    $dateTime = strtotime($rideCountDown['month'].' '.$rideCountDown['day'].','. $rideCountDown['year'].' '.$rideCountDown['arrival_hour'].':'.$rideCountDown['arrival_minuite'].':'.$rideCountDown['second']);
    return date("F d, Y H:i:s", $dateTime);

}

function depature_time($rideCountDown){


    $dateTime = strtotime($rideCountDown['month'].' '.$rideCountDown['day'].','. $rideCountDown['year'].' '.$rideCountDown['depature_hour'].':'.$rideCountDown['depature_minuite'].':'.$rideCountDown['second']);
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

function otp($length = 5){
    $characters = '1234567899876543216574839023456765432';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;

}

function months(){
    $month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
}


function custom_path($path){

    return '/home/sachqoep/public_html/'.$path;
}

// in production change public_path to custom_path function created above

function rideImageProcessing($request){


            $name = 'property_of_'.env('APP_NAME').'_-_'.time();

            if (!file_exists(public_path('assets/storage/images'))){
                mkdir(public_path('assets/storage/images', 0777, true));
            };

            $NewimageName = 'assets/storage/images/'.$name.'_'.getId(30).'.'.$request->extension();
            $request->move(public_path('assets/storage/images'),$NewimageName);
            return $NewimageName;

}
