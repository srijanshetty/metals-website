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
                <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
                <li><a href="index.php">Home</a></li>
                <li><a href="metals.php">Metals</a></li>
                <li><a href="update.php">Updates</a></li>
                <li class="selected"><a href="contact.php">Contact Us</a></li>
                <li><a href="registration.php">Registration</a></li>
            </ul>
        </div>
    </div>
    <div id="site_content">


        <div class="sidebar">
            <!--insert your sidebar items here-->

            <h4>Company Name:<br/> Metallurgy <br/><br/>

                Address      :<br/>  No. 9, G.R.N.Lane,<br/>
                S.P. Road Cross, <br/>
                Bangalore-560002.<br/><br/>

                Phone Number : +919845477309<br/> <br/>

                E-mail    : vikasi.ndex135@gmail.com</h4>

        </div>

        <center><table>
                <tr>
                    <td><h3>Contact Form</h3></td>
                </tr>
                <contact-form method="post" action="contact-post.html">
                <div>
                    <tr>
                        <td><span><input type="text" class="textbox" value="Name:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}"></span></td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td><span><input type="text" class="textbox" value="Email:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></span></td>
                    </tr>	
                </div>
                <div>
                    <tr>
                        <td><span><input name="userPhone" type="text" class="textbox" value="mobile:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mobile';}"></span></td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td><span><textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea></span></td>
                    </tr>
                </div>
                <div>
                    <tr>
                        <td><center><span><input type="submit" value="Submit"></span></td>
                        </tr>	
                    </div>
                    </contact-form>
            </center></table>
        </div>
        <div id="footer">

        </div>
    </div>
    </body>
    </html>
