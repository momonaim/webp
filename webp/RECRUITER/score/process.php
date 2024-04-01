<?php
include('../../connection/db.php');

// Process form submission
if (isset($_POST['submit'])) {
    // Check if skills are selected
    if (isset($_POST['skills']) && !empty($_POST['skills'])) {
        $selectedSkills = $_POST['skills'];

        // Initialize score
        $score = 0;

        // Fetch skill values from the database
        foreach ($selectedSkills as $selectedSkill) {
            $sql = "SELECT skill_value FROM skills WHERE skill_name = '$selectedSkill'";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                $row = mysqli_fetch_assoc($result);
                $score += $row['skill_value'];
            } else {
                echo "Invalid skill selection: $selectedSkill";
            }
        }

        // Display total score
        echo "Total score: $score";
    } else {
        echo "Please select at least one skill.";
    }
}

// Close connection
mysqli_close($conn);
?>