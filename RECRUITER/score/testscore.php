<?php 
include('../../connection/db.php');



 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill Selection Form</title>
</head>
<body>
    <h2>Choose Skills</h2>
    <form action="process.php" method="post">
        <?php

        // Fetch skills from the database
        $sql = "SELECT skill_name FROM skills";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<input type='checkbox' id='{$row['skill_name']}' name='skills[]' value='{$row['skill_name']}'>";
                echo "<label for='{$row['skill_name']}'>{$row['skill_name']}</label><br>";
            }
        } else {
            echo "No skills available";
        }

        // Close connection
        mysqli_close($conn);
        ?>
        <br>
        <input type="submit" name="submit" value="Calculate Score">
    </form>
</body>
</html>
