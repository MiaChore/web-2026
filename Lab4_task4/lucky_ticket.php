<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your sign</title>
</head>
<body>
  <div>
    <h1>Хеллоу, май диар, проверяющий</h1>
</div>
  <div>
    <h2>
        <?php
        
            $error_check = false; 
            $date = $_POST['date'];
            $month = [
                'января' => 'january',
                'февраля' => 'february',
                'марта' => 'march',
                'апреля' => 'april',
                'мая' => 'may',
                'июня' => 'june',
                'июля' => 'july',
                'августа' => 'august',
                'сентября' => 'september',
                'октября' => 'october',
                'ноября' => 'november',
                'декабря' => 'december',
            ];
            $zodiac = [ 'овен' => ['start' => 321, 'end' => 420],
                    'телец' => ['start' => 421, 'end' => 521],
                    'близнецы' => ['start' => 522, 'end' => 621],
                    'рак' => ['start' => 622, 'end' => 722],
                    'лев' => ['start' => 723, 'end' => 821],
                    'дева' => ['start' => 822, 'end' => 923],
                    'весы' => ['start' => 924, 'end' => 1023],
                    'скорпион' => ['start' => 1024, 'end' => 1122],
                    'стрелец' => ['start' => 1123, 'end' => 1222],
                    'козерог' => ['start' => 1223, 'end' => 120],
                    'водолей' => ['start' => 121, 'end' => 219],
                    'рыбы' => ['start' => 220, 'end' => 320],
            ];
            $sorted_date = str_replace(array_keys($month), array_values($month), mb_strtolower($date));
            $final_date = strtotime($sorted_date);
            if (!$final_date) {
                $error_check = true;
            }
            $md_num = (int)date('md', $final_date);
            foreach ($zodiac as $sign => $code_m) {
                if ($sign == 'козерог') {
                    if ($md_num >= $code_m['start'] or $md_num <= $code_m['end']) {
                        $search_z = $sign;
                    }
                } else {
                    if ($md_num >= $code_m['start'] and $md_num <= $code_m['end']) {
                        $search_z = $sign;
                    }
                }    
            }
            if ($error_check == true) {
                print "Ошибка: формат даты неправильный";
            } else {
                print "Твой знак зодиака " . $search_z;
            }
        ?>
    </h2>
</div>
</body>
</html>