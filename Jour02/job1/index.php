<?php

$pdo = new PDO("mysql:host=localhost;dbname=lp_official", 'root', '');

function find_all_students(): array
{

  global $pdo;
  $query = "SELECT * FROM student";

  $stmt = $pdo->prepare($query);
  $stmt->execute();

  return $stmt->fetchAll(PDO::FETCH_ASSOC);
};
$students = find_all_students();


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>job1</title>
</head>


<body>
  <h1>Tableau des étudiants</h1>

  <table>
    <thead>
      <tr>
        <?php if (!empty($students)): ?>
          <?php foreach (array_keys($students[0]) as $column) : ?>
            <th>
              <?php echo htmlspecialchars($column); ?>
            </th>
          <?php endforeach; ?>
        <?php endif; ?>
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
</body>

</html>