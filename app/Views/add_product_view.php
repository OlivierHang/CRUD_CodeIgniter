<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de produit</title>
</head>

<body>
    <form action="<?php echo base_url() ?>/product/save" method="post">
        <input type="text" name="nom_produit">
        <input type="text" name="prix_produit">
        <!-- <input type="hidden" name="id_produit"> -->
        <button type="submit">Ajout de produit</button>
    </form>
</body>

</html>