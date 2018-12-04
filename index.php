<?php 

class Person{
	private $prenom;
	private $nom;
	public function setPrenom($name){
		$this->prenom = $name;
	}
	public function getPrenom($name){
		
	}
}


$eric = new Person;
$eric->setPrenom('eric');
var_dump($eric);

 ?>