
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
        require "common.php";
    try {
        require_once 'C:/Users/tonym/Sites/tonysbookshop/public/src/DBconnect.php';
        $new_user = array(
            "username" => escape ($_POST['username']),
            "email" => escape ($_POST['email']),
            "password" => escape ($_POST['password'])
        );
        $sql = sprintf("INSERT INTO %s (%s) values (%s)", "users",
            implode(", ", array_keys($new_user)),
            ":" . implode(", :", array_keys($new_user)));
            $statement = $connection->prepare($sql);
            $statement->execute($new_user);
            
}   catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
    }
}
if (isset($_POST['submit']) && $statement){
    header("Location:login.php?registered=1");
    exit;
}
    ?>
    <div class="container mt-4">
        <br>
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

    

    <?php include 'footer.php'; ?>

</body>
</html>