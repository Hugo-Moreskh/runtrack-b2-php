<?php



function insert_student(string $email, string $fullname, string $gender, DateTime $birthdate, int $grade_Id): void
{
  global $pdo;
  try {
    $pdo = new PDO("mysql:host=localhost;dbname=lp_official", 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
  }



  $stmt = $pdo->prepare("INSERT INTO student (email, fullname, gender, birthdate, grade_id) VALUES (:email, :fullname, :gender, :birthdate, :grade_id)");

  $stmt->bindValue(':email', $email, PDO::PARAM_STR);
  $stmt->bindValue(':fullname', $fullname, PDO::PARAM_STR);
  $stmt->bindValue(':gender', $gender, PDO::PARAM_STR);
  $stmt->bindValue(':birthdate', $birthdate->format('Y-m-d'), PDO::PARAM_STR);
  $stmt->bindValue(':grade_id', $grade_Id, PDO::PARAM_INT);


  $stmt->execute();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  echo 'salutttt';
  $email = $_POST['input-email'] ?? '';
  $fullname = $_POST['input-fullname'] ?? '';
  $gender = $_POST['input-gender'] ?? '';
  $birthdate = new DateTime($_POST['input-birthdate']) ?? '';
  $grade_id = $_POST['input-grade_id'] ?? 0;


  if (!empty($email) && !empty($fullname) && !empty($gender) && !empty($birthdate) && !empty($grade_id)) {
    echo 'salut';
    insert_student($email, $fullname, $gender, $birthdate, $grade_id);
  } else {
    echo "Veuillez remplir tous les champs.";
  }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insertion d'un nouvel étudiant</title>
</head>

<body>
  <h1>Insertion d'un nouvel étudiant</h1>


  <form method="post" action="index.php">
    <label for="email">Email:</label>
    <input type="email" id="email" name="input-email" placeholder="Entrez l'email" required>

    <label for="fullname">Nom complet:</label>
    <input type="text" id="fullname" name="input-fullname" placeholder="Entrez le nom complet" required>

    <label for="gender">Genre:</label>
    <select id="gender" name="input-gender" required>
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>

    <label for="birthdate">Date de naissance:</label>
    <input type="date" id="birthdate" name="input-birthdate" required>

    <label for="grade_id">Identifiant du grade:</label>
    <input type="number" id="grade_id" name="input-grade_id" min="1" required>

    <button type="submit">Insérer l'étudiant</button>
  </form>
</body>

</html>