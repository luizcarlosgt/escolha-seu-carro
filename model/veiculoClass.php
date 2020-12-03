<?php 
/**
  * 
  */
include "interfacesClass.php";

 class Veiculo implements Veiculos
 {
 	private $nome;
 	private $modelo;
 	private $quantidadeDeRodas;
 	private $cor;
 	private $foto;
 	private $id;

 
 	public function setNome($value){
 		$this->nome = $value;
 	}

 	public function getNome(){
 		return $this->nome;
 	}

 	public function setCor($value){
 		$this->cor = $value;
 	}

 	public function getCor(){
 		return $this->cor;
 	}

 	 public function setFoto($value){
 		$this->foto = $value;
 	}

 	public function getFoto(){
 		return $this->foto;
 	}

	public function setId($value){
 		$this->id = $value;
 	}

 	public function getId(){
 		return $this->id;
 	}
 } 



class Carro extends Veiculo
{
	public $tipo;

	function __Construct(){
		$this->quantidadeDeRodas = 4;
		$this->tipo = "Carro";
	}


}


class Moto extends Veiculo
{
	public $tipo;

	function __Construct(){
		$this->quantidadeDeRodas = 4;
		$this->tipo = "Moto";
	}

}
?>