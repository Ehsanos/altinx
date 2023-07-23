<?php


use App\Models\Lang;
use App\Models\Setting;

function lang($name){
    $lang= Lang::where('key',$name)->first();
    if($lang){
        return $lang->{app()->getLocale()};
    }
    return  "";
}

