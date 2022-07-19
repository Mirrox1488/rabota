<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
<?php
$a = "Визитка для трудоустройства";
$b = "О себе:<br/>";
    $date_of_birth = array(
        "name" => "Денис ",
        "surname" => "Аржанович ",
        "age" => 26,
        "year" => 1996,
        "вредные привычки" => false,
        "изучение PHP" => true,
        "education" => array("Школу окончил в 2014 году,", " а колледж в 2015."));
    echo $a;
    echo "<hr>";
    echo $b;
    echo $date_of_birth["name"].  $date_of_birth["surname"];
    echo "<br/>На данный момент мне ". $date_of_birth["age"]. " полных лет.";
    echo "<br/>Родился в ". $date_of_birth["year"]. " году.<br/>";
    echo $date_of_birth["education"][0]. $date_of_birth["education"][1];
//можно было написать проще и чище. Заморачивался, чтобы показать массивы.
    $salary = 500;
    if ($salary <= 500)
    {
        echo "<br/>приемлемо";
    }
    else
    {
        ($salary > 500);
        echo "<br/>отлично!";
    }
?>
</body>
</html>