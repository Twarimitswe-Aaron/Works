<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
.all{
    justify-content: center;
    text-align: center;
    font-size: 40px;
}
.input{
    width: 400px;
    height: 50px;
    font-size: 40px;
    margin: 5px;
}
.button{
    width: 50px;
    height: 50px;
    font-size: 40px;
    justify-content: center;
}
    </style>
</head>
<body>

 <div class="all">
 <form action="s.c.php" method="post">
        <label class="title" for="ca">Calculate it!!!</label><br>
        <label for="first">Enter the first number:</label><br>
        <input class="input" type="number" name="first"><br>
        <label for="second">Enter the second number:</label><br>
        <input class="input" type="number" name="second"><br>
        <input class="button" type="submit"  value="+" name="operation">
        <input class="button" type="submit" value="-" name="operation">
        <input class="button" type="submit" value="×" name="operation">
        <input class="button" type="submit" value="÷" name="operation"><br>
        

    </form>
 </div>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $first=(int)$_POST['first'];
    $second=(int)$_POST['second'];
    $operation=$_POST['operation'];
    
    $sum=$first + $second;
    $difference=$first - $second;
    $product=$first * $second;
    $quotient= ($second!=0)? $first / $second:' (It is impossible to divide number by zero or empty!!)';
    if($first !='' && $second !=''){
        echo'<div class="all">';
        switch($operation){
            case '+':
            echo $first .' + '.$second. ' = '.$sum;
            echo " <label class='title' >Calculate it!!!</label><br>
        <label for='first'>Enter the first number:</label><br>
        <input class='input' type='number' name='first' value='$first'><br>
        <label for='second'>Enter the second number:</label><br>
        <input class='input' type='number' name='second' value='$second'><br>
         <input class='button' type='submit'  value='+' name='operation'>
        <input class='button' type='submit' value='-' name='operation'>
        <input class='button' type='submit' value='×' name='operation'>
        <input class='button' type='submit' value='÷' name='operation'><br>";
            break;
            case '-':
                echo " <label class='title' >Calculate it!!!</label><br>
                <label for='first'>Enter the first number:</label><br>
                <input class='input' type='number' name='first' value='$first'><br>
                <label for='second'>Enter the second number:</label><br>
                <input class='input' type='number' name='second' value='$second'><br>
                 <input class='button' type='submit'  value='+' name='operation'>
                <input class='button' type='submit' value='-' name='operation'>
                <input class='button' type='submit' value='×' name='operation'>
                <input class='button' type='submit' value='÷' name='operation'><br>";    
            echo $first .' - '.$second. ' = '.$difference;
            break;
            case '×':
                echo " <label class='title' >Calculate it!!!</label><br>
                <label for='first'>Enter the first number:</label><br>
                <input class='input' type='number' name='first' value='$first'><br>
                <label for='second'>Enter the second number:</label><br>
                <input class='input' type='number' name='second' value='$second'><br>
                 <input class='button' type='submit'  value='+' name='operation'>
                <input class='button' type='submit' value='-' name='operation'>
                <input class='button' type='submit' value='×' name='operation'>
                <input class='button' type='submit' value='÷' name='operation'><br>";    
            echo $first .' × '.$second. ' = '.$product;
            break;
            case '÷':
                echo " <label class='title' >Calculate it!!!</label><br>
                <label for='first'>Enter the first number:</label><br>
                <input class='input' type='number' name='first' value='$first'><br>
                <label for='second'>Enter the second number:</label><br>
                <input class='input' type='number' name='second' value='$second'><br>
                 <input class='button' type='submit'  value='+' name='operation'>
                <input class='button' type='submit' value='-' name='operation'>
                <input class='button' type='submit' value='×' name='operation'>
                <input class='button' type='submit' value='÷' name='operation'><br>";    
            echo $first .' ÷ '.$second. ' = '.$quotient;
            break;
            default:
            echo 'none';
            echo '</div>';
        }
    }
}

?>