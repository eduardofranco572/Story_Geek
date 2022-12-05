<link href="Styles/style.css" rel="stylesheet" type="text/css" />
  <link href="Styles/menu.css" rel="stylesheet" type="text/css" />
  <link href="Styles/final.css" rel="stylesheet" type="text/css" />
  <link href="Styles/submenu.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

  <title>StoryGeek</title>

  <style>
    .menu{
      height: 7rem;
    }
    .contato{
      background-image: url(https://rd1.com.br/wp-content/uploads/2021/11/20211122-red-background-10.jpg);
      width: 100%;
      background-repeat: no-repeat;
      background-size: 100%;
      height: 240px;
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
    .botão_comprar button{
        border-radius: 12px;
        border-radius: 12px;
        background-color: #30b258;
        width: 160px;
        height: 50px;
        color: white;
    }
    .todoscard{
        display: flex;
    }
    .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0,0,0,.125);
        border-radius: 0.25rem;
        margin-top: 2rem;
    }

  </style>
</head>


<body>

  <div class="Tudo">

    <div class="menu" id="menujs">
      <div class="menu-tudo">
        <div class="logo">
            <a href='index.html'><img src="img/Logo.png" alt=""></a>
        </div>

        <div class="pesquisa">
          <form action="" method="post">
            <input type="text" name="search" id="search" placeholder="Faça sua Busca" required>
            <div class="botãoPesquisa">
              <button type="submit" class="botaoShared"> 
                <img class="imgpesquisar"src="img/pesquisar.png"> 
              </button>
            </div>
          </form>
        </div>

        <div class="entrar">
          <div class="tudo-entrar">
            <div class="imgentrar">
              <img class="imgEntrar" src="img/camisa_entrar.png" alt="">
            </div>
            <div class="textentrar">
              <nav class="melhor-fronte-end-de-la-mundo">
                <ul class="sub-menu-ul">
                  <li>
                    <div class="tudo-2112">
                      <div class="junto-2">
                        Cadastrar
                        <div class="seta">
                          <img src="img/seta.png" alt="">
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
            <p><a href="#">COLEÇÕES</a></p>
          </li>
          <li>
            <p><a href="#">CAMISETAS</a></p>
          </li>
          <li>
            <p><a href="#">BLUSÃO</a></p>
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

    <div class='todoscard'>
        <br>
        <br>
        <?php 

            $ref = $_POST['search'];

            $database =new mysqli('localhost','root','','story_geek');

            $comando ="SELECT * FROM `cadastro_produto` WHERE nomeproduto LIKE '%$ref%' ;";

            $view = $database->query ( $comando );

            while($linha = $view-> fetch_assoc()){
                $ID = $linha['id'];
                $nome = $linha['nomeproduto'];
                $valor = $linha['valor'];
                $img1 = $linha['imagem1'];
                $img2 = $linha['imagem2'];

                echo " 
                <br>
                <br>
                <div class='card' style='width: 15rem;' >
                    <img id= 'imagem20' src='upload/produto/".$img1."' class='card-img-top' alt='...' onmouseenter='entrar100()' onmouseout='sair100()'>
                    <div class='card-body'>
                        <p class='card-text'>$nome</p>
                        <p>R$$valor</p>
                        <center>
                        <form class='formdoido' method='post' action='paginas/Ver_produto2.php?id=$ID'>
                          <div class='botão_comprar'>
                              <a href='paginas/Ver_produto2.php?id=$ID'><button name='ID'> Comprar </button></a>
                          </div>
                          </center>
                        </form>
                    </div>
                </div>
                <br>
                <br>
                ";


            // echo" 
            // <script>  
            //     var imagem20 = window.document.getElementById('imagem20')
            //     function entrar100(){
            //     imagem20.src='upload/produto/".$img2."' 
            //     }
            //     function sair100(){
            //         imagem20.src='upload/produto/".$img1."'
            //     }
            // </script>";

            }

        ?>
        
    </div>
    <br>
    <br>
    <br>
    <div class="contato">
    <div class="contado-dentro">
      <div class="textpromo">
        Receba nossas ofertas e promoções exclusivas!
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
        <img src="img/storygeek.png">
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
        <a href="#">Trocas e devoluções</a>
      </div>
      <div class="subtext">
        <a href="#">Segurança</a>
      </div>
      <div class="subtext">
        <a href="#">Quem Somos</a>
      </div>
      <div class="subtext">
        <a href="#">Dúvidas Frequentes</a>
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
        <a href="#">É seguro comprar na storygeek?</a>
      </div>

      <div class="texto4">
        Siga nossas redes
      </div>
      <div class="subtext4">
        <a href="#"><img src="img/icons.jpg"></a>
      </div>

      <div class="texto5">
        Mais buscados
      </div>
      <div class="subtext5">
        <a href="#">Lançamentos</a>
      </div>
      <div class="subtext5">
        <a href="#">Coleção Calamidade</a>
      </div>
      <div class="subtext5">
        <a href="#">Camisetas de Filmes e Séries</a>
      </div>
      <div class="subtext5">
        <a href="#">Camisetas de Games</a>
      </div>
      <div class="subtext5">
        <a href="#">Camisetas de Música</a>
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
        <a href="#"><img src="img/iconscompra.jpg"></a>
      </div>

      <div class="texto7">
        Certificados
      </div>
      <div class="subtext7">
        <a href="#"><img src="img/iconscerti.jpg"></a>
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
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
    crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>

</html>