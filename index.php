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
        echo $x;//using echo for output of scalar
        echo "<br>";
        var_dump($x);//using var_dump() to output a scalar
        echo  "<br>";
        print_r($x);//using print_r() to output a scalar
        $numbers=array(10,20,30,40);//creating an array
        echo "<br>";
        print_r($numbers);//printing array using print_r()
        echo "<br>";
        var_dump($numbers);//using var_dump to output an array
        $y="Hello php, how are you?";//initializing a string
        echo "<br>";
        echo strlen($y);//finding length of string
        echo "<br>";
        echo str_word_count($y);//finding number of words in string
        echo "<br>";
        $z=strrev($y);//reversing string and saving it in another variable
        echo $z;//output the variable holding the reverse of string
        $a="CoMpUtEr";//initializing another string
        $b=strtolower($a);//converting all characters of string to lower case and storing it in a variable
        echo "<br>";
        echo $b;//output the variable holding lower case
        echo "<br>";
        echo strtoupper($b);//conversion of string back to upper case
        echo "<br>";
        echo strpos("I like PHP","PHP");//finding position of word "PHP" in string
        echo "<br>";
        echo str_replace("PHP","Java","I like PHP");//replacing a word with another in a string
        ?>
    </body>
</html>
