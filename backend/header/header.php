<?
session_start();
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="/minsk_attractions/frontend/assets/css/main.css">
    <title>Главная страница</title>
</head>
<body>


<header class="header_container">
    <div class="header_wrapper">
        <div class="navbar">
            <div class="logO">Logo</div>
            <div class="nav_item">Достопримечательности</div>
            <div class="nav_item">Парки</div>
            <div class="nav_item">Архитектура</div>
            <div class="nav_item">Заведения</div>
            <div class="nav_item"><a href="/minsk_attractions/backend/public/auth/login.php"><?= ($_SESSION['is_auth']) ? $_SESSION['is_auth'] : 'Войти' ?></a></div>
        </div>
    </div>
</header>