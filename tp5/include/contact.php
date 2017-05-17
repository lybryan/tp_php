<?php
class personne {
	public $id=null;
	public $nom;
	public $prenom;

	public function __construct($id=null,$nom="",$prenom=""){
				$this->id = $id;
				$this->nom = $nom;
				$this->prenom = $prenom;
	}
	public function __toString(){
        return $this->personne;
	}
}

class contact extends personne{
	public $mail;
	
	public function __construct($id=null,$nom="",$prenom="",$email=""){
		parent::__construct($id,$nom,$prenom);
		$this->email = $email;
	}

	public function __toString(){
	return $this->contact;
	}
	public function save(){
		$db = Database::getInstance();
		if ($this->id == null){
			// A COMPLETER
			// id null => INSERTION
		}else{
			// A COMPLETER
			// UPDATE
		}
	}
	public static function getList(){
		$db = Database::getInstance();
		// A COMPETER
	}

	public static function getFromId($id){
		$db = Database::getInstance();
		//  A COMPLETER
	}
}

class Database {
	static protected $_instance = null;
	protected $_db;

	static public function getInstance() {
		if (self::$_instance == null) 
			self::$_instance=new Database();
		return self::$_instance;
	}
	public function lastId(){
		return $this->_db->lastInsertId();
	}
	public function query($sql){
		return $this->_db -> query($sql);
	}
	public function prepare($sql){
		return $this->_db -> prepare($sql);
	}
	protected function __construct() {
		try{
			// A COMPETER AVEC VOS IDENTIFIANTS
			$this->_db = new PDO("mysql:host=localhost;charset=UTF8;dbname=","user","mdp");
		}
		catch(Exception $e){
			die($e->getMessage());
		}
	}
}
?>
