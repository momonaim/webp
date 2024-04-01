<?php
include ('include/header.php');
include ('include/sidebar.php');

// session_start();

include ('../connection/db.php');

// Fetch counts from each table
$tables = ['admin_login', 'Recruiters', 'Candidates', 'job_offer'];
$data = array();

foreach ($tables as $table) {
  $sql = "SELECT COUNT(*) AS count FROM $table";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $data[] = $row['count']; // Store count as data value
    }
  } else {
    $data[] = 0; // If no rows found, store 0 as data value
  }
}


?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">


            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Action two</a></li>
                <li class="nav-item">
                <li>
                    <hr class="dropdown-divider">
                </li>

                <a class=" dropdown-item " href="phpcode/logout.php">
                    <svg class="bi">
                        <use xlink:href="#door-closed" />
                    </svg>
                    Sign out
                </a>
                </li>
            </ul>

        </div>
    </div>





    <div class="container-fluid">


        <h2> &nbsp;</h2>

        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card text-bg-primary text-center h-100">
                    <div class="card-header fw-bold">Current admins</div>
                    <div class="card-body">
                        <h2 class="card-title">
                            <?php echo $data[0]; ?>
                        </h2>
                        <a href="admins.php" class="btn btn-outline-light btn-block"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                            </svg> Admins</a>

                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-bg-primary text-center h-100">
                    <div class="card-header"><b>Current Recruiters</b></div>
                    <div class="card-body">
                        <h2 class="card-title">
                            <?php echo $data[1]; ?>
                        </h2>
                        <a href="recruiters.php" class="btn btn-outline-light"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-person-workspace"
                                viewBox="0 0 16 16">
                                <path
                                    d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5" />
                                <path
                                    d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.4 5.4 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z" />
                            </svg> &nbsp;Recruiters</a>

                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-bg-primary text-center h-100">
                    <div class="card-header"><b>Current Candidates</b></div>
                    <div class="card-body">
                        <h2 class="card-title">
                            <?php echo $data[2]; ?>
                        </h2>
                        <a href="candidates.php" class="btn btn-outline-light"><svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-person-fill-add"
                                viewBox="0 0 16 16">
                                <path
                                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path
                                    d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
                            </svg>&nbsp;Candidates</a>

                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card text-bg-primary text-center h-100">
                    <div class="card-header"><b>Current Job Offers</b></div>
                    <div class="card-body">
                        <h2 class="card-title">
                            <?php echo $data[3]; ?>
                        </h2>
                        <a href="job_offers.php" class="btn btn-outline-light btn-block"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5" />
                                <path
                                    d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85z" />
                            </svg> &nbsp;Job Offers</a>

                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-header">
                        Line Chart </div>
                    <div class="card-body">
                        <canvas class="chart" id="barchart" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="card">
                    <div class="card-header">
                        Bar Chart
                    </div>
                    <div class="card-body">
                        <canvas class="chart" id="nut" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="container px-4 py-0" id="icon-grid">
                <h2 class="pb-2 border-bottom">some kind of guide abt the sidebar</h2>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
                    <div class="col d-flex align-items-start">
                        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                            <use xlink:href="#calendar3"></use>
                        </svg>
                        <div>
                            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                            <use xlink:href="#calendar3"></use>
                        </svg>
                        <div>
                            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                            <use xlink:href="#calendar3"></use>
                        </svg>
                        <div>
                            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                            <use xlink:href="#calendar3"></use>
                        </svg>
                        <div>
                            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                            <use xlink:href="#calendar3"></use>
                        </svg>
                        <div>
                            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                            <use xlink:href="#calendar3"></use>
                        </svg>
                        <div>
                            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                            <use xlink:href="#calendar3"></use>
                        </svg>
                        <div>
                            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <svg class="bi text-body-secondary flex-shrink-0 me-3" width="1.75em" height="1.75em">
                            <use xlink:href="#calendar3"></use>
                        </svg>
                        <div>
                            <h3 class="fw-bold mb-0 fs-4 text-body-emphasis">Featured title</h3>
                            <p>Paragraph of text beneath the heading to explain the heading.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- <div class="chart">         
            <canvas id="barchart"></canvas>      
       </div>
-->



        <!--<div class="chart">

            <canvas id="nut"></canvas>
       </div>
-->
    </div>
</main>
</div>
</div>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"
    integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous">
</script>
<script src="js/dashboard.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<!-- charts.js -->
<script src="https://cdnjs.com/libraries/Chart.js"></script>





<!-- LINE CHART CODE -->
<script type="text/javascript">
const data = {
    labels: ['Admins', 'Recruiters', 'Candidates', 'Job Offers'],
    datasets: [{
        label: '# Total',
        data: [<?php echo $data[0]; ?>, <?php echo $data[1]; ?>, <?php echo $data[2]; ?>,
            <?php echo $data[3]; ?>
        ],
        borderWidth: 1,
        borderColor: '#007bff',
        backgroundColor: '#007bff',
    }]
};

//config block
const config = {
    type: 'line',
    data: data,
    options: {
        animations: {
            tension: {
                duration: 1000,
                easing: 'linear',
                from: 1,
                to: 0,
                loop: true
            }
        },
        scales: {
            y: { // defining min and max so hiding the dataset does not change scale range
                min: 0,
                max: <?php echo max($data) + 10; ?>
            }
        },
        responsive: true, // Make the chart responsive
        maintainAspectRatio: false // Prevent the chart from maintaining aspect ratio

    }
};

// Get the canvas element
const canvas = document.getElementById('barchart');
//const canvas2 = document.getElementById('nut');
// Set initial dimensions
//canvas.width = window.innerWidth * 0.8; // 80% of window width
//canvas.height = window.innerHeight * 0.9; // 60% of window height

//init render block
const barchart = new Chart(
    canvas,
    config
);

// Resize listener to update dimensions on window resize
//window.addEventListener('resize', () => {
//canvas.width = window.innerWidth * 0.8;
//canvas.height = window.innerHeight * 0.9;
//barchart.update(); // Update the chart to reflect the new dimensions
// });
</script>


<!-- BAR CHART CODE -->
<script type="text/javascript">
const ctx = document.getElementById('nut');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Admins', 'Recruiters', 'Candidates', 'Job Offers'],
        datasets: [{
            label: '# Total',
            data: [<?php echo $data[0]; ?>, <?php echo $data[1]; ?>, <?php echo $data[2]; ?>,
                <?php echo $data[3]; ?>
            ],
            borderWidth: 1,
            borderColor: '#007bff',
            backgroundColor: '#007bff',
        }]
    },
    options: {
        scales: {
            y: {
                // defining min and max so hiding the dataset does not change scale range
                min: 0,
                max: <?php echo max($data) + 10; ?>
            }
        },
        responsive: true, // Make the chart responsive
        maintainAspectRatio: false // Prevent the chart from maintaining aspect ratio

    }
});
</script>
</body>

</html>