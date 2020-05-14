<?php

function langUrl($locale) {

    //get current language
    $currentLang = request()->segment(1);
    

    if ( count(request()->segments()) == 1) {
        $langUrl = str_replace("/$currentLang", "/$locale/", request()->url());        
    } else {
        $langUrl = str_replace("/$currentLang/", "/$locale/", request()->url());
    }    

    return $langUrl;    
}