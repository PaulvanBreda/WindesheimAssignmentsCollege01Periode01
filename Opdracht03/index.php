<!DOCTYPE html>
<html>
<head>
    <title>Variabele voorbeelden</title>
</head>
<body>
<h1>Variabele voorbeelden</h1>

<?php
// String (tekst)
$name = "Paul van Breda";

// Integer (geheel getal)
$age = 21;

// Float (kommagetal)
$height = 1.84;

// Boolean (waar of onwaar)
$isStudent = true;

// Array (lijst van waarden)
$grades = [85, 92, 78, 95];

// Associative array (lijst van sleutel-waardeparen)
$studentInfo = [
    "naam" => "Paul van Breda",
    "leeftijd" => 21,
    "email" => "s1200548@student.windesheim.nl"
];

// Null (geen waarde)
$address = null;

// Object (instantie van een klasse)
class Course {
    public $courseName = "AD Softwaredevelopment";
    public $credits = 3;
}

$programmingCourse = new Course();

// Resource (bronhandle)
//$fileHandle = fopen("example.txt", "r");

// Callable (aanroepbare functie)
$functionReference = function ($x, $y) {
    return $x + $y;
};

// Variabelen weergeven in HTML
echo "<p>Naam: $name</p>";
echo "<p>Leeftijd: $age</p>";
echo "<p>Lengte: $height meter</p>";
echo "<p>Is student: " . ($isStudent ? "Ja" : "Nee") . "</p>";
echo "<p>Cijfers: " . implode(", ", $grades) . "</p>";

echo "<p>Studentinformatie:";
echo "<ul>";
foreach ($studentInfo as $key => $value) {
    echo "<li>$key: $value</li>";
}
echo "</ul>";
echo "</p>";

echo "<p>Adres: " . ($address === null ? "Geen adres bekend" : $address) . "</p>";

echo "<p>Cursusnaam: " . $programmingCourse->courseName . "</p>";

//echo "<p>Bestandshandle: " . get_resource_type($fileHandle) . "</p>";

echo "<p>Callable functie: " . $functionReference(2, 3) . "</p>";
?>
</body>
</html>
