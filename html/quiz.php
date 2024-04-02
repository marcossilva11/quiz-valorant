<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Valorant | Quiz</title>
  <!-- Fontes -->
  <link href="https://db.onlinewebfonts.com/c/561f38b1f4570de0fb8a39d691ab058c?family=Tungsten-Bold" rel="stylesheet" />
  <!-- font title -->
  <link href="https://db.onlinewebfonts.com/c/7bb508fd7255ec38b6f29cb4cf8668cf?family=DINNextW1G-Regular" rel="stylesheet" />
  <!-- Font text -->
  <link href="https://db.onlinewebfonts.com/c/b621d1ffb46493164fd62fb7a83ab0ff?family=Mark+W05+Medium" rel="stylesheet" />
  <!-- Font nav link-->
  <!-- CSS -->
  <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
  <header>
    <div class="logo-valorant">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="35" viewBox="0 0 100 100" width="35">
        <path d="M99.25 48.66V10.28c0-.59-.75-.86-1.12-.39l-41.92 52.4a.627.627 0 00.49 1.02h30.29c.82 0 1.59-.37 2.1-1.01l9.57-11.96c.38-.48.59-1.07.59-1.68zM1.17 50.34L32.66 89.7c.51.64 1.28 1.01 2.1 1.01h30.29c.53 0 .82-.61.49-1.02L1.7 9.89c-.37-.46-1.12-.2-1.12.39v38.38c0 .61.21 1.2.59 1.68z" fill="#fff"></path>
      </svg>
    </div>
    <nav>
      <a href="./home.php" target="_self">Home</a>
      <a href="#">Quiz</a>
    </nav>
    <div class="btn-quit">
      <button name="quit"><a href="../php/quit.php">Sair</a></button>
    </div>
  </header>

  <main>
    <div class="container">
      <h1 style="margin-bottom: 10px;">Quiz sobre Valorant</h1>
      <div class="quiz-container">
        <form action="../php/processar_quiz.php" method="post">
          <div class="question-form">
            <h2>1 - Quando o jogo foi lançado?</h2>
            <div class="options-input">
              <div class="option">
                <input type="radio" name="answer1" value="a" id="A" />
                <label for="A">A. 18/03/2021</label>
              </div>
              <div class="option">
                <input type="radio" name="answer1" value="b" id="B" />
                <label for="B">B. 24/06/2020</label>
              </div>
              <div class="option">
                <input type="radio" name="answer1" value="c" id="C" />
                <label for="C">C. 02/06/2020</label>
              </div>
              <div class="option">
                <input type="radio" name="answer1" value="d" id="D" />
                <label for="D">D. 01/07/2019</label>
              </div>
            </div>
          </div>
          <div class="question-form">
            <h2>
              2 - Quais são os tipos de agentes em Valorant e suas respectivas
              funções?
            </h2>
            <div class="options-input">
              <div class="option">
                <input type="radio" name="answer2" value="a" id="A2" />
                <label for="A2">A. Duelista, Controlador, Iniciador e Sentinela</label>
              </div>
              <div class="option">
                <input type="radio" name="answer2" value="b" id="B2" />
                <label for="B2">B. Lutador, Curandeiro, Arqueiro e Mago</label>
              </div>
              <div class="option">
                <input type="radio" name="answer2" value="c" id="C2" />
                <label for="C2">C. Tanque, Suporte, Assassino e Mago</label>
              </div>
              <div class="option">
                <input type="radio" name="answer2" value="d" id="D2" />
                <label for="D2">D. Líder, Tático, Estrategista e Caçador</label>
              </div>
            </div>
          </div>
          <div class="question-form">
            <h2>
              3 - Qual é o agente que é descrito como um vendedor de
              informações do Marrocos?
            </h2>
            <div class="options-input">
              <div class="option">
                <input type="radio" name="answer3" value="a" id="A3" />
                <label for="A3">A. Jett</label>
              </div>
              <div class="option">
                <input type="radio" name="answer3" value="b" id="B3" />
                <label for="B3">B. Cypher</label>
              </div>
              <div class="option">
                <input type="radio" name="answer3" value="c" id="C3" />
                <label for="C3">C. Killjoy</label>
              </div>
              <div class="option">
                <input type="radio" name="answer3" value="d" id="D3" />
                <label for="D3">D. Omen</label>
              </div>
            </div>
          </div>
          <div class="question-form">
            <h2>
              4 - Qual é a característica principal do mapa Pearl em Valorant?
            </h2>
            <div class="options-input">
              <div class="option">
                <input type="radio" name="answer4" value="a" id="A4" />
                <label for="A4">A. Possui dois pontos principais e é um mapa sem mecânicas
                  focado no ambiente</label>
              </div>
              <div class="option">
                <input type="radio" name="answer4" value="b" id="B4" />
                <label for="B4">B. Apresenta um conduíte astral e é um mapa com três
                  rotas</label>
              </div>
              <div class="option">
                <input type="radio" name="answer4" value="c" id="C4" />
                <label for="C4">C. É um mapa subaquático com espaços abertos e embates de
                  longa distância</label>
              </div>
              <div class="option">
                <input type="radio" name="answer4" value="d" id="D4" />
                <label for="D4">D. É um mapa dividido ao meio por um experimento com
                  Radianita malsucedido</label>
              </div>
            </div>
          </div>
          <div class="question-form">
            <h2>
              5 - Quem é descrito como uma verdadeira fortaleza chinesa que
              traz segurança para si mesma e para a equipe em Valorant?
            </h2>
            <div class="options-input">
              <div class="option">
                <input type="radio" name="answer5" value="a" id="A5" />
                <label for="A5">A. Brimstone</label>
              </div>
              <div class="option">
                <input type="radio" name="answer5" value="b" id="B5" />
                <label for="B5">B. Phoenix</label>
              </div>
              <div class="option">
                <input type="radio" name="answer5" value="c" id="C5" />
                <label for="C5">C. Sage</label>
              </div>
              <div class="option">
                <input type="radio" name="answer5" value="d" id="D5" />
                <label for="D5">D. Jett</label>
              </div>
            </div>
          </div>
          <div class="question-form">
            <h2>6 - Qual é a característica do mapa Breeze em Valorant?</h2>
            <div class="options-input">
              <div class="option">
                <input type="radio" name="answer6" value="a" id="A6" />
                <label for="A6">A. Possui vários tipos de armas para os jogadores
                  escolherem</label>
              </div>
              <div class="option">
                <input type="radio" name="answer6" value="b" id="B6" />
                <label for="B6">B. Apresenta espaços muito abertos e embates de longa
                  distância</label>
              </div>
              <div class="option">
                <input type="radio" name="answer6" value="c" id="C6" />
                <label for="C6">C. Tem dois pontos principais e é um mapa sem mecânicas
                  focado no ambiente</label>
              </div>
              <div class="option">
                <input type="radio" name="answer6" value="d" id="D6" />
                <label for="D6">D. É um local de escavação secreta retomada pela força do
                  Ártico</label>
              </div>
            </div>
          </div>
          <div class="question-form">
            <h2>
              7 - Qual é o principal objetivo dos agentes iniciadores em
              Valorant?
            </h2>
            <div class="options-input">
              <div class="option">
                <input type="radio" name="answer7" value="a" id="A7" />
                <label for="A7">A. Defender pontos de interesse</label>
              </div>
              <div class="option">
                <input type="radio" name="answer7" value="b" id="B7" />
                <label for="B7">B. Criar oportunidades para a equipe</label>
              </div>
              <div class="option">
                <input type="radio" name="answer7" value="c" id="C7" />
                <label for="C7">C. Controlar o campo de batalha</label>
              </div>
              <div class="option">
                <input type="radio" name="answer7" value="d" id="D7" />
                <label for="D7">D. Causar danos em grandes áreas</label>
              </div>
            </div>
          </div>
          <div class="question-form">
            <h2>
              8 - Qual é o número atual de agentes disponíveis em Valorant?
            </h2>
            <div class="options-input">
              <div class="option">
                <input type="radio" name="answer8" value="a" id="A8" />
                <label for="A8">A. 25</label>
              </div>
              <div class="option">
                <input type="radio" name="answer8" value="b" id="B8" />
                <label for="B8">B. 24</label>
              </div>
              <div class="option">
                <input type="radio" name="answer8" value="c" id="C8" />
                <label for="C8">C. 23</label>
              </div>
              <div class="option">
                <input type="radio" name="answer8" value="d" id="D8" />
                <label for="D8">D. 20</label>
              </div>
            </div>
          </div>
          <div class="question-form">
            <h2>
              9 - Qual é o agente que vem diretamente dos EUA e possui um
              arsenal orbital em Valorant?
            </h2>
            <div class="options-input">
              <div class="option">
                <input type="radio" name="answer9" value="a" id="A9" />
                <label for="A9">A. Gekko</label>
              </div>
              <div class="option">
                <input type="radio" name="answer9" value="b" id="B9" />
                <label for="B9">B. Phoenix</label>
              </div>
              <div class="option">
                <input type="radio" name="answer9" value="c" id="C9" />
                <label for="C9">C. Raze</label>
              </div>
              <div class="option">
                <input type="radio" name="answer9" value="d" id="D9" />
                <label for="D9">D. Brimstone</label>
              </div>
            </div>
          </div>
          <div class="question-form">
            <h2>10 - Quais são os tipos de armas disponíveis em Valorant?</h2>
            <div class="options-input">
              <div class="option">
                <input type="radio" name="answer10" value="a" id="A10" />
                <label for="A10">A. Leves, Submetralhadoras, Fuzis, Fuzis de precisão e
                  Metralhadoras</label>
              </div>
              <div class="option">
                <input type="radio" name="answer10" value="b" id="B10" />
                <label for="B10">B. Pistolas, Rifles, Escopetas, Armas brancas e Granadas
                </label>
              </div>
              <div class="option">
                <input type="radio" name="answer10" value="c" id="C10" />
                <label for="C10">C. Primárias e secundárias</label>
              </div>
              <div class="option">
                <input type="radio" name="answer10" value="d" id="D10" />
                <label for="D10">D. Automáticas e semiautomáticas</label>
              </div>
            </div>
          </div>
          <div class="btn-send">
            <button type="submit">Finalizar</button>
          </div>
        </form>
      </div>
    </div>
  </main>

  <footer>
    <p>Desenvolvido por Marcos - 2024</p>
  </footer>
</body>

</html>