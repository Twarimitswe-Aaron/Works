<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      body{
        float:  initial;
        justify-content: center;
        background-attachment: fixed;
        height: 90vh;
        background-color: bisque;
      }
      .form{
        position: relative;
        left: 500px;
        font-size: 20px;
      }
      .input{
        width: 250px;
        height: 20px;
        padding: auto;
        border: 0.5;
      }
      .input:hover{
        border: 0.5;
      }

      .inpu{
        cursor: pointer;
        width: 70px;
        height: 30px;
        font-size: 15px;
      }
      .inpu:hover{
        background-color: pink;
        transition: 4s ease;
        border: 0;
        
      }
.for{
  font-size: 20px;
}
    </style>
</head>
<body>
    <div class="form">
        <h1 class="for">  Celsius to Fahrenheit converter (°C to °F)</h1>
        <form action="celcius.php" method="POST">
            <label for="converter">  Celsius to Fahrenheit (°C to °F)</label><br>
            <input type="text" class="input" name="celsius"><br><br>
            <input type="submit" class="inpu" value="convert">
        </form>
    </div>
<div class="form">
  
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = $_POST['celsius'];
        if ($celsius != '') {
            $fahrenheit = $celsius * 1.8 + 32;
            
            echo'<br>';
            echo'Answer:';
            echo'<br>';
            echo $celsius . '°C is equal to ' . $fahrenheit . '°F';
            echo '<br>';
            echo 'Solution';
            echo '<br>';
            echo 'Fahrenheit = (Celsius × 9/5) + 32';
            echo '<br>';
            echo 'Then the answer is ' . $fahrenheit . '°F';
        }
    }
    ?>
</div>
</body>
</html>


