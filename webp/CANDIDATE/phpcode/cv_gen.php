<?php
include ('../../connection/db.php');
require '../dompdf\autoload.inc.php';
use Dompdf\Dompdf;

$id = $_GET['id'];
// $id = 22;
$sql = mysqli_query($conn, "SELECT * FROM candidates WHERE can_id='$id'");
$candidat = mysqli_fetch_assoc($sql);
if (mysqli_num_rows($sql) == 0) {
    echo "Error: No candidate";
    exit();
}

$email = explode("@", $candidat['Email']);

$conn2 = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
$conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$stmt = $conn2->prepare("SELECT * FROM education WHERE id_c = '$id'");
$stmt->execute();
$formations = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt2 = $conn2->prepare("SELECT * FROM experience WHERE id_c = '$id'");
$stmt2->execute();
$experiences = $stmt2->fetchAll(PDO::FETCH_ASSOC);

$stmt3 = $conn2->prepare("SELECT * FROM skill WHERE id_c = '$id'");
$stmt3->execute();
$skills = $stmt3->fetchAll(PDO::FETCH_ASSOC);

// instantiate and use the dompdf class
$dompdf = new Dompdf();
ob_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV2</title>
</head>

<body>
    <div class="centre">
        <div class="Lapartie_gauche">
            <div class=" la_partie_droit">
                <div class="profileText">

                    <h2>
                        <?= strtoupper($candidat['lastname'] . ' ' . $candidat['firstname']) ?>
                        <br> <span style=" color: rgb(149, 234, 234); font-size: medium;">
                            <?= $candidat['Username'] ?>
                        </span>
                    </h2>
                </div>
                <hr>
                <div class=" ContactInfo">
                    <h3 class=" title"> Contact Info</h3>
                    <ul>
                        <li>
                            <span class="icon "> <span class="icon ">Name:</span></span>
                            <span class=" text">
                                <?= $candidat['lastname'] . ' ' . $candidat['firstname'] ?>
                            </span>
                        </li>
                        <li>
                            <span class="icon "> Tel:</span>
                            <span class=" text">
                                <?= $candidat['Phone'] ?>
                            </span>
                        </li>

                        <li>
                            <span class="icon ">Email:</span>
                            <span class=" text">
                                <?= $candidat['Email'] ?>
                            </span>
                        </li>

                        <li>
                            <span class="icon ">Address:</span></span>
                            <span class=" text">
                                <?= $candidat['Address'] . ', ' . $candidat['City'] . ', ' . $candidat['Country'] ?>
                            </span>
                        </li>
                        <li>
                            <span class="icon ">Birthday:</span>
                            <span class=" text">
                                <?= $candidat['birth'] ?>
                            </span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="right_side">
            <div class="about">
                <hr>
            </div>
            <div class="ContactInfo Formation">
                <h3 class="title"> Experience:</h3>
                <ul style=" margin: 20px;">
                    <?php foreach ($experiences as $experience): ?>
                        <li>
                            <h5 style=" color: gray;">
                                <?php echo $experience['debut'] . ' - ' . $experience['fin']; ?>
                            </h5>
                            <h4>
                                <?= $experience['poste'] ?>
                            </h4>
                            <p>
                                <?= $experience['description'] ?>
                            </p>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
            <hr>
            <div class="ContactInfo Formation">
                <h3 class="title"> Formation:</h3>
                <ul style=" margin: 20px;">
                    <?php foreach ($formations as $formation): ?>
                        <li>
                            <h5 style=" color: grey;">
                                <?php echo $formation['debut'] . ' - ' . $formation['fin']; ?>
                            </h5>
                            <h4>
                                <?= $formation['diplome'] ?>
                            </h4>
                            <h4>
                                <?= $formation['institution'] ?>
                            </h4>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
            <hr>
            <div>
                <h3>Skills:</h3>
                <ul style=" margin: 20px;">
                    <?php foreach ($skills as $skill): ?>
                        <li> <strong>
                                <?= $skill['category'] . ': ' ?>
                            </strong>
                            <?= $skill['skill'] ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>

</body>

</html>
<?php



$html = ob_get_contents();
ob_get_clean();

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();


$pdf_content = $dompdf->output();
$folder_path = '../uploads/';
$file_path = $folder_path . $email[0] . '.pdf';
// Save the PDF to the specified path
file_put_contents($file_path, $pdf_content);

// Optionally, you can check if the PDF was saved successfully
if (file_exists($file_path)) {
    // echo "PDF saved successfully at: $file_path";
    $_SESSION['status'] = "CV added successfully!";
    header('location:../cv_add.php?status=success');
} else {
    echo "Error: Failed to save PDF";
}

?>