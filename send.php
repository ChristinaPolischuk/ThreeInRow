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
          <h1 class="main-title">Игра "Три в ряд"</h1>
        </header>
        <main class="main">
          <?php
            require_once 'config.php';
            $username = $_POST['username'];
            $score = $_POST['score'];

            $conn = mysqli_connect(SERVERNAME, USER, PASS, DBNAME);
            mysqli_set_charset($conn,"utf8");

            //check connection
            if(!$conn) {
              die('Connection failed: ' . mysqli_connect_error());
            }

            $sql = "INSERT INTO score (username, score, date) VALUES ('".$username."', ".$score.", ".time().")";

            if(mysqli_query($conn, $sql)) {
              echo "New record created successfully";
            } else {
              echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            mysqli_close($conn);

          ?>
        </main>
      </div>
    </div>
  </body>
</html>
