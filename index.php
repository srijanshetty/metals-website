<?php session_start() ?>

<!DOCTYPE HTML>
<html>

<head>
<title>Metallurgy</title>
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

            <?php

                if(isset($_SESSION['login_user'])){
                    echo '
                                <div class="login" align="right">
                                    <form action="login.php" method="post">
                                        <h3><b>Login</b></h3>
                                        <input type="text" placeholder="mail" required id="mail" name="username"/><br>
                                        <input type="password" placeholder="Password" required id="password" name="password"/>
                                        <div>
                                            <input type="submit" value="Log in" />
                                        </div>
                                    </div>
                                </div>
                        ';
                } else {
                    echo '
                                <div class="login" align="right">
                                    <form action="logout.php" method="post">
                                        <p></p>
                                        <div>
                                            <input type="submit" value="logout">
                                        </div>
                                    </div>
                                </div>
                        ';
                }

                ?>

            <div id="menubar">
                <ul id="menu">
                    <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
                    <li class="selected"><a href="index.php">Home</a></li>
                    <li><a href="metals.php">Metals</a></li>
                    <li><a  href="update.php">Updates</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a  href="registration.php">Registration</a></li>
                </ul>
            </div>
        </div>

        <div id="site_content">
            <div id="content">
                <!-- insert the page content here -->
                <h1>Welcome to the metal industrial</h1>
                <p>Metallurgy is a domain of materials science and engineering that studies the physical and chemical behavior of metallic elements, their intermetallic compounds, and their mixtures, which are called alloys. Metallurgy is also the technology of metals: the way in which science is applied to the production of metals, and the engineering of metal components for use in products for consumers and manufacturers. The production of metals involves the processing of ores to extract the metal they contain, and the mixture of metals, sometimes with other elements, to produce alloys. Metallurgy is distinguished from the craft of metalworking, although metalworking relies on metallurgy, as medicine relies on medical science, for technical advancement</p>
                <img src="style/periodictable.jpg" alt="periodictable" style="width:650px;height:500px;">
            </div>
        </div>

        <div id="footer">

        </div>
    </div>
    </body>
    </html>
