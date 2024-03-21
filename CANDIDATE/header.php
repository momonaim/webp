<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!--Fonts-->
    <style type="text/css">
        @font-face {
            font-family: 'Bungee Shade';
            src: url('fonts/Bungee_Shade/BungeeShade-Regular.ttf') format('truetype');
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: 'Oswald';
            src: url('fonts/Oswald/static/Oswald-Regular.ttf') format('truetype');
        }
    </style>
    <style type="text/css">
        @font-face {
            font-family: 'Passion One';
            src: url('fonts/Passion_One/PassionOne-Bold.ttf') format('truetype');
        }
    </style>



    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap" rel="stylesheet">



    <link href="css/create_candidate.css" rel="stylesheet">
    <link href="css/magic_menu.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="../main.css">
    <link rel="stylesheet" type="text/css" href="css/logoscroll.css">
    <link rel="stylesheet" type="text/css" href="css/scroll.css">
    <link rel="stylesheet" type="text/css" href="css/hoverr.css">

</head>



<body class="vh 100">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-yellow  fixed-top">
        <div class="container-fluid">
            <style>
                .navbar-toggler .navbar-toggler-icon {
                    font-weight: bold;
                }
            </style>

            <!-- toggle bar btn -->
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="blue"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                        class="bi bi-list-stars" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5" />
                        <path
                            d="M2.242 2.194a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.28.28 0 0 0-.094.3l.173.569c.078.256-.213.462-.423.3l-.417-.324a.27.27 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.28.28 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.27.27 0 0 0 .259-.194zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.28.28 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.27.27 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.28.28 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.27.27 0 0 0 .259-.194zm0 4a.27.27 0 0 1 .516 0l.162.53c.035.115.14.194.258.194h.551c.259 0 .37.333.164.493l-.468.363a.28.28 0 0 0-.094.3l.173.569c.078.255-.213.462-.423.3l-.417-.324a.27.27 0 0 0-.328 0l-.417.323c-.21.163-.5-.043-.423-.299l.173-.57a.28.28 0 0 0-.094-.299l-.468-.363c-.206-.16-.095-.493.164-.493h.55a.27.27 0 0 0 .259-.194z" />
                    </svg>

                    <path
                        d="M9.05.435c-.58-.58-1.52-.58-2.1 0L4.047 3.339 8 7.293l3.954-3.954L9.049.435zm3.61 3.611L8.708 8l3.954 3.954 2.904-2.905c.58-.58.58-1.519 0-2.098l-2.904-2.905zm-.706 8.614L8 8.708l-3.954 3.954 2.905 2.904c.58.58 1.519.58 2.098 0l2.905-2.904zm-8.614-.706L7.292 8 3.339 4.046.435 6.951c-.58.58-.58 1.519 0 2.098z" />
                    </svg>
                </span>
            </button>

            <!-- logo -->
            <a class="navbar-brand d-lg-none  fs-1 my-0 py-0" style="   font-family: Bungee Shade, sans-serif;"
                href="./can_home.php">WEBP</a>

            <!-- SIGN IN BTN SM SCREENS -->
            <a href="profile.php" class="fs-3 rounded-3 navbar-brand btn btn-blue d-lg-none btn-sm"
                style="color: white; font-weight: bold; font-family: Passion One, sans-serif;">
                PROFILE <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                    class="bi bi-person-fill" viewBox="0 2 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                </svg></a>


            <style type="text/css">
                @media (max-width: 991px) {
                    .scrollyfix {
                        overflow-y: auto;
                        max-height: 400px;
                    }
                }
            </style>

            <!-- collapse navbar elements-->
            <div class="collapse navbar-collapse scrollyfix" id="navbarTogglerDemo03">
                <ul class="navbar-nav justify-content-start flex-grow-1 me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="py-0 my-0 fs-3 nav-link " aria-current="page" href="./can_home.php"
                            style=" font-weight: bold; font-family: Passion One, sans-serif;">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="py-0 my-0 fs-3 nav-link" href="#"
                            style=" font-weight: bold; font-family: Passion One, sans-serif;">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="py-0 my-0 fs-3 nav-link "
                            style=" font-weight: bold; font-family: Passion One, sans-serif;" aria-current="page"
                            href="JOBS.php">JOBS</a>
                    </li>
                    <li class="nav-item">
                        <a class="py-0 my-0 fs-3 nav-link "
                            style=" font-weight: bold; font-family: Passion One, sans-serif;" aria-current="page"
                            href="#">Companies</a>
                    </li>
                </ul>





                <!-- middle logo -->
                <ul class="navbar-nav justify-content-center flex-grow-1 me-auto mb-2 mb-lg-0">
                    <li id="specialNavItem" class="nav-item ">
                        <a style="   font-family: Bungee Shade, sans-serif;" class="py-0 my-0 fs-2 nav-link active"
                            aria-current="page" href="./can_home.php">WEBP</a>
                    </li>
                </ul>





                <!-- left elements -->
                <ul class="navbar-nav justify-content-end flex-grow-1 me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="py-0 my-0 fs-3 nav-link " aria-current="page" href="#"
                            style=" font-weight: bold; font-family: Passion One, sans-serif;">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="py-0 my-0 fs-3 nav-link" href="#"
                            style=" font-weight: bold; font-family: Passion One, sans-serif;">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="py-0 my-0 fs-3 nav-link " href="contact.php"
                            style=" font-weight: bold; font-family: Passion One, sans-serif;"
                            aria-current="page">Contact Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle py-0 my-0 fs-3" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false"
                            style="font-weight: bold; font-family: Passion One, sans-serif;">
                            PROFILE <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                class="bi bi-person-fill" viewBox="0 2 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg>
                        </a>
                        <ul class="dropdown-menu bg-yellow" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item fs-3"
                                    style=" font-weight: bold; font-family: Passion One, sans-serif;"
                                    href="profile.php">Profile</a></li>
                            <li><a class="dropdown-item fs-3"
                                    style=" font-weight: bold; font-family: Passion One, sans-serif;"
                                    href="applied_jobs.php">Applied Jobs</a></li>
                            <li><a class="dropdown-item fs-3"
                                    style=" font-weight: bold; font-family: Passion One, sans-serif;"
                                    href="messages.php">Messages</a></li>
                            <li><a class="dropdown-item fs-3"
                                    style=" font-weight: bold; font-family: Passion One, sans-serif;"
                                    href="./can_home.php">Home</a></li>
                            <li><a class="dropdown-item fs-3"
                                    style=" font-weight: bold; font-family: Passion One, sans-serif;"
                                    href="phpcode/logout.php">Sign Out</a></li>

                            <!-- Add more dropdown items as needed -->
                        </ul>
                    </li>

                </ul>
            </div>





        </div>
    </nav>