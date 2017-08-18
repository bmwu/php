<?php
    define("GREETING", "Welcome to my home\n");
    echo GREETING;

    define("GREETING2", "Welcome to my room\n", true);
    echo GREETING2;

    function myTest() {
        echo GREETING2;
    }

    myTest();
?>