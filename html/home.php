<?php
session_start();

if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) 
{
  unset($_SESSION['usuario']);
  unset($_SESSION['senha']);
  header("Location: ../index.php");
}
$logado = $_SESSION['usuario'];

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Valorant | Sobre o jogo</title>
  <!-- Fontes -->
  <link href="https://db.onlinewebfonts.com/c/561f38b1f4570de0fb8a39d691ab058c?family=Tungsten-Bold" rel="stylesheet"> <!-- Font title-->
  <link href="https://db.onlinewebfonts.com/c/7bb508fd7255ec38b6f29cb4cf8668cf?family=DINNextW1G-Regular" rel="stylesheet"> <!-- font text -->
  <link href="https://db.onlinewebfonts.com/c/b621d1ffb46493164fd62fb7a83ab0ff?family=Mark+W05+Medium" rel="stylesheet"> <!-- Font nav link-->
  <!-- CSS -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <!-- Header -->
  <header>
    <div class="logo-valorant">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="35" viewBox="0 0 100 100" width="35">
        <path d="M99.25 48.66V10.28c0-.59-.75-.86-1.12-.39l-41.92 52.4a.627.627 0 00.49 1.02h30.29c.82 0 1.59-.37 2.1-1.01l9.57-11.96c.38-.48.59-1.07.59-1.68zM1.17 50.34L32.66 89.7c.51.64 1.28 1.01 2.1 1.01h30.29c.53 0 .82-.61.49-1.02L1.7 9.89c-.37-.46-1.12-.2-1.12.39v38.38c0 .61.21 1.2.59 1.68z" fill="#fff"></path>
      </svg>
    </div>
    <nav>
      <a href="#">Home</a>
      <a href="./quiz.php" target="_self">Quiz</a>
    </nav>
    <div class="btn-quit">
      <button name="quit"><a href="../php/quit.php">Sair</a></button>
    </div>
  </header>
  <!-- Fim Header-->

  <!-- Main -->
  <main>
    <div class="container">
      <div class="introduction">
        <h1>VALORANT</h1>
        <p>
          Valorant é um jogo de tiro tático em primeira pessoa, gratuito para
          jogar, desenvolvido e publicado pela Riot Games. Foi lançado
          oficialmente em 2 de junho de 2020.
        </p>
        <img src="../images/valorant.jpg" alt="5 agentes do valorant">
        <p>
          O jogo é baseado em partidas 5v5, onde os jogadores assumem o papel
          de “Agentes”, cada um com habilidades únicas. Cada equipe pode ter
          apenas um de cada agente ativo a qualquer momento.
          Cada agente exerce uma função específica, dentre elas:
        <ul>
          <li>Duelista</li>
          <p>A função de duelista é focada em agentes que possuem habilidades ofensivas. Eles são responsáveis por abrir caminho para a equipe e causam danos em grandes áreas e mais agressivos.</p>
          <li>Controlador</li>
          <p>Eles são responsáveis por controlar o campo de batalha e impedir que os inimigos avancem. Eles possuem habilidades que podem criar barreiras, cegar os inimigos ou desacelerar seu movimento com smokes.</p>
          <li>Iniciador</li>
          <p>Os agentes iniciam os ataques e criam oportunidades para a equipe. Eles possuem habilidades que podem desorientar os inimigos ou revelar suas posições.</p>
          <li>Sentinela</li>
          <p>Os sentinelas são agentes que são projetados para defender pontos de interesse. Eles são responsáveis ​​por proteger a equipe e impedir que os inimigos avancem. Detectam os adversários, colocam armadilhas e criam zonas seguras.</p>
        </ul>
        </p>
        <p>
          No modo de jogo principal, os jogadores são designados para as
          equipes de ataque ou defesa, cada uma com cinco jogadores. Os
          agentes têm habilidades únicas, cada uma exigindo cargas, bem como
          uma habilidade final única que requer carregamento através de
          mortes, orbes ou objetivos.
        </p>
        <p>
          Cada partida é composta por rodadas, onde o objetivo é detonar ou
          desarmar um “Spike” (explosivo), ou eliminar toda a equipe inimiga.
          O jogo é tático e de ritmo lento em comparação com outros títulos
          como Overwatch e Apex Legends.
        </p>
        <p>
          Valorant tem sido elogiado por sua curva de aprendizado íngreme e
          potencial para jogadas individuais dignas de destaque. Ele oferece
          uma experiência competitiva global, onde você tem 13 rodadas para
          atacar e defender usando tiros precisos e habilidades táticas.
        </p>
        <p>
          Em resumo, Valorant é um jogo que combina estratégia, habilidade e
          precisão em um ambiente competitivo e tático, oferecendo aos
          jogadores uma experiência única e envolvente.
        </p>
      </div>
      <div class="agents">
        <h2>Agentes</h2>
        <p>
          Atualmente, o Valorant possui 24 personagens, sendo cada um deles:
        </p>
        <h3>Brimstone (Controlador)</h3>
        <img src="../images/brimstone.jpg" alt="brimstone" height="300" class="img-agents">
        <p>
          Vindo diretamente dos EUA, o arsenal orbital do Brimstone garante
          que o esquadrão dele sempre esteja em vantagem. Sua capacidade de
          oferecer utilitários com precisão e segurança faz dele um comandante
          inigualável na linha de frente.
        </p>
        <h3>Phoenix (Duelista)</h3>
        <img src="../images/phoenix.jpg" alt="phoenix" height="300 " class="img-agents">
        <p>
          Chegando com tudo diretamente do Reino Unido, o poder estelar de
          Phoenix reluz em seu estilo de luta, incendiando o campo de batalha
          com luz e estilo. Tendo ajuda ou não, ele entra na luta como e
          quando achar que deve.
        </p>
        <h3>Sage (Sentinela)</h3>
        <img src="../images/sage.jpg" alt="sage" height="300" class="img-agents">
        <p>
          Como uma verdadeira fortaleza chinesa, Sage traz segurança para si
          mesma e para a equipe aonde quer que vá. Capaz de reviver aliados e
          rechaçar investidas agressivas, ela oferece um centro de calmaria em
          meio ao caos da batalha.
        </p>
        <h3>Sova (Iniciador)</h3>
        <img src="../images/sova.jpg" alt="sova" height="300" class="img-agents">
        <p>
          Nascido sob o eterno inverno das tundras russas, Sova rastreia,
          encontra e elimina inimigos com eficiência e precisão implacáveis.
          Seu arco personalizado e suas habilidades inigualáveis de
          reconhecimento garantem que nenhuma presa escape.
        </p>
        <h3>Viper (Controladora)</h3>
        <img src="../images/viper.jpg" alt="viper" height="300" class="img-agents">
        <p>
          Viper, a química dos Estados Unidos, emprega uma variedade de
          dispositivos químicos venenosos para controlar o campo de batalha e
          prejudicar a visão do inimigo. Se as toxinas não matarem a presa,
          seus jogos mentais certamente o farão.
        </p>
        <h3>Cypher (Sentinela)</h3>
        <img src="../images/cypher.jpg" alt="cypher" height="300" class="img-agents">
        <p>
          Cypher, um vendedor de informações do Marrocos, é uma verdadeira
          rede de vigilância de um homem só que fica de olho em cada movimento
          dos inimigos. Nenhum segredo está a salvo. Nenhuma manobra passa
          despercebida. Cypher está sempre vigiando.
        </p>
        <h3>Reyna (Duelista)</h3>
        <img src="../images/reyna.jpg" alt="reyna" height="300" class="img-agents">
        <p>
          Criada no coração do México, Reyna domina o combate individual,
          destacando-se a cada abate efetuado. Sua capacidade só é limitada
          por sua própria perícia, tornando-a bastante dependente de
          desempenho.
        </p>
        <h3>Killjoy (Sentinela)</h3>
        <img src="../images/killjoy.jpg" alt="killjoy" height="300" class="img-agents">
        <p>
          Killjoy, uma alemã genial, defende posições-chave no campo de
          batalha facilmente com seu arsenal de invenções. Se o dano causado
          por seu equipamento não der cabo dos inimigos, os efeitos negativos
          de seus queridos robôs darão conta do recado.
        </p>
        <h3>Breach (Iniciador)</h3>
        <img src="../images/breach.jpg" alt="breach" height="300" class="img-agents">
        <p>
          Breach, o homem-biônico sueco, dispara poderosos jatos cinéticos
          para forçar a abertura de um caminho pelo território inimigo. O dano
          e a interrupção que ele causa garantem que nenhuma luta seja justa.
        </p>
        <h3>Omen (Controlador)</h3>
        <img src="../images/omen.jpg" alt="omen" height="300" class="img-agents">
        <p>
          Omen, uma lembrança fantasmagórica, caça nas sombras. Ele cega os
          inimigos, teleporta-se pelo campo e deixa a paranoia assumir o
          controle enquanto o adversário tenta descobrir de onde virá seu
          próximo ataque.
        </p>
        <h3>Jett (Duelista)</h3>
        <img src="../images/jett.jpg" alt="jett" height="300" class="img-agents">
        <p>
          Representando a Coreia do Sul, sua terra natal, Jett tem um estilo
          de luta ágil e evasivo que permite que ela assuma riscos como
          ninguém. Ela corre em meio a qualquer confronto, cortando os
          inimigos antes mesmo que eles percebam quem ou o que os atingiu.
        </p>
        <h3>Raze (Duelista)</h3>
        <img src="../images/raze.jpg" alt="raze" height="300" class="img-agents">
        <p>
          Raze chega do Brasil com uma explosão de carisma e armas enormes.
          Com seu estilo de jogo "porradeiro", ela é craque em desentocar
          inimigos entrincheirados e limpar espaços apertados com uma bela
          dose de BUUUM!
        </p>
        <h3>Skye (Iniciadora)</h3>
        <img src="../images/skye.jpg" alt="skye" height="300" class="img-agents">
        <p>
          Mandando um salve direto da Austrália, Skye e sua equipe de feras
          desbravam territórios hostis. Com seus poderes de cura e suas
          criações que partem pra cima dos inimigos, qualquer equipe ficará
          mais forte e mais segura tendo Skye como aliada.
        </p>
        <h3>Yoru (Duelista)</h3>
        <img src="../images/yoru.jpg" alt="yoru" height="300" class="img-agents">
        <p>
          Yoru, nativo do Japão, abre fendas na realidade para infiltrar as
          linhas inimigas sem ser visto. Ele usa tanto artimanhas quanto
          táticas agressivas, e os alvos são abatidos sem saber de onde o
          ataque veio.
        </p>
        <h3>Astra (Controladora)</h3>
        <img src="../images/astra.jpg" alt="astra" height="300" class="img-agents">
        <p>
          Astra, a Agente ganense, utiliza energias cósmicas para moldar o
          campo de batalha a seu bel-prazer. Com total domínio da sua forma
          astral e um talento estratégico nato, ela está sempre anos-luz à
          frente dos inimigos.
        </p>
        <h3>Kay/O (Iniciador)</h3>
        <img src="../images/kayo.jpg" alt="kayo" height="300" class="img-agents">
        <p>
          KAY/O é uma máquina de guerra construída com um único propósito:
          neutralizar Radiantes. Ele é capaz de Suprimir habilidades inimigas,
          anulando a capacidade de contra-ataque dos adversários e dando a si
          e a seus aliados uma vantagem essencial em combate.
        </p>
        <h3>Chamber (Duelista)</h3>
        <img src="../images/chamber.jpg" alt="chamber" height="300" class="img-agents">
        <p>
          Bem-vestido e armado até os dentes, o criador de armas francês
          Chamber coloca os inimigos para correr com precisão mortal. Use e
          abuse do arsenal personalizado dele para segurar posições e abater
          inimigos de longe, criando a defesa perfeita para qualquer plano.
        </p>
        <h3>Neon (Duelista)</h3>
        <img src="../images/neon.jpg" alt="neon" height="300" class="img-agents">
        <p>
          Neon, nossa Agente filipina, avança em velocidades incríveis,
          descarregando surtos de radiância bioelétrica tão rapidamente quanto
          seu corpo consegue gerá-los. Ela corre à frente para pegar os
          inimigos de surpresa, abatendo-os mais rápido do que um raio.
        </p>
        <h3>Fade (Iniciadora)</h3>
        <img src="../images/fade.jpeg" alt="fade" height="300" class="img-agents">
        <p>
          Fade, uma caçadora de recompensas turca, usa o poder dos pesadelos
          para capturar os segredos dos inimigos. Personificando o próprio
          terror, ela persegue os alvos e revela seus medos mais profundos
          para, depois, destruí-los na escuridão.
        </p>
        <h3>Harbor (Controlador)</h3>
        <img src="../images/harbor.jpg" alt="harbor" height="300" class="img-agents">
        <p>
          Vindo do litoral indiano, Harbor entra em campo com a força da
          tormenta, empunhando tecnologia ancestral com domínio sobre a água.
          Ele libera corredeiras espumantes e ondas esmagadoras para proteger
          seus aliados ou atacar aqueles que se opõem a ele.
        </p>
        <h3>Gekko (Iniciador)</h3>
        <img src="../images/gekko.jpg" alt="gekko" height="300" class="img-agents">
        <p>
          Gekko, de Los Angeles, lidera um grupo muito unido de criaturas
          caóticas. Seus amigos atropelam tudo, tirando os inimigos do
          caminho. Depois, Gekko corre atrás deles para reagrupá-los e
          reiniciar o processo.
        </p>
        <h3>Deadlock (Sentinela)</h3>
        <img src="../images/deadlock.jpg" alt="deadlock" height="300" class="img-agents">
        <p>
          A agente norueguesa Deadlock posiciona uma gama de nanofios de alta
          tecnologia para proteger o campo de batalha até mesmo do ataque mais
          letal. Ninguém escapa do seu olhar vigilante. Ninguém sobrevive à
          sua ferocidade implacável.
        </p>
        <h3>Iso (Duelista)</h3>
        <img src="../images/iso.png" alt="iso" height="300" class="img-agents">
        <p>
          Iso é um mercenário chinês que entra em estado de fluxo para
          desmantelar os oponentes. Ele reconfigura a energia do ambiente para
          se proteger de balas e avança totalmente focado em direção ao
          próximo duelo até a morte.
        </p>
        <h3>Clove (Controladore)</h3>
        <img src="../images/clove.jpg" alt="clove" height="300" class="img-agents">
        <p>
          Clove, ume encrenqueire da Escócia, vai desorientar os inimigos
          tanto no calor do combate quanto no frio da morte. Jovem e imortal,
          elu mantém os inimigos confusos até do além-túmulo: momentos após a
          morte, elu retorna à vida.
        </p>
      </div>
      <div class="maps">
        <h2>Mapas</h2>
        <p>O Valorant possui 10 mapas, entre eles estão: </p>
        <h3>Sunset</h3>
        <p>Um desastre em uma instalação da Kingdom ameaça engolir toda a vizinhança. Dê um pulo no seu food truck favorito e depois lute por toda a cidade neste mapa três rotas.</p>
        <img src="../images/sunset.jpg" alt="sunset" class="img-maps" height="300">
        <h3>Lotus</h3>
        <p>Uma estrutura misteriosa com um conduíte astral irradia poder ancestral. Grandes portas de pedra oferecem várias oportunidades de movimentação e revelam caminhos para três locais enigmáticos.</p>
        <img src="../images/lotus.jpg" alt="lotus" class="img-maps" height="300">
        <h3>Pearl</h3>
        <p>Atacantes avançam em direção aos Defensores neste vibrante mapa subaquático com dois pontos principais. Pearl é um mapa sem mecânicas focado no ambiente. Encare a batalha em um Meio compacto ou em áreas mais alongadas no nosso primeiro mapa situado na Terra Ômega.</p>
        <img src="../images/pearl.jpg" alt="pearl" class="img-maps" height="300">
        <h3>Fracture</h3>
        <p>Um local de pesquisas altamente confidencial partido ao meio por um experimento com Radianita malsucedido. Com opções tão divididas quanto o próprio mapa para os defensores, a escolha é sua: encare os atacantes na própria base deles ou prepare o terreno para um ataque iminente.</p>
        <img src="../images/fracture.jpg" alt="fracture" class="img-maps" height="300">
        <h3>Breeze</h3>
        <p>Conheça as ruínas históricas ou visite as grutas deste paraíso tropical. Mas é bom se cobrir, pois temos espaços muito abertos e embates de longa distância. Cuide dos seus flancos e você poderá curtir a brisa do Breeze.</p>
        <img src="../images/breeze.jpg" alt="breeze" class="img-maps" height="300">
        <h3>Icebox</h3>
        <p>Seu próximo campo de batalha será uma área de escavação secreta da Kingdom retomada pela força do Ártico. Você precisará ter cuidado com os terrenos horizontais dos dois pontos principais, que são protegidos por neve e metal. Aproveite para usar as tirolesas, e seus inimigos nunca verão seu ataque iminente.</p>
        <img src="../images/icebox.png" alt="icebox" class="img-maps" height="300">
        <h3>Bind</h3>
        <p>Dois pontos. Nenhuma área no meio. Você precisa escolher: direita ou esquerda? E aí, qual vai ser? Ambos os lados oferecem caminhos diretos para os atacantes, e dois teleportadores de sentido único facilitam o flanqueamento.</p>
        <img src="../images/bind.jpg" alt="bind" class="img-maps" height="300">
        <h3>Haven</h3>
        <p>Sob um mosteiro abandonado, é possível ouvir agentes se enfrentando pelo controle de três pontos distintos. Neste mapa, há mais áreas para controlar. Em compensação, os defensores também conseguem aproveitar o território extra para coordenar investidas mais agressivas.</p>
        <img src="../images/haven.jpg" alt="haven" class="img-maps" height="300">
        <h3>Split</h3>
        <p>Se quiser avançar, é preciso subir. Separados por uma área central elevada, dois pontos fornecem movimentação rápida com duas cordas ascendentes. Cada ponto tem uma torre imponente que é vital para o controle da área. E não se esqueça: mantenha os olhos abertos e focados nas áreas elevadas antes que tudo vá pelos ares.</p>
        <img src="../images/split.png" alt="split" class="img-maps" height="300">
        <h3>Ascent</h3>
        <p>Com várias opções de posicionamento e conflito, um território aberto divide duas áreas em Ascent. Cada uma pode ser fortificada por portas explosivas irreversíveis que, quando derrubadas, forçam as equipes a destruí-las ou a acharem outra maneira de prosseguir. Não deixe que o inimigo tome o seu território.</p>
        <img src="../images/ascent.png" alt="ascent" class="img-maps" height="300">
      </div>
      <div class="arsenal">
        <h2>Arsenal</h2>
        <p>Existem vários tipos de armas no Valorant, divididas entre: </p>
        <h3>Armas leves</h3>
        <ul>
          <li>Classic</li>
          <img src="../images/classic.jpg" alt="classic" height="100" class="img-weapons">
          <li>Shorty</li>
          <img src="../images/shorty.jpg" alt="shorty" height="100" class="img-weapons">
          <li>Frenzy</li>
          <img src="../images/frenzy.jpg" alt="frenzy" height="100" class="img-weapons">
          <li>Ghost</li>
          <img src="../images/ghost.png" alt="ghost" height="100" class="img-weapons">
          <li>Sheriff</li>
          <img src="../images/sheriff.png" alt="sheriff" height="100" class="img-weapons">
        </ul>
        <h3>Submetralhadoras</h3>
        <ul>
          <li>Stinger</li>
          <img src="../images/Stinger.png" alt="stinger" height="100" class="img-weapons">
          <li>Spectre</li>
          <img src="../images/spectre.png" alt="spectre" height="100" class="img-weapons">
        </ul>
        <h3>Escopetas</h3>
        <ul>
          <li>Bucky</li>
          <img src="../images/bucky.jpg" alt="bucky" height="100" class="img-weapons">
          <li>Judge</li>
          <img src="../images/judge.jpg" alt="judge" height="100" class="img-weapons">
        </ul>
        <h3>Fuzis</h3>
        <ul>
          <li>Bulldog</li>
          <img src="../images/bulldog.jpg" alt="bulldog" height="100" class="img-weapons">
          <li>Guardian</li>
          <img src="../images/guardian.png" alt="guardian" height="100" class="img-weapons">
          <li>Phantom</li>
          <img src="../images/phantom.png" alt="phantom" height="100" class="img-weapons">
          <li>Vandal</li>
          <img src="../images/vandal.jpg" alt="vandal" height="100" class="img-weapons">
        </ul>
        <h3>Fuzis de precisão</h3>
        <ul>
          <li>Marshal</li>
          <img src="../images/marshal.png" alt="marshal" height="100" class="img-weapons">
          <li>Operator</li>
          <img src="../images/operator.png" alt="operator" height="100" class="img-weapons">
          <li>Outlaw</li>
          <img src="../images/Outlaw.png" alt="outlaw" height="100" class="img-weapons">
        </ul>
        <h3>Metralhadoras</h3>
        <ul>
          <li>Ares</li>
          <img src="../images/ares.png" alt="ares" height="100" class="img-weapons">
          <li>Odin</li>
          <img src="../images/odin.png" alt="odin" height="100" class="img-weapons">
        </ul>
      </div>
    </div>
  </main>
  <!-- Fim Main-->

  <!-- Footer -->
  <footer>
    <p>Desenvolvido por Marcos - 2024</p>
  </footer>
  <!-- Fim Footer -->
</body>

</html>