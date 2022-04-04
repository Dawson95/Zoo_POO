<?php 
ob_start(); 
?>

<div class="row">
    <div class="col-6">
        <img src="<?= URL ?>public/images/<?= $enclosure->getImage(); ?>">
    </div>
    <div class="col-6">
        <p>Enclosure Id : <?= $enclosure->getId(); ?></p>
        <p>Animal Size : <?= $enclosure->getAnimalSize(); ?></p>
        <p>Enclosure Size : <?= $enclosure->getEnclosureSize(); ?></p>
        <p>Environnement : <?= $enclosure->getEnvironnement(); ?></p>
        <p>vacant : <?= $enclosure->getVacant(); ?></p>
        <p>Number of animals : <?= $enclosure->getNbrAnimals(); ?></p>
        <p>Image : <?= $enclosure->getImage(); ?></p>
    </div>
</div>

<?php
$content = ob_get_clean();
$titre = $enclosure->getId();
require "template.php";
?>