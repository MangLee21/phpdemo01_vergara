<!-- interval php code -->
<?php
    //external php0
    include 'pure_php.php';
?>

<!-- boiler plate -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO BSIT NT 3101</title>
</head>
<body>
    <!-- <h1>Hello World</h1> -->
    <!-- php interval code -->
    <?php //echo "<h1>Hello World<h1>"; ?>

    <a href "next_page.php">Go to next page</a>
    <h3>
        Username: <u id displayusername><?php echo $username; ?></u>
            <br>
        UserID: <u id displayuser_id><?php echo $user_id; ?></u>
            <br>
        Number: <u id displaynumber><?php echo $number; ?></u>
            <br>
        Professor: <u id displayprofessor><?php echo $professor; ?></u>
            <br>
        Student ID: <u id displaystudent_id><?php echo $student_id; ?></u>
    </h3>

    <button type="button" onclick="greetUser()">Greet User</button>
    <script>
        //create a function that can hold the value of php variables
        function greetUser(){
            alert("Hello "+username+". "+"Your User ID is: "+user_id+"Your Number is: "+number+"Your Professor is: "+professor+"Your SR Code: "+student_id);
        }
    </script>
</body>
</html>