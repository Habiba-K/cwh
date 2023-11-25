<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Totorial</title>
</head>

<style>
    *{
        margin=0;
        padding=0;
        box-sizing:border-box;
    }
.container{
    max-width: 80%;
    background-color:gray;
    margin:auto;
    padding:23px;
}
</style>

<body>

    <div class="container">
        <h1>lets learn about php</h1>
        <p>your party status is here: </p>
        <?php
        $age=7;
        if($age>18)
        {
            echo"you can go to party";

        }else if($age==7)
        {
            echo"you are 7 years old";

        }
        else{
            echo"you can not go to party";
        }
         //arrays
        $languages=array("python","css","c++","php");
        // echo $languages[0];
        // echo count($languages);

        //loops in php
        $a=0;  
        while ($a <= 10) {
            echo "<br> the value of a = ";
            echo $a;
            $a++;
        }

         //iterating arrays by using while loops in php
         $a=0;  
         while ($a < count($languages)) {
             echo "<br> the value of languages = ";
             echo $languages[$a];
             $a++;
         }
         // do-while loops in php
         $a=0;  
         do{
            echo "<br> the value of a do while = ";
            echo $a;
            $a++;
        }
         while ($a < 10);

          // for loops in php
          for ($i =0; $i < 10 ; $i++) { 
            echo "<br> the value of i for loop = ";
            echo $i;
          }

          foreach ($languages as $value) {
            echo "the array is ";
            echo $value;
            echo"<br>";
          }
        
        function print5()
        {
            echo"five";

        }
        print5();
        print5();

        function print_number($num)
        {
            echo"<br>the number is ";
            echo $num;
        }
        print_number(45);
        print_number(4);
        print_number(5);

        ?>

    </div>

</body>
</html>