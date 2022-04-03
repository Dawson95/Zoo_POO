<?php 
ob_start(); 
?>

<table class="table text-center">
    <tr class="table-dark">
        <th>Name</th>
        <th>Nombre d'animaux</th>
        
    </tr>
    <?php 
    for($i=0; $i < count($zoos);$i++) : 
    ?>
    <tr>
        <td class="align-middle"><a href="<?= URL ?>zoos/l/<?= $zoos[$i]->getId(); ?>"><?= $livres[$i]->getName(); ?></a></td>
        <td class="align-middle"><?= $zoos[$i]->getNbrAnimals(); ?></td>
        
    </tr>
    <?php endfor; ?>
</table>


<?php
$content = ob_get_clean();
$titre = "Le Zoo de Beauval";
require "template.php";
?>