<?php

try {
  $pdo = new PDO("mysql:host=localhost;dbname=lp_official", 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Erreur de connexion : " . $e->getMessage());
}


function find_one_student(string $email): array
{
  global $pdo;

  $query = "SELECT * FROM student WHERE email = :email";
  $stmt = $pdo->prepare($query);

  $stmt->bindValue(':email', $email, PDO::PARAM_STR);
  $stmt->execute();


  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


$students = [];


if (isset($_GET['input-email-student']) && !empty($_GET['input-email-student'])) {
  $email = $_GET['input-email-student'];

  $students = find_one_student($email);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recherche d'un Étudiant</title>
</head>

<body>
  <h1>Recherche d'un Étudiant:</h1>


  <form method="get" action="index.php">
    <label for="email">Email de l'étudiant:</label>
    <input type="text" id="email" name="input-email-student" placeholder="Entrez l'email" required>
    <button type="submit">Rechercher</button>
  </form>


  <?php if (!empty($students)): ?>
    <h2>Informations de l'étudiant:</h2>
    <table>
      <thead>
        <tr>

          <?php foreach (array_keys($students[0]) as $column): ?>
            <th><?php echo htmlspecialchars($column); ?></th>
          <?php endforeach; ?>
        </tr>
      </thead>
      <tbody>

        <?php foreach ($students as $student): ?>
          <tr>
            <?php foreach ($student as $value): ?>
              <td><?php echo htmlspecialchars($value); ?></td>
            <?php endforeach; ?>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php elseif (isset($_GET['input-email-student'])): ?>
    <p>Aucun étudiant trouvé avec cet email.</p>
  <?php endif; ?>
</body>

</html>