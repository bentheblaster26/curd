<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="main">
      <div class="wrapper">
        <div class="siteHeader">
          <div class="navItem">C - U - R - D</div>
        </div>
        <div class="formWrapper">
          <div class="formHeader underlined">
            Database Management System
          </div>
          <div class="htmlForm">
            <form class="mainForm" action="includes/insert.php" method="post">
              <input class="formInput" type="text" name="name" placeholder="Enter your name">
              <input class="formInput" type="number" name="age" placeholder="Enter your age">
              <input class="formInput" type="text" name="city" placeholder="Enter your city">
              <button class="formInput" type="submit" name="submit">Submit</button>
            </form>
          </div>
          <div class="errorWrapper">
          <?php
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "none") {
              echo "<p class='success'>New record inserted!</p>";
            }
            elseif ($_GET["error"] == "emptyInput") {
              echo "<p class='success'>Please fill in all fields!</p>";
            }
            elseif ($_GET["error"] == "uidtaken") {
              echo "<p class='success'>Username taken!</p>";
            }
          }
          ?>
          </div>
          <div class="printRecord">
            <button class="formInput" id="printButton">Print records</button>
          </div>
        </div>
      </div>
    </div>
    <script src="js/script.js" async defer></script>
  </body>
</html>