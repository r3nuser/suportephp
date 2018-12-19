<?php

class Aluno{

	// atributos

	public $id;
	public $nome;
	public $email;
	public $curso;

	// getters

	public function getId(){
		return $this->id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getCurso(){
		return $this->curso;
	}

	// setters

	public function setId($i){
		$this->id = $i;
	}

	public function setNome($n){
		$this->nome = $n;
	}

	public function setEmail($e){
		$this->email = $e;
	}

	public function setCurso($c){
		$this->curso = $c;
	}

}

?>
