<?php

@include '../includes/config.php';

session_start();

// if (!isset($_SESSION['logged'])) {

//     echo '<script>alert("please log in");
//     window.location.href = "../login.php";
//     </script>';
// } elseif ($_SESSION['role'] != 'recruteur') {
//     echo '<script>alert("you are not a recruteur");
//     window.location.href = "../index.php";
//     </script>';
// }


// include '..includes/header.php';

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Job</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Summernote CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <style>
    /* Summernote Additional CSS */
    .note-editable {
        background: #fff;
    }

    .note-btn.dropdown-toggle:after {
        content: none;
    }

    .note-btn[aria-label="Help"] {
        display: none;
    }

    .note-editor .note-toolbar .note-color-all .note-dropdown-menu,
    .note-popover .popover-content .note-color-all .note-dropdown-menu {
        min-width: 185px;
    }
    </style>

    <!-- sidebar -->
    <link rel="stylesheet" href="sidebar.css">

    <!-- adjust -->
    <style>
    /* Custom CSS to add margin to all divs inside a div */
    .parent-div>div {
        margin: 1em;
        /* Adjust the margin value according to your preference */
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidebar.php' ?>

        <div class="main p-3 parent-div">
            <div class="title pb-20 mx-auto">
                <h2 class="h2 mb-0 ">Add Job</h2>
            </div>
            <form class="post-form-wrapper" action="app/postjob.php" method="POST" autocomplete="off">

                <div class="row gap-20 p-3">

                    <div class="col-sm-8 col-md-8">

                        <div class="form-group">
                            <label>Job Title</label>
                            <input name="title" required type="text" class="form-control" placeholder="Enter job title">
                        </div>

                    </div>

                    <div class="clear"></div>


                    <div class="clear"></div>

                    <div class="col-sm-4 col-md-4 ">

                        <div class="form-group">
                            <label>Job Category</label>
                            <select name="category" required class="selectpicker show-tick form-control"
                                data-live-search="true">
                                <option disabled value="" selected>Select</option>
                                <?php
                                try {
                                    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                                    $stmt = $conn->prepare("SELECT * FROM categories ORDER BY category");
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    foreach ($result as $row) {
                                        ?>
                                <option value="<?php echo $row['category']; ?>">
                                    <?php echo $row['category']; ?>
                                </option>
                                <?php
                                    }
                                } catch (PDOException $e) {
                                }
                                ?>
                            </select>

                        </div>

                    </div>
                    <div class="col-sm-4 col-md-4">

                        <div class="form-group">
                            <label>Closing Date</label>
                            <input name="deadline" required type="text" class="form-control"
                                placeholder="Eg: 30/12/2018">
                        </div>

                    </div>

                    <div class="clear"></div>

                    <div class="col-xss-12 col-xs-6 col-sm-6 col-md-4">

                        <div class="form-group mb-20">
                            <label>Job Type:</label>
                            <select name="jobtype" required class="selectpicker show-tick form-control"
                                data-live-search="false" data-selected-text-format="count > 3" data-done-button="true"
                                data-done-button-text="OK" data-none-selected-text="All">
                                <option value="" selected>Select</option>
                                <option value="Full-time"
                                    data-content="<span class='label label-warning'>Full-time</span>">
                                    Full-time</option>
                                <option value="Part-time"
                                    data-content="<span class='label label-danger'>Part-time</span>">Part-time
                                </option>
                                <option value="Freelance"
                                    data-content="<span class='label label-success'>Freelance</span>">
                                    Freelance</option>
                            </select>
                        </div>

                    </div>

                    <div class="col-xss-12 col-xs-6 col-sm-6 col-md-4">

                        <div class="form-group mb-20">
                            <label>Experience:</label>
                            <select name="experience" required class="selectpicker show-tick form-control"
                                data-live-search="false" data-selected-text-format="count > 3" data-done-button="true"
                                data-done-button-text="OK" data-none-selected-text="All">
                                <option value="" selected>Select</option>
                                <option value="Expert">Expert</option>
                                <option value="2 Years">2 Years</option>
                                <option value="3 Years">3 Years</option>
                                <option value="4 Years">4 Years</option>
                                <option value="5 Years">5 Years</option>
                            </select>
                        </div>


                    </div>

                    <div class="clear"></div>

                    <div class="col-sm-12 col-md-12">

                        <div class="form-group">
                            <label>Job Description</label>
                            <textarea id="descs" class="form-control " name="description" required
                                placeholder="Enter description ..." style="height: 200px;"></textarea>
                        </div>

                    </div>

                    <div class="clear"></div>

                    <div class="col-sm-12 col-md-12">

                        <div class="form-group">
                            <label>Job Responsibilies</label>
                            <textarea id="resps" name="responsiblities" required class="form-control"
                                placeholder="Enter responsiblities..." style="height: 200px;"></textarea>
                        </div>

                    </div>

                    <div class="clear"></div>

                    <div class="col-sm-12 col-md-12">

                        <div class="form-group">
                            <label>Requirements</label>
                            <textarea id="reqs" name="requirements" required class="form-control p-3"
                                placeholder="Enter requirements..." style="height: 200px;"></textarea>
                        </div>

                    </div>

                    <div class="clear"></div>
                    <div class="clear m-3"></div>


                    <div class="title pb-20 mx-auto">
                        <h2 class="h2 mb-0 ">Add Job's Score</h2>
                    </div>
                    <div class="clear m-3"></div>

                    <div class="title pb-20 mx-auto">
                        <h3 class="h4 mb-0 ">SKILL's score by category</h3>
                    </div>
                    <div class="clear m-3"></div>

                    <div class="col-sm-4 col-md-4">

                        <div class="form-group">
                            <label>Technical</label>
                            <input type="number" class="form-number" min="0" max="10" step="1" id="tech" name="tech"
                                required="" value="0">
                        </div>

                    </div>
                    <div class="col-sm-4 col-md-4">

                        <div class="form-group">
                            <label>Creative</label>
                            <input type="number" class="form-number" min="0" max="10" step="1" id="cre" name="cre"
                                required="" value="0">
                        </div>

                    </div>
                    <!-- Education's score by category -->
                    <div class="clear m-3"></div>

                    <div class="title pb-20 mx-auto">
                        <h3 class="h4 mb-0 ">Education's score</h3>
                    </div>
                    <div class="clear m-3"></div>
                    <div class="col-sm-4 col-md-4">

                        <div class="form-group">
                            <label>BAC</label>
                            <input type="number" class="form-number" min="0" max="10" step="1" id="tech" name="tech"
                                required="" value="0">
                        </div>

                    </div>
                    <div class="col-sm-4 col-md-4">

                        <div class="form-group">
                            <label>MASTER</label>
                            <input type="number" class="form-number" min="0" max="10" step="1" id="cre" name="cre"
                                required="" value="0">
                        </div>

                    </div>
                    <div class="col-sm-4 col-md-4 ">

                        <div class="form-group">
                            <label>PHD</label>
                            <input type="number" class="form-number" min="0" max="10" step="1" id="cre" name="cre"
                                required="" value="0">
                        </div>

                    </div>

                    <!-- Experience's score by year -->
                    <div class="clear m-3"></div>

                    <div class="title pb-20 mx-auto">
                        <h3 class="h4 mb-0 ">Experience's score</h3>
                    </div>
                    <div class="clear m-3"></div>
                    <div class="col-sm-4 col-md-4">

                        <div class="form-group">
                            <label>1 year</label>
                            <input type="number" class="form-number" min="0" max="10" step="1" id="tech" name="tech"
                                required="" value="0">
                        </div>

                    </div>
                    <div class="clear"></div>



                    <div class="clear mb-10"></div>


                    <div class="clear mb-15"></div>


                    <div class="clear"></div>
                    <div class="col-sm-12"></div>

                    <div class="col-sm-6 mt-30">
                        <button type="submit" onclick="validate(this)" class="btn btn-primary btn-lg mt-3 p-3">Post Your
                            Job</button>
                    </div>

                </div>

            </form>


        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Summernote JS - CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#desc").summernote();
        $('.dropdown-toggle').dropdown();
    });
    $(document).ready(function() {
        $("#req").summernote();
        $('.dropdown-toggle').dropdown();
    });
    $(document).ready(function() {
        $("#resp").summernote();
        $('.dropdown-toggle').dropdown();
    });
    </script>
    <!-- //Summernote JS - CDN Link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="sidebar.js"></script>
</body>

</html>