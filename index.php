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
        <a href="#luca"><button>Mais Sobre Mim</button> </a>
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
            <p>HTML ?? uma linguagem Front-End, na qual tenho curiosidade e vontade de me aprofundar cada vez mais, tenho
              procurado cursos extras para poder sempre aprender mais, j?? possuo conhecimentos aprofundados, onde
              consigo desenvolver aplica????es WEB, p??ginas, portif??lios e capas.</p>
          </div>
        </div>
        <div class="conhecimento">
          <div class="conhecimento-header">
            <i class="fab fa-css3-alt"></i>
            <h3>CSS</h3>
          </div>
          <div class="conhecimento-text">
            <p>O CSS est?? muito ligado ao HTML, pois ?? nele onde se ocorre a estiliza????o da sua aplica????o e c??digo, essa
              linguagem possu?? in??meras fun????es de anima????es, estiliza????es e edi????o, onde eu gostaria de me aprofundar e
              ???decorar??? todas as suas funcionalidades para poder atribuir e melhorar meus futuros e atuais projetos.



            </p>
          </div>
        </div>
        <div class="conhecimento">
          <div class="conhecimento-header">
            <i class="fa-brands fa-python"></i>
            <h3>Python</h3>
          </div>
          <div class="conhecimento-text">
            <p>Linguagem de Programa????o que mais utilizo no momento, tive a o primeiro contato com ela na faculdade
              juntamente com C++ e Java, o Python ?? uma linguagem com v??rias bibliotecas e fun????es que ajudam na hora de
              fazer um projeto. J?? fiz alguns projetos na Universidade usando-o, e gostei, planejo usar em mais
              aplica????es e projetos pessoais. </p>
          </div>
        </div>
        <div class="conhecimento">
          <div class="conhecimento-header">
            <i class="fab fa-js"></i>
            <h3>Javascript</h3>
          </div>
          <div class="conhecimento-text">
            <p>Uma linguagem na qual estou querendo me aprofundar e aprender, pois tem diversas anima????es e utilidades
              que gostaria de implementar em projetos e adoraria saber um pouco mais. Estou sempre procurando cursos pra
              poder me aprofundar nessa linguagem ???Full-Stack???.</p>
          </div>
        </div>
        <div class="conhecimento">
          <div class="conhecimento-header">
            <i class="fa-solid fa-building-columns"></i>
            <h3>Banco de Dados</h3>
          </div>
          <div class="conhecimento-text">
            <p>Algo com grande mercado, com uma diversidade imensa de ???Bancos??? e algo muito importante para o mercado de
              trabalho e projetos. J?? realizei alguns mini cursos e diversas aulas na internet, sempre em busca de
              entender mais dessa grande parte da tecnologia.</p>
          </div>
        </div>
        <div class="conhecimento">
          <div class="conhecimento-header">
            <i class="fab fa-github"></i>
            <h3>Git e GitHub</h3>
          </div>
          <div class="conhecimento-text">
            <p>Uma ferramenta muito utilizada nos meios da Programa????o, tanto para trabalhos em empresas da a??rea, mas
              para projetos, onde ficam guardados em ???nuvem??? e podem ser clonados para o seu ou algum outro reposit??rio,
              e conseguir?? ver os c??digos dos seus projetos e compartilha-los. Local adequado para trabalhar em equipe e
              realizar multi tarefas.</p>
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
            <h2>DashBoard - Atletas Mais Bem Pagos.</h2>
            <h3>Python</h3>
            <p>Dash Board, feita a partir de uma lista dos atletas mais bem pagos do mundo, entre 1990 a 2020.</p>
           <a  href="https://github.com/lucaverdade/DashBoard" target="_blank" ><button  class="btn" >Saiba Mais </button>   </a> 
          </div>
        </div>

        <div class="card">
          <div class="card-img-wrapper">
            <img src="imagens/proj2.jpg" id="card2" alt="imagem do projeto Maratona" />
          </div>
          <div class="card-info">
            <h2>Busca-Imposto</h2>
            <h3>PHP, HTML e CSS</h3>
            <p>Site onde se pode pesquisar e comparar pre??os de impostos aplicados em diversos
              produtos.Principalmente inform??tica.</p>
              <a  href="https://github.com/lucaverdade/Busca-Imposto" target="_blank" ><button  class="btn" >Saiba Mais </button>   </a>  
          </div>
        </div>
        <div class="card">
          <div class="card-img-wrapper">
            <img src="imagens/proj3.jpg" id="card3" alt="imagem do projeto Casa Bela" />
          </div>
          <div class="card-info">
            <h2>Recomenda AI!</h2>
            <h3>Python</h3>
            <p>Sistema de Recomenda????o de filmes, baseado no KNN(k-nearest neighbors algorithm) em python</p>
           <a  href="https://github.com/lucaverdade/Recomenda-Filmes" target="_blank" ><button  class="btn" >Saiba Mais </button>   </a> 
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
              <p>Asa Norte, Bras??lia,
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
              <p>Espanhol - Cooplem Idiomas. (Em forma????o).</p>
              <p> Ingl??s - Cultura Inglesa. Formado em 2018. </p>
              <p> Curso Udemy -Curso Intelig??ncia Artificial: Sistemas de Recomenda????o em Python.
                em Python. </p>
              <p> Excel ??? Cursos da Online. </p>
              <p>L??gica de programa????o.</p>
            </div>
          </div>
          <div class="luca">
            <div class="luca-header">
              <i class="fa-solid fa-person"></i>
              <h3>Perfil Pessoal</h3>
            </div>
            <div class="luca-text">
              <p>Oi, meu nome ?? Luca e sempre gostei de experi??ncias novas e de buscar aprender coisas diferentes, nunca
                se sabe o que realmente vai gostar se n??o tentar de tudo!!
                Sou estudante de Engenharia de Software na Universidade de Bras??lia (UnB), e um grande f?? de tecnologia.
                Pra ser sincero, meu objetivo antes de acabar o Ensino M??dio, n??o era trabalhar, nem estudar tecnologia,
                nem mesmo programa????o (n??o conhecia nada desse mundo mesmo), mas ao dar uma chance por indica????o de
                outros, me apeguei a programa????o e hoje n??o me vejo longe de trabalhar com tecnologia. </p>
              <p>Na parte de programar gosto bastante da parte de Desenvolvimento Web, principalmente Front-End, onde se
                consegue utilizar a parte criativa e chamativa de um projeto, come??ando por adicionar textos e imagens
                at?? anima-las, modifica-las e estiliza????o da p??gina, gosto dessa parte criativa e inusitada de um novo
                projeto.
              </p>
            </div>
          </div>
          <div class="luca">
            <div class="luca-header">
              <i class="fa-solid fa-briefcase"></i>
              <h3>Experi??ncia</h3>
            </div>
            <div class="luca-text">
              <p>Estagiei na empresa MicroTecnica, empresa de loca????o, revenda, retrabalhos de computadores e
                aperfei??oamento de softwares e atualiza????es de Hardware. Atuei na parte de instala????o de Hardware e
                atualiza????o de Softwares, principalmente em Notebooks e Desktops e em suporte T??cnico a diversos tipos
                de maquinas.</p>
            </div>
          </div>
          <div class="luca">
            <div class="luca-header">
              <i class="fa-solid fa-graduation-cap"></i>
              <h3>Historio Escolar</h3>
            </div>
            <div class="luca-text">
              <p>Universidade de Bras??lia (UnB) -
                Engenharia de Software - 2020 - 2025.(Em gradua????o)</p>
              <p>Centro Universit??rio de Bras??lia (UniCeuB) -
                Engenharia da computa????o - Jan 2020 - Dez 2020. (Dois semestres feitos, atualmente trancado)</p>
            </div>
          </div>
          <div class="luca">
            <div class="luca-header">
              <i class="fa-solid fa-school"></i>
              <h3>Educa????o</h3>
            </div>
            <div class="luca-text">
              <p>Ensino M??dio - Marista Jo??o Paulo II
                Bras??lia, Brasil | 1 Ano ao 3 ano (2017 ??? 2019).</p>
              <p>Ensino Fundamental - Marista Jo??o Paulo II
                Bras??lia, Brasil | 6 Ano ao 9 Ano (2013 ??? 2016).</p>
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