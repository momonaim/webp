<?php 
include('../../connection/db.php');





// Process form submission
if (isset($_POST['skill_name'], $_POST['skill_value'])) {
    $skillNames = $_POST['skill_name'];
    $skillValues = $_POST['skill_value'];

    // Insert skills into the database
    $successCount = 0;
    $totalCount = count($skillNames);

    for ($i = 0; $i < $totalCount; $i++) {
        $skillName = $conn->real_escape_string($skillNames[$i]);
        $skillValue = intval($skillValues[$i]);

        $sql = "INSERT INTO skills (skill_name, skill_value) VALUES ('$skillName', $skillValue)";

        if ($conn->query($sql) === TRUE) {
            $successCount++;
        }
    }

    echo "$successCount out of $totalCount skills added successfully";
}

// Close connection
$conn->close();
?>