<?php 
include "../model/carrosAVendaClass.php";
/**
 * 
 */
class Controller
{
	
	public function __construct()
	{
		# code...
		$this->carro = new CarrosAVenda();
		$this->carro->getQuantidadeDeCarros();
		$this->carro->setIdDoCarro($_GET['id']);
		$this->carro->showCarro();
	}

} 

$controller = new Controller();

?>