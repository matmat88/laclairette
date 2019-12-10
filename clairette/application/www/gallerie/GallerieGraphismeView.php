<?php 
include '../../../library/ajax/AjaxDatabase.php';
include '../../../library/ajax/AjaxProjectModel.class.php';
include '../../../library/ajax/AjaxGallerieGraphismeController.class.php';
$controller= new AjaxGallerieGraphismeController;
$projectGraphismes=$controller->httpPostMethodRep($_POST);
$projectGraphismescovers=$projectGraphismes["projectGraphismescovers"];
$projectGraphismesliders=$projectGraphismes["projectGraphismesliders"];
$wwwUrl=str_replace('/gallerie/GallerieGraphismeView.php','',$_SERVER['SCRIPT_NAME']);
?>
<?php if($projectGraphismesliders == []):?>
<div class="zoom">
    <figure>
        <img  src="<?= $wwwUrl ?>/images/illustrations/<?= $projectGraphismescovers[0]['name']?>" alt="Photo du slider" />
        <figcaption>
            <h2><?= $projectGraphismescovers[0]['nameProject']?> </h2>
            <?php if($projectGraphismescovers[0]['nameCommanditaire'] !== ""):?>
                <h3><?= $projectGraphismescovers[0]['nameCommanditaire']?></h3>
            <?php endif ?>
            <?php if($projectGraphismescovers[0]['titreImage'] !== ""):?>
                <p class="description"><?=$projectGraphismescovers[0]['titreImage']?></p>
            <?php endif ?>
            <?php if($projectGraphismescovers[0]['texteDescription'] !== ""):?>
                <p class="description"><?=$projectGraphismescovers[0]['texteDescription']?></p>
            <?php endif ?>
            <?php if($projectGraphismescovers[0]['lien'] !== ""):?>
                <p class="description">pour en savoir plus:
                    <a class=" description lien" href="<?=$projectGraphismescovers[0]['lien']?>"><?=$projectGraphismescovers[0]['lien']?></a>
                </p>
            <?php endif ?>
        </figcaption>
    </figure>
</div>
<?php else :?>
<div class="slider">
    <div class="flexslider">
        <ul class="slides">
        <li>
            <figure>
                <figcaption>
                    <h2><?= $projectGraphismescovers[0]['nameProject']?> </h2>
                    <h3><?= $projectGraphismescovers[0]['nameCommanditaire']?></h3>
                    <?php if($projectGraphismescovers[0]['titreImage'] !== ""):?>
                        <p class="description"><?=$projectGraphismescovers[0]['titreImage']?></p>
                    <?php endif ?>
                    <?php if($projectGraphismescovers[0]['texteDescription'] !== ""):?>
                        <p class="description"><?=$projectGraphismescovers[0]['texteDescription']?></p>
                    <?php endif ?>
                    <?php if($projectGraphismescovers[0]['lien'] !== ""):?>
                        <p class="description">pour en savoir plus:
                            <a class=" description lien" href="<?=$projectGraphismescovers[0]['lien']?>"><?=$projectGraphismescovers[0]['lien']?></a>
                        </p>
                    <?php endif ?>
                </figcaption>
                    <img  src="<?= $wwwUrl ?>/images/illustrations/<?= $projectGraphismescovers[0]['name']?>" alt="Photo du slider" />
            </figure>
        </li>
        <?php 
        foreach($projectGraphismesliders as $projectGraphismeslider) : ?>
            <li>
                <figure>
                    <figcaption>
                        <h2><?= $projectGraphismeslider['nameProject']?> </h2>
                        <h3><?= $projectGraphismeslider['nameCommanditaire']?></h3>
                        <?php if($projectGraphismeslider['titreImageplus'] !== ""):?>
                            <p class="description"><?= $projectGraphismeslider['titreImageplus']?></p>
                        <?php endif ?>
                        <?php if($projectGraphismeslider['texteDescription'] !== ""):?>
                            <p class="description"><?= $projectGraphismeslider['texteDescription']?></p>
                        <?php endif ?>
                        <?php if($projectGraphismeslider['lien'] !== ""):?>
                            <p class="description">pour en savoir plus:
                                <a class=" description lien" href="<?=$projectGraphismeslider['lien']?>"><?=$projectGraphismeslider['lien']?></a>
                            </p>
                        <?php endif ?>
                    </figcaption>
                        <img  src="<?= $wwwUrl ?>/images/illustrations/<?= $projectGraphismeslider['nameplus']?>" alt="Photo du slider" />
                </figure>
            </li>
        <?php endforeach ?>
        </ul>
    </div>
</div>
<?php endif ?>
