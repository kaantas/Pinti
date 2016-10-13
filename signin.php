﻿<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>Kayıt Ol</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/signinControl.js"></script>
</head>
<body>
<div class="authForm">
<form name=frm method="post" action="controller/signin.php">
    <table>
        <tr>
            <td colspan="2"><h1 class="authBaslik">Kayıt Ol</h1></td>
        </tr>
        <tr>
            <td><label>Adınız:</label></td>
            <td><input class="txtBox" type="text" name="firstName" id="txtUsername" placeholder="username"></td>
        </tr>
        <tr>
            <td><label>Soyadınız:</label></td>
            <td><input class="txtBox" type="text" name="lastName" id="txtUsername" placeholder="username"></td>
        </tr>
        <tr>
            <td><label>E-posta adresiniz:</label></td>
            <td><input class="txtBox" type="email" name="email" id="txtEmail" placeholder="e-mail"></td>
        </tr>
        <tr>
            <td><label>Şifreniz:</label></td>
            <td><input class="txtBox" type="password" name="password" id="txtPassword" placeholder="password"></td>
        </tr>
        <tr>
            <td><label>Şifreniz (Tekrar):</label></td>
            <td><input class="txtBox" type="password" name="passwordAgain" id="txtPasswordAgain" placeholder="password (Again)"></td>
        </tr>
        <tr>
            <td><a href="index.php"><label>Anasayfaya Dön</label></a></td>
            <td><input type="button" name="btnSignin" value="Kayıt Ol" onClick="checkform()"></td>
        </tr>
    </table>
</form>
</div>
</body>
</html>
