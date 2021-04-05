<?php
ini_set('error_reporting', E_ALL);
// phpinfo();
require_once($_SERVER['DOCUMENT_ROOT'].'/minsk_attractions/backend/header/header.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/minsk_attractions/backend/services/db_layer/db_query_builder.php');
?>

<?
$db = new DB_Access();

$queryString= $db->buildSelectQuery('post', '*');
$res = $db->query($queryString);
$articles = $db->fetchArray($res);
?>


<div class="slider_container">
    <div class="slider_wrapper">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/minsk_attractions/frontend/assets/mainPage/images/msq_2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/minsk_attractions/frontend/assets/mainPage/images/1-60.jpg" class="d-block w-100 l" alt="...">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="cards_container">
    <div class="chech">
        <div class="cards_wrapper">
        <? foreach($articles as $article): ?>
            <div class="card" style="width: 18rem;">
                <?if ($article['Image'] != ''):?>
                    <img src="<?= $article['Image'] ?>" class="card-img-top" alt="...">
                <?else:?>
                    <img src="/minsk_attractions/frontend/assets/mainPage/images/msq_2.jpg" class="card-img-top" alt="...">
                <?endif;?>
                
                <div class="card-body">
                    <h5 class="card-title"><?=$article["Title"]?></h5>
                    <p class="card-text">
                        <?=$article["Text"]?>
                    </p>
                    <a href="<?=$article["Url"]?>" class="btn btn-primary">Перейти к статье</a>
                </div>
            </div>
        <?endforeach;?>
        </div>
    </div>
</div>
<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/minsk_attractions/backend/footer/footer.php');
?>