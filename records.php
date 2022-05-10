<?php
  include_once "includes/fetch.php"
?>

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
          <div class="helpfulAdviceUwU">
            | Scroll to view more records |
          </div>
          <div class="tableWrapper">
            <div class="recordsTable">
            <table class="recordsTable">
              <tr>
                <th class="tableHeader">ID</th>
                <th class="tableHeader">Name</th>
                <th class="tableHeader">Age</th>
                <th class="tableHeader">City</th>
              </tr>
              <!-- PHP CODE TO FETCH DATA FROM ROWS-->
              <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
              ?>
              <tr>
                <!--FETCHING DATA FROM EACH 
                ROW OF EVERY COLUMN-->
                <td class="tableItem"><?php echo $rows['usersId'];?></td>
                <td class="tableItem"><?php echo $rows['usersName'];?></td>
                <td class="tableItem"><?php echo $rows['usersAge'];?></td>
                <td class="tableItem"><?php echo $rows['usersCity'];?></td>
              </tr>
              <?php
                }
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>
    <script src="js/script.js" async defer></script>
  </body>
</html>