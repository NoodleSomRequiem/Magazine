<?php
/**
 * @return array
 */
function getBoss()
{
    return [
        [
            "id" => 5,
            "image" => "http://localhost/untitled2/AJAX/img/fourkings.png",
            "name" => "4Kings",

        ],
        [
            "id" => 4,
            "image" => "http://localhost/untitled2/AJAX/img/yhrom.png",
            "name" => "Yhorm",

        ],
        [
            "id" => 3,
            "image" => "http://localhost/untitled2/AJAX/img/king.png",
            "name" => "Nameless king",

        ],
        [
            "id" => 2,
            "image" => "http://localhost/untitled2/AJAX/img/soul.png",
            "name" => "Soul of Cinder",

        ],
        [
            "id" => 1,
            "image" => "http://localhost/untitled2/AJAX/img/artorias.png",
            "name" => "Knight Artorias",

        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getBossDetails($id)
{
    $tags = [
        5 => [
            "description" => "The 4Kings of New Lando ruins, chosen by Gwyn",
        ],
        4 => [
            "description" => "The resurrected giant, gone mad",
        ],
        3 => [
            "description" => "Son of Gwyn, the first lord of Cinder",
        ],
        2 => [
            "description" => "The souls of all past cinders, Linkers of the first flame, combined",
        ],
        1 => [
            "description" => "The knight who went against the abyss but got consumed",
        ],
    ];

    return $tags[$id];

}
