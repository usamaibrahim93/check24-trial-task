<?php

namespace Model;

class Blog
{

    protected $db;
    
	const TABLE_BLOG = 'blog';

    public function __construct(\Database $db)
    {
        $this->db = $db;
    }


	public function getBlogs( $limit )  {

		$sql = "SELECT * FROM ". self::TABLE_BLOG ." ORDER BY created DESC LIMIT " . $limit;

		try {
			$data = $this->db->fetch($sql);
			$blogs = array();
	
			while ($row = $data->fetch()) {
				$blogs[] =
					Array ( 'id' => $row["id"], 'slug' => $row["slug"], 'title' => $row["title"], 'content' => $row["content"], 'thumbnail' => $row["thumbnail"], 'created' => date('Y-m-d H:i:s', strtotime($row["created"])) );
			}	

			return $blogs;
		} catch (\Exception $e) {
			throw new \Exception ($e->getMessage());
		}

	}

	public function getBlogBySlug( $slug )  {

		$sql = "SELECT * FROM ". self::TABLE_BLOG ." WHERE slug = '". $slug ."'";

		try {
			$data = $this->db->fetch($sql);
			$blog = array();
	
			while ($row = $data->fetch()) {
				$blog[] =
					Array ( 'id' => $row["id"], 'slug' => $row["slug"], 'title' => $row["title"], 'content' => $row["content"], 'thumbnail' => $row["thumbnail"], 'created' => date('Y-m-d H:i:s', strtotime($row["created"])) );
			}	

			return $blog;
		} catch (\Exception $e) {
			throw new \Exception ($e->getMessage());
		}

	}	


}
