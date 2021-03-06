<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Drusawin</h1>
    <?php
    echo " Vongpramate";
    ?>
    <!-- short term -->
    <?= "My name is win" ?>

    <?php
    $name = "Win";
    $x = 5;
    $y = 10.5;

    echo "<br>";
    echo $x + $y;
    echo "<br>";
    echo @($name + $x);
    echo "<br>";
    echo $name . $y;

    $arr = array("X", "Y", 50);
    echo "<br>";
    echo $arr;
    echo "<br>";
    echo $arr[1];
    echo "<br>";
    var_dump($arr);

    $asr = array("x" => 20, "y" => "win");
    echo "<br>";
    echo $asr["x"];

    $masr = array(
        array("x", "y", "z"),
        array(1, 2)
    );
    echo "<br>";
    echo $masr[0][1];

    $json = '{"x":20,"y":"or"}';
    $json = json_decode($json);
    echo "<br>";
    var_dump($json);
    echo "<br>";
    echo $json->y;

    //control expression
    echo "<br>";
    if ($arr == true) {
        echo "$arr is true";
    } else
        echo "$arr is false";

    echo "<br>";
    echo $arr != true ? "$arr is false" : "$arr is true";

    for ($x = 1; $x <= 5; $x++) {
        echo "X is $x <br>";
    }

    foreach ($json as $key => $value) {
        echo "$key : $value <br>";
    }

    $x = 5;
    while ($x >= 0) {
        echo "X is $x <br>";
        $x--;
    }

    $x = 3;
    do {
        echo "X :: $x <br>";
        $x--;
    } while ($x >= 0);

    //function
    $xxx = 10;
    function calTriangle($height , $base){
        echo $GLOBALS['xxx'];
        
        $area = $height * $base / 2;
        $arr = array($area,$base);
        return $arr;
    }

    echo "<br>";
    echo calTriangle(10,2);
    $result = calTriangle(50,15);
    [$area,$base] = calTriangle(50,15);
    echo "<br>";
    echo $result[0];
    echo "<br>";
    echo $area;
    ?>
</body>

</html>