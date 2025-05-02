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

    <div class="container mt-5">
        <h1>Tonys Book Shop</h1>
        <p>Welcome to Tonys Book Shop.</p>

        <p>We offer a range of books on topics such as:</p>
        <li><a href="fiction.php">Fiction</a></li>
        <li><a href="nonfiction.php">Non-fiction</a></li>
        <p> <br>Create an account to keep up to date on our offers and get exclusive discounts!</p>
        <a href="account.php">
                <button type="button" class="btn bg-danger text-white
                     text-uppercase font-weight-bold">Sign Up</button>
                    </a>
        <p> <br>Check out our weekly offer: <br>
        <a href="mobydick.php">
            <img src="images/moby-dick.jpg" alt="Moby Dick book" class="img-fluid" style="max-width: 200px;" > </p>
        </a>
    </div>

    

    <?php include 'footer.php'; ?>

</body>
</html>