<?php

function find_all_students_grades() : array {
    $bdd = new PDO("mysql:host=localhost;dbname=lp_official", "root", "phpcdlamerde159753!");
    $requete = $bdd->prepare("SELECT s.email, s.fullname, g.name FROM student s JOIN grade g ON s.grade_id = g.id");
    $requete->execute();
    $students = $requete->fetchAll(PDO::FETCH_ASSOC);
    return $students;
}

$students = find_all_students_grades();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job04</title>
</head>
<body>
<table border="1">
    <thead>
        <tr>
            <th>Email</th>
            <th>Fullname</th>
            <th>Grade Name</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?= $student['email'] ?></td>
            <td><?= $student['fullname'] ?></td>
            <td><?= $student['name'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
