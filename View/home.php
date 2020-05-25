<html>
<head>
    <?php
    include 'htmls/stylesheets.html'
    ?>
</head>

<body>


    <div class="container">

        <a href="Andre.Martins.POO/index.php?controller=voiture&action=addForm">
            <button style="margin-bottom:10px;" class="btn btn-danger">Ajouter une nouvelle voiture</button>
        </a>
        <br>

        <h1>Parc de Automobiles</h1>


        <table class="table">
            <thead>
            <td>Id</td>
            <td>Marque</td>
            <td>Modele</td>
            <td>Energie</td>
            <td>Booleen</td>
            </thead>

            <tbody>
            <?php

            foreach ($voiture as $voit) {
                ?>
                <tr>
                    <td><?php echo $voit->getId()?></td>
                    <td><?php echo $voit->getMarque()?></td>
                    <td><?php echo $voit->getModele()?></td>
                    <td><?php echo $voit->getEnergie()?></td>
                    <td><?php echo $voit->getBooleen()?></td>
                    <td>
                        <a href="Andre.Martins.POO/index.php?controller=voiture&action=delete&id=<?php echo $rec->getId()?>">Supprimer</a>
                        <a href="Andre.Martins.POO/index.php?controller=voiture&action=updateForm&id=<?php echo $rec->getId()?>">Modifier</a>
                        <a href="Andre.Martins.POO/index.php?controller=voiture&action=detailForm&id=<?php echo $rec->getId()?>">Détail</a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    <?php
    include 'Parts/scripts.html'
    ?>
</body>
</html>