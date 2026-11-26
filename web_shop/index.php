
<body class="a1">
  <div id="producten">
<?php

$path = "./images/";

include ('includes/header.php');
include ('includes/db.php');
$producten = $pdo->query("SELECT * FROM producten")->fetchAll();
echo "Er staan " . count($producten) . " producten in de database.";

// echo "<xmp>";
// print_r($producten);
// "</xmp>";
?>



<div class='products'>
<?php
foreach($producten as $product) {
 

    ?>
    <a href="detail.php?id=<?php echo $product['id']; ?>" class="knop">
    <div href="detail.php?id=<?php echo $product['id']; ?>" class="pro">
      <img src=<?php echo $path . $product['afbeelding'] ?>>
      <div class='productnaam'><h3><?php echo $product['naam']; ?></h3></div> 
      <div class='prijs'>&euro; <?php echo number_format($product['prijs'], 2, ',', '.'); ?></div> 
      <div class='info'><?php echo $product['omschrijving']; ?></div> 
     
     </div> 
      </a>
<?php 

}


?>
</div>
     
   <!-- <h2>Pick a creature</h2>
    <p>20% off of all dead creatures</p> -->
   <!-- <br> -->

   <!-- <div class="products">

      <div class="pro">
         
        <a href="unicorn.html">
         <img src="images/unicorn.jpg" alt="Unicorn on sale" >
        </a>
        <h4>Unicorn</h4>
        <p>&euro;999,99</p>
   </div> -->

       <!-- <div class="pro">
         
        <a href="leprechaun.html">
         <img src="images/leprachaun.jpg" alt="Leprechaun on sale"  >
        </a>
        <h4>Leprechaun</h4>
        <p>&euro;599,99</p>
       </div> -->

   

   <!-- <div class="pro"> 
    
    <a href="mothman.html" >
        <img src="images/mothman.jpg" alt="mothman on sale">
    </a>
    <h4>Mothman</h4>
    <p>&euro;199,99</p>
   </div> -->
<!-- 
   <div class="pro">
          -->
        <!-- <a href="siren.html">
         <img src="images/siren.jpg" alt="siren on sale" >
        </a>
        <h4>Siren</h4>
        <p>&euro;<s>1999,99</s><br>&euro;1499,99 25% off</p>
   </div> --> 

   <!-- <div class="pro">
         
        <a href="slender.html">
         <img src="images/slender.jpg" alt="slender man on sale" >
        </a>
        <h4>Slender man</h4>
        <p>&euro;1999,99</p>
   </div> -->

   <!-- <div class="pro">
         
        <a href="medusa.html">
         <img src="images/medusa.jpg" alt="medusa on sale" >
        </a>
        <h4>Medusa</h4>
        <p>&euro;2499,99</p>
   </div> -->

   <!-- <div class="pro">
         
        <a href="pheonix.html">
         <img src="images/pheonix.jpg" alt="pheonix on sale" >
        </a>
        <h4>Pheonix</h4>
        <p>&euro;999,99</p>
   </div> -->


   <!-- <div class="pro">
     
   <a href="gary.html">
    <img src="images/gary.jpg" alt="Gary on sale" >
   </a>
   <h4>Gary</h4>
   <p>&euro;<s>99,99 </s><br> &euro;4,99 95% off</p>
   </div> -->

     <!-- <div class="pro">
         
        <a href="cyclops.html">
         <img src="images/cyclops.jpg" alt="cyclops on sale" >
        </a>
        <h4>Cyclops</h4>
        <p>&euro;999,99</p>
   </div> -->

    <!-- <div class="pro">
        
        <a href="bugbear.html">
         <img src="images/bugbear.jpg" alt="bugbear on sale" >
        </a>
        <h4>Bugbear</h4>
        <p>&euro;699,99</p>
   </div> -->

   <!-- <div class="pro">
         
        <a href="pegasus.html">
         <img src="images/pegasus.jpg" alt="pegasus on sale" >
        </a>
        <h4>Pegasus</h4>
        <p>&euro;699,99</p>
   </div> -->
<!-- 
   <div class="pro">
        
        <a href="ouroboros.html">
         <img src="images/ouroboros.jpg" alt="ouroboros on sale" >
        </a>
         <h4>Ouroboros???</h4>
        <p>&euro;49,99</p>
   </div> -->

   <!-- <div class="pro">
        <a href="dragon.html">
         <img src="images/dragon.jpg" alt="dragon on sale" >
        </a>
         <h4>Dragon</h4>
        <p>&euro;59,99</p>
   </div> -->
   


   <!-- </div> -->

  
<?php include "includes/footer.php"; ?>
