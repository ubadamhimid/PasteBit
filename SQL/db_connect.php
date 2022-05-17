<!-- PHP Begin -->
<?php
// Inloggegevens
$host = "localhost";
$dbname = "pastebit";
// $user = "paste-bit";
// $password = "Gr!dz4r.9F.d3dDGiWpq";
$user = "root";
$password = "";
$dsn = "mysql:host=$host;dbname=$dbname";
// Maak verbinding met DB PasteBit
try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo '<script>console.log("Verbonden met PasteBit");</script>';
} catch (PDOException $e) {
    echo "Error code: " . $e->getMessage();
    echo '<script>console.log("Verbinding mislukt. Controleer de error melding/log of neem contact op met een admin.");</script>';
}
?>
<!-- PHP END -->