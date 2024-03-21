<?php
include ('session/session_check.php');
include ('header.php');
include ('magic_menu.php');
include ('../connection/db.php');
if (isset ($_GET['status']))
    if ($_GET['status'] == 'success') {
        $_SESSION['status'] = "CV added successfully!";
    }
// echo $_SESSION['status'];

?>





<?php
// $edit=$_GET['edit'];
$edit = $_SESSION['can_id'];

// echo $edit;

// $query = mysqli_query($conn, "select * from Candidates where can_id='$edit'");

$conn2 = new PDO("mysql:host=$servername;dbname=$database", $username, '');
$conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn2->prepare("SELECT * FROM `Candidates` WHERE can_id = '$edit'");
$stmt->execute();
$result = $stmt->fetchAll();

// while ($row = mysqli_fetch_array($query)) {
foreach ($result as $row) {
    $Email = $row['Email'];
    $Username = $row['Username'];
    $password = $row['password'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $phone = $row['Phone'];
    $address = $row['Address'];
    $city = $row['City'];
    $country = $row['Country'];
    $zip = $row['zipcode'];
    $birth = $row['birth'];
    $cv = $row['cv'];
    $gender = $row['gender'];
}

?>



<div class=" container-lg col-md-12 col-lg-7 mt-4">
    <div class="daform2">

        <!-- success card stuff -->
        <?php
        if (isset ($_SESSION['status'])) {
            ?>
            <div class="alert alert-success d-flex align-items-center mt-4 container-lg col-md-12 col-lg-7" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                </svg>
                <div>
                    &nbsp;
                    <?php echo $_SESSION['status']; ?>
                </div>
            </div>
            <?php
            // code...
            //now release the session variable
            unset($_SESSION['status']);
        }

        ?>

        <div class="card scroll4 border-yellow shadow-lg">
            <h5 class="card-header border-yellow text-center fs-2 bg-yellow"
                style=" font-weight: bold; font-family: Passion One, sans-serif;">Your CV</h5>
            <div class="card-body">
                <div class="">
                    <div class="row g-3">
                        <?php
                        try {

                            ?>
                            <div class="card scroll4 border-green shadow-lg">
                                <h5 class="card-header text-center fs-2">
                                    <?php echo ($cv == 'noCV.pdf') ? 'No CV' : $cv; ?>
                                </h5>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <a type="submit" href="phpcode/cv_gen.php?id=<?php echo $edit; ?>"
                                                class="w-100 fs-3 btn border-blue btn-info hover3"
                                                style=" font-weight: bold; font-family: Passion One, sans-serif;color: white;">
                                                Generate CV from Profile</a>
                                        </div>
                                        <hr class="my-4">
                                        <form action="phpcode/cv_add_code.php" class="needs-validation" novalidate=""
                                            name="admin_form" id="admin_form" method="POST" enctype="multipart/form-data">

                                            <div class="card scroll4 border-blue shadow-lg">
                                                <h5 class="card-header border-yellow text-center fs-2 bg-info"
                                                    style="font-weight: bold; font-family: Passion One, sans-serif; color: white;">
                                                    Upload
                                                    CV</h5>
                                                <div class="card-body">
                                                    <div class="">
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <label for="cv" class="form-label">Upload CV</label>
                                                                <input type="file" class="form-control" id="cv" name="cv"
                                                                    required>
                                                                <div class="invalid-feedback">
                                                                    CV is required.
                                                                </div>
                                                            </div>

                                                            <input type="hidden" name="id" id="id"
                                                                value="<?php echo $edit; ?>">
                                                            <input type="hidden" name="Email" id="Email"
                                                                value="<?php echo $Email; ?>">
                                                        </div>
                                                        <hr class="my-4">
                                                        <input type="submit" class="w-100 fs-3 btn btn-blue hover3"
                                                            placeholder="save" value="Upload" name="submit" id="submit"
                                                            style=" font-weight: bold; font-family: Passion One, sans-serif;">
                                                    </div>
                                                </div>
                                        </form>

                                    </div>

                                </div>
                                <hr class="my-4">

                            </div>

                            <?php


                        } catch (PDOException $e) {
                            die ("Error: " . $e->getMessage());
                        }
                        ?>

                    </div>

                    <div class="card-body">
                        <div class="row g-3">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-input">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="pdf_file" class="form-label">Upload CV Modal</label>
                                            <input type="file" class="form-control" id="pdf_file" name="pdf_file"
                                                required>
                                            <div class="invalid-feedback">
                                                CV is required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="my-3"></div>
                                    <div class="col-sm-6">
                                        <input type="submit" class="w-100 btn btn-warning hover3" placeholder="save"
                                            value="Extract Data" name="submit" id="submit"
                                            style=" font-weight: bold; font-family: Passion One, sans-serif;">
                                    </div>
                                    <hr>
                                </div>
                            </form>
                            <?php

                            $pdfText = '';
                            if (isset ($_POST['submit'])) {
                                // If file is selected 
                                if (!empty ($_FILES["pdf_file"]["name"])) {
                                    // File upload path 
                                    $fileName = basename($_FILES["pdf_file"]["name"]);
                                    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

                                    // Allow certain file formats 
                                    $allowTypes = array('pdf');
                                    if (in_array($fileType, $allowTypes)) {
                                        // Include autoloader file 
                                        include 'pdfparser-1.0.0/alt_autoload.php-dist';

                                        // Initialize and load PDF Parser library 
                                        $parser = new \Smalot\PdfParser\Parser();

                                        // Source PDF file to extract text 
                                        $file = $_FILES["pdf_file"]["tmp_name"];

                                        // Parse pdf file using Parser library 
                                        $pdf = $parser->parseFile($file);

                                        // Extract text from PDF 
                                        $text = $pdf->getText();

                                        // Add line break 
                                        $pdfText = nl2br($text);
                                    } else {
                                        $statusMsg = '<p>Sorry, only PDF file is allowed to upload.</p>';
                                        echo $statusMsg;
                                    }
                                } else {
                                    $statusMsg = '<p>Please select a PDF file to extract text.</p>';
                                    echo $statusMsg;
                                }

                                // Display text content 
                                // echo $pdfText;
                            
                                // Extract information
                                include 'data.php';
                                $cvInfo = extractCVInfo($pdfText);

                                // Display extracted information
                                // print_r("Name: " . $cvInfo['name']);
                                // print_r("Email: " . $cvInfo['email']);
                                // print_r("Address: " . $cvInfo['address']);
                                // print_r("Phone: " . $cvInfo['phone']);
                                // print_r("Experience:");
                                $experienceContent = '';
                                foreach ($cvInfo['experience'] as $exp) {
                                    $experienceContent .= "- " . $exp . "\n";
                                    // echo "- " . $exp . "\n";
                                }
                                // echo "Education:\n";
                                $educationContent = '';
                                foreach ($cvInfo['education'] as $edu) {
                                    $educationContent .= "- " . $edu . "\n";
                                    // echo "- " . $edu . "\n";
                                }
                                // echo "Skills:\n";
                                $skillContent = '';
                                foreach ($cvInfo['skills'] as $skill) {
                                    $skillContent .= "- " . $skill . "\n";
                                    // echo "- " . $skill . "\n";
                                }
                            }

                            ?>
                            <form action="phpcode/cv_code.php" method="post" enctype="multipart/form-data">
                                <div class="col-12">
                                    <label for="contact" class="form-label">Contact Info:</label>
                                    <textarea class="form-control" id="contact" required name="contact" rows="4"
                                        cols="100">
                                    <?php
                                    if (isset ($_POST['submit'])) {
                                        $Name = str_replace('<br />', '', $cvInfo['name']);
                                        $Email = str_replace('<br />', '', $cvInfo['email']);
                                        $Address = str_replace('<br />', '', $cvInfo['address']);
                                        $Phone = str_replace('<br />', '', $cvInfo['phone']);
                                        echo "\n";
                                        print_r("Name: " . $Name . "\n");
                                        print_r("Email: " . $Email . "\n");
                                        print_r("Address: " . $Address . "\n");
                                        print_r("Phone: " . $Phone . "\n");
                                    } else {
                                        echo "\n";
                                        print_r("Name: " . $firstname . " " . $lastname . "\n");
                                        print_r("Email: " . $Email . "\n");
                                        print_r("Address: " . $address . ", " . $city . ", " . $country . "\n");
                                        print_r("Phone: " . $phone . "\n");
                                    }
                                    ?>
                                </textarea>
                                    <div class="invalid-feedback">
                                        Please enter the exrepiences.
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="experince" class="form-label">EXPERIENCE:</label>
                                    <textarea class="form-control" id="experince" required name="experince" rows="10"
                                        cols="100">
                                    <?php
                                    if (isset ($_POST['submit'])) {
                                        $experienceContent = str_replace('<br />', '', $experienceContent);
                                        $experienceContent = trim($experienceContent);
                                        echo htmlspecialchars($experienceContent);
                                    } else {
                                        try {
                                            $stmt = $conn2->prepare("SELECT * from experience where id_c= '$edit' ");
                                            $stmt->execute();
                                            $result = $stmt->fetchAll();
                                            echo "--------------------------------------";
                                            foreach ($result as $row) {
                                                echo $row['debut'] . "--";
                                                echo $row['fin'] . "--------------------------------------\n";
                                                ;
                                                echo $row['poste'] . "\n";
                                                echo $row['description'] . "\n";
                                                echo "\n";
                                                echo "--------------------------------------";
                                            }
                                        } catch (PDOException $e) {
                                        }
                                    }
                                    ?>
                                </textarea>
                                    <div class="invalid-feedback">
                                        Please enter the exrepiences.
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="education" class="form-label">EDUCATION:</label>
                                    <textarea class="form-control" id="education" required name="education" rows="10"
                                        cols="100">
                                    <?php
                                    if (isset ($_POST['submit'])) {
                                        $educationContent = str_replace('<br />', '', $educationContent);
                                        $educationContent = trim($educationContent);
                                        echo htmlspecialchars($educationContent);
                                    } else {
                                        try {
                                            $stmt = $conn2->prepare("SELECT * from education where id_c= '$edit'");
                                            $stmt->execute();
                                            $result = $stmt->fetchAll();
                                            echo "--------------------------------------";
                                            foreach ($result as $row) {
                                                echo $row['debut'] . "--";
                                                echo $row['fin'] . "--------------------------------------\n";
                                                ;
                                                echo $row['degree'] . "\n";
                                                echo $row['diplome'] . "\n";
                                                echo $row['institution'] . "\n";
                                                echo "\n";
                                                echo "--------------------------------------";
                                            }
                                        } catch (PDOException $e) {
                                        }
                                    }
                                    ?>
                                </textarea>
                                    <div class="invalid-feedback">
                                        Please enter the education.
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="skills" class="form-label">SKILLS:</label>
                                    <textarea class="form-control" id="skills" name="skills" rows="7" cols="100"
                                        required>
                                    <?php
                                    if (isset ($_POST['submit'])) {
                                        $skillContent = str_replace('<br />', '', $skillContent);
                                        $skillContent = trim($skillContent);
                                        echo htmlspecialchars($skillContent);
                                    } else {
                                        try {
                                            $stmt = $conn2->prepare("SELECT * from skill where id_c= '$edit' ");
                                            $stmt->execute();
                                            $result = $stmt->fetchAll();
                                            echo "\n";
                                            foreach ($result as $row) {
                                                echo $row['category'] . ": " . $row['skill'] . "\n";
                                                echo "\n";
                                            }
                                        } catch (PDOException $e) {
                                        }
                                    }
                                    ?>
                                </textarea>
                                    <div class="invalid-feedback">
                                        Please enter the skills.
                                    </div>
                                </div>
                                <input type="hidden" name="id" id="id" value="<?php echo $edit; ?>">

                                <hr class="my-4">
                                <input type="submit" class="w-100 btn btn-blue hover3" placeholder="save" value="Add CV"
                                    name="submit" id="submit"
                                    style=" font-weight: bold; font-family: Passion One, sans-serif; height: 3rem;">

                            </form>
                        </div>

                    </div>


                </div>
                <hr class="my-4">

            </div>
        </div>

    </div>
</div>

</div>
<div class="clear m-3"></div>


<!-- ----------------------------------------- -->









<?php
include ('include/footer.php'); ?>