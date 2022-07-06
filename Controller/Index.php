<?php

Class Index
{
    protected $blog; 

    const LIMIT = 12;

    public function __construct(\Model\Blog $blog)
    {
        $this->blog = $blog;
    }    

    public function execute(){
        echo getHeader('Home');
        echo getTemplate('home-content', [
            'blogs' => $this->getBlogData()
        ]);
        echo getFooter();
    }

    /**
     * Get Blogs
     *
     * @return array|bool
     */
    private function getBlogData(){
        $data = $this->blog->getBlogs( self::LIMIT );
        if( count($data) > 0 ){
            return $data;
        }

        return false;
    }


}

$db = new Database();
$blog = new Model\Blog( $db );
$controller = new Index( $blog );
$controller->execute();
