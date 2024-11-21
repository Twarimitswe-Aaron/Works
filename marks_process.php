<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
body{
    justify-content: center;
    align-items: center;
  
}
.title{
    
    margin-left: 5px;
    font-weight: bold;
    font-size: 20px;
}
.text{
    margin-bottom: 10px;
  align-items: center;
  display: flex;
}
.text label {
    width: 170px;
    margin-left: 5px;
}
    </style>
</head>
<body>
    <form action="marks_process.php" method="POST">
<label class="title" for="in">Fill the students' information</label><br>
<div class="text">
<label class="label" for="in">Enter the student's name</label>
<input type="text" name="name"><br>
</div>
<div class="text">
<label class="label"  for="in">Enter the student RegNo</label>
<input type="text" name="Regno"><br>
</div>
<div class="text">
<label class="label" for="in">Enter student class</label>
<input type="text" name="class"><br>
</div>
<div class="text">
<label class="label" for="in">Enter the subject</label>
<input type="text" name="subject"><br>
</div>
<div class="text">
<label class="label" for="in">Enter the quiz marks</label>
<input type="text" name="quiz"><br>
</div>
<div class="text">
<label class="label" for="in">Enter the exam marks</label>
<input type="text" name="exam"><br>
</div>
<input type="submit" value="Save Marks" >
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name=$_POST['name'];
    $Regno=$_POST['Regno'];
    $class=$_POST['class'];
    $subject=$_POST['subject'];
    $quiz=(int)$_POST['quiz'];
    $exam=(int)$_POST['exam'];
    $total=$quiz + $exam;
    if ( $name!='' &&$Regno!='' &&$class!='' &&$subject!='' &&$quiz!='' &&$exam!=''){
echo "<table border=1>";
echo "</tr>";
echo "<th>Student name</th>";
echo "<th>RegNo</th>";
echo "<th>Class</th>";
echo "<th>Subject</th>";
echo "<th>Quiz</th>";
echo "<th>Exam</th>";
echo "<th>Total</th>";
echo "<th>Grade</th>";
echo "</tr>";
echo "<tr>";
echo "<td>".$name."</td>";
echo "<td>".$Regno."</td>";
echo "<td>".$class."</td>";
echo "<td>".$subject."</td>";
echo "<td>".$quiz."</td>";
echo "<td>".$exam."</td>";
echo "<td>".$total."</td>";
if ($total>=80 && $total<100){
    echo "<td>A</td>";
}
elseif ($total>=60 && $total<80){
    echo "<td>B</td>";
}
elseif ($total>=40 && $total<60){
    echo "<td>C</td>";
}
elseif ($total>=20 && $total<40){
    echo "<td>D</td>";
}
elseif ($total>=10 && $total<20){
    echo "<td>F</td>";
} else{
    echo "<td>S</td>";
    }
}
}
?>