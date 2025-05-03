

<?php 
session_start();
require_once('dbconfig.php'); // Database connection
?>

<?php
    if (isset($_POST['submit'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        if (!empty($username) && !empty($password)) {
            // Prepare SQL query to fetch user
            $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = :username");
            
            // Bind parameters using bindParam
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);

            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            

            if ($user) {
                $db_username = $user['username'];
                $db_password = $user['password'];

                // Verify password hash
                if (password_verify($password, $db_password)) {
                    $_SESSION['Username'] = $db_username;
                    $_SESSION['Active'] = true;
                    header("Location: index.php");
                    exit;
                } else {
                    echo "<p>Incorrect username or password.</p>";
                }
            } else {
                echo "<p>User not found.</p>";
            }
            $stmt->closeCursor();  // Close the cursor
        } else {
            echo "<p>Please enter both username and password.</p>";
        }
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
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

    <body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>

        <label for="inputUsername">Username</label>
        <input name="username" type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>

        <label for="inputPassword">Password</label>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <br>
        

        <button name="submit" class="button" type="submit">Sign in</button>

        <a href="register.php">Don't have an account? Click here to sign up.</a>
    </form>

  

    

    <?php include 'footer.php'; ?>

</body>
</html>