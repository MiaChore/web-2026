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

            $year = $_POST['year'];
            if (empty($year)) {
                print "А где год..." . "<br>";
                print '<img src="/media/no-year.gif" alt="Форма пустая">';
            } else {
                if ($year % 400 == 0) {
                    print "Год високосный" . "<br>";
                    print '<img src="/media/yes.gif" alt="Всё верно">';
                } else {
                    if ($year % 4 == 0) {
                        print "Год високосный" . "<br>";
                        print '<img src="/media/yes.gif" alt="Всё верно">';
                    } else {
                        print "Год не високосный" . "<br>";
                        print '<img src="/media/no.gif" alt="Неправильно">';
                    }
                }
            }
            
        ?>
    </h2>
</div>
</body>
</html>