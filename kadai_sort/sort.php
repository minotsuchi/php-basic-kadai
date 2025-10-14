<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        

$nums = [15, 4, 18, 23, 10 ];

function sort_2way($array, $order) {
      if ($order) {
        sort($array);
      } else {
        rsort($array);
      }

      return $array;
    }

    $num = [15, 4, 18, 23, 10];

    // 昇順の結果を受け取って表示
    $sorted_asc = sort_2way($num, TRUE);
    echo "昇順にソートします。<br>";
    foreach ($sorted_asc as $value) {
      echo $value . '<br>';
    }

    // 降順の結果を受け取って表示
    $sorted_desc = sort_2way($num, FALSE);
    echo "降順にソートします。<br>";
    foreach ($sorted_desc as $value) {
      echo $value . '<br>';
    }

        
        ?>
    </p>
</body>

</html>