<?php 

class Person{
	private $prenom;
	private $nom;
	private $parole;
	private $monloup;
	public function setPrenom($name){
		$this->prenom = $name;
	}
	public function getPrenom(){
		return $this->prenom;
	}
	public function speak($speak){
		return ($this->parole = $speak).',je suis '.$this->prenom.'mon loup se nomme '.$this->monloup->getNom();
	}
	public function __construct($nom, $prenom){
		$this->nom = $nom;
		$this->prenom = $prenom;
	}
	public function buy($monloup){
		$this->monloup = $monloup;
	}
}
class loup{
	private $NOM1;

	public function setNom($NOM2){
		$this->NOM1 = $NOM2;
	}
	public function getNom(){
		return $this->NOM1;
	}
	public function __construct($NOM1){
	$this->NOM1 = $NOM1; 

}
}
$gerald = new loup('gerald');
//$gerald->setNOM('gerald');
//var_dump($gerald->getNom());
var_dump($gerald);

$eric = new Person("Gigondan", "Eric");
$eric->buy($gerald);
//$eric->setPrenom('eric');
var_dump($eric);
//var_dump($eric->getPrenom());
var_dump($eric->speak('bonjour je suis jeune'));
 ?>