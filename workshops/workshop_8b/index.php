<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<div id="producten">
<?php

$path = "./images/";

include ('includes/db.php');
$producten = $pdo->query("SELECT * FROM producten")->fetchAll();
echo "Er staan " . count($producten) . " producten in de database.";

// echo "<xmp>";
// print_r($producten);
// "</xmp>";

foreach($producten as $product) {
 

    ?>
    <div>
      <div class='productnaam'>naam: <?php echo $product['naam']; ?></div>
      <div class='prijs'>prijs: <?php echo $product['prijs']; ?></div>
      <img src=<?php echo $path . $product['afbeelding'] ?>>
<?php 



}

?>
</div>


</body>
</html>