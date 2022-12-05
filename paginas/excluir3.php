
    <?php
      $ID = $_POST['ID'];

			$mysqli = new mysqli('localhost', 'root', '', 'story_geek');

      $sql = " DELETE FROM cadastro_produto where id = $ID";
      $result = $mysqli -> query($sql);

      echo "<script>alert('Dados Excluidos com Sucesso!!!')</script> ";
      echo"<script>window.location.href='../index.html'</script>;";
		
    ?>
