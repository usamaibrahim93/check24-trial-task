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
    return HOME_URL . '/blog/' . $slug;
}