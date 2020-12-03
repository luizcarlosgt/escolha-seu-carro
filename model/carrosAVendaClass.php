<?php 
include "veiculoClass.php";
/**
 * 
 */
class CarrosAVenda
{
	private $idDoCarro;
	private $veiculo;
	private $carros;

	public function __construct()
	{
		# code...
	
	}

	public function showCarro(){
		self::listaDeCarros();

		foreach ($this->carros as $carro) {
			# code...
			if($this->idDoCarro == $carro->getId()){
				echo "<div id='carro'>";
				echo "<div id=infos>";
				echo $carro->getNome();
				echo "<br>";
				echo $carro->getCor();
				echo "</div>";
				echo "<br><img width=350px height=250px src='".$carro->getFoto()."'></img>";
				echo "</div>";
			}
		}
	}

	public function listaDeCarros(){
		return $this->carros = new EstoqueDeVeiculos();
		
	}

	public function setIdDoCarro($value){
		$this->idDoCarro = $value;
	}

	public function getIdDoCarro(){
		return $this->idDoCarro = $value;
	}

	public function getQuantidadeDeCarros(){
		$i = 0;
		self::listaDeCarros();
		
		foreach ($this->carros as $carro) {
			# code...
			$i++;
		}
		return $i;
	}

}

/**
 * 
 */
class EstoqueDeVeiculos
{

	function __construct()
	{
		# code...
		self::VeiculosEmEstoque();

	}

	public function VeiculosEmEstoque(){
			$this->carro = new Carro();
			$this->carro->setNome("Mustang GT");
			$this->carro->setCor("Vermelho");
			$this->carro->setFoto("../view/img/carro1.jpg");
			$this->carro->setId(1);

			$this->carro2 = new Carro();
			$this->carro2->setNome("Camaro");
			$this->carro2->setCor("Azul");
			$this->carro2->setFoto("../view/img/carro2.jpg");
			$this->carro2->setId(2);

			$this->carro3 = new Carro();
			$this->carro3->setNome("Fusca");
			$this->carro3->setCor("Branco");
			$this->carro3->setFoto("../view/img/carro3.jpg");
			$this->carro3->setId(3);

			$this->carro4 = new Moto();
			$this->carro4->setNome("CG 500");
			$this->carro4->setCor("Preta");
			$this->carro4->setFoto("../view/img/carro1.jpg");
			$this->carro4->setId(4);

	}

}



 ?>