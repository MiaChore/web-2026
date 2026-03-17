<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Polish Writer</title>
</head>
<body>
  <div>
    <h1>Хеллоу, май диар, проверяющий</h1>
</div>
  <div>
    <h2>
        <?php

          $input = $_POST['math-example'];
          $characters = explode(" ", trim($input));
          $storage = [];
          foreach ($characters as $ch) {
            if (is_numeric($ch)) {
              array_push($storage, (int)$ch);
            } else {
              $b = array_pop($storage);
              $a = array_pop($storage);
              if ($ch == '+') {
                $storage[] = $a + $b;
              }
              if ($ch == '-') {
                $storage[] = $a - $b;
              }
              if ($ch == '*') {
                $storage[] = $a * $b;
              }
            }
          }
          print ($storage[0]);

        ?>
    </h2>
</div>
</body>
</html>