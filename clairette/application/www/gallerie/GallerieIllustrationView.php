<?php 
include '../../../library/ajax/AjaxDatabase.php';
include '../../../library/ajax/AjaxProjectModel.class.php';
include '../../../library/ajax/AjaxGallerieIllustrationController.class.php';
$controller= new AjaxGallerieIllustrationController;
$projectIllustrations=$controller->httpPostMethodRep($_POST);
$projectIllustrationscovers=$projectIllustrations["projectIllustrationscovers"];
$projectIllustrationsliders=$projectIllustrations["projectIllustrationsliders"];
// var_dump($projectIllustrationscovers);
// var_dump($projectIllustrationsliders);

?>
<?php if($projectIllustrationsliders == []):?>
<div class="zoom">
    <figure>
        <img  src="/clairette/application/www/images/illustrations/<?= $projectIllustrationscovers[0]['name']?>" alt="Photo du slider" />
        <figcaption>
            <h2><?= $projectIllustrationscovers[0]['nameProject']?> </h2>
            <?php if($projectIllustrationscovers[0]['nameCommanditaire'] !== ""):?>
                <h3><?= $projectIllustrationscovers[0]['nameCommanditaire']?></h3>
            <?php endif ?>
            <?php if($projectIllustrationscovers[0]['titreImage'] !== ""):?>
                <p class="description"><?=$projectIllustrationscovers[0]['titreImage']?></p>
            <?php endif ?>
            <?php if($projectIllustrationscovers[0]['texteDescription'] !== ""):?>
                <p class="description"><?=$projectIllustrationscovers[0]['texteDescription']?></p>
            <?php endif ?>
            <?php if($projectIllustrationscovers[0]['lien'] !== ""):?>
                <p class="description">pour en savoir plus:
                    <a class=" description lien" href="<?=$projectIllustrationscovers[0]['lien']?>"><?=$projectIllustrationscovers[0]['lien']?></a>
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
                    <h2><?= $projectIllustrationscovers[0]['nameProject']?> </h2>
                    <h3><?= $projectIllustrationscovers[0]['nameCommanditaire']?></h3>
                    <?php if($projectIllustrationscovers[0]['titreImage'] !== ""):?>
                        <p class="description"><?=$projectIllustrationscovers[0]['titreImage']?></p>
                    <?php endif ?>
                    <?php if($projectIllustrationscovers[0]['texteDescription'] !== ""):?>
                        <p class="description"><?=$projectIllustrationscovers[0]['texteDescription']?></p>
                    <?php endif ?>
                    <?php if($projectIllustrationscovers[0]['lien'] !== ""):?>
                        <p class="description">pour en savoir plus:
                            <a class=" description lien" href="<?=$projectIllustrationscovers[0]['lien']?>"><?=$projectIllustrationscovers[0]['lien']?></a>
                        </p>
                    <?php endif ?>
                </figcaption>
                <?php if($projectIllustrationscovers[0]['nameCommanditaire'] == "Faire part"):?>
                    <img  src="/clairette/application/www/images/illustrations/<?= $projectIllustrationscovers[0]['name']?>" alt="Photo du slider" class="marginLeft" />
                <?php else :?>
                    <img  src="/clairette/application/www/images/illustrations/<?= $projectIllustrationscovers[0]['name']?>" alt="Photo du slider" />
                <?php endif ?>
            </figure>
        </li>
        <?php 
        foreach($projectIllustrationsliders as $projectIllustrationslider) : ?>
            <li>
                <figure>
                    <figcaption>
                        <h2><?= $projectIllustrationslider['nameProject']?> </h2>
                        <h3><?= $projectIllustrationslider['nameCommanditaire']?></h3>
                        <?php if($projectIllustrationslider['titreImageplus'] !== ""):?>
                            <p class="description"><?= $projectIllustrationslider['titreImageplus']?></p>
                        <?php endif ?>
                        <?php if($projectIllustrationslider['texteDescription'] !== ""):?>
                            <p class="description"><?= $projectIllustrationslider['texteDescription']?></p>
                        <?php endif ?>
                        <?php if($projectIllustrationslider['lien'] !== ""):?>
                            <p class="description">pour en savoir plus:
                                <a class=" description lien" href="<?=$projectIllustrationslider['lien']?>"><?=$projectIllustrationslider['lien']?></a>
                            </p>
                        <?php endif ?>
                    </figcaption>
                    <?php if($projectIllustrationslider['nameCommanditaire'] == "Faire part"):?>
                        <img  src="/clairette/application/www/images/illustrations/<?= $projectIllustrationslider['nameplus']?>" alt="Photo du slider" class="marginLeft" />
                    <?php else :?>
                        <img  src="/clairette/application/www/images/illustrations/<?= $projectIllustrationslider['nameplus']?>" alt="Photo du slider" />
                    <?php endif ?>
                </figure>
            </li>
        <?php endforeach ?>
        </ul>
    </div>
</div>
<?php endif ?>


