<?php
// Verbinding met de database
include_once 'db_connect.php';

// form data to database
if (isset($_POST['taal'])) {
    $taal = $_POST['taal'];
    $titel = $_POST['titel'];
    $code = $_POST['code'];
    $datum = $_POST['datum'];
    $wachtwoord = $_POST['wachtwoord'];
    $url = $_POST['url'];

    $query = $db->prepare("INSERT INTO `posts` (`taal`, `titel`, `code`, `datum`, `wachtwoord`, `url`, `view`) VALUES (:taal, :titel, :code, :datum, :wachtwoord, :url , 1)");
    $query->bindParam(':taal', $taal);
    $query->bindParam(':titel', $titel);
    $query->bindParam(':code', $code);
    $query->bindParam(':datum', $datum);
    $query->bindParam(':wachtwoord', $wachtwoord);
    $query->bindParam(':url', $url);
    $query->execute();


    // redirect to view page
    header('Location: view.php?url=' . $url);
}

?>