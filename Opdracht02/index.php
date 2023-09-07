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
$fileHandle = fopen("example.txt", "r");

// Callable (aanroepbare functie)
$functionReference = function ($x, $y) {
    return $x + $y;
};