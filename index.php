<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="apple-touch-icon" sizes="180x180" href="imagens/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="imagens/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="imagens/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <title>Portfolio</title>
</head>

<body>

  <div class="container">
    <div class="hamburguer">

      <div class="line" id="line1"></div>
      <div class="line" id="line2"></div>
      <div class="line" id="line3"></div>
      <span>Fechar</span>
    </div>

    <header id="home">
      <div class="img-wrapper">
        <img src="imagens/bg3.jpg" alt="">
      </div>
      <div class="banner" id="sobre-mim">
        <h1>Web Developer e Front End Designer</h1>
        <p> Luca Verdade Lenzoni</p>
        <a href="#luca"><button>Sobre Mim</button> </a>
      </div>
    </header>

    <aside class="sidebar">
      <nav>
        <ul class="menu" id="menu">
          <li class="menu-item"><a href="#" class="menu-link">Home</a></li>
          <li class="menu-item"><a href="#conhecimentos" class="menu-link">Conhecimentos</a></li>
          <li class="menu-item"><a href="#Projetos" class="menu-link">Projetos</a></li>
          <li class="menu-item"><a href="#luca" class="menu-link">Sobre Mim</a></li>

        </ul>
      </nav>
      <div class="social-media">
        <a href="https://www.instagram.com/lucaverdade/" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://github.com/lucaverdade" target="_blank"><i class="fab fa-github"></i></a>
        <a href="https://www.linkedin.com/in/lucalenzoni/" target="_blank"><i class="fab fa-linkedin"></i></a>
      </div>

    </aside>
    <section class="sessao-conhecimentos" id="conhecimentos">
      <div class="sessao-header">
        <h1>Conhecimentos</h1>
      </div>
      <div class="conhecimentos">
        <div class="conhecimento">
          <div class="conhecimento-header">
            <i class="fab fa-html5"></i>
            <h3>HTML</h3>
          </div>
          <div class="conhecimento-text">
            <p>Tenho conhecimentos aprofundados em HTML, onde ja consigo desenvolver sites e as aplicações do conteúdo
              do site com facilidade.</p>
          </div>
        </div>
        <div class="conhecimento">
          <div class="conhecimento-header">
            <i class="fab fa-css3-alt"></i>
            <h3>CSS</h3>
          </div>
          <div class="conhecimento-text">
            <p>Plataforma para edição e estilização do conteúdo pragmático do site, onde se tem inúmeras funções e
              atribuições, onde ja conheço varias formas de estilo e animação, mas buscando sempre aprender mais.

            </p>
          </div>
        </div>
        <div class="conhecimento">
          <div class="conhecimento-header">
            <i class="fa-brands fa-python"></i>
            <h3>Python</h3>
          </div>
          <div class="conhecimento-text">
            <p>Linguagem de Programação que mais utilizo no momento, Linguagem de fácil entendimento e aplicação,
              contendo inúmeras bibliotecas e utilidades. </p>
          </div>
        </div>
        <div class="conhecimento">
          <div class="conhecimento-header">
            <i class="fab fa-js"></i>
            <h3>Javascript</h3>
          </div>
          <div class="conhecimento-text">
            <p>Uma linguagem na qual estou querendo me aprofundar, pois tem diversas animações e utilidades que gostaria
              de implementar em projetos e adoraria saber um pouco mais.</p>
          </div>
        </div>
        <div class="conhecimento">
          <div class="conhecimento-header">
            <i class="fa-solid fa-building-columns"></i>
            <h3>Banco de Dados</h3>
          </div>
          <div class="conhecimento-text">
            <p>Algo que estou estudando e gostaria de entender um pouco mais.</p>
          </div>
        </div>
        <div class="conhecimento">
          <div class="conhecimento-header">
            <i class="fab fa-github"></i>
            <h3>Git e GitHub</h3>
          </div>
          <div class="conhecimento-text">
            <p>Uma ferramenta muito utilizada nos meios da Programação, onde sao feitos "push's" e "pull's" a todo
              instante, local adequado para trabalho em equipe e multi tarefas.</p>
          </div>
        </div>

        <div class="conhecimento-img-wrapper">
          <img src="imagens/conhecimentos.png" alt="imagem conhecimento">
        </div>

      </div>
    </section>

    <div class="sessao-projetos" id="Projetos">
      <div class="sessao-header">
        <h1>Projetos</h1>
      </div>
      <div class="projetos">
        <div class="card">
          <div class="card-img-wrapper">
            <img src="imagens/proj1.jpg" id="card1" alt="imagem do projeto ToDo" />
          </div>
          <div class="card-info">
            <h2>DashBoard - Aletas Mais Bem Pagos.</h2>
            <h3>Python</h3>
            <p>Uma DashBoard, feita a partir de uma lista dos Atletas mais bem pagos do mundo, entre 1990 a 2020.</p>
            <button class="btn">Saiba Mais</button>
          </div>
        </div>

        <div class="card">
          <div class="card-img-wrapper">
            <img src="imagens/proj2.jpg" id="card2" alt="imagem do projeto Maratona" />
          </div>
          <div class="card-info">
            <h2>Busca-Imposto</h2>
            <h3>PHP, HTML e CSS</h3>
            <p>Um site onde se pode pesquisar e comparar preços de impostos aplicados em diversos
              produtos.Principalmente informatica.</p>
            <button class="btn">Saiba Mais</button>
          </div>
        </div>
        <div class="card">
          <div class="card-img-wrapper">
            <img src="imagens/proj3.jpg" id="card3" alt="imagem do projeto Casa Bela" />
          </div>
          <div class="card-info">
            <h2>Mini Jogos</h2>
            <h3>Python</h3>
            <p>Alguns jogos simples, feitos para passar o tempo e treinar um pouco de programção.</p>
            <button class="btn">Saiba Mais</button>
          </div>
        </div>
      </div>

      <section class="sessao-luca" id="luca">
        <div class="sessao-header">
          <h1>Sobre Mim</h1>
        </div>
        <div class="lucaS">
          <div class="luca">
            <div class="luca-header">
              <i class="fa-solid fa-at"></i>
              <h3>Contato</h3>
            </div>
            <div class="luca-text">
              <p>Asa Norte, Brasilia,
                Distrito Federal. Brasil. </p>
              <p>11/09/2001</p>
              <p>lvlenzoni@outlook.com</p>

            </div>
          </div>
          <div class="luca">
            <div class="luca-header">
              <i class="fa-solid fa-laptop"></i>
              <h3>Habilidades e Cursos</h3>
            </div>
            <div class="luca-text">
              <p>Espanhol - Cooplem Idiomas.(Em formação).s </p>
              <p> Ingles - Cultura Inglesa. Formado em 2018. </p>
              <p> Curso Udemy -Curso Inteligência Artificial:
                Sistemas de Recomendação
                em Python. </p>
              <p> Excel - </p>
              <p> Logica de programção.</p>
            </div>
          </div>
          <div class="luca">
            <div class="luca-header">
              <i class="fa-solid fa-person"></i>
              <h3>Perfil Pessoal</h3>
            </div>
            <div class="luca-text">
              <p>Oi, meu nome é Luca e sempre gostei de
                experiências novas e de buscar aprender coisas
                diferentes, nunca se sabe o que realmente vai
                gostar se não tentar de tudo!! </p>
              <p>Gosto bastante da parte de Desenvolvimento
                Web, principalmente Front-End, gosto dessa
                parte criativa e inusitada de um novo projeto.
              </p>
            </div>
          </div>
          <div class="luca">
            <div class="luca-header">
              <i class="fa-solid fa-briefcase"></i>
              <h3>Experiencia</h3>
            </div>
            <div class="luca-text">
              <p>Estagiei na MicroTecnica, empresa de locação e
                retrabalhos de maquinhas e aperfeiçoamento de sofwares.Atuei na parte de Hardware e Sofware,
                principalmente em
                Notebooks e DeskTops.</p>
            </div>
          </div>
          <div class="luca">
            <div class="luca-header">
              <i class="fa-solid fa-graduation-cap"></i>
              <h3>Historio Escolar</h3>
            </div>
            <div class="luca-text">
              <p>Universidade de Brasília (UnB) -
                Engenharia de Sofware - 2020 - 2025.(Em graduação)</p>
              <p>Centro Universitário de Brasília (UniCeuB) -
                Engenharia da computação - Jan 2020 - Dez 2020. (Dois semestres feitos, atualmente trancado)</p>
            </div>
          </div>
          <div class="luca">
            <div class="luca-header">
              <i class="fa-solid fa-school"></i>
              <h3>Educação</h3>
            </div>
            <div class="luca-text">
              <p>Ensino Médio - Marista João Paulo II
                Brasilia, Brasil | 1 Ano ao 3 ano (2017 – 2019).</p>
              <p>Ensino Fundamental - Marista João Paulo II
                Brasilia, Brasil | 6 Ano ao 9 Ano (2013 – 2016).</p>
            </div>
          </div>

          <div class="luca-img-wrapper">
            <img src="imagens/eu.jpeg" alt="imagem luca">
          </div>

        </div>
      </section>


      <footer>
        <div class="footer-content">
          <p>
            Copyright &copy; 2022, Luca Lenzoni - Todos os diretos reservados.
          </p>
          <div class="social-list">
            <ul>
              <li><a href="https://www.instagram.com/lucaverdade/" target="_blank"><i class="fab fa-instagram"></i></a>
              </li>
              <li><a href="https://github.com/lucaverdade" target="_blank"><i class="fab fa-github"></i></a></li>

              <li><a href="https://www.linkedin.com/in/lucalenzoni/" target="_blank"><i class="fab fa-linkedin"></i></a>
              </li>

            </ul>
          </div>
        </div>
      </footer>
      <a href="#home" id="link-topo">
        <i class="fas fa-arrow-up"></i>
      </a>
    </div>
</body>

<script src="script.js"></script>

</html>