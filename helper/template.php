<?php

function getTemplate($template = '', $data = []){
    $html = '';
    if( $template == '' ){
        return $html;
    }

    ob_start();	
        include_once( ABSPATH . 'View/' . $template . '.php' );
        $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

function getHeader($title){
    return getTemplate('header', ['title' => $title]);
}

function getFooter(){
    return getTemplate('footer');
}

function getBlogUrl($slug){
    return homeUrl() . '/blog/' . $slug;
}

function homeUrl(){
    if(isset($_SERVER['HTTPS'])){
        $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
    }
    else{
        $protocol = 'http';
    }
    return $protocol . "://" . $_SERVER['HTTP_HOST'] ;
}

function getBlogExcerpt($content, $postfix = '...'){
    return substr($content, 0, 1000) . $postfix;
}