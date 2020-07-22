<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="/img/favicon.png" type="image/png" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="js/script.js"></script>
  <title>Игра Три в ряд</title>
</head>

<body>
  <div class="wrapper">
    <div class="container">
      <header class="header">
        <h1 class="main-title">
          Игра "Три в ряд"
        </h1>
      </header>
      <main class="main">
        <div class="block">
          <div class="tetris-wrap">
            <div id="tetris-field" class="tetris-field"></div>
          </div>
          <div class="user-result">
            <h3>
              Лучшие результаты
              <?php
                require_once 'show_result.php';
              ?>
            </h3>
          </div>
        </div>
        <div class="block text-field">
          <button class="start-game">Run</button>
          <ul class="game-rules">
            <li>Нажимай Run!</li>
            <li>Управляй Left Arrow, Right Arrow</li>
            <li>Собирай 3 круга в горизонтальный ряд!</li>
            <li>Каждый ряд - 10 очков!</li>
          </ul>
          <div class="score-field">0</div>
          <div class="form">
          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>