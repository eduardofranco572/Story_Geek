<?php	

	$nome = $_POST['nome'];	
	$modelo = $_POST['modelo'];	
	$valor = $_POST['valor'];		
	
	
	if($nome == "" or $modelo == "" or $valor == "")
	{
		echo "Campos Obrigatórios em branco, preencha corretamente ....<br/>";
		echo "<p><a href='cadastro_produtos.html'>Cadastro</a></p>";
	}
	else{
		$_UP['pasta'] = '../upload/produto/';
		$nome_final = "a".time().".jpg";
		$nome_final2 = "b".time().".jpg";
		$nome_final3 = "c".time().".jpg";
		$nome_final4 = "d".time().".jpg";
		$nome_final5 = "e".time().".jpg";

		move_uploaded_file($_FILES['img1']['tmp_name'], $_UP['pasta'] . $nome_final);
		move_uploaded_file($_FILES['img2']['tmp_name'], $_UP['pasta'] . $nome_final2);
		move_uploaded_file($_FILES['img3']['tmp_name'], $_UP['pasta'] . $nome_final3);
		move_uploaded_file($_FILES['img4']['tmp_name'], $_UP['pasta'] . $nome_final4);
		move_uploaded_file($_FILES['img5']['tmp_name'], $_UP['pasta'] . $nome_final5);

		$mysql = new mysqli('localhost', 'root', '', 'story_geek');
		$sql = "INSERT INTO `cadastro_produto` (`nomeproduto`, `valor`, `imagem1`, `imagem2`, `imagem3`, `imagem4`, `imagem5`, `modelo`) 
		VALUES 
		('$nome', '$valor', '$nome_final','$nome_final2','$nome_final3','$nome_final4','$nome_final5', '$modelo');";
		$result = $mysql->query($sql);
		echo"<script>alert('Cadastrado com sucesso')</script>";
		echo"<script>window.location.href='../index.html'</script>;";
	}
				
?>