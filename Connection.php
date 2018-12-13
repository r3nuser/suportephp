<?php

class Connection{

	public $user;
	public $pass;
	public $host;
	public $db;

	public $con;

	public function getUser(){ return $this->user; }
	public function getPass(){ return $this->pass; }
	public function getHost(){ return $this->host; }
	public function getDb(){ return $this->db; }

	public function getCon(){ return $this->con; }

	public function setUser( $u ){ $this->user = $u; }
	public function setPass( $p ){ $this->pass = $p; }
	public function setHost( $h ){ $this->host = $h; }
	public function setDb( $d ){ $this->db = $d; }
	public function setCon( $c ){ $this->con = $c; }

	public function openConnection(){
		try{
			$this->con = new mysqli($this->host, $this->user, $this->pass, $this->db);
			mysqli_query($this->con, "SET NAMES 'utf8'");
		} catch (Exception $e){
			echo $e->getMessage();
		}
	}

	public function closeConnection(){
		try{
			mysqli_close($this->con);
		} catch (Exception $e){
			echo $e->getMessage();
		}
	}

	public function Connection( $u, $p, $h, $d ){
		$this->setUser($u);
		$this->setPass($p);
		$this->setHost($h);
		$this->setDb($d);

		$this->openConnection();
	}

}

?>
