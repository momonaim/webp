<?php
include ('session/session_check.php');
include ('header.php');

?>
<?php


if (isset ($_POST['sendMailButton'])) {
    $from = htmlspecialchars($_POST['fromEmail']); // Sanitize user input
    $to = "mepiger558@hisotyr.com"; // ici on ajout l email address
    $sub = $_POST['subject'];
    $msg = $_POST['message'];


    $fromAddress = "info@webp.com";

    $headers = 'From: ' . $from . ' <' . $fromAddress . '>' . "\r\n" .
        'Reply-To: ' . $from . ' <' . $fromAddress . '>' . "\r\n" .
        'Content-Type: text/html; charset=UTF-8';

    if (mail($to, $sub, $msg, $headers)) {
        echo "done sending";

    } else {
        echo "error sending";
    }
    $_SESSION['status'] = "Email sent successfully!";
}
?>

<hr class="my-4">
<div class="row mt-5 mb-3 scroll8">
    <h5 class="display-4 text-center">Contact Us.</h5>
</div>

<div class=" container-lg col-md-12 pt-4 col-lg-7 mt-4">
    <div class="daform2 pt-4">



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
                    <?php echo $_SESSION['status'];
                    ?>
                </div>
            </div>
            <?php
            // code...
            //now release the session variable
            unset($_SESSION['status']);
        }

        ?>


        <form action="" class="needs-validation" novalidate="" name="sendMailButton" id="sendMailButton" method="POST"
            enctype="multipart/form-data">


            <div class="card scroll4 border-yellow shadow-lg">
                <h5 class="card-header border-yellow text-center fs-2 bg-yellow"
                    style=" font-weight: bold; font-family: Passion One, sans-serif;">Contact us</h5>
                <div class="card-body">
                    <div class="">
                        <div class="row g-3">
                            <div class="form-label-group">
                                <label for="inputEmail">From<span style="color: #FF0000">*</span></label>
                                <input type="email" name="fromEmail" id="fromEmail" class="form-control" required>
                            </div><br>
                            <label for="inputPasssword">Subject<span style="color: #FF0000">*</span></label>
                            <div class="form-label-group">
                                <input type="text" id="subject" name="subject" class="form-control" required>
                            </div>
                            <label for="inputPasssword">Message<span style="color: #FF0000">*</span></label>
                            <div class="form-label-group">
                                <textarea type="text" id="message" name="message" class="form-control"
                                    required></textarea>
                            </div><br>
                        </div>
                        <hr class="my-4">
                        <input type="submit" class="w-100 fs-3 btn btn-blue hover3" placeholder="save" value="Save"
                            name="sendMailButton" id="sendMailButton"
                            style=" font-weight: bold; font-family: Passion One, sans-serif;">
                    </div>
                </div>
        </form>
    </div>
</div>
<div class="clear col-12 m-3"></div>
</div>
<!-- ----------------------------------------- -->









<?php
include ('include/footer.php'); ?>