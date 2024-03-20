<?php
//This variable stores the hostname of mysql server.
$serverName = "localhost";

//This variable stores the username used to connect to the MySQL database.
$user = "root";

//This variable stores the pass used to connect to the MySQL database.
$pass = "";

//This variable stores the name of the database yo want to connect to within the MySQL server.
$databaseName = "monbmi";

//Establishing the connection between php and your database
$conn = new mysqli($serverName, $user, $pass, $databaseName);

//Checking the connection if its successfully established or not
if ($conn->connect_error) {
    die("Connection Failed: ".$conn->connect_error);
}
echo "Connection Established!";
?>

<?php 
   
//PASSING THE DATA FROM HTML TO PHP AND STORE IT IN VARIABLES
if (isset($_POST['submit'])) {
   
    $fname = $_POST['fname'];
    $age = $_POST['age'];
    $addr = $_POST['addr'];
    $contact = $_POST['contact'];
    $bday = $_POST['bday'];
    $gender = $_POST['gender'];
    $bloodtype = $_POST['bloodtype'];
    $heightmetric = $_POST['heightmetric'];
    $weightmetric = $_POST['weightmetric'];
    $heightimperial = $_POST['heightimperial'];
    $weightimperial = $_POST['weightimperial'];

    // Calculate BMI results
    $bmimetricresult = $weightmetric / ($heightmetric * $heightmetric);
    $bmimetricresult = number_format($bmimetricresult, 2);

    $bmiimperialresult = $weightimperial / ($heightimperial * $heightimperial) * 703;
    $bmiimperialresult = number_format($bmiimperialresult, 3);

    //INSERT DATA TO DATABASE
    $sql = "INSERT INTO `bmiactivity` (`name`, `age`, `address`, `contactnumber`, `birthdate`, `gender`, `bloodtype`, `heightmetric`, `weightmetric`, `bmiresultmetric`, `heightimperial`, `weightimperial`, `bmiresultimperial`) VALUES ('$fname', '$age', '$addr', '$contact', '$bday', '$gender', '$bloodtype', '$heightmetric', '$weightmetric', '$bmimetricresult', '$heightimperial', '$weightimperial', '$bmiimperialresult')";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "New record created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 
    $conn->close(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student information </title>
</head>
<body>
  
    <form action="" method="POST">
        <fieldset>
            <legend align ="center">Student Information:</legend>
            
            
            name:<br>
            <input
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            type="text" name="fname"><br>
            Age:<br>
            <input type="number" name="age"><br>
            Address:<br>
            <input type="text" name="addr"><br>
            Contact Number:<br>
            <input type="tel" name="contact"><br>
            Birthdate:<br>
            <input type="text" name="bday"><br>
            Gender:<br>
         
        </fieldset>


    </form>
</body>

<?php
$sql= Select * FROM "dttabel";

    $result= $conn> query ($sql);

    if ($result ==  true){
        echo" record cread successfully";
    }else{
        echo 'error',$sql, "br", $conn-$error;
         
    }$conn = close();


?>

</html>











<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: #333;
        }

        form {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        fieldset {
            border: none;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

</html>
