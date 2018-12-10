<?php
class Aluno{

	// atributos

	public $nome;
	public $email;
	public $curso;

	// getters

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
