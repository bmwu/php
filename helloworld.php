<!DOCTYPE html>
<html>
<body>

    <?php
        echo "hello world\n";
        $member['name'] = 'michael';
        $st_so_powerful = 'good';
        strtoupper($st_so_powerful);
        echo $st_so_powerful;
    ?>
    <?php
    echo "string\n";
    if (true) {
        echo "my first php script\n";
    }
    

    $color = "red";
    echo "My car is " . $color . "<br>";
    echo "My house is " . $COLOR . "<br>";
    echo "My boat is " . $coLOR . "<br>";

    ?>

    <?php 
    //print_r($_SERVER);
    ?>

    <?php 
    // This a single-line comment
    # This is also a single-line comment
    /*
    This is a muiltple-lines comment block
    that spans over multiple lines
     */
    
    // You can also comments to leave out parts of a code line
    $x = 5 /* + 15 */ + 5;
    echo $x;
    ?>

    <?php
    $txt = "Hello world!";
    $x=5;
    $y=10.5;
    echo $txt . "xxx";
    ?>

    <?php
    $x1 = 5;
    $y = 10;

    function myTest() {
        static $x = 0;
        echo $x;
        $x++;
        $x1 = 10;
        $GLOBALS['y'] = $GLOBALS['x1'] + $GLOBALS['y'];
        echo "<p>xxx: $x1 </p>\n";
    }

    myTest();
    myTest();
    myTest();

    echo "xxx: $x1 & $y";
    ?>

    <?php
    // print statement
    print "hello world\n";
    $x=5;
    $y=10;
    print $x+$y;
    ?>



</body>
</html>