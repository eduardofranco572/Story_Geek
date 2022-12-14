<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Styles/style.css" rel="stylesheet" type="text/css" />
    <link href="../Styles/menu.css" rel="stylesheet" type="text/css" />
    <link href="../Styles/submenu.css" rel="stylesheet" type="text/css" />
    <link href="../Styles/final.css" rel="stylesheet" type="text/css" />
    <link href="../Styles/roupas.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>StoryGeek</title>
    <style>

      .intp{
        width: 24rem;
        height: 2.5rem;
        border-radius: 0.5rem;
        border: 1px solid;
      }
      input {
        width: 24rem;
      }
      .nome{
        margin-left: 0;
      }

      .contato{
        background-image: url(https://rd1.com.br/wp-content/uploads/2021/11/20211122-red-background-10.jpg);
        width: 100%;
        background-repeat: no-repeat;
        background-size: 100%;
        height: 240px;
      }
      a {
        color: #24255c;
        text-decoration: none;
      }
      a:visited {
        color: #202153;
      }
      .pesquisa2 {
        margin-left: 0;
        margin-top: 1rem;
      }
      .contado-dentro{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }
      .botaoPesquisa button{
        border-radius: 12px;
        border-radius: 0.5rem;
        background-color: black;
        color: white;
        width: 8rem;
        color: white;
        margin-top: 1rem;
      }
      .botaoPesquisa{
        display: flex;
        justify-content: center;
      }
      .final{
        display: flex;
        justify-content: center;
        width: 100%;
      }  
      .banner-celbit{
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        cursor: pointer;
      }
      .banner-celbit img{
        max-width: 100%;
        -moz-transition: all 0.3s;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
      }
      .banner-celbit:hover img{
        -moz-transform: scale(1.1);
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
      }
      .menu-tudo{
        display: flex;
        align-items: center;
        justify-content: center;
        justify-content: space-between;
        padding: 0rem 16rem 0rem 16rem;
      }
      .imgEntrar {
        height: 1.5rem;
        width: 1.5rem;
      }

      .nomes-input{
        font-size: 1rem;
      }
      .botao-cadastrar-s{
        display: flex;
        justify-content: center;
      }
      .formdoido{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .contenerimg{
        display: flex;
        justify-content: center;
      }
      .contenerimg img{
        width: 20rem;
        height: 14rem;
        border-radius: 1rem;
      }
      .form-dentro{
        display: flex;
        align-items: center;
        flex-direction: column;
      }
      .seta2 {
        margin-left: 1040px;
        margin-top: -35px;
      }
      .inputcep{
        width: 12rem;
      }
      .imgprincipal {
        margin-left: 0;
        margin-top: 0;
      }
      .parte1{
        display: flex;
        justify-content: center;
      }
      .flex{
        display: flex;
      }
      .parte2{
        display: flex;
      }
      .texto-lado{
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-left: 4rem;
        margin-top: 1rem;
      }
      .texttitulo {
        margin-left: 0;
        margin-top: 0; 
        font-size: 22px;
        line-height: 0;
        font-family: "Lato",sans-serif;
        font-weight: bold;
      }
      .valordesconto{
        margin-left: 0;
        margin-top: 0;
        color: #969394;
        font-size: 14px;
        line-height: 16px;
        font-weight: 400;   
      }
      .valorpreco{
        margin-left: 0;
        margin-top: 0;
        color: #24255C;
        font-size: 25px;
        font-weight: bold;
        line-height: 27px;
      }
      .valorparcelas{
        margin-left: 0;
        margin-top: 0;
        color: #969394;
        font-size: 14px;
        line-height: 16px;
        font-weight: 400;         
      }
      .tamanho ul li{
        margin-left: 0;
        margin-top: 0;
        padding: 20px;
        color: #141542;
      }
      .fret{
        margin-left: 0;
        margin-top: 0;
        margin-top: 10px;
        height: 65px;
        width: 368px;
        border-width: 2px;
        border-style: solid;
        border-color: #969394;      
      }

      .textfret{
        margin-left: 0;
        margin-top: 0;
        margin-left: 25px;
        color: black;
        font-size: 12px;
        padding-top: 15px;
        font-family: "Lato",sans-serif;
      }
      .textfret2{
        margin-left: 0;
        margin-top: 0;
        font-size: 12px;
        margin-left: 25px;
        margin-top: 5px;
        color: black;
        font-family: "Lato",sans-serif;
      }
      .valorfret{
        margin-left: 0;
        margin-top: 0;
        color: green;
        font-size: 16px;
        font-family: "Lato",sans-serif;
      }
      .valorfret2{
        margin-left: 0;
        margin-top: 0;
        color: #24255c;
        font-size: 16px;
        font-family: "Lato",sans-serif;
      }
      .leraTamanho {
        margin-left: 0;
      }
      .tamanho {
        margin-left: 0;
      }
      .addvalor {
        margin-left: 0;
      }
      .cep {
        padding-top: 0;
        margin-left: 0;
        margin-top: 2rem;
      }
      .cepcaixa {
        margin-left: 0;
      }
      .seta2 {
        margin-left: 0;
        margin-top: 0;
      }
      .butaocomprar {
        margin-left: 0;
        margin-top: 0;
      }
      .addvalor input{
        width: 51px;
        border-radius: 0.5rem;
        border: 1px solid;
      }
      .doisemum{
        display: flex;
        align-items: center;
      }
      .seta2 img{
        width: 2rem;
        height: 2rem;
      }
      .elecomeledaele{
        display: flex;
        align-items: center;
      }
      .butaocomprar button {
        margin-left: 0;
        margin-top: 0;
        background-color: #33B159;
        color: white;
        height: 60px;
        width: 288px;
        border-radius: 10px;
        margin-left: 1rem;
      }
      .frete1{
        border: 1px solid;
        width: 24rem;
        height: 5rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: 0.5rem;
        cursor: pointer;
        margin-top: -3rem;
      }
      .valores2{
        display: flex;
        align-items: center;
      }
      .titulosletrasvalores{
        font-size: 1rem;
      }
      .titulosletrasvaloresp{
        font-size: 12px;
        color: black;
      }
      .valor{
        margin-left: 2rem;
      }
      .valorletra4{
        font-size: 1.3rem;
        color: #33B159;
      }
      .inputcep {
        width: 17rem;
        border: 1px solid;
        border-radius: 0.5rem !important;
      }
      .imgpesquisar2 {
        width: 1.5rem;
        height: 1.5rem;
      }
      .seta3{
        margin-left: -2.5rem;
      }
      .frete2{
        border: 1px solid;
        width: 24rem;
        height: 5rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: 0.5rem;
        cursor: pointer;
        margin-top: 1rem;
      }
      .valorletra5{
        font-size: 1rem;
        color: #24255c;
      }
      h1, p{
        margin-top: 1px !important;
        text-transform: none;
      }
      .descricao {
        display: flex;
        justify-content: center;
        flex-direction: column;
        width: 64rem;
        font-size: 12px;
        color: black;
        font-family: "Lato",sans-serif;
        margin-top: 1rem;
        margin-left: 0;
      }
      .descricao p{
        color: black;
        text-decoration: none;
      }
      .paidescrisao {
        display: flex;
        justify-content: center;
      }
</style>
</head>

<body>

<div class="Tudo">

<div class="menu" id="menujs">
<div class="menu-tudo">
<div class="logo">
  <a href='../index.html'><img src="../img/Logo.png" alt=""></a>
</div>

  <div class="pesquisa">
    <form action="../loucura.php" method="post">
      <input type="text" name="search" id="search" placeholder="Fa??a sua Busca" required>
      <div class="bot??oPesquisa">
        <button type="submit" class="botaoShared"> 
          <img class="imgpesquisar"src="../img/pesquisar.png"> 
        </button>
      </div>
    </form>
  </div>

<div class="entrar">
  <div class="tudo-entrar">
    <div class="imgentrar">
      <img class="imgEntrar" src="../img/camisa_entrar.png" alt="">
    </div>
    <div class="textentrar">
      <nav class="melhor-fronte-end-de-la-mundo">
        <ul class="sub-menu-ul">
          <li>
            <div class="tudo-2112">
              <div class="junto-2">
                Cadastrar
                <div class="seta">
                  <img src="../img/seta.png" alt="">
                </div>
              </div>  
            </div>
            <div class="submenuentrar">
              <ul>
                <div class="lis">
                  <li>
                    <div class="text2">
                      <p><a href="cadastro_clientes.html">Cadastre-se</a></p>
                    </div>
                  </li>
                  <li>
                    <div class="text2">
                      <p><a href="cadastro_produtos.html">Cadastre-Produto</a></p>
                    </div>
                  </li>
                  <li>
                    <div class="text2">
                      <p><a href="visualizar0.php">Visualizar-Produto</a></p>
                    </div>
                  </li>
                  <li>
                    <div class="text2">
                      <p><a href="editar.php">Alterar-Produto</a></p>
                    </div>
                  </li>
                  <li>
                    <div class="text2">
                      <p><a href="excluir1.php">Excluir-Produto</a></p>
                    </div>
                  </li>
                </div>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>
</div>
</div>
<div Class="Sub-Menu">
<div class="itens3">
<ul class="sub-2">
  <li>
    <p><a href="#">COLE????ES</a></p>
  </li>
  <li>
    <p><a href="#">CAMISETAS</a></p>
  </li>
  <li>
    <p><a href="#">BLUS??O</a></p>
  </li>
  <li>
    <p><a href="#">MOLETONS</a></p>
  </li>
  <li>
    <p><a href="#">MANGA LONGA</a></p>
  </li>
  <li>
    <p><a href="#">PARCEIROS</a></p>
  </li>
  <li>
    <p><a href="#">CREATORS</a></p>
  </li>
  <li>
    <p><a href="#">ARTISTAS</a></p>
  </li>
</ul>
</div>
</div>


    <div class="tudo">

        <div class="desaque2">
            <br>
            SEUS PRODUTOS
            <div class="barra2">
            </div> 
          </div>

      <?php 
          $ID = $_GET["id"];

          if($ID == ""){
            echo" <script>
                    alert('Porfavor coloque um ID valido!!!')
                    window.location.href='visualizar0.php'
                  </script>";
          }

          $mysqli = new mysqli('localhost', 'root', '', 'story_geek');
          $sql = "select * from cadastro_produto WHERE id = $ID";
          $result = $mysqli -> query($sql);

          // if(empty($linha['id'])){
          //   echo" <script>
          //           alert('Porfavor coloque um ID valido!!!')
          //           window.location.href='visualizar0.php'
          //         </script>";
          // }

          while ($linha = $result -> fetch_assoc()){
            $ID = $linha['id'];
            $nome = $linha['nomeproduto'];
            $valor = $linha['valor'];
            $img1 = $linha['imagem1'];
            $img2 = $linha['imagem2'];
            $img3 = $linha['imagem3'];
            $img4 = $linha['imagem4'];
            $img5 = $linha['imagem5'];
            $valordesc = 0;

            if($valor < 70){
                $valordesc = 78.87;
              }
            else if($valor < 190 && $valor > 150){
                 $valordesc = 239.90;
              }
            else if($valor < 150 && $valor > 70){
                $valordesc = 189.90;
              }
            else if ($valor > 190){
               $valordesc = $valordesc = 339.90;
              }
              
            $divisao = ($valor / 3);
          }
          
    echo"        
        <div class='tudo2'>
          <div class='parte1'>
            <div class='parte2'>
              <div class='flex'>  
                  <nav>
                    <ul>
                      <li>
                        <img src='../upload/produto/".$img1."' height='80px' width='80px' onclick='teste1();'>
                      </li>
                      <li>
                        <img src='../upload/produto/".$img2."' height='80px' width='80px' onclick='teste2();'>
                      </li>
                      <li>
                        <img src='../upload/produto/".$img3."' height='80px' width='80px' onclick='teste3();'>
                      </li>
                      <li>
                        <img src='../upload/produto/".$img4."' height='80px' width='80px' onclick='teste4();'>
                      </li>
                      <li>
                        <img src='../upload/produto/".$img5."' height='80px' width='80px' onclick='teste5();'>
                      </li>
                    </ul>
                  </nav>
                  
              </div>
              <div class='imgprincipal'>
              <img id='imgprincipal' src='../upload/produto/".$img1."' width='522px' height='522px' >
              </div>
            </div>
            <div class='textoscompra'>

                <div class='texto-lado'>
                  <div class='texttitulo'>
                      $nome</br>
                  </div>
                  <br>
                  <div class='valordesconto'>
                  <s>R$$valordesc</s>
                  </div>
                  <div class='valorpreco'>
                  R$$valor
                  </div>
                  <div class='valorparcelas'>
                  3x de R$$divisao sem juros
                  </div>
                  <br>
                  <br>
                  <div class='leraTamanho'>
                  TAMANHO
                  </div>
                  <div class='tamanho'>
                  <nav>
                  <ul>
                      <li>
                      <div class='tamanho1' id='test'>
                          <p id='tamanho'> PPP </p>
                      </div>
                      </li>
                      <li>
                          <div class='tamanho1' id='test2'>
                          <p id='tamanho'> P </p>
                          </div>
                      </li>
                      <li>
                        <div class='tamanho1' id='test3'>
                          <p id='tamanho'> M </p>
                        </div>
                      </li>
                      <li>
                        <div class='tamanho1' id='test4'>
                          <p id='tamanho'> G </p>
                        </div>
                      </li>
                      <li>
                        <div class='tamanho1' id='test5'>
                          <p id='tamanho'> 2G </p>
                        </div>
                        </li>
                        <li>
                          <div class='tamanho1' id='test6'>
                            <p id='tamanho'> 3G </p>
                          </div>
                        </li>
                        <li>
                          <div class='tamanho1' id='test7'>
                            <p id='tamanho'> 4G </p>
                        </div>
                      </li>
                  </ul>
                  </div>
                  </nav>
                  <div class='elecomeledaele'>
                    <div class='addvalor'>
                    <input type='number' value='1' style='width: 51px;'>
                    </div>
                    <div class='butaocomprar'>
                    <button>COMPRAR</button>
                    </div>
                  </div>
                  <div class='cep'>
                  Consulte o frete e prazo de entrega
                  </div>
                  <div class='doisemum'>
                    <div class='cepcaixa'>
                      <input class='inputcep' name='CEP' id='CEP' required pattern='\d{5}-\d{3}'/>
                    </div>
                    <div class='seta3'>
                      <a href='#'><img class='imgpesquisar2'src='../img/pesquisar.png'> </a>
                    </div>
                  </div>
                  <br>
                  <br>
                  <br>
                  <div class='precofrete'>
                    <div class='frete1'>
                        <div class='valores2'>
                          <div class='letras'>
                            <div class='doistiposletras'>
                              <h1 class='titulosletrasvalores'>FRETE GR??TIS - MOOVE</h1>
                              <p class='titulosletrasvaloresp'>Chega entre sexta 08/12 e quarta 13/12</p>
                            </div>
                          </div>
                          <div class='valor'>
                              <h1 class='valorletra4'>Gr??tis</h1>
                          </div>
                        </div>
                    </div>
                    <div class='frete2'>
                        <div class='valores2'>
                          <div class='letras'>
                            <div class='doistiposletras'>
                              <h1 class='titulosletrasvalores'>FRETE PROMOCIONAL</h1>
                              <p class='titulosletrasvaloresp'>Chega entre quarta 06/12 e quinta 14/12</p>
                            </div>
                          </div>
                          <div class='valor'>
                              <h1 class='valorletra5'>R$14,58</h1>
                          </div>
                        </div>
                    </div>
                    <div class='frete2'>
                      <div class='valores2'>
                          <div class='letras'>
                            <div class='doistiposletras'>
                              <h1 class='titulosletrasvalores'>FRETE MOOVE</h1>
                              <p class='titulosletrasvaloresp'>Chega entre quinta 07/12 e sexta 15/12</p>
                            </div>
                          </div>
                          <div class='valor'>
                            <h1 class='valorletra5'>
                            R$15,68</h1>
                          </div>
                      </div>
                    </div>
                    <div class='frete2'>
                      <div class='valores2'>
                          <div class='letras'>
                            <div class='doistiposletras'>
                              <h1 class='titulosletrasvalores'>NORMAL</h1>
                              <p class='titulosletrasvaloresp'>Chega entre segunda 11/12 e ter??a 19/12</p>
                            </div>
                            </div>
                            <div class='valor'>
                                <h1 class='valorletra5'>R$16,69</h1>
                            </div>
                      </div>
                    </div>
                  </div>
                </div>
                  <br>
                  <br>
                  <br>
          </div>
            </div>
            <div class='outraparteai'>
                <div class='lancamentos'>
                  <br>
                    <div class='tudo-dentro'>
                      <div class='text-lancamento'>
                        DESCRI????O
                      </div>
                      <div class='barralan'></div>
                      </div>
                      </div>
                      <div class='paidescrisao'>
                        <div class='descricao'>
                          <p>Voc?? est?? prestes a adquirir um produto totalmente ??nico e de qualidade.</p>
                          </br>
                          <p>Nosso moletom ?? flanelado por dentro, por isso ?? muito mais quentinho e fofo, ?? uma pe??a de extrema qualidade, proporcionando???conforto e estilo???para te aquecer nesse inverno. Os moletons s??o???unissex, assim todos podem ficar???quentinhos e formid??veis!</p>
                          </br>
                          <p>Nossas estampas (formid??veis, ?? claro) s??o criadas e pensadas especialmente pra voc??, o processo de produ????o silkscreen ?? feito ?? base d'??gua (o que faz com que sua estampa nunca corra o risco de craquelar).</p>                      
                          </br>
                          <p>O prazo de envio ?? de 15 (quinze) a 20 (vinte) dias ??teis, n??o incluso o prazo dos correios ou transportadora. Esse prazo ?? referente ?? confec????o e embalagem dos produtos.</p>
                        </div>
                      </div>
                  </div>
            </div>
              <br>
              <br>
              <br>
              <div class='desaque2'></div>
          </div>
          ";

          echo" <script>
                
              function teste1(){
                document.getElementById('imgprincipal').src='../upload/produto/".$img1."';
              }
              function teste2(){
                document.getElementById('imgprincipal').src='../upload/produto/".$img2."';
              }
              function teste3(){
                  document.getElementById('imgprincipal').src='../upload/produto/".$img3."';
              }
              function teste4(){
                  document.getElementById('imgprincipal').src='../upload/produto/".$img4."';
              }
              function teste5(){
                  document.getElementById('imgprincipal').src='../upload/produto/".$img5."';
              }
              </script>";


      ?>

    </div>

    <div class="desaque2">
      <br>
      VOC?? TAMB??M PODE GOSTAR
      <div class="barra2">
      </div> 
    </div>

    <div class="ofertas">
      <div class="contexto4">
          <div class="card" style="width: 15rem;" >
            <img id= "imagem7" src="../img/roupas/imgrp13.png" class="card-img-top" alt="..." onmouseenter="entrar7()" onmouseout="sair7()">
            <div class="card-body">
              <p class="card-text">MOLETOM PRETO - FEEL GOOD</p>
              <p>R$189,90</p>
              <center>
                <div class="bot??o_comprar">
                  <button style=" border-radius: 12px; border-radius: 12px; background-color: #30b258; width: 160px; height: 50px; color: white;"> Comprar </button>
                </div>
              </center>
            </div>
          </div>

          <div class="card" style="width: 15rem;" >
            <img id= "imagem8" src="../img/roupas/imgrp16.png" class="card-img-top" alt="..." onmouseenter="entrar8()" onmouseout="sair8()">
            <div class="card-body">
              <p class="card-text">CAMISETA PRETA - GOAT ROSES</p>
              <p>R$64,90</p>
              <center>
                <div class="bot??o_comprar">
                  <button style=" border-radius: 12px; border-radius: 12px; background-color: #30b258; width: 160px; height: 50px; color: white;"> Comprar </button>
                </div>
              </center>
            </div>
          </div>

        <div class="card" style="width: 15rem;" >
          <img id= "imagem9" src="../img/roupas/imgrp18.png" class="card-img-top" alt="..." onmouseenter="entrar9()" onmouseout="sair9()">
          <div class="card-body">
            <p class="card-text">MOLETOM PRETO - LIFE AND DEATHD</p>
            <p>R$189,90</p>
            <center>
              <div class="bot??o_comprar">
                <button style=" border-radius: 12px; border-radius: 12px; background-color: #30b258; width: 160px; height: 50px; color: white;"> Comprar </button>
              </div>
            </center>
          </div>
        </div>

        <div class="card" style="width: 15rem;" >
          <img id= "imagem10" src="../img/roupas/imgrp19.png" class="card-img-top" alt="..." onmouseenter="entrar10()" onmouseout="sair10()">
          <div class="card-body">
            <p class="card-text">CAMISETA PRETA - EGYPT CAT</p>
            <p>R$69,90</p>
            <center>
              <div class="bot??o_comprar">
                <button style=" border-radius: 12px; border-radius: 12px; background-color: #30b258; width: 160px; height: 50px; color: white;"> Comprar </button>
              </div>
            </center>
          </div>
        </div>
          
      </div>

      <br>
      <br>
      <br>
      <br>
      <div class="contato">
      <div class="contado-dentro">
        <div class="textpromo">
          Receba nossas ofertas e promo????es exclusivas!
        </div>
        <div class="pesquisa2">
          <form action="#" method="post">
            <input type="text" name="search" id="search" placeholder="Digite seu E-Mail" required>
            <div class="botaoPesquisa">
              <button>Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
      
      <div class="final">
        <div class="block">
          <div class="logodiv">
            <img src="../img/storygeek.png">
            </div>

            <div class="texto">
              Institucional
            </div>
            <div class="subtext">
              <a href="#">Home</a>
            </div>
            <div class="subtext">
              <a href="#">Onde Estamos</a>
            </div>
            <div class="subtext">
              <a href="#">Fale Conosco</a>
            </div>
            <div class="subtext">
              <a href="#">Trocas e devolu????es</a>
            </div>
            <div class="subtext">
              <a href="#">Seguran??a</a>
            </div>
            <div class="subtext">
              <a href="#">Quem Somos</a>
            </div>
            <div class="subtext">
              <a href="#">D??vidas Frequentes</a>
            </div>
            <div class="subtext">
              <a href="#">Privacidade</a>
            </div>
            <div class="subtext">
              <a href="#">Creators</a>
            </div>
            <div class="subtext">
              <a href="#">Parceiros</a>
            </div>

            <div class="texto2">
              Atendimento
            </div>
            <div class="subtext2">
              <a href="#">sac@storygeek.com.br</a>
            </div>
            <div class="subtext2">
              <a href="#">www.storygeek.com.br</a>
            </div>


            <div class="texto3">
              Ajuda
            </div>
            <div class="subtext3">
              <a href="#">Como fazer uma troca?</a>
            </div>
            <div class="subtext3">
              <a href="#">Como rastrear meu pedido?</a>
            </div>
            <div class="subtext3">
              <a href="#">Como ser um parceiro da storygeek?</a>
            </div>
            <div class="subtext3">
              <a href="#">Como entrar em contato com a storygeek?</a>
            </div>
            <div class="subtext3">
              <a href="#">?? seguro comprar na storygeek?</a>
            </div>

            <div class="texto4">
              Siga nossas redes
            </div>
            <div class="subtext4">
              <a href="#"><img src="../img/icons.jpg"></a>
            </div>

            <div class="texto5">
              Mais buscados
            </div>
            <div class="subtext5">
              <a href="#">Lan??amentos</a>
            </div>
            <div class="subtext5">
              <a href="#">Cole????o Calamidade</a>
            </div>
            <div class="subtext5">
              <a href="#">Camisetas de Filmes e S??ries</a>
            </div>
            <div class="subtext5">
              <a href="#">Camisetas de Games</a>
            </div>
            <div class="subtext5">
              <a href="#">Camisetas de M??sica</a>
            </div>
            <div class="subtext5">
              <a href="#">Camisetas de Anime</a>
            </div>
             <div class="subtext5">
              <a href="#">Moletons</a>
            </div>


            <div class="texto6">
              Formas de Pagamento
            </div>
            <div class="subtext6">
              <a href="#"><img src="../img/iconscompra.jpg"></a>
            </div>

            <div class="texto7">
              Certificados
            </div>
            <div class="subtext7">
              <a href="#"><img src="../img/iconscerti.jpg"></a>
            </div>
            <center>
              <div class="subtext8">
                Copyright EDUARDO FRANCO LTDA - 15802576000140 - 2022. Todos os direitos reservados.
              </div>
            </center>
            
        </div>
      </div>

    </div>
    </div>

  </div>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <script src="../script.js"></script>
  <script src="../cortamanho.js"></script>

  <script>
    var img = window.document.getElementById('imagem')
    var img2 = window.document.getElementById('imagem2')
    var img3 = window.document.getElementById('imagem3')
    var img4 = window.document.getElementById('imagem4')
    var img5 = window.document.getElementById('imagem5')
    var img6 = window.document.getElementById('imagem6')
    var img7 = window.document.getElementById('imagem7')
    var img8 = window.document.getElementById('imagem8')
    var img9 = window.document.getElementById('imagem9')
    var img10 = window.document.getElementById('imagem10')



    function entrar(){
      img.src = '../img/roupas/imgrp2.jpg'
    }
    function sair(){
      img.src = '../img/roupas/imgrp1.jpg'
    }

    function entrar2(){
      img2.src = '../img/roupas/imgrp4.jpg'
    }

    function sair2(){
      img2.src = '../img/roupas/imgrp3.jpg'
    }

    function entrar3(){
      img3.src = '../img/roupas/imgrp5.jpg'
    }

    function sair3(){
      img3.src = '../img/roupas/imgrp6.png'
    }

    function entrar4(){
      img4.src = '../img/roupas/imgrp8.png'
    }

    function sair4(){
      img4.src = '../img/roupas/imgrp7.png'
    }

    function entrar5(){
      img5.src = '../img/roupas/imgrp10.png'
    }

    function sair5(){
      img5.src = '../img/roupas/imgrp9.png'
    }

    function entrar6(){
      img6.src = '../img/roupas/imgrp12.png'
    }

    function sair6(){
      img6.src = '../img/roupas/imgrp11.png'
    }

    function entrar7(){
      img7.src = '../img/roupas/imgrp14.png'
    }

    function sair7(){
      img7.src = '../img/roupas/imgrp13.png'
    }

    function entrar8(){
      img8.src = '../img/roupas/imgrp16.png'
    }

    function sair8(){
      img8.src = '../img/roupas/imgrp15.png'
    }

    function entrar9(){
      img9.src = '../img/roupas/imgrp18.png'
    }

    function sair9(){
      img9.src = '../img/roupas/imgrp17.png'
    }

    function entrar10(){
      img10.src = '../img/roupas/imgrp20.png'
    }

    function sair10(){
      img10.src = '../img/roupas/imgrp19.png'
    }

  </script>




</div>