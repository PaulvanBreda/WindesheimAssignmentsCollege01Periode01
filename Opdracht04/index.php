<!DOCTYPE html>
<html>
<head>
    <title>Kleuren op basis van tijd</title>
    <style>
        /* Standaardstijl */
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        /* Stijl voor ochtend */
        .ochtend {
            background-color: #FFD700; /* Geel */
            color: #000; /* Zwart */
        }

        /* Stijl voor middag */
        .middag {
            background-color: #FFA500; /* Oranje */
            color: #fff; /* Wit */
        }

        /* Stijl voor avond/nacht */
        .avond {
            background-color: #000; /* Zwart */
            color: #FFFACD; /* Lichtgeel */
        }
    </style>
</head>
<body>
<?php
// Bepaal het huidige uur
$currentHour = date('G');

// Definieer standaardklasse
$class = 'middag';

// Bepaal de klasse op basis van het huidige uur
if ($currentHour >= 5 && $currentHour < 12) {
    $class = 'ochtend';
} elseif ($currentHour >= 12 && $currentHour < 18) {
    $class = 'middag';
} else {
    $class = 'avond';
}
?>

<!-- Voeg de juiste klasse toe aan de body-tag -->
<body class="<?php echo $class; ?>">
<h1>Moment van de dag</h1>
<p>Het is momenteel <?php echo date('H:i'); ?></p>
</body>
</html>
