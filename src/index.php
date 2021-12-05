<h1>Hello w lab6 :)</h1>
<?php

$mysqli = new mysqli("db", "root", "example", "lab6");
$sql = "INSERT INTO lab6 (Imie, nazwisko) VALUES('Daniil', 'Balyev')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO lab6 (Imie, nazwisko) VALUES('Ktos', 'Tam')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO lab6 (Imie, nazwisko) VALUES('Ta', 'TAaser')";
$result = $mysqli->query($sql);

$sql = 'SELECT * FROM lab6';

if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}


foreach ($users as $user) {
    echo "<br>";
    echo $user->Imie . " " . $user->Nazwisko ;
    echo "<br>";
}
