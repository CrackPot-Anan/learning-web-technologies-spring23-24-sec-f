<?php
require_once('../model/userModel.php');
if (isset($_COOKIE['flag'])) {
    $username = $_COOKIE['username'];
    $role = getRole($username);
}
?>

<html>

<head>
    <title>HOME</title>
    <link rel="stylesheet" href="../CSS/styleHome1.css">
</head>

<body>
    <table border="1" cellpadding="5" cellspacing="0" width="80%" align="center">
        <tr>
            <th colspan="4">
                <h2 align="left">SAN TOUR</h2>
                <h3>
                    <a href="home1.php" class="btn">Home</a>&nbsp;&nbsp;
                    <a href="tour.php" class="btn">Tour</a>&nbsp;&nbsp;
                    <a href="travel.php" class="btn">Travel</a>&nbsp;&nbsp;
                    <?php if ($role == 'user') { ?>
                        <a href="dashboard.php" class="btn">
                        <?php } elseif ($role == 'host') { ?>
                            <a href="hostdashboard.php" class="btn">
                            <?php } else { ?>
                                <a href="admindashboard.php" class="btn">
                                <?php } ?> Menu</a>
                                <span style="float: right">
                                    <?php
                                    if (!isset($_COOKIE['flag'])) {
                                    ?>
                                        <a href="login.php" class="btn">Login</a>&nbsp;&nbsp;
                                        <a href="registration.php" class="btn">Signup</a>
                                    <?php } else { ?>
                                        Logged in as <a href="../view/viewprofile.php"> <?php echo $username; ?> </a>&nbsp;&nbsp;
                                        <a href="../controller/logoutCheck.php" class="btn">Logout</a>
                                    <?php } ?>
                                </span>
                </h3>
            </th>
        </tr>

        <tr>
            <td colspan="4">
                <h1>Tour Name</h1>
                <hr width="95%" align="center">

            </td>
        </tr>
        <tr rowspan="2">
            <td align="center" colspan="2">
                <img src="https://cdn.pixabay.com/photo/2024/03/05/10/38/boat-8614314_1280.jpg" alt="" height="220px" width="300px"><br>
                <img src="https://cdn.pixabay.com/photo/2023/12/13/06/47/footprints-8446394_1280.jpg" alt="" height="160px" width="150px">
            </td>
            <td align="center" colspan="2">
                <img src="https://cdn.pixabay.com/photo/2023/07/08/04/58/sunset-8113697_1280.jpg" alt="" height="320px" width="300px">
            </td>
        </tr>
        <tr>
            <td colspan="2">Price</td>
            <td colspan="2">$1200</td>
        </tr>
        <tr>
            <td colspan="2">Date</td>
            <td colspan="2">21st of April</td>
        </tr>
        <tr>
            <td colspan="4" width="80%">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum animi maxime aut illum nobis velit quis in dignissimos distinctio ex! Ea, quisquam. Minima, praesentium? Quia obcaecati provident impedit dignissimos ea.</p>
            </td>

        </tr>
        <tr align="center">
            <td colspan="2" align="left">
                <a href="wishlist.php" class="btn">Wishlist</a>
            </td>
            <td colspan="2" align="right">
                <a href="BF.php" class="btn">Book now</a>
            </td>

        </tr>
        <tr rowspan="3">
            <td width="25%">
                <h3>San Tour</h3>
                <p>Crafting personalized journeys for<br> unforgettable adventures worldwide.<br> Experience tailored travel with attention<br> to detail. Discover hidden gems and<br> cultural wonders effortlessly.</p>
            </td>
            <td>
                <h3>Explore</h3>
                <ul>
                    <li><a href="aboutUs.php">About Us</a></li>
                    <li><a href="viewprofile.php">Terms & Conditions</a></li>
                    <li><a href="viewprofile.php">FAQ</a></li>
                </ul>
            </td>
            <td>
                <h3>Useful Links</h3>
                <ul>
                    <li><a href="viewprofile.php">Customer Support</a></li>
                    <li><a href="viewprofile.php">Vlogs</a></li>
                    <li><a href="editprofile.php">Reviews</a></li>
                    <li><a href="profilepicture.php">Promotions</a></li>
                </ul>
            </td>
            <td>
                <h3>We accept</h3>
                <ul>
                    <li>Visa</li>
                    <li>Master Card</li>
                    <li>American Express</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td colspan="4" align="center" height="50px">Copyright © 2024. SAN Tour. All rights reserved</td>
        </tr>
    </table>
</body>


</html>