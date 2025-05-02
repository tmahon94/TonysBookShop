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
        <h3>Moby Dick</h3>
            <img src="images/moby-dick.jpg" alt="Moby Dick book" class="img-fluid" style="max-width: 200px;" > </p>
        <p>Moby Dick is an epic novel.</p>
        <ul>
            <li>Author: Herman Melville</li>
            <li>Year published: 1851</li>
        </ul>

    <h3>Buy today!</h3>
    <form action="mobydick.php" method="post">
        <table>
            <tr><th>Item</th><th>Quantity</th></tr>
            <tr><td>Moby Dick</td><input type="text" name="Moby Dick" size="2"></td></tr>
        </table>
        <input type="submit" value="Click here to add to your shopping cart!">
    </form>
    <br>
    <?php
        if (isset($_POST['Moby Dick'])){
            if (is_numeric($_POST['Moby Dick'])){
                $_SESSION['cart']['Moby Dick'];
               /* <!-- Resume here --> */

    </div>

    

    <?php include 'footer.php'; ?>

</body>
</html>