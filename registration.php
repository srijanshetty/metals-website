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
        <li><a  href="index.php">Home</a></li>
        <li><a href="metals.php">Metals</a></li>
        <li><a  href="update.php">Updates</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li class="selected"><a href="registration.php">Registration</a></li>
      </ul>
    </div>
  </div>

  <div id="site_content">
    <div class="sidebar">
      <!-- insert your sidebar items here -->
      <form action="register.php" method="post">
        <table cellpadding="2" width="20%" bgcolor="99FFFF" align="center"
          cellspacing="2" >

          <tr>
            <td colspan=2>
            </td>
          </tr>

          <tr>
            <td>Name</td>
            <td><input type=text required id="name" name="name" size="30"></td>
          </tr>

          <tr>
            <td>Email Id</td>
            <td><input type="email" required name="mail" id="mail" name="mail" size="30"></td>
          </tr>

          <tr>
            <td>Password</td>
            <td><input type="password" required name="password" id="password" size="30"></td>
          </tr>

          <tr>
            <td>Mobile</td>
            <td><input type="number" name="mobile" id="mobile"></td>
          </tr>

          <tr>
            <td>Address</td>
            <td><input type="text" name="address" id="address" size="30"></td>
          </tr>

          <tr>
            <td>PinCode</td>
            <td><input type="text" name="pincode" id="pincode" name="pin" size="30"></td>
          </tr>

          <tr>
            <td></td>
            <td colspan="2"><input type="submit" value="Submit Form"/></td>
          </tr>
        </table>
      </form>
    </div>

    <div id="footer">

    </div>

  </div>
  </body>
  </html>
