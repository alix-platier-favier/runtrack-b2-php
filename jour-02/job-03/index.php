<?php

function insert_student(string $email, string $fullname, string $gender, DateTime $birthdate, int $gradeId): array {
    $host = "localhost";
    $dbname = "lp_official";
    $username = "root";
    $password = "phpcdlamerde159753!";

    try {
        $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $bdd->prepare("INSERT INTO student (email, fullname, gender, birthdate, grade_id) VALUES (:email, :fullname, :gender, :birthdate, :grade_id)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':fullname', $fullname);
        $stmt->bindParam(':gender', $gender);
        $birthdateStr = $birthdate->format('Y-m-d');
        $stmt->bindParam(':birthdate', $birthdateStr);
        $stmt->bindParam(':grade_id', $gradeId);
        $stmt->execute();
   
        return ['success' => true, 'message' => 'Student inserted successfully'];
    } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['input-email'];
    $fullname = $_POST['input-fullname'];
    $gender = $_POST['input-gender'];
    $birthdateStr = $_POST['input-birthdate'];
    $birthdate = DateTime::createFromFormat('Y-m-d', $birthdateStr);
    $gradeId = $_POST['input-gradeId'];

    $result = insert_student($email, $fullname, $gender, $birthdate, $gradeId);

    if ($result['success']) {
        echo $result['message'];
    } else {
        echo $result['error'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>
<body>
<div class="form_box register">
    <h2>Student Registration</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="input_box">
            <input type="email" name="input-email" required>
            <label>Email</label>
        </div>
        <div class="input_box">
            <input type="text" name="input-fullname" required>
            <label>Full Name</label>
        </div>
        <div class="input_box">
            <select name="input-gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <label>Gender</label>
        </div>
        <div class="input_box">
            <input type="date" name="input-birthdate" required>
            <label>Birthdate</label>
        </div>
        <div class="input_box">
            <input type="number" name="input-gradeId" required>
            <label>Grade ID</label>
        </div>
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
