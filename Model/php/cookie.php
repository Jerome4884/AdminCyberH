<?php 
// Create cookie, we add link in all pages which need connection
$id = $_SESSION['name'];
          $sql = "SELECT * FROM `user`
                  WHERE `name` = :id";

          $query = $db->prepare($sql);
          $query->execute([
            "id" => $id
          ]);

          $contents = $query->fetch();
?>
