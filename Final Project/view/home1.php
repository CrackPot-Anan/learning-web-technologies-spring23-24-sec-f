<?php
require_once('../model/userModel.php');
if (isset($_COOKIE['flag'])) {
    $username = $_COOKIE['username'];
}
$role = getRole($username);
?>
<html>

<head>
    <title>HOME</title>
    <link rel="stylesheet" href="../CSS/styleHome1.css">
</head>

<body>
    <table cellpadding="5" cellspacing="0" width="80%" align="center">
        <tr>
            <th colspan="4">
                <h2 align="left" class="logo"><span>S</span>an <span>To</span>ur</h2>
                <h3>
                    <a href="home1.php" class="btn">Home</a>&nbsp;&nbsp;
                    <a href="tour.php" class="btn">Tour</a>&nbsp;&nbsp;
                    <a href="travel.php" class="btn">Travel</a>&nbsp;&nbsp;
                    <?php if ($role == 'user') { ?>
                        <a href="menu.php" class="btn">
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
                                        Logged in as <a href="../view/viewprofile.php" class="btn"> <?php echo $username; ?> </a>&nbsp;&nbsp;
                                        <a href="../controller/logoutCheck.php" class="btn">Logout</a>
                                    <?php } ?>
                                </span>
                </h3>
            </th>
        </tr>

        <tr>
            <td colspan="3">
                <h1 class="logo"><span>Tre</span>nding <span>To</span>ur</h1>
                <hr width="95%" align="center">

            </td>
            <td align="right"><a href="SearchFunctionality.php"><button class="btn">Search</button></a></td>
        </tr>
        <tr rowspan="3">
            <td align="center" colspan="2">
                <img src="https://i.pinimg.com/474x/24/81/e3/2481e3ea608d565c4dd8b01ab7118468.jpg" alt="" height="160px" width="150px"><br>
                <p>Place 1</p><a href="tourDetails.php"><button class="btn">Select</button></a>
            </td>
            <td align="center" colspan="2">
                <img src="https://i.pinimg.com/474x/07/31/b2/0731b271cfd9523df50a8c6ede40ab13.jpg" alt="" height="160px" width="150px"><br>
                <p>Place 2</p> <a href="tourDetails.php"><button class="btn">Select</button></a>
            </td>
        </tr>
        <tr rowspan="3">
            <td align="center" colspan="2">
                <img src="https://i.pinimg.com/474x/64/15/69/6415690787ef4c82b63704d57e41dc09.jpg" alt="" height="160px" width="150px"><br>
                <p>Place 3</p> <a href="tourDetails.php"><button class="btn">Select</button></a>
            </td>
            <td align="center" colspan="2">
                <img src="https://i.pinimg.com/474x/0c/fd/f9/0cfdf96ec0d948a1203b01569524042f.jpg" alt="" height="160px" width="150px"><br>
                <p>Place 4</p> <a href="tourDetails.php"><button class="btn">Select</button></a>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <h1 class="logo"><span>Re</span>Regular <span>To</span>ur</h1>
                <hr width="95%" align="center">

            </td>
        </tr>
        <tr rowspan="3" align="center">
            <td align="center">
                <img src="https://i.pinimg.com/474x/58/48/c1/5848c13f5a779679c126b84bc3427d17.jpg" alt="" height="160px" width="150px"><br>
                <p>Place 5</p> <a href="tourDetails.php"><button class="btn">Select</button></a>
            </td>
            <td align="center">
                <img src="https://i.pinimg.com/474x/dc/40/82/dc4082493371d4ed1a7e1f298a831075.jpg" alt="" height="160px" width="150px"><br>
                <p>Place 6</p> <a href="tourDetails.php"><button class="btn">Select</button></a>
            </td>
            <td align="center">
                <img src="https://i.pinimg.com/474x/55/47/4d/55474d62fba173acfe1d953bb9a491c6.jpg" alt="" height="160px" width="150px"><br>
                <p>Place 7</p> <a href="tourDetails.php"><button class="btn">Select</button></a>
            </td>
            <td align="center">
                <img src="https://i.pinimg.com/474x/3c/3e/5c/3c3e5c94b31e57ad912416ac92030532.jpg" alt="" height="160px" width="150px"><br>
                <p>Place 8</p> <a href="tourDetails.php"><button class="btn">Select</button></a>
            </td>
        </tr>
        <tr>

        <tr border="0" rowspan="3">
            <td width="25%">
                <h3>San Tour</h3>
                <p>Crafting personalized journeys for<br> unforgettable adventures worldwide.<br> Experience tailored travel with attention<br> to detail. Discover hidden gems and<br> cultural wonders effortlessly.</p>
            </td>
            <td>
                <h3>Explore</h3>
                <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="term.php">Terms & Conditions</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                </ul>
            </td>
            <td>
                <h3>Useful Links</h3>
                <ul>
                    <li><a href="../controller/CC.php">Currency Support</a></li>
                    <li><a href="Blog.php">Blogs</a></li>
                    <li><a href="customer_feedback.php">Reviews</a></li>
                    <li><a href="pcp.php">Promotions</a></li>
                </ul>
            </td>
            <td>
                <h3>We accept</h3>
                <ul>
                    <li>Visa</li>
                    <li>Master Card</li>
                    <li>American Express</li>
                    <li>Paypal</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td colspan="4" align="center" height="50px">Copyright © 2024. SAN Tour. All rights reserved</td>
        </tr>
    </table>
</body>


</html>