<?php 
ob_start(); 
?>

<table class="table text-center">
    <tr class="table-dark">
        <th>Image</th>
        <th>Name</th>
        <th>Age</th>
        <th>Species</th>
        <th>Gender</th>
        <th colspan="2">Actions</th>
    </tr>
    <?php 
    for($i=0; $i < count($animals);$i++) : 
    ?>
    <tr>
        <td class="align-middle"><img src="public/images/<?= $animals[$i]->getImage(); ?>" width="60px;"></td>
        <td class="align-middle"><a href="<?= URL ?><?= $animals[$i]->getId(); ?>"><?= $animals[$i]->getName(); ?></a></td>
        <td class="align-middle"><?= $animals[$i]->getAge()->getSpecies(); ?></td>
        <td class="align-middle"><a href="<?= URL ?>...<?= $animals[$i]->getId(); ?>" class="btn btn-warning">Modifier</a></td>
        <td class="align-middle">
            <form method="POST" action="<?= URL ?>...<?= $animals[$i]->getId(); ?>" onSubmit="return confirm('Voulez-vous vraiment supprimer l'animal ?');">
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    <?php endfor; ?>
</table>
<a href="<?= URL ?>accueil" class="btn btn-success d-block">Ajouter</a>

<?php
$content = ob_get_clean();
$titre = "List of all Animals";
require "template.php";
?>