
<?php 
session_start();
require_once 'dbconfig.php'; // Database connection
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- Custom CSS-->
     <link rel="stylesheet" href="css/style.css">
     <!-- CDN Icons-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--    fontawesome-->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <title>Tonys Book Shop Website</title>  
</head>
<body>
<?php include 'header.php'; ?>
<?php
    if (isset($_POST['submit'])) {
        $username = trim($_POST['username']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if (!empty($username) && !empty($email) && !empty($password)) {
            // Hash the password before storing
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Prepare SQL statement with named placeholders
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");

            // Bind the parameters correctly
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);

            // Execute the statement
            if ($stmt->execute()) {
                echo "Registration successful. <a href='login.php'>Login here</a>";
            } else {
                echo "Error: " . implode(" ", $stmt->errorInfo());
            }

            // Close the statement
            $stmt->closeCursor();
        } else {
            echo "Please fill in all fields.";
        }
    }
    ?>
    
    <div class="container mt-4">
        <br>
        <?php
        if (isset($_POST['submit']) && $stmt->rowCount() > 0) {
            echo "<div class='alert alert-success'>Registration successful. <a href='login.php'>Login here</a></div>";
        }
        ?>
        <h1>Register</h1>
        <p>Fill in the below form to become a member of Tonys Bookshop!</p>
        <form method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <input type="submit" name="submit" value="Submit">
        </form>

        <a href="login.php">Already registered? Login here instead.</a>

    <?php include 'footer.php'; ?>

</body>
</html>