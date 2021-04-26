<?php

$radio = [$_POST["q1"],$_POST["q2"],$_POST["q3"],$_POST["q4"],$_POST["q5"]];
$ans = ["yes","eleven","incan","athens","blue"];
$q = ["is this a quiz?","How many time zones are there in Russia","Which of the following empires had no written language: Incan, Aztec, Egyptian, Roman?","Where was the first modern Olympic Games held?","What was the clothing company Nike originally called?"];
$sum = 0;
$score = 100 * ($sum/count($radio));

for($i=0; $i< count($radio); $i++)
{
    if($radio[$i] == $ans[$i])
    {
      $sum = $sum++;
    }
    echo $q[$i]."<br>";
    echo "your answer: " . $radio[$i] ."<br>";
    echo "Correct answer: " . $ans[$i]. "<br>";
    
}
    echo "Your score is: " .$score . "<br>";


    ?>
  
