<?php

$employee  = ['Nadim', "saba", 'Nadia', 'Abrar','Masum'];
$searchElement = "Abrar" ;

foreach ($employee as $element) {
    if ($element == $searchElement) {
        echo "$element";

    }
}

?>