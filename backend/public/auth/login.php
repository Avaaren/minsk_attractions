
<?php
ini_set('error_reporting', E_ALL);
require_once($_SERVER['DOCUMENT_ROOT'].'/minsk_attractions/backend/header/header.php');
?>
<div class="w">
    <div class="h">
        <div class="auth_container">
            <h1>Авторизация</h1>
            <form id="login-form">
                <div class="mb-3">
                    <label for="login-email" class="form-label">Login</label>
                    <input type="text" class="form-control" id="login">
                </div>
                <div class="mb-3">
                    <label for="login-password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="login-password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="login-remember">
                    <label class="form-check-label" for="login-remember">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <a href="/minsk_attractions/backend/public/auth/registration.php">Зарегестрироваться</a>
        </div>
    </div>
</div>

<?
require_once($_SERVER['DOCUMENT_ROOT'].'/minsk_attractions/backend/footer/footer.php');
?>