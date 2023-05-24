<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location: user_dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <?php
            // print_r($_POST)
            if(isset($_POST["submit"])){
                $fullName = $_POST["fullname"];
                $email = $_POST["email"];
                $number = $_POST["number"];
                $phone = $_POST["phone"]; 
                $photo = $_POST["photo"];
                

                $errors = array();

                if(empty($fullName) OR empty($email) OR empty($number) OR empty($phone) OR empty($photo)){
                    array_push($errors, "All fields are required");
                }

                //if duplicate email
                require_once "database.php";


                if(count($errors) > 0){
                    foreach($errors as $error){
                        echo "<div class='alert alert-danger'>$error</div>";
                    }
                }else{
                    //we will insert the data into database
                    // require_once "database.php";
                    $sql = "INSERT INTO events (name, email, members, phone, photo) VALUES (?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn);
                    $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                    if($prepareStmt){
                        mysqli_stmt_bind_param($stmt, "sssss", $fullName, $email, $number, $phone, $photo);
                        mysqli_stmt_execute($stmt);
                        echo "<div class = 'alert alert-success'>You are registered successfully.</div>";
                    }else{
                        die("Something went wrong");
                    }
                }
            }
        ?>
        <form action="registration2.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name = "fullname" placeholder = "Full Name:">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name = "email" placeholder = "Email:">
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" name = "number" placeholder = "Members:">
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" name = "phone" placeholder = "Phone No:">
            </div>
            <div class="form-group">
                <label>Upload Your ID</label><br>
                <input type="file" class="form-control" 
                name ="photo">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" name = "submit" value = "Register Your Event">
            </div>
        </form>
    </div>    
</body>
</html>