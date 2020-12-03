	var id = 0;

	// Pegando o HTTP object 
	function getHTTPObject(){
				var httpObject;
				
					 if (window.XMLHttpRequest)
						{
						var httpObject = new XMLHttpRequest();  //Outros navegadores
			            return httpObject;
						}
						else {
						alert('Seu navegador não suporta Ajax.');
						return null;
						}
	               }
					
	// Mudando o valor do campo saida	
    function setOutput(){

					   
					 if(httpObject.readyState == 1)
					 {
					  document.getElementById('ReturnLightBox').innerHTML = "<div id='carregando'><h1>carregando...</h1><div>";
					 }
					 if (httpObject.readyState == 4)
					 {
				       document.getElementById('carro').innerHTML = httpObject.responseText;
					 }
			
                  }
	    
		
				  

    // Implementando a função que envia os dados digitados no primeiro campo para o PHP
    function Press(value){
	              httpObject=getHTTPObject();
	             					
					if (httpObject != null && value == 1 && id >= 0 && id < 4)
					{	 
						id ++;	
						httpObject.open("GET","http://localhost/EscolhaOCarro/controller/Controller.php?id="+id,true);
						httpObject.send(null);
						httpObject.onreadystatechange = setOutput;
						
						
					}

					if (httpObject != null && value == 0 && id > 1 && id <= 4)
					{	 	
						id --;
						httpObject.open("GET","http://localhost/EscolhaOCarro/controller/Controller.php?id="+id,true);
						httpObject.send(null);
						httpObject.onreadystatechange = setOutput;
			
					}
					
			}