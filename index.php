<?php

echo 'Un texto de una línea
varias líneas
comilla simple \' backslash \\ continuar con más texto 
$variable <br>';

$name = 'Albert';
echo "Mi nombre es: $name <br>";
echo 'Mi nombre es: ' . $name . '<br>';

$courses = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];

echo " <br> {$courses['backend'][0]}";

class User
{
    public $name = 'italo';
}

$user = new User;


$courses2 = ['backend' => 'PHP'];

echo "<br> $user->name quiere aprender {$courses2['backend'][0]}";



$teacher = 'albert';
$albert = 'Profesor';

echo "<br> $teacher es ${$teacher}";

function getTeacher()
{
    return 'teacher';
}

$teacher = 'Italo';


echo "<br> {${getTeacher()}} enseña PHP";
