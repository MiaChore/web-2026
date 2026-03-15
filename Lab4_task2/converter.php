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
                if ($n == 1) {
                    print "Один";
                } else {
                    if ($n == 2) {
                    print "Два";
                    } else {
                        if ($n == 3) {
                            print "Три";
                        } else {
                            if ($n == 4) {
                                print "Четыре";
                            } else {
                                if ($n == 5) {
                                    print "Пять";
                                } else {
                                    if ($n == 6) {
                                        print "Шесть";
                                    } else {
                                        if ($n == 7) {
                                            print "Семь";
                                        } else {
                                            if ($n == 8) {
                                                print "Восемь";
                                            } else {
                                                if ($n == 9) {
                                                    print "Девять";
                                                } else {
                                                    if ($n == 0) {
                                                        print "Ноль";
                                                    } else {
                                                        print "Ошибка: неправильный ввод";
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }                                           
            }
            
            converter($_POST['number'])
            
        ?>
    </h2>
</div>
</body>
</html>