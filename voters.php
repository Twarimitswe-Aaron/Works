<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            
            text-align: center;
        }
        .input{
       width: 300px;
       height: 30px;
       padding: 6px;
       margin-bottom: 12px;
       background-color: antiquewhite;
       border: none;
       font-size: 19px;
        }

        .label{
       font-size: 20px;
        }
        .button{
            width: 80px;
            height: 30px;
            border: none;
        }
        .php{
            font-size: 19px;
            margin-top: 20px;
            
        }
        
    </style>
</head>
<body class="body">
<form action="voters.php" method="POST">
    <h1>Local election authority</h1>
<Label class="label">Enter <span class="span">your</span> Natonality:</Label> <br>
 <input name="input" class="input" type="text"><br>
 <Label class="label">Enter your First name:</Label> <br>
 <input name="inpu" class="input" type="text"><br>
 <Label class="label">Enter your Last name:</Label> <br>
 <input name="inp" class="input" type="text"><br>
 <Label class="label">Enter your Age:</Label> <br>
 <input name="in" class="input" type="natural number"><br>
 <button class="button">Submit</button>
 </form>
</body>
</html>
<div class="php">
    
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $first=$_POST['input'];
    $Second=$_POST['inpu'];
    $Third=$_POST['inp'];
    $Fouth=$_POST['in'];


if($first== 'Rwanda' && $Second!= '' && $Third!= '' && $Fouth!= ''&& $Third!= ''){

    if($first!= '' && $Second!= '' && $Third!= '' && $Fouth!= ''&& $Third!= ''){

        if($Fouth>=18){
            echo ''.$Second .' '.$Third .'  you have '.$Fouth.' years, so you are eligible to vote in Rwanda.' ;
        }
        else{
            echo 'Oops!! '.$Second .' '.$Third .'  you have '.$Fouth.' years, so you are too young to vote may be you will vote next time.';
        }
    }

    }
    else if($first != 'Rwanda' && $Second!= '' && $Third!= '' && $Fouth!= ''&& $Third!= ''){
      echo'  Go and register to be Rwandan after you will be allowed to vote '; 
}
else{
    echo '';
}
}
?>
</div>