<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    background-image: url(books.jpg);
   
}

.all{
    text-align: center;
    font-size: 40px;
   
}
.input{
    width: 400px;
    height: 40px;
    font-size: 20px;
    border:none;
    border-radius: 3px;
}
.submit{
    border: none;
    border-radius: 3px;
    height: 40px;
    width: 80px;
    font-size: 20px;
}

    </style>
</head>
<body >
   <div class="all">
   <h1>Grades determiner</h1>
    <form action="Grades.php" method='POST' >
    <label for="Firstname" class="label">Enter your Firstname here</label><br>
    <input class="input" name="Firstname" type="text" class="input" placeholder="Firstname" ><br>
    <label for="Lastname" class="label">Enter your Lastname here</label><br>
    <input class="input" name="Lastname" type="text" class="input" placeholder="Lastname" ><br>
    <label for="class" class="label">Enter your class here</label><br>
    <input class="input" Marks="class" type="text" placeholder="class" name="class"><br>
    <label for="Marks" class="label">Enter your Marks here</label><br>
    <input class="input" name="Marks" type="text" class="input" placeholder="Marks" ><br>
    <input class="submit" type="submit" value="Submit">
    </form>
   </div>


</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $a=$_POST['Firstname'];
    $b=$_POST['Lastname'];
    $c=$_POST['Marks'];
    $d=$_POST['class'];
    echo '<div class="all">';
if ($a!='' && $b!='' && $c!='' && $d!=''){
if ($c>=0 && $c <=19){
echo $a. ' ' .$b. ' From '.$d.''  , 'you have ' .$c. '(Grade Z) It is important to keep trying and not give up. Use this as motivation to study harder and achieve better results next time.';
        }
elseif ($c>19 && $c <=39){
    echo $a. ' ' .$b. ' From '.$d.','  , ' you have ' .$c. '% (Grade G) Do not be disheartened. Every step is a learning experience. With some extra effort and focus, you can improve your marks.';
}
elseif ($c>39 && $c <=49){
    echo $a. ' ' .$b. ' From '.$d.','  , ' you have ' .$c. '% (Grade F) You did a fair job. There is room for improvement, but with perseverance and hard work, you can definitely do better.';
}
elseif ($c>49 && $c <=59){
    echo $a. ' ' .$b. ' From '.$d.','  , ' you have ' .$c. '% (Grade E) You are making progress! Keep working hard and stay determined. You have the potential to improve even more.';
}
elseif ($c>59 && $c <=69){
    echo $a. ' ' .$b. ' From '.$d.','  , ' you have ' .$c. '% (Grade D) Good effort! You are on the right track. A little more dedication and you will see even greater results.';
}
elseif ($c>69 && $c <=79){
    echo $a. ' ' .$b. ' From '.$d.','  , ' you have ' .$c. '% (Grade C) Nice work! You are doing well, and with a bit more focus, you can achieve even higher marks. Keep pushing forward!';
}
elseif ($c>79 && $c <=89){
    echo $a. ' ' .$b. ' From '.$d.','  , ' you have ' .$c. '% (Grade B). Great job! You have done really well. Just a bit more effort and you will reach the top. Keep it up!';
}
elseif ($c>89 && $c <=100){
    echo $a. ' ' .$b. ' From '.$d.','  , ' you have ' .$c. '%  (Grade A). What an Outstanding work! Your dedication and hard work have truly paid off. Keep aiming high! ';
}
else{
    echo 'input valid marks out of 100';
}

    }else{
        echo 'Please fill all information in the provided space';
    }
}
echo '</div>';

?>