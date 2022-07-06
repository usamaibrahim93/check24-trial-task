<?php

Class Blog
{
    public function execute(){
        echo 'Blog';
    }
}

$controller = new Blog();
$controller->execute();