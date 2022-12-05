
    <?php  
            $ID = $_POST['ID'];	
            $nome = $_POST['nome'];	
            $modelo = $_POST['modelo'];	
            $valor = $_POST['valor'];		
            
            if($nome == "" or $modelo == "" or $valor == "")
            {
              echo "Campos Obrigatórios em branco, preencha corretamente ....<br/>";
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
          


			      $mysqli = new mysqli('localhost', 'root', '', 'story_geek');
            $sql ="UPDATE `cadastro_produto` SET `nomeproduto` = '$nome',`valor` = '$valor', 
            `imagem1` = '$nome_final', `imagem2` = '$nome_final2', `imagem3` = '$nome_final3',
            `imagem4` = '$nome_final4',`imagem5` = '$nome_final5', `modelo` = '$modelo' WHERE id = '$ID'";
            $result = $mysqli -> query($sql);

            echo"<script>alert(Dados Alterados com Sucesso!!!)</script>";
            echo"<script>window.location.href='../index.html'</script>;";
            }
		
    ?>
