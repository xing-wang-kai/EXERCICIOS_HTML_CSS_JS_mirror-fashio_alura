<!DOCTYPE html>
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/header_footer.css">
    <link rel="stylesheet" href="css/index.css">
    <title>MIRROR FASHION INDEX</title>
  </head>
  <body>
    <header class="header container">

      <div class="header--itens header--logo">
        <figure>
          <img src="img/logo.png" alt="Mirror Fashion Logo">
        </figure>
      </div>

      <div class="header--itens header--compras">
        <p class="sacola">SACOLA DE COMPRAS</p>
      </div>

      <div class="header--itens header-lista">

        <ul class="header--itens--lista">
          <li><a href="">Sua Conta</a></li>
          <li><a href="">Lista de Desejos</a></li>
          <li><a href="">Cartão Fidelidade</a></li>
          <li><a href="">Sobre</a></li>
          <li><a href="">Ajuda</a></li>
        </ul>

      </div>

    </header>

    <main>
      <div class="main_pesquisa_menu_foto">
        <section>
          <section class="botao_pesquisa">
            <h2>Buscar: </h2>
            <form class="" action="index.html" method="get">
              <input type="search" name="" value="">
                <button type="button" name="button"><img src="img/busca.png" alt="Botão de buscar"></button>
            </form>
          </section>

          <section class="departamentos_itens" >
            <nav >
              <h2>DEPARTAMENTOS</h2>
              <ul class="menu-departamentos" >
                <li><a href="">BLUSAS E CAMISAS</a>
                  <ul>
                    <li><a href="#">Manga curta</a></li>
                    <li><a href="#">Manga comprida</a></li>
                    <li><a href="#">Camisa social</a></li>
                    <li><a href="#">Camisa casual</a></li>
                  </ul>
                </li>
                <li><a href="">CALÇAS</a></li>
                <li><a href="">SAIAS</a></li>
                <li><a href="">VESTIDOS</a></li>
                <li><a href="">SAPATOS</a></li>
                <li><a href="">BOLSAS E CARTEIRAS</a></li>
                <li><a href="">ACESSÓRIOS</a></li>
              </ul>
            </nav>
          </section>
        </section>

        <section class="banner_destaques">
          <figure>
            <img src="img/destaque-home.png" alt="destaques-home">
          </figure>
        </section>

      </div>

      <div class="container paineis">
        <section class="painel novidades">
          <h2>Novidades</h2>
            <ol>
              <?php
                require_once './texte_index.php';
                echo
               ?>

              <li>
              <a href="produto.html">
              <figure>
              <img src="img/produtos/miniatura1.png" alt="miniatura1">
              <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
              </figure>
              </a>
              </li>

              <li>
              <a href="produto.html">
              <figure>
              <img src="img/produtos/miniatura2.png" alt="miniatura1">
              <figcaption>Blusa caveira R$ 59,90</figcaption>
              </figure>
              </a>
              </li>

              <li>
              <a href="produto.html">
              <figure>
              <img src="img/produtos/miniatura3.png" alt="miniatura1">
              <figcaption>sueter funny R$ 139,90</figcaption>
              </figure>
              </a>
              </li>

              <li>
              <a href="produto.html">
              <figure>
              <img src="img/produtos/miniatura4.png" alt="miniatura1">
              <figcaption>Jaqueta bomber funny por R$ 229,90</figcaption>
              </figure>
              </a>
              </li>

              <li>
              <a href="produto.html">
              <figure>
              <img src="img/produtos/miniatura5.png" alt="miniatura1">
              <figcaption>Regata Light funny por R$ 49,90</figcaption>
              </figure>
              </a>
              </li>

              <li>
              <a href="produto.html">
              <figure>
              <img src="img/produtos/miniatura6.png" alt="miniatura1">
              <figcaption>Regata light sexual por R$ 49,90</figcaption>
              </figure>
              </a>
              </li>

            </ol>
        </section>

        <section class="painel mais-vendidos">
          <h2>ITENS MAIS VENDIDOS</h2>
            <ol>

              <li>
              <a href="produto.html">
              <figure>
              <img src="img/produtos/miniatura7.png" alt="miniatura1">
              <figcaption>t-shirt funny R$ 69,90</figcaption>
              </figure>
              </a>
              </li>

              <li>
              <a href="produto.html">
              <figure>
              <img src="img/produtos/miniatura8.png" alt="miniatura1">
              <figcaption>t-shirt sexy por R$ 59,90</figcaption>
              </figure>
              </a>
              </li>

              <li>
              <a href="produto.html">
              <figure>
              <img src="img/produtos/miniatura9.png" alt="miniatura1">
              <figcaption>camisa funny R$ 99,90</figcaption>
              </figure>
              </a>
              </li>

              <li>
              <a href="produto.html">
              <figure>
              <img src="img/produtos/miniatura10.png" alt="miniatura1">
              <figcaption>blusa ml funny por R$ 69,90</figcaption>
              </figure>
              </a>
              </li>

              <li>
              <a href="produto.html">
              <figure>
              <img src="img/produtos/miniatura11.png" alt="miniatura1">
              <figcaption>bermuda safary por R$ 79,90</figcaption>
              </figure>
              </a>
              </li>

              <li>
              <a href="produto.html">
              <figure>
              <img src="img/produtos/miniatura12.png" alt="miniatura1">
              <figcaption>bata sexual por R$ 79,90</figcaption>
              </figure>
              </a>
              </li>

            </ol>
        </section>

      </div>
    </main>
      <footer class="rodape">

        <div class="container_footer">
          <div class="imagem_logo_footer">
            <figure>
              <img src="img/logo-rodape.png" alt="logo_rodape">
            </figure>

          </div>
          <div class="redes_sociais">
            <ul class="redes_sociais--lista">
              <li class="facebook">
                <figure>
                  <a href="http://facebook.com/mirrorfashion">"<img src="img/facebook.png" alt="facebook"></a>
                </figure>

              </li>
              <li class="twitter">
                <figure>
                  <a href="http://twitter.com/mirrorfashion"><img src="img/twitter.png" alt="twitter"></a>
                </figure>

              </li>
              <li class="googleplus">
                <figure>
                  <a href="http://googleplus.com/mirrorfashion"><img src="img/googleplus.png" alt="googleplus"></a>
                </figure>

              </li>
            </ul>

          </div>

        </div>

      </footer>
  </body>
</html>
