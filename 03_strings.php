<?php
    $str="this";
    echo $str. "<br>";
    $lenn =strlen($str);
    echo"the length is  ".$lenn . " thank you<br>";
    echo "the number of words ". str_word_count($str). ". thnk you <br>";
    echo "the reverse of string ". strrev($str). ". thnk you <br>";
    echo "to search the words is". strpos($str, "is"). ". thnk you <br>";
    echo "to replace the words ". str_replace("is","at",$str). ". thnk you <br>";

    //echo $lenn;
?>