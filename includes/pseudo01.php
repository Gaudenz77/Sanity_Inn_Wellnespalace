<?php
$questions = array(
    array(
        "id" => "question1",
        "question" => "Wie gesund bist du körperlich?", 
        "type" => "range",
        "min" => 1,
        "max" => 5,
        "value" => 3
    ),
    array(
        "id" => "question2",
        "question" => " Nimmst du Nahrungsergänzungsmittel?",
        "type" => "radio",
        "value" => array("ja","nein")
    ),
    array(
        "id" => "question3",
        "question" => "Wie wichtig ist köperliche Aktivität für dich?",
        "type" => "range",
        "min" => 1,
        "max" => 5,
        "value" => 3
    ),
    array(
        "id" => "question4",
        "question" => "Welche zusätzliche körperliche Aktivität betreibst du am meisten?",
        "type" => "checkbox",
        "value" => array(
            "Gewichte heben",
            "Gehen",
            "Wandern",
            "Joggen",
            "Rennen",
            "Schwimmen",
            "Tanzen",
            "Aerobics",
            "Pilates",
            "Team Sport",
            "Andere"
        )
    ),
    array(
        "id" => "question5",
        "question" => "Hast du das Gefühl, zu wenig, genügend oder viel zu viel zusätzliche körperliche Aktivitäten zu betreiben?",
        "type" => "range",
        "min" => 0,
        "max" => 5,
        "value" => 3
    ),
    array(
        "id" => "question6",
        "question" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Kohlenhydrate?",
        "type" => "number",
        "min" => 1,
        "max" => 99
    ),
    array(
        "id" => "question7",
        "question" => " An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Protein?",
        "type" => "number",
        "min" => 1,
        "max" => 99
    ),
    array(
        "id" => "question8",
        "question" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Gemüse?",
        "type" => "number",
        "min" => 1,
        "max" => 99
    ),
    array(
        "id" => "question9",
        "question" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Früchte?",
        "type" => "number",
        "min" => 1,
        "max" => 99

    ),
    array(
        "id" => "question10",
        "question" => "An einem typischen Tag: Wie viele deiner Malzeiten kommen aus der Mikrowelle oder sind schon fertig zubereitet?",
        "type" => "number",
        "min" => 1,
        "max" => 99
    ),
)
?>