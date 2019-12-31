<?php
/*
 * Transfer Object
 * Classe contendo os dados do contato
 * 
 */
class Contato {
	
	private $id;
	private $nome;
	private $email;
	private $telefone;
	private $celular;
	private $foto;
	private $descricao;
	
	public function setId($id) {
		$this->id = $id;
	}
	public function getId() {
		return $this->id;
	}
	
	public function setNome($nome) {
		$this->nome = $nome;
	}
	public function getNome() {
		return $this->nome;
	}
	
	public function setEmail($email) {
		$this->email = $email;
	}
	public function getEmail() {
		return $this->email;
	}
	
	public function setTelefone($telefone) {
		$this->telefone = $telefone;
	}
	public function getTelefone() {
		return $this->telefone;
	}
	
	public function setCelular($celular) {
		$this->celular = $celular;
	}
	public function getCelular() {
		return $this->celular;
	}
	
	public function setFoto($foto) {
		$this->foto = $foto;
	}
	public function getFoto() {
		return $this->foto;
	}
	
	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}
	public function  getDescricao() {
		return $this->descricao;
	}
}
?>