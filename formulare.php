<?php

$ako            = $_GET['ako']            ?? '';
$ak_sa_ti_paci  = isset($_GET['ak_sa_ti_paci']) ? 'Áno' : 'Nie';
$ak_sa_ti_paci_velmi = isset($_GET['ak_sa_ti_paci_velmi']) ? 'Áno' : 'Nie';

$meno       = $_GET['meno']       ?? '';
$priezvisko = $_GET['priezvisko'] ?? '';
$heslo      = $_GET['heslo']      ?? '';
$vyber      = $_GET['vyber']      ?? '';
$zelovoc    = $_GET['zelovoc']    ?? '';
$komentar   = $_GET['komentar']   ?? '';
$skrytaprem = $_GET['skrytaprem'] ?? '';
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <title>Výsledok formulára</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="navigation">
        <ul>
            <li><a href="index.html">Hlavna Stranka</a></li>
            <li><a href="Boing.html">Boeing</a></li>
            <li><a href="Formulare.html">Formular</a></li>
            <li><a href="ZA.html">Vrtulniki</a></li>
            <li><a href="Zobnina_Anna-1.html">Prezencna Lista</a></li>
            <li><a href="Anketa.html">Anketa</a></li>
            <li><a href="alg_hub.html">Algoritmy</a></li>
        </ul>
    </div>

    <h1>Ďakujeme za vyplnenie formulára</h1>

    <h2>Zhrnutie údajov</h2>
    <ul>
        <li><strong>Ako si sa dozvedel o stránke:</strong> <?php echo htmlspecialchars($ako); ?></li>
        <li><strong>Páči sa ti stránka:</strong> <?php echo $ak_sa_ti_paci; ?></li>
        <li><strong>Páči sa ti veľmi:</strong> <?php echo $ak_sa_ti_paci_velmi; ?></li>
        <li><strong>Meno:</strong> <?php echo htmlspecialchars($meno); ?></li>
        <li><strong>Priezvisko:</strong> <?php echo htmlspecialchars($priezvisko); ?></li>
        <li><strong>Zvolené pracovné miesto:</strong> <?php echo htmlspecialchars($vyber); ?></li>
        <li><strong>Najradšej z „nášho sortimentu“:</strong> <?php echo htmlspecialchars($zelovoc); ?></li>
        <li><strong>Skrytá premenná:</strong> <?php echo htmlspecialchars($skrytaprem); ?></li>
    </ul>

    <h2>Tvoj komentár</h2>
    <p><?php echo nl2br(htmlspecialchars($komentar)); ?></p>

    <p><a href="Formulare.html">Naspäť na formulár</a></p>
</body>
</html>
