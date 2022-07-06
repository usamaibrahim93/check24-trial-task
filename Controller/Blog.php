<?php

namespace Controller;

Class Blog
{
    protected $blog;

    protected $slug;

    public function __construct(\Model\Blog $blog, $slug)
    {
        $this->blog = $blog;
        $this->slug = $slug;
    }  

    public function execute(){
      print_r($this->getBlogData());
    }

    /**
     * Get blog by slug
     *
     * @return array|bool
     */
    private function getBlogData(){
        $data = $this->blog->getBlogBySlug( $this->slug );
        if( count($data) > 0 ){
            return $data;
        }

        return false;
    }
}

$db = new \Database();
$blog = new \Model\Blog( $db );
$controller = new \Controller\Blog($blog, $slug);
$controller->execute();