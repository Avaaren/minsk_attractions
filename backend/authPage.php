<?php
ini_set('error_reporting', E_ALL);
require_once($_SERVER['DOCUMENT_ROOT'].'/minsk_attractions/backend/header/header.php');
?>

<div class="auth-container">
    <form action="/minsk_attractions/backend/services/auth/login.php" method="POST">
        <input type="text" name="login" value=''>
        <br>
        <input type="password" name='password' value=''>
        <br>
        <input type="submit" value="login">
        <br>
    </form>
</div>
