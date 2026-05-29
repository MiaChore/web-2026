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
        $stack = [];
        $top = -1;

        for ($i = 0; isset($input[$i]); $i++) {
          $ch = $input[$i];
          if ($ch >= '0' && $ch <= '9') {
            $top++;
            $stack[$top] = (int)$ch;
          }
          if ($ch == '+' ) {
            $b = $stack[$top];
            $top--;
            $a = $stack[$top];
            $top--;
            $top++;
            $stack[$top] = $a + $b;
          }
          if ($ch == '-') {
            $b = $stack[$top];
            $top--;
            $a = $stack[$top];
            $top--;
            $top++;
            $stack[$top] = $a - $b;
          }
          if ($ch == '*') {
            $b = $stack[$top];
            $top--;
            $a = $stack[$top];
            $top--;
            $top++;
            $stack[$top] = $a * $b;
          }
        }
        echo $stack[0];

      ?>
    </h2>
</div>
</body>
</html>