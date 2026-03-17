<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>
<body>
  <div>
    <h1>Хеллоу, май диар, проверяющий</h1>
</div>
  <div>
    <h2>
        <?php

          function CalculateFactorial($c, $cycle, $n) {
            if ($cycle >= $n) {
              print($c);
            } else {
              $c = $c * ($cycle + 1);
              $cycle = $cycle +1;
              CalculateFactorial($c, $cycle, $n);
            }
          }
          
          $number = $_POST['number'];
          $c_number = 1;
          $current_number = 1;
          CalculateFactorial($c_number, $current_number, $number);

        ?>
    </h2>
</div>
</body>
</html>