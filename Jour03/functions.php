<?php

$pdo = new PDO("mysql:host=localhost;dbname=lp_official", 'root', '');

 function findOneStudent(int $id) : Student {
  global $pdo;
$student= $pdo -> prepare('SELECT * FROM student WHERE id = :id');
$student-> bindValue(':id', $id, PDO::PARAM_INT);
$student-> execute();
$studentInfos= $student->fetch(PDO::FETCH_ASSOC);

if($studentInfos){

  echo  '<h1>Student</h1>';

  echo  '<table>';
  echo  ' <thead>';
     echo  '<tr>';

      foreach ($studentInfos as $key => $value) {
       echo '<th>'.htmlspecialchars($key). '</th>';
      }
   echo    '</tr>';
    echo  '</thead>';
    echo  '<tbody>';

     echo '<tr>';
       foreach ($studentInfos as $value){
       echo "<td>" . htmlspecialchars($value) . "</td>";
       }
       echo '</tr>';
   echo  '</tbody>';
 echo  '</table>';

   return new Student(
     $studentInfos['id'],
     $studentInfos['grade_id'],
     $studentInfos['email'],
     $studentInfos['fullname'],
    new DateTime($studentInfos['birthdate']),
    $studentInfos['gender'],
   );
 } else {
   echo 'Aucun student trouvé';
   return null;
 }
}

function findOneGrade(int $id) : Grade {

  global $pdo;
  $grade= $pdo -> prepare('SELECT * FROM grade WHERE id = :id');
  $grade-> bindValue(':id', $id, PDO::PARAM_INT);
  $grade-> execute();
  $gradeInfos= $grade->fetch(PDO::FETCH_ASSOC);
 

  if($gradeInfos){

   echo  '<h1>Grade</h1>';

   echo  '<table>';
   echo  ' <thead>';
      echo  '<tr>';

       foreach ($gradeInfos as $key => $value) {
        echo '<th>'.htmlspecialchars($key). '</th>';
       }
    echo    '</tr>';
     echo  '</thead>';
     echo  '<tbody>';

      echo '<tr>';
        foreach ($gradeInfos as $value){
        echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo '</tr>';
    echo  '</tbody>';
  echo  '</table>';

    return new Grade(
      $gradeInfos['id'],
      $gradeInfos['room_id'],
      $gradeInfos['name'],
     new DateTime($gradeInfos['year']),
    );
  } else {
    echo 'Aucun grade trouvé';
    return null;
  }
  }

  function findOneFloor(int $id) : Floor {
 global $pdo;
    $floor= $pdo -> prepare('SELECT * FROM floor WHERE id = :id');
    $floor-> bindValue(':id', $id, PDO::PARAM_INT);
    $floor-> execute();
    
    $floorInfos= $floor->fetch(PDO::FETCH_ASSOC);
    
    if($floorInfos){

      echo  '<h1>Floor</h1>';
   
      echo  '<table>';
      echo  ' <thead>';
         echo  '<tr>';
   
          foreach ($floorInfos as $key => $value) {
           echo '<th>'.htmlspecialchars($key). '</th>';
          }
       echo    '</tr>';
        echo  '</thead>';
        echo  '<tbody>';
   
         echo '<tr>';
           foreach ($floorInfos as $value){
           echo "<td>" . htmlspecialchars($value) . "</td>";
           }
           echo '</tr>';
       echo  '</tbody>';
     echo  '</table>';
   
       return new Floor(
         $floorInfos['id'],
         $floorInfos['name'],
         $floorInfos['level'],
      
       );
     } else {
       echo 'Aucun floor trouvé';
       return null;
     }
    }

    function findOneRoom(int $id) : Room {
      global $pdo;
         $room= $pdo -> prepare('SELECT * FROM room WHERE id = :id');
         $room-> bindValue(':id', $id, PDO::PARAM_INT);
         $room-> execute();
         
         $roomInfos= $room->fetch(PDO::FETCH_ASSOC);
       

         if($roomInfos){

          echo  '<h1>Room</h1>';
       
          echo  '<table>';
          echo  ' <thead>';
             echo  '<tr>';
       
              foreach ($roomInfos as $key => $value) {
               echo '<th>'.htmlspecialchars($key). '</th>';
              }
           echo    '</tr>';
            echo  '</thead>';
            echo  '<tbody>';
       
             echo '<tr>';
               foreach ($roomInfos as $value){
               echo "<td>" . htmlspecialchars($value) . "</td>";
               }
               echo '</tr>';
           echo  '</tbody>';
         echo  '</table>';
       
           return new Room(
             $roomInfos['id'],
             $roomInfos['floor_id'],
             $roomInfos['name'],
             $roomInfos['capacity'],
          
           );
         } else {
           echo 'Aucune room trouvé';
           return null;
         }
         }