<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Totorial</title>
</head>
<body>
    <div class="container">
        this is my first php website
    <?php
    define('PI', 3.14);
        echo "this is printed using php";
        //secret algorithm
        /* multi line comment */ 
        
        $variable1=3;
        $variable2=4;
        echo $variable1;
        echo $variable2;
        echo $variable1+$variable2;

        //operators in php
            //  arithematic operators
            echo"<br>";
            echo"the variable1+variable2 is ";
            echo $variable1+ $variable2;
            echo"<br>";
            echo"the variable1-variable2 is ";
            echo $variable1- $variable2;
            echo"<br>";
            echo"the variable1*variable2 is ";
            echo $variable1* $variable2;
            echo"<br>";
            echo"the variable1/variable2 is ";
            echo $variable1/ $variable2;
            echo"<br>";
            //  assignment operators
            $newvar = $variable2;
            // $newvar +=1;
            // $newvar -=1;
            // $newvar *=2;
             $newvar/=2;
            echo "the new variable is: ";
            echo $newvar;
            echo"<br>";
            //  comparision operators
            echo "<h1>Comparision Operators</h2>";
            echo "The value of 1 ==4 is ";
            echo var_dump(1==4);
            echo"<br>";
            echo "The value of 1 !=4 is ";
            echo var_dump(1!=4);
            echo"<br>";
            echo "The value of 1 >=4 is ";
            echo var_dump(1>=4);
            echo"<br>";
            echo "The value of 1 <=4 is ";
            echo var_dump(1<=4);
            echo"<br>";
            // increament/decrement operators
            // echo $variable1++;
            // echo $variable1--;
            //  echo ++$variable1;
             echo --$variable1;
            echo"<br>";
            echo $variable1;
            echo"<br>";

            // logical operators and(&&), or(||), xor, !
           //$myvar= (true and true);
           // $myvar= (false and true);
          // $myvar= (false or true);  
           //$myvar= (true xor true); ans false
           //$myvar= (false xor true);   ans true
         //$myvar= (true xor false);     ans true
          // $myvar= (false xor false);  ans false
            echo"<br>";
           // echo var_dump($myvar);
    
    ?>
    <?php
        // Data types in php
        //String,Integer, Float, Boolean,Array,Object, resource,null
    echo "<br>Data Types <br>";
    $var="this is a string";
    echo var_dump($var);
    echo"<br>";

    $var=67;
    echo var_dump($var);
    echo"<br>";

    $var=76.5;
    echo var_dump($var);
    echo"<br>";

    $var=true;
    echo var_dump($var);
    echo"<br>";
    ECHO PI;
    ?>
    </div>
</body>
</html>