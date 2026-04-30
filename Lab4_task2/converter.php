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

            function converter($n) {
                switch ($n) {
                    case 1:
                        echo('Один');
                        break;
                    
                    case 2:
                        echo('Два');
                        break;

                    case 3:
                        echo('Три');
                        break;

                    case 4:
                        echo('Четыре');
                        break;

                    case 5:
                        echo('Пять');
                        break;

                    case 6:
                        echo('Шесть');
                        break;

                    case 7:
                        echo('Семь');
                        break;

                    case 8:
                        echo('Восемь');
                        break;

                    case 9:
                        echo('Девять');
                        break;

                    case 0:
                        echo('Ноль');
                        break;

                    case '':
                        echo('Ввод пуст');
                        break;    

                    default:
                        echo('Неправильный ввод');
                }
            }
            
            converter($_POST['number'])
            
        ?>
    </h2>
</div>
</body>
</html>