<!doctype html>
 <html>
<body>
<h1>QUIZ TIME</h1>





<p>is this a quiz?</p>
<form action="quiz" method="post">
<div>
  <input  type="radio" name="q1" value="yes"> 
  <label for= "yes">Yes</label>
</div>
<div>
  <input type="radio" name="q1" value = "no"> 
  <label for="no">No</label>
</div>
<div>
  <input type="radio" name="q1" value = "maybe"> 
  <label for="maybe">Maybe</label>
</div>



<p>How many time zones are there in Russia?</p>
<div>
  <input  type="radio" name="q2" value="two"> 
  <label for= "two">Two</label>
</div>
<div>
  <input type="radio" name="q2" value = "ten"> 
  <label for="ten">Ten</label>
</div>
<div>
  <input type="radio" name="q2" value = "eleven"> 
  <label for="eleven">Eleven</label>
</div>



<p>Which of the following empires had no written language: Incan, Aztec, Egyptian, Roman? </p>
<div>
  <input  type="radio" name="q3" value="incan"> 
  <label for= "incan">Incan</label>
</div>
<div>
  <input type="radio" name="q3" value = "aztec"> 
  <label for="aztec">Aztec</label>
</div>
<div>
  <input type="radio" name="q3" value = "egyptian"> 
  <label for="egyptian">Egyptian</label>
</div>
<div>
  <input type="radio" name="q3" value = "roman"> 
  <label for="roman">Roman</label>
</div>



<p>Where was the first modern Olympic Games held?</p>
<div>
  <input  type="radio" name="q4" value="athens"> 
  <label for= "athens">Athens</label>
</div>
<div>
  <input type="radio" name="q4" value = "berlin"> 
  <label for="berlin">Berlin</label>
</div>
<div>
  <input type="radio" name="q4" value = "rome"> 
  <label for="rome">Rome</label>
</div>




<p>What was the clothing company Nike originally called? </p>
<div>
  <input  type="radio" name="q5" value="nike"> 
  <label for= "nike"> Nike Athletics</label>
</div>
<div>
  <input type="radio" name="q5" value = "blue"> 
  <label for="blue">Blue Ribbon Sports</label>
</div>
<div>
  <input type="radio" name="q5" value = "nabholz"> 
  <label for="nabholz">Nabholz</label>
</div>
<div>
<input type = "submit" name = "submit" value = "Submit">
  </div>




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
  
</form>
</body>

</html>