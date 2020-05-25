<html>
<head>
    <?php
    include 'htmls/stylesheets.html'
    ?>
</head>

<body>
    <div class="container-fluid">
        <a href="Andre.Martins.POO/index.php?controller=default&action=home">
            <button style="margin-bottom:10px;" class="btn btn-success">Revenir en arrière</button>
        </a>

        <h1>Détail de la voiture <?php echo $voiture->getId();?> et comme marque : <?php echo $voiture->getMarque();?></h1>

        <br>
            <div class="container text-center">
                <h1>ID</h1>
                <h4><?php echo $voiture->getId()?></h4>
            </div>

            <div class="container text-center">
                <h1>Marque</h1>
                <h4><?php echo $voiture->getMarque()?></h4>
            </div>

            <div class="container text-center">
                <h1>Modele</h1>
                <h4><?php echo $voiture->getModele()?></h4>
            </div>

            <div class="container text-center">
                <h1>Energie</h1>
                <h4><?php echo $voiture->getEnergie()?></h4>
            </div>
        <br>

    </div>

    <?php
    include 'Parts/scripts.html'
    ?>
</body>