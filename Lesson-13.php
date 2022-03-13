<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson-13</title>
    <style>
        h1 {
          font-size: 15px;
          font-weight: 600;
           }
    </style>
</head>
<body>
    <?php 

      function getStr($a){
        $result = "";
        $delimiter = '';
        for($i=$a;$i<=15;$i++){
          $result = $result . $delimiter . $i;
          $delimiter = ', ';
        }
        return $result;
      }

      echo "<h1> 1 task </h1>";
      $a = -5;
      $b = 25;
      if ($a >= 0 and $b >= 0) {
        echo $a - $b;
      } elseif ($a < 0 and $b < 0) {
        echo $a * $b;
      } else {
        echo $a + $b;
      }
      echo "<br>";

      echo "<h1> 2 task </h1>";
      $a = 0;
      switch($a){
          case 0: echo '0, ';
          case 1: echo '1, ';
          case 2: echo '2, ';
          case 3: echo '3, ';
          case 4: echo '4, ';
          case 5: echo '5, ';
          case 6: echo '6, ';
          case 7: echo '7, ';
          case 8: echo '8, ';
          case 9: echo '9, ';
          case 10: echo '10, ';
          case 11: echo '11, ';
          case 12: echo '12, ';
          case 13: echo '13, ';
          case 14: echo '14, ';
          case 15: {echo '15 ';
                    break;}
          default: 
            echo 'число не удовлетворяет условию 0..15';
      };
      echo '<br>';


      echo "<h1> 3 task </h1>";
      $value = match ($a) {
        0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15 => getStr($a),
        default => 'число не удовлетворяет условию 0..15',
      };
      echo $value . "<br>";
?>
</body>
</html>
