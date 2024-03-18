<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];
    $sql = "INSERT INTO `travel`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `msg`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$msg', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <img src="./background.jpg" alt="image" class = "bg">
    <div class="container">
             <div class="heading">
                <h3>Welcome to Kalyani Government Engineering College</h3>
                <p>Enter Your Details And Submit This Form To Confirm Your Participation In The Trip</p>
                <?php
                if($insert == true){
                echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
                }
            ?>
             </div>  
                 <form action="index.php" method="post" class="content">
                        <input type="text" name = "name" id = "name" placeholder = "Enter your Name">
                        <input type="text" name = "age" id = "age" placeholder = "Enter Your Age">
                        <input type="text" name = "gender" id = "gender" placeholder = "Enter Your Gender">
                        <input type="email" name = "email" id = "email" placeholder = "Enter Your Email">
                        <input type="phone" name = "phone" id = "phone" placeholder = "Enter Your Phone">
                        <textarea type="text" name = "msg" id = "msg"  placeholder ="Message" ></textarea>
                        <button type="submit">Submit</button>
                 </form>             
    </div>   
</body>
</html>

