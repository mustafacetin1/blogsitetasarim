<?php
function siteUrl($url=false){
    return  URL .'/'.$url;
}

function publicUrl($url=false){

    return URL . '/public/' . setting('theme') . '/' . $url;
}

