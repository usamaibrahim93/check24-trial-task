<?php

Class Index
{
    public function execute(){
        echo getTemplate('header');
        // echo 'HomePage';
    }


}

$controller = new Index();
$controller->execute();
