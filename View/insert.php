<html>
<head>
    <?php
    include 'htmls/stylesheets.html'
    ?>
</head>

<body>
    <div class="container">
        <h1>Ajouter une nouvelle voiture</h1>

        <a href="Andre.Martins.POO/index.php?controller=default&action=home">
            <button style="margin-bottom:10px;" class="btn btn-danger">Revenir en arrière</button>
        </a>

        <form method="post" action="index.php?controller=voiture&action=addVoiture" enctype="multipart/form-data">
            <label>Marque</label>
            <input name="Marque" class="form-control" placeholder="Marque" required>
            
            <label>Modele</label>
            <input name="Modele" class="form-control" placeholder="Modele" required>
            
            <label>Energie</label>
            <textarea name="voiture" class="form-control" placeholder="Essence, diesel, électrique ou hybride"></textarea>

            <label>Booleen</label>
            <textarea name="voiture" class="form-control" placeholder="Automatique ou manual"></textarea>

            <input class="btn btn-success" type="submit" value="valider">
        </form>
    </div>
    <?php
    include 'Parts/scripts.html'
    ?>
</body>