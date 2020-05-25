<html>
<head>
    <?php
    include 'htmls/stylesheets.html'
    ?>
</head>

<body>
    <div class="container-fluid">
        <a href="Andre.Martins.POO/index.php?controller=default&action=home">
            <button style="margin-bottom:10px;" class="btn btn-success">Revenir</button>
        </a>

        <h1>update avec l'ID <?php echo $voiture->getId();?> et comme titre : <?php echo $voiture->getMarque();?></h1>


        <form method="post" action="index.php?controller=voiture&action=updateVoiture&id=<?php echo $voiture->getId()?>">

            <label>ID</label>
            <input name="id" value="<?php echo $voiture->getId()?>" class="form-control">

            <label>Marque</label>
            <input name="marque" value="<?php echo $voiture->getMarque()?>" class="form-control">

            <label>Modele</label>
            <input name="modele" value="<?php echo $voiture->getModele()?>" class="form-control">

            <label>Energie</label>
            <input name="energie" value="<?php echo $voiture->getEnergie()?>" class="form-control">

            <label>Booleen</label>
            <input name="booleen" value="<?php echo $voiture->getBooleen()?>" class="form-control">

            <br><br>

            <input class="btn btn-success" type="submit" value="valider">
        </form>
    </div>
    <?php
    include 'Parts/scripts.html'
    ?>
</body>