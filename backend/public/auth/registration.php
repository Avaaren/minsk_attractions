
<?php
ini_set('error_reporting', E_ALL);
require_once($_SERVER['DOCUMENT_ROOT'].'/minsk_attractions/backend/header/header.php');
?>
<div class="w">
    <div class="h">
        <div class="auth_container">
            <h1>Регистрация</h1>
            <form id="registration-form">
                <div class="mb-3">
                    <label for="registration-login" class="form-label">Login</label>
                    <input type="text" class="form-control" id="registration-login">
                </div>
                <div class="mb-3">
                    <label for="registration-email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="registration-email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="registration-password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="registration-password">
                </div>
                <div class="mb-3">
                    <label for="registration-password" class="form-label">Repeat password</label>
                    <input type="password" class="form-control" id="registration-confirm-password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?
require_once($_SERVER['DOCUMENT_ROOT'].'/minsk_attractions/backend/footer/footer.php');
?>