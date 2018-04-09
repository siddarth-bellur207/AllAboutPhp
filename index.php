<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>All About PHP</title>
    </head>
    <body>
        <?php
        $x=20;
        echo $x;
        echo "<br>";
        var_dump($x);
        echo  "<br>";
        print_r($x);
        $numbers=array(10,20,30,40);
        echo "<br>";
        print_r($numbers);
        echo "<br>";
        var_dump($numbers);
        $y="Hello php, how are you?";
        echo "<br>";
        echo strlen($y);
        echo "<br>";
        echo str_word_count($y);
        echo "<br>";
        $z=strrev($y);
        echo $z;
        $a="CoMpUtEr";
        $b=strtolower($a);
        echo "<br>";
        echo $b;
        echo "<br>";
        echo strtoupper($b);
        echo "<br>";
        echo strpos("I like PHP","PHP");
        echo "<br>";
        echo str_replace("PHP","Java","I like PHP");
        ?>
    </body>
</html>
