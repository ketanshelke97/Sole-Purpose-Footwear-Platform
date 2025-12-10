<?php
// We start the session on the header file,
// which will be included by *every* other page.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$loggedin = false;
if (isset($_SESSION['Loggedin']) && $_SESSION['Loggedin'] == true){
    $loggedin = true;
}
?>

<header>
    <nav class="navbar">
        <a href="index.php" class="logo">Sole Purpose</a>
        <button class="hamburger-menu" aria-label="Toggle navigation">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
        <ul class="nav-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>

            <li class="nav-item-dropdown">
                <a href="#">Men</a>
                <div class="mega-menu">
                    <div class="mega-menu-column">
                        <h4><a href="bestseller.php">Best Sellers</a></h4>
                        <h4>New Arrivals</h4>
                        <h4>Orthopedic</h4>
                        <h4>Sale</h4>
                    </div>
                    <div class="mega-menu-column">
                        <h4>Shoes</h4>
                        <ul>
                            <li><a href="men-all-shoes.php">All Shoes</a></li>
                            <li><a href="men-loafers.php">Loafers</a></li>
                            <li><a href="men-dress-shoes.php">Dress</a></li>
                            <li><a href="men-boots.php">Boots</a></li>
                            <li><a href="men-slides.php">Slides</a></li>
                        </ul>
                    </div>
                    <div class="mega-menu-column">
                        <h4>Accessories</h4>
                        <ul>
                            <li><a href="shoe-care.php">Shoe Care</a></li>
                            <li><a href="insoles.php">Insoles</a></li>
                            <li><a href="laces.php">Laces</a></li>
                            <li><a href="socks.php">Socks</a></li>
                            <li><a href="bunion-correctors.php">Bunion Correctors</a></li>
                            <li><a href="toe-separators.php">Toe Separators</a></li>
                            <li><a href="arch-cushions.php">Arch Cushions</a></li>
                            <li><a href="heel-pads.php">Heel Pads</a></li>
                        </ul>
                    </div>
                    <div class="mega-menu-column">
                        <h4>Foot Pain</h4>
                        <ul>
                            <li><a href="orthopedic-men.php">Orthopedic</a></li>
                            <li><a href="heel-pain-men.php">Heel Pain</a></li>
                            <li><a href="arch-support-men.php">Arch Support</a></li>
                            <li><a href="flat-feet-men.php">Flat Feet</a></li>
                        </ul>
                    </div>
                </div>
            </li>

            <li class="nav-item-dropdown">
                <a href="#">Women</a>
                <div class="mega-menu">
                    <div class="mega-menu-column">
                        <h4><a href="bestseller.php">Best Sellers</a></h4>
                        <h4>New Arrivals</h4>
                        <h4>Orthopedic</h4>
                        <h4>Sale</h4>
                    </div>
                    <div class="mega-menu-column">
                        <h4>Shoes</h4>
                        <ul>
                            <li><a href="women-all-shoes.php">All Shoes</a></li>
                            <li><a href="women-loafers.php">Loafers</a></li>
                            <li><a href="women-heels.php">Heels</a></li>
                            <li><a href="women-boots.php">Boots</a></li>
                            <li><a href="women-slides.php">Slides</a></li>
                        </ul>
                    </div>
                    <div class="mega-menu-column">
                        <h4>Accessories</h4>
                        <ul>
                            <li><a href="shoe-care.php">Shoe Care</a></li>
                            <li><a href="insoles.php">Insoles</a></li>
                            <li><a href="laces.php">Laces</a></li>
                            <li><a href="socks.php">Socks</a></li>
                            <li><a href="bunion-correctors.php">Bunion Correctors</a></li>
                            <li><a href="toe-separators.php">Toe Separators</a></li>
                            <li><a href="arch-cushions.php">Arch Cushions</a></li>
                            <li><a href="heel-pads.php">Heel Pads</a></li>
                        </ul>
                    </div>
                    <div class="mega-menu-column">
                        <h4>Foot Pain</h4>
                        <ul>
                            <li><a href="orthopedic-women.php">Orthopedic</a></li>
                            <li><a href="heel-pain-women.php">Heel Pain</a></li>
                            <li><a href="arch-support-women.php">Arch Support</a></li>
                            <li><a href="flat-feet-women.php">Flat Feet</a></li>
                        </ul>
                    </div>
                </div>
            </li>

            <li><a href="cart.php">Cart</a></li>

            <!-- DYNAMIC LOGIN/LOGOUT LINKS -->
            <?php
            if(!$loggedin){
                echo '<li><a href="login.php">Login</a></li>';
                echo '<li><a href="signup.php">Signup</a></li>';
            }
            if($loggedin){
                echo '<li><a href="profile.php">Profile</a></li>';
                echo '<li><a href="logout.php">Logout</a></li>';
            }
            ?>
            <!-- END DYNAMIC LINKS -->

        </ul>
    </nav>
</header>
