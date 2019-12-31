<?php
/**
 * DAO Data Access Object para contato
 */
class ContatoDAO {
	
	private $pdo; // PDO = PHP Data Object
	private $contatos = array(); // Lista de Contatos
	
	/**
	 * Construtor da classe ContatoDAO
	 */
	public function __construct() {
		//O ideal seria chamar um ConnectionFactory
		//PDO = PHP Data Object, equivalente ao JDBC do java
		$this->pdo = new PDO("mysql:host=mysql-database;dbname=minicursophp_contatos", "minicursophp", "minicursophp");
	}
	
	/**
	 * Método para realizar o cadastro de um contato
	 * @param $contato
	 * @return Boolean
	 */
	public function insert(Contato $contato) {
		$pdo  = $this->pdo;
		
		$stmt = $pdo->prepare('
			INSERT INTO contato (nome, email, telefone, celular, foto, descricao) 
			VALUES (?, ?, ?, ?, ?, ?)
		');
		
		$stmt->bindParam(1, $contato->getNome());
		$stmt->bindParam(2, $contato->getEmail());
		$stmt->bindParam(3, $contato->getTelefone());
		$stmt->bindParam(4, $contato->getCelular());
		$stmt->bindParam(5, $contato->getFoto());
		$stmt->bindParam(6, $contato->getDescricao());
		
		if($stmt->execute()) {
			return true;
		}
		
		return false;
	}
	
	/**
	 * Método para atualizar os dados de um contato
	 * @param $contato
	 * @return Boolean
	 */
	public function update(Contato $contato) {
		$pdo  = $this->pdo;
		
		$stmt = $pdo->prepare('
			UPDATE contato SET 
				nome = ?,
				email = ?,
				telefone = ?,
				celular = ?,
				foto = ?,
				descricao = ?
			WHERE id = ?
		');
		
		$stmt->bindParam(1, $contato->getNome());
		$stmt->bindParam(2, $contato->getEmail());
		$stmt->bindParam(3, $contato->getTelefone());
		$stmt->bindParam(4, $contato->getCelular());
		$stmt->bindParam(5, $contato->getFoto());
		$stmt->bindParam(6, $contato->getDescricao());
		$stmt->bindParam(7, $contato->getId());
		
		if($stmt->execute()) {
			return true;
		}
		
		return false;
	}
	
	/**
	 * Método para remover um contato do banco
	 * @param $id
	 * @return unknown_type
	 */
	public function delete($id) {
		$id = (int) $id;
		if(!empty($id) && is_integer($id)) {
			$pdo  = $this->pdo;
			$stmt = $pdo->prepare('DELETE FROM contato WHERE id = ?');
			$stmt->bindParam(1, $id);
			if($stmt->execute()) {
				return true;
			}
		}
		return false;
	}
	
	/**
	 * Retorna um contato pelo ID
	 * @param $id
	 * @return Contato
	 */
	public function getById($id) {
		$id = (int) $id;
		if(!empty($id) && is_integer($id)) {
			$pdo  = $this->pdo;
			
			$stmt = $pdo->prepare('
				SELECT
					id, nome, email, telefone, celular, foto, descricao
				FROM
					contato
				WHERE
					id = ? 
			');
			
			$stmt->bindParam(1, $id);
			
			if($stmt->execute()) {
				$row = $stmt->fetch();
				$contato = $this->row2contatoTO($row);
				return $contato;
			}
		}
		return false;
	}
	
	/**
 	 * Retorna uma lista de contatos
 	 * @return Array $contatos
	 */
	public function getAll(Contato $filtro) {
		$pdo  = $this->pdo;
		
		$stmt = $pdo->prepare('
			SELECT
				id, nome, email, telefone, celular, foto, descricao
			FROM
				contato
		');
		
		if($stmt->execute()) {
			while($row = $stmt->fetch()) {
				$this->contatos[] = $this->row2contatoTO($row);
			}
			return $this->contatos;
		}
		
		return NULL;
	}
	
	
	/**
	 * Cria um objeto Contato a partir do resultset
	 * @param $row
	 * @return Contato contato
	 */
	private function row2contatoTO($row) {
		$contato = new Contato();
		
		$contato->setId($row['id']);
		$contato->setNome(utf8_encode($row['nome']));
		$contato->setEmail($row['email']);
		$contato->setTelefone($row['telefone']);
		$contato->setCelular($row['celular']);
		$contato->setFoto($row['foto']);
		$contato->setDescricao(utf8_encode($row['descricao']));
		
		return $contato;
	}
}
?>