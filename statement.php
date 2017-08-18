<?php
    $t = date("H");

    if ($t < "20") {
        echo "have a good day!\n";
    } else {
        echo "have a good night!\n";
    }

    $favcolor = "red";
    switch ($favcolor) {
        case 'red':
            echo "red\n";
            break;
        case 'blue':
        default:
            echo "bule\n";
            break;
    }

    $x = 1;

    while ($x <= 5) {
        echo "The number is: $x\n";
        $x++;
    }

    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x\n";
    }

    $colors = array("red", "green", "blue", "yellow");

    sort($colors);

    foreach ($colors as $key => $value) {
        echo "$value\n";
    }

    rsort($colors);

    foreach ($colors as $key => $value) {
        echo "$value\n";
    }

    function writeMsg($fname = "world") {
        echo "Hello $fname\n";
        return 1;
    }

    writeMsg();
    echo writeMsg("michael") . "\n";

    $cars = array("volvo", "bmw\n" );

    echo "I like " . $cars[1];
    echo count($cars) . "\n";


    $age = array('peter' => 23, 'ben' => 22);
    // asc, according to value
    asort($age);
    // asc, according to key
    ksort($age);
    // desc, according to value
    arsort($age);
    // desc, according to key
    krsort($age);
    echo "peter is " . $age['peter'] . "\n";

    foreach ($age as $key => $value) {
        echo "key = " . $key . ", value = " . $value . "\n";
    }
?>