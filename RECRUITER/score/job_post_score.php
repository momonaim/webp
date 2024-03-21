<?php
// Database connection
$dsn = 'mysql:host=localhost;dbname=test';
$username = 'root';
$password = '';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

try {
    $pdo = new PDO($dsn, $username, $password, $options);
    echo 'Database connection established';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}

// Collect form data
if (isset($_POST['submit'])) {
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];
    $input3 = $_POST['input3'];
    $input4 = $_POST['input4'];

    // Organize inputs into an array
    $data = array(
        'bac' => $input1,
        'mst' => $input2,
        'phd' => $input3,
        'cll' => $input4
    );
    $data2 = array(
        $input1,
        $input2,
        $input3,
        $input4
    );

    // Convert array to JSON
    $jsonData = json_encode($data);
    $jsonData2 = json_encode($data2);

    // Insert JSON data into MySQL
    $sql = "INSERT INTO dataa (json_data_column) VALUES (:jsonData)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':jsonData', $jsonData);
    $s = $stmt->execute();
    if ($s) {
        echo '<script>alert("success");</script>';
    } else {
        echo '<script>alert("no insert");</script>';
    }
    $sql = "INSERT INTO dataa (json_data_column) VALUES (:jsonData)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':jsonData', $jsonData2);
    $s = $stmt->execute();
    if ($s) {
        echo '<script>alert("success");</script>';
    } else {
        echo '<script>alert("no insert");</script>';
    }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
</head>

<body>
    <h2>Enter Data</h2>
    <form action="" method="post">
        <label for="input1">Input 1:</label>
        <input type="text" id="input1" name="input1"><br><br>

        <label for="input2">Input 2:</label>
        <input type="text" id="input2" name="input2"><br><br>

        <label for="input3">Input 3:</label>
        <input type="text" id="input3" name="input3"><br><br>

        <label for="input4">Input 4:</label>
        <input type="text" id="input4" name="input4"><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Retrieve JSON data from MySQL
    $sql = "SELECT json_data_column FROM dataa ";
    $stmt2 = $pdo->prepare($sql);
    $stmt2->execute();
    $row = $stmt2->fetchAll(PDO::FETCH_ASSOC);

    $storedData = json_decode($row[5]['json_data_column'], true);

    echo $storedData['cll'];
    // Now $storedData will contain the array
    
    //test $score
    $edc['degree'] = 'cll';
    echo $edc['degree'];
    $score = 12;
    switch ($edc['degree']) {
        case "bac":
            $score += $storedData['bac'];
            break;
        case "master":
            $score += $storedData['mst'];
            break;
        case "phd":
            $score += $storedData['phd'];
            break;
        case "cll":
            $score += $storedData['cll'];
            break;
        default:
            // Default score or handle invalid education level
            // $score += 123;
            break;
    }
    echo '<br>score : ' . $score;
    ?>
</body>

</html>