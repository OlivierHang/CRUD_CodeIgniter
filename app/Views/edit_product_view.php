<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification de produit</title>
</head>

<body>
    <form action="<?php echo base_url() ?>/product/update" method="post">
        <input type="text" name="nom_produit" value="<?php echo $product->product_name ?>">
        <input type="text" name="prix_produit" value="<?php echo $product->product_price ?>">
        <input type="hidden" name="id_produit" value="<?php echo $product->product_id ?>">
        <button type="submit">Modifier</button>
    </form>
</body>

</html>