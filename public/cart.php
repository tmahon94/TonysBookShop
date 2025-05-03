<?php
session_start();
?>

   
   <?php    
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['remove'])) {
            $itemToRemove = $_POST['remove'];
            if (isset($_SESSION['cart'][$itemToRemove])) {
                unset($_SESSION['cart'][$itemToRemove]);
                echo "<div class='alert alert-warning mt-2'>$itemToRemove removed from cart.</div>";
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

            <h2>Shopping Cart</h2>
            <?php
            if (!empty($_SESSION['cart'])) {
                echo "<ul>";

                /* Remove item from cart */
                foreach ($_SESSION['cart'] as $item => $qty) {
                    echo "<li>$item — Quantity: $qty 
                        <form method='post' style='display:inline'>
                            <input type='hidden' name='remove' value='" . htmlspecialchars($item) . "'>
                            <input type='submit' value='Remove'>
                        </form>
                    </li>";
                }
                echo "</ul>";

                /* Checkout button */
                echo "
                    <form method='post' action='checkout.php'>
                        <button type='submit' class='btn btn-primary'>Checkout</button>
                    </form>";
            } else {
                echo "<p>Your cart is empty.</p>";
            }
            ?>

    

    <?php include 'footer.php'; ?>

</body>
</html>