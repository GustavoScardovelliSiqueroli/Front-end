<?php
	// recebe os parâmetros do formulário
	@$codigo = $_POST["codigo"];
	@$descricao = $_POST["descricao"];
	@$tipo = $_POST["tipo"];
	@$marca = $_POST["marca"];
	@$modelo = $_POST["modelo"];
	@$fabricante = $_POST["fabricante"];
	@$estoque = $_POST["estoque"];
	@$estoque_minimo = $_POST["estoque_minimo"];
	@$preco_compra = $_POST["preco_compra"];
	@$margem_lucro = $_POST["margem_lucro"];
	
	
	//conecta no banco de dados
	$link = mysqli_connect("127.0.0.1","root","","fatec");
	
	// insere registro no banco de dados
	$sql = "INSERT INTO produtos(codigo, descricao, tipo, marca, modelo, fabricante, estoque, estoque_minimo, preco_compra, margem_lucro) 
			VALUES('$codigo', '$descricao', '$tipo', '$marca', '$modelo', '$fabricante', '$estoque', '$estoque_minimo', '$preco_compra', '$margem_lucro')";
	$status = mysqli_query($link, $sql);
	
	//fecha conexão com banco de dados
	mysqli_close($link);
	if($status==1) 
		echo "Sucesso ao inserir registro!";
	else if($status==0) 
			echo "Erro ao inserir!"; 
?>