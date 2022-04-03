<?php 
ob_start(); 
?>

<div class="row">
    <div class="col-6">
        <img src="<?= URL ?>public/images/<?= $enclosure->getImage(); ?>">
    </div>
    <div class="col-6">
        <p>Enclosure Id : <?= $livre->getId(); ?></p>
        <p>Animal Size : <?= $livre->getAnimalSize(); ?></p>
        <p>Enclosure Size : <?= $livre->getEnclosureSize(); ?></p>
        <p>Environnement : <?= $livre->getEnvironnement(); ?></p>
        <p>Animal Size : <?= $livre->environnement(); ?></p>
        <p>Animal Size : <?= $livre->environnement(); ?></p>
    </div>
</div>

<?php
$content = ob_get_clean();
$titre = $livre->getTitre();
require "template.php";
?>