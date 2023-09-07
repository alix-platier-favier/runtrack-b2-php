<?php

function find_all_students() : array {
    $bdd = new PDO("mysql:host=localhost;dbname=lp_official", "root", "phpcdlamerde159753!");
    $requete = $bdd -> prepare("SELECT * FROM student");
    $requete -> execute();
    $student = $requete -> fetchAll();
    return $student;
}

$student = find_all_students();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job01</title>
</head>
<body>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Grade ID</th>
            <th>Email</th>
            <th>Fullname</th>
            <th>Birthdate</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($student as $student): ?>
        <tr>
            <td><?= $student['id'] ?></td>
            <td><?= $student['grade_id'] ?></td>
            <td><?= $student['email'] ?></td>
            <td><?= $student['fullname'] ?></td>
            <td><?= $student['birthdate'] ?></td>
            <td><?= $student['gender'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>