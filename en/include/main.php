<?php
function current_url() {
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')  {
        $url = "https://";   
    }
    else {
        $url = "http://";
    }

    $url .= $_SERVER['HTTP_HOST'];

    if($url == 'http://localhost') {
        $url .= '/synerry-html/';
    }
    else {
        $url .= '/';
    }

    return $url;
}

define("DOMAIN", current_url(), true);
?>