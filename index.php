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
	public function __construct(string $nom, $prenom){
		$this->nom = $nom;
		$this->prenom = $prenom;
	}
	public function buy($monloup){
		$this->monloup = $monloup;
		$this->monloup->proprio($this->nom);
	}
}
class loup{
	private $NOM1;
	private $nomproprio;
	private $parole2;

	public function setNom($NOM2){
		$this->NOM1 = $NOM2;
	}
	public function getNom(){
		return $this->NOM1;
	}
	public function __construct(string $NOM1){
	$this->NOM1 = $NOM1; 

}
	public function proprio($nomproprio){
		$this->nomproprio = $nomproprio;
	}
	public function parler(){
		return 'mon proprio est '.$this->nomproprio;
	}
}
$gerald = new loup('gerald');
//$gerald->setNOM('gerald');
//var_dump($gerald->getNom());

$eric = new Person("Gigondan", "Eric");
$eric->buy($gerald);
//$eric->setPrenom('eric');
var_dump($eric);
//var_dump($eric->getPrenom());
var_dump($eric->speak('bonjour je suis jeune'));

var_dump($gerald);
var_dump($gerald->parler());
 ?>