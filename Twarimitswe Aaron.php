
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .div{
            width: 30%;
        }
    </style>
</head>
<body>
    
</body>
</html><?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $searchQuery = $_POST['searchQuery'];
    $websiteURL = $_POST['websiteURL'];
    $surveyDate = $_POST['surveyDate'];
    $surveyTime = $_POST['surveyTime'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $telephone = $_POST['telephone'];
    $school = $_POST['school'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $subjects = isset($_POST['subjects']) ? $_POST['subjects'] : array();
    
    $class = $_POST['class'];
    $age = $_POST['age'];
   
    $level = $_POST['level'];
   
    $color = $_POST['color'];
    $hiddenCode = $_POST['hiddenCode'];
    $comment = $_POST['comment'];

    if  (  $surveyDate !='' &&
    $firstName !='' &&$lastName !='' && $email !='' &&$password !='' &&
    $telephone !='' && $school !='' && $gender !='' && $class !='' &&
    $age !='' &&$subjects !='' &&$level !=''  ){
   
        echo "<div class='div'><table border='1' cellspacing='0' width='100%'>
        <thead>
            <tr>
                <th>Field Name</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Search Query</th>
                <td>$searchQuery</td>
            </tr>
            <tr>
                <th>Website URL</th>
                <td>$websiteURL</td>
            </tr>
            <tr>
                <th>Survey Date</th>
                <td>$surveyDate</td>
            </tr>
            <tr>
                <th>Survey Time</th>
                <td>$surveyTime</td>
            </tr>
            <tr>
                <th>First Name</th>
                <td>$firstName</td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td>$lastName</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>$email</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>$password</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>$telephone</td>
            </tr>
            <tr>
                <th>School</th>
                <td>$school</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>$gender</td>
            </tr>
            <tr>
                <th>Class</th>
                <td>$class</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>$age</td>
            </tr>
            <tr>
                <th>Subjects</th>
                <td>$subjects</td>
            </tr>
            <tr>
                <th>Level</th>
                <td>$level</td>
            </tr>
            <tr>
                <th>Favorite Color</th>
                <td>$color</td>
            </tr>
            <tr>
                <th>Hidden Code</th>
                <td>$hiddenCode</td>
            </tr>
            <tr>
                <th>Comment</th>
                <td>$comment</td
                </div>";
                
    }else{
        echo 'Please before submit fill all required information.';
    }
    }
   

?>

