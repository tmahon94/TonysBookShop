<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!-- Start of Navbar -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<nav class="navbar navbar-light fixed-top custom-navbar">
    <div class="container d-flex justify-content-between">
        <!-- Logo -->
        <a class="navbar-brand" href="index.php">
            <img src="images/tonysbookshoplogo.jpeg" alt="Tonys Book Shop Logo" class="img-fluid" height="50">
        </a>

        <!-- Navigation Links -->
        <ul class="nav">
        <li><i class="fas fa-book fa-2x"></i></li>
        <li class="nav-item">
                <span class="nav-link no-hover text-dark text-uppercase fw-bold px-3">* Tonys BookShop *</span>
            </li>
            <li><i class="fas fa-book fa-2x"></i></li>
            <li class="nav-item">
                <a class="nav-link text-dark text-uppercase fw-bold px-3" href="index.php">Home</a>
            </li>
            <li><i class="fas fa-book fa-2x"></i></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark text-uppercase font-weight-bold px-3" href="#" id="Dropdown" role="button" data-bs-toggle="dropdown">
                  Shop
              </a>
              <ul class="dropdown-menu" aria-labelledby="Dropdown">
                  <li><a class="dropdown-item" href="fiction.php">Fiction</a></li>
                  <li><a class="dropdown-item" href="nonfiction.php">Non-fiction</a></li>   
                </ul></li>
            <li><i class="fas fa-book-open fa-2x me-3"></i></li>
            <i class="fa fa-shopping-basket"></i>
            <li>
            <a class="nav-link text-dark text-uppercase fw-bold px-3" href="cart.php">Cart</a>
            </li>
            <i class="fa fa-shopping-cart me-3"></i>
            <li class="nav-item">
                <a class="nav-link text-dark text-uppercase fw-bold px-3" href="members.php">Members</a>
            </li>
            <li><i class="fas fa-book fa-2x"></i></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark text-uppercase font-weight-bold px-3" href="#" id="Dropdown" role="button" data-bs-toggle="dropdown">
                    Account
                </a>
                <ul class="dropdown-menu" aria-labelledby="Dropdown">
                    <?php if (isset($_SESSION['Username'])): ?>
                        <li><span class="dropdown-item-text">Welcome, <?php echo htmlspecialchars($_SESSION['Username']); ?></span></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    <?php else: ?>
                        <li><a class="dropdown-item" href="Register.php">Register</a></li>
                        <li><a class="dropdown-item" href="Login.php">Login</a></li>
                    <?php endif; ?>
                </ul>
            </li>
            <li><i class="fas fa-book-open fa-2x me-3"></i></li>
        </ul>
    </div>
</nav>
<!-- End of Navbar -->