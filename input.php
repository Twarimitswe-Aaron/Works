<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>School Inspection</h1>
    <form method="POST" action="input.php">
        <input type="search" name="searchQuery" placeholder="Search"><input type="submit" value="Search"><br>
        <input type="url" name="websiteURL" placeholder="URL"><input type="submit" value="Go">
        <fieldset>
            <legend><h1>Student's Information Form</h1></legend>
            
            <label for="date">Enter the date</label><br>
            <input type="date" id="date" name="surveyDate"><br>
            
            <label for="time">Enter the time of survey</label><br>
            <input type="time" id="time" name="surveyTime"><br>
            
            <label for="first">Enter your first name</label><br>
            <input type="text" id="first" name="firstName" placeholder="First name"><br>
            
            <label for="last">Enter your last name</label><br>
            <input type="text" id="last" name="lastName" placeholder="Last name"><br>
            
            <label for="email">Enter your email here</label><br>
            <input type="email" id="email" name="email" placeholder="Email"><br>
            
            <label for="password">Enter your password</label><br>
            <input type="password" id="password" name="password" placeholder="Password" ><br>
            
            <label for="tel">Enter your telephone here</label><br>
            <input type="tel" id="tel" name="telephone" placeholder="Telephone"><br>
            
            <label for="school">Enter your school here</label><br>
            <input type="text" id="school" name="school" placeholder="School"><br>
            
            <label for="sex">Select your sex</label><br>
            <input type="radio" id="male" name="gender" value="male"><label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female"><label for="female">Female</label><br>
            
            <label for="class">Enter your class here</label><br>
            <select id="class" name="class">
                <option value="year1A">Year 1A</option>
                <option value="year1B">Year 1B</option>
                <option value="year1C">Year 1C</option>
                <option value="year2A">Year 2A</option>
                <option value="year2B">Year 2B</option>
                <option value="year2C">Year 2C</option>
                <option value="year2D">Year 2D</option>
                <option value="year3A">Year 3A</option>
                <option value="year3B">Year 3B</option>
                <option value="year3C">Year 3C</option>
                <option value="year3D">Year 3D</option>
            </select><br>
            
            <label for="age">Enter your age here</label><br>
            <input type="number" id="age" name="age" min="10" max="30"><br>
            
            <label for="subjects">Select your favourite subjects</label><br>
            <input type="checkbox" id="math" name="subjects" value="Mathematics"><label for="math">Mathematics</label><br>
            <input type="checkbox" id="physics" name="subjects" value="Physics"><label for="physics">Physics</label><br>
            <input type="checkbox" id="embedded" name="subjects" value="EmbeddedSystems"><label for="embedded">Embedded Systems</label><br>
            <input type="checkbox" id="bio" name="subjects" value="Biology"><label for="bio">Biology</label><br>
            <input type="checkbox" id="chem" name="subjects" value="Chemistry"><label for="chem">Chemistry</label><br>
            <input type="checkbox" id="history" name="subjects" value="History"><label for="history">History</label><br>
            
            <label for="level">Which level do you like</label><br>
            <input type="range" id="level" name="level"><br>
            
            <label for="file">Enter your image here</label><br>
            <input type="file" id="file" name="image"><br>
            
            <label for="color">Enter your favourite color here</label><br>
            <input type="color" id="color" name="color"><br>
            
            <label for="hidden">Code sent to phone number</label><br>
            <input type="hidden" id="hidden" name="hiddenCode" value="12345"><br>
            
            <label for="comment">Enter your comment here or your request</label><br>
            <textarea id="comment" name="comment" class="textarea"></textarea><br>
            
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </fieldset>
    </form>
</body>
</html>
<?php
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
    $gender = $_POST['gender'];
    $class = $_POST['class'];
    $age = $_POST['age'];
    $subjects = (array)$_POST['subjects'];
    $level = $_POST['level'];
   
    $color = $_POST['color'];
    $hiddenCode = $_POST['hiddenCode'];
    $comment = $_POST['comment'];

    if  ($searchQuery !='' && $websiteURL !='' &&$surveyDate !='' &&
    $surveyTime !='' &&$firstName !='' &&$lastName !='' && $email !='' &&$password !='' &&
    $telephone !='' && $school !='' && $gender !='' && $class !='' &&
    $age !='' &&$subjects !='' &&$level !=''  ){
        echo "Search Query: $searchQuery<br>";
        echo "Website URL: $websiteURL<br>";
        echo "Survey Date: $surveyDate<br>";
        echo "Survey Time: $surveyTime<br>";
        echo "First Name: $firstName<br>";
        echo "Last Name: $lastName<br>";
        echo "Email: $email<br>";
        echo "Password: $password<br>";
        echo "Telephone: $telephone<br>";
        echo "School: $school<br>";
        echo "Gender:".$gender."<br>";
        echo "Class: $class<br>";
        echo "Age: $age<br>";
        echo "Subjects: " . implode(", ", (array)$subjects) . "<br>";
        echo "Level: $level<br>";
        echo "Favorite Color: $color<br>";
        echo "Hidden Code: $hiddenCode<br>";
        echo "Comment: $comment<br>";
    }else{
        echo 'kabaye';
    }
    }
   

?>

