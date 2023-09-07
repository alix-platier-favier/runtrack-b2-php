<?php

function find_one_student(string $email) : array {
    $host = "localhost";
    $dbname = "lp_official";
    $username = "root";
    $password = "phpcdlamerde159753!";

    try {
        $bdd = new PDO ("mysql:host=$host;dbname=$dbname", $username, $password);
        $bdd -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = $bdd -> prepare("SELECT * FROM student WHERE email = :email");
        $requete -> execute ([":email" => $email]);
        $student = $requete->fetch();
        return $student;
    } catch (PDOException $e) {
        echo "Error : " . $e -> getMessage();
    }
    return [];
}

$students = null;
    if (isset($_GET['email'])) {
        $email = $_GET['email'];
        $students = find_one_student($email);}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job0</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <input type="submit" value="Search">
    </form>

    <?php if ($students): ?>
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
            <tr>
                <td><?= $students['id'] ?></td>
                <td><?= $students['grade_id'] ?></td>
                <td><?= $students['email'] ?></td>
                <td><?= $students['fullname'] ?></td>
                <td><?= $students['birthdate'] ?></td>
                <td><?= $students['gender'] ?></td>
            </tr>
        </tbody>
    </table>
<?php elseif (isset($_GET['email'])): ?>
    <p>Wrong email, try again.</p>
<?php endif; ?>
</body>
</html>
