<?php

Class Database{

	private $host;

	private $db;

	private $user;

	private $pass;

	private $options;

	protected $con;

	const ERR_MSG = 'There was a problem connecting to MySQL database ';

    public function __construct()
    {

        $this->host = $_ENV['MYSQL_HOST'];
        $this->db = $_ENV['MYSQL_DB'];
		$this->server = "mysql:host=" . $this->host . ";dbname=" . $this->db;
        $this->user = $_ENV['MYSQL_USER'];
        $this->pass = $_ENV['MYSQL_PASS'];

    }

	public function openConnection(){
		try
		{
			$this->con = new PDO( $this->server, $this->user,$this->pass );
			$this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->con->query( "SET NAMES 'utf8mb4'" );

			return $this->con;
		}
		catch (PDOException $e)
		{
			throw new Exception( self::ERR_MSG . $e->getMessage() );
		}		
	}

	public function fetch( $query ){
		try {
			$this->openConnection();
			$qry = $this->con->prepare($query);
			$qry->execute();
		}
		catch (PDOException $e) {
			throw new Exception($e->getMessage());
		}

		return $qry;
	}

	public function execute( $query ){
		try {
			$this->openConnection();
			$this->con->exec( $query );
		}
		catch (PDOException $e) {
			throw new Exception($e->getMessage());
		}	
	}
}