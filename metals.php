<!DOCTYPE HTML>
<html>

<head>

<meta name="description" content="website description" />
<meta name="keywords" content="website keywords, website keywords" />
<meta http-equiv="content-type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
<div id="main">
    <div id="header">
        <div id="logo">
            <div id="logo_text">
                <img src="style/1.png" alt="logo" align="left" style="width:128px;height:128px;">
            </div>
        </div>
        <div id="menubar">
            <ul id="menu">
                <li><a href="index.php">Home</a></li>
                <li class="selected"><a href="metals.php">Metals</a></li>
                <li><a href="update.php">Updates</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="registration.php">Registration</a></li>
            </ul>
        </div>
    </div>
    <div id="site_content">

    <?php
    if(isset($_SESSION['login_user'])){
        echo "Please login to continue";
        exit();
    }
    ?>

        <div class="product-grid-list">
            <h5>Product 01</h5>
            <img src="style/pic1.jpg" alt="">
            <p>Qsi turpis, pellentesque at ultrices in, dapibus in magna. Nunc easi diam risus, placerat ut scelerisque et, placerat ut scelerisque ,Nunc easi diam risus, placerat ut scelerisque et, </p>
            <div class="button">
                <p><input type="submit" value="Buy Now"/></p>

                <div class="button">
                    <p><input type="submit" value="Update"/></p>
                </div>
            </div>
            <div class="product-grid-list">
                <h5>Product 02</h5>
                <img src="style/pic2.jpg" alt="">
                <p>Qsi turpis, pellentesque at ultrices in, dapibus in magna. Nunc easi diam risus, placerat ut scelerisque et,placerat ut scelerisque Nunc easi diam risus, placerat ut scelerisque et, </p>
                <div class="button">
                    <p><input type="submit" value="Buy Now"/></p>
                </div>
            </div>
            <div class="product-grid-list">
                <h5>Product 03</h5>
                <img src="style/pic3.jpg" alt="">
                <p>Qsi turpis, pellentesque at ultrices in, dapibus in magna. Nunc easi diam risus, placerat ut scelerisque et, placerat ut scelerisque ,Nunc easi diam risus, placerat ut scelerisque et, </p>
                <div class="button">
                    <p><input type="submit" value="Buy Now"/></p>
                </div>
                <div class="sidebar">
                    <!-- insert your sidebar items here -->


                    <h2>Request</h2>
                    <form action="#" method="post">
                        <div class="form_settings">
                            <p><span>Nameame</span><input type="text" name="name" value="" /></p>
                            <p><span>Description of the metals</span><textarea rows="8" cols="50" name="name"></textarea></p>


                            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="name" value="Send" /></p>
                        </div>
                    </form>
                </div>
            </div>
            <div id="footer">

            </div>
        </div>
        </body>
        </html>
