<?php
// Lire le fichier de configuration JSON
$configFile = 'config.json';
$configData = file_get_contents($configFile);

// Envoyer les données JSON
header('Content-Type: application/json');
echo $configData;
?>
