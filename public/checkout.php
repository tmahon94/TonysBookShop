    <?php
    session_start();
    require_once('dbconfig.php');

    if (empty($_SESSION['cart'])) {
        echo "<p>Your cart is empty. <a href='index.php'>Go back to shop</a></p>";
        exit;
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

    <?php
    if (!empty($_SESSION['cart'])){
        $session_id=session_id();

        foreach ($_SESSION['cart'] as $product_id => $quantity) {
            /* Here is the log for the purchase */
            $stmt = $conn->prepare("INSERT INTO cart (session_id, product_id, quantity) VALUES (?,?,?)");
            $stmt->execute([$session_id, $product_id, $quantity]);
        

        /* take away from DB inventory */
        $update = $conn->prepare("UPDATE products SET quantity = quantity - ? WHERE id = ?");
        $update->execute([$quantity, $product_id]);
    }

     /* This will empty the cart */
     $_SESSION['cart'] = []; 
     echo "<p>Thank you for shopping at Tonys Bookshop! Your book will be delivered ASAP.</p>";
        }else{
        echo "<p>There is nothing in your cart!</p>";
        }
    ?>

    

    

    <?php include 'footer.php'; ?>

</body>
</html>