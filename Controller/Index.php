<?php

Class Index
{
    public function execute(){
        echo getHeader('Home');
        echo getFooter();
        // echo 'HomePage';
    }


}

$controller = new Index();
$controller->execute();
