<?php
include "includes/db.php";
// Het id uit de link: detail.php?id=2 geeft 2
$id = $_GET['id'] ?? 0;
echo "Je hebt product " . $id . " gekozen.";
?>
<?php include "includes/header.php"; ?>