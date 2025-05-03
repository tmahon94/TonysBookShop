<?php
session_start();
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

    <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['product'])) {
                $product = trim($_POST['product']);
                $quantity = isset($_POST['quantity']) && is_numeric($_POST['quantity']) ? (int)$_POST['quantity'] : 1;

                if (!isset($_SESSION['cart'])) {
                    $_SESSION['cart'] = [];
                }

                if (isset($_SESSION['cart'][$product])) {
                 $_SESSION['cart'][$product] += $quantity;
             } else {
                 $_SESSION['cart'][$product] = $quantity;
                }

                echo "<div class='alert alert-success mt-4'>$product added to cart!</div>";
            }
            ?>

    <div class="container mt-5">
        <h3>Moby Dick</h3>
            <img src="images/moby-dick.jpg" alt="Moby Dick book" class="img-fluid" style="max-width: 200px;" > </p>
        <p>Moby Dick is an epic novel.</p>
        <ul>
            <li>Author: Herman Melville</li>
            <li>Year published: 1851</li>
        </ul>
<!-- Cart code -->
    <h3>Buy today!</h3>
    <form action="" method="post">
        <input type="hidden" name="product" value="Moby Dick">
        <input type="number" name="quantity" value="1" min="1">
        <input type="submit" value="Click here to add to your shopping cart!">
    </form>
    <br>
    

    

    <?php include 'footer.php'; ?>

</body>
</html>