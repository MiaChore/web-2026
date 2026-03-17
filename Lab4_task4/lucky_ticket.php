<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lucky tickets</title>
</head>
<body>
  <div>
    <h1>Хеллоу, май диар, проверяющий</h1>
</div>
  <div>
    <h2>
        <?php

          function CheckTicket($f, $s) {
            while ($f <= $s) {
              $str = (string)$f;
              $left = (int)$str[0] + (int)$str[1] + (int)$str[2];
              $right = (int)$str[3] + (int)$str[4] + (int)$str[5];
              if ($left == $right) {
                print ("$f<br>");
              }
              $f++; 
            } 
          }
          
          $first_number = $_POST['number-first'];
          $second_number = $_POST['number-second'];
          CheckTicket($first_number, $second_number);

        ?>
    </h2>
</div>
</body>
</html>