<?php
include ('session/session_check.php');
include ('header.php');
include ('magic_menu.php');
$_SESSION['idd'] = null;
include ('../connection/db.php');


?>





<?php
// $edit=$_GET['edit'];
$edit = $_SESSION['can_id'];
if ($_SESSION['idd']) {
    $edit = $_SESSION['idd'];
}
// echo $edit;

?>

<script>
// JavaScript function to update skills options based on the selected category
function updateSkills() {
    var category = document.getElementById("category").value;
    var skillsSelect = document.getElementById("skills");

    // Clear previous options
    skillsSelect.innerHTML = '';

    // Add new options based on the selected category
    if (category === "Technical") {
        skillsSelect.innerHTML += '<option value="Python">Python</option>';
        skillsSelect.innerHTML += '<option value="Java">Java</option>';
        skillsSelect.innerHTML += '<option value="C++">C++</option>';
        skillsSelect.innerHTML += '<option value="HTML">HTML</option>';
        skillsSelect.innerHTML += '<option value="CSS">CSS</option>';
        skillsSelect.innerHTML += '<option value="JavaScript">JavaScript</option>';
        skillsSelect.innerHTML += '<option value="SQL">SQL</option>';
        skillsSelect.innerHTML += '<option value="NoSQL">NoSQL</option>';
        skillsSelect.innerHTML += '<option value="Network Administration">Network Administration</option>';
        skillsSelect.innerHTML += '<option value="AWS">AWS</option>';
        skillsSelect.innerHTML += '<option value="Azure">Azure</option>';
        skillsSelect.innerHTML += '<option value="Google Cloud Platform">Google Cloud Platform</option>';
        skillsSelect.innerHTML += '<option value="Machine Learning">Machine Learning</option>';
        skillsSelect.innerHTML += '<option value="AI">AI</option>';
        skillsSelect.innerHTML += '<option value="Cybersecurity">Cybersecurity</option>';
        skillsSelect.innerHTML += '<option value="Docker">Docker</option>';
        skillsSelect.innerHTML += '<option value="Kubernetes">Kubernetes</option>';
        skillsSelect.innerHTML += '<option value="Software Testing">Software Testing</option>';
        skillsSelect.innerHTML += '<option value="Quality Assurance">Quality Assurance</option>';

    } else if (category === "Soft Skills") {
        skillsSelect.innerHTML += '<option value="Communication">Communication</option>';
        skillsSelect.innerHTML += '<option value="Teamwork">Teamwork</option>';
        skillsSelect.innerHTML += '<option value="Time Management">Time Management</option>';
        skillsSelect.innerHTML += '<option value="Leadership">Leadership</option>';
        skillsSelect.innerHTML += '<option value="Problem-solving">Problem-solving</option>';
        skillsSelect.innerHTML += '<option value="Adaptability">Adaptability</option>';
        skillsSelect.innerHTML += '<option value="Creativity">Creativity</option>';
        skillsSelect.innerHTML += '<option value="Emotional Intelligence">Emotional Intelligence</option>';
    } else if (category === "Creative Skills") {
        skillsSelect.innerHTML += '<option value="Graphic Design">Graphic Design</option>';
        skillsSelect.innerHTML += '<option value="Video Editing">Video Editing</option>';
        skillsSelect.innerHTML += '<option value="Photography">Photography</option>';
        skillsSelect.innerHTML += '<option value="Illustration">Illustration</option>';
        skillsSelect.innerHTML += '<option value="Copywriting">Copywriting</option>';
        skillsSelect.innerHTML += '<option value="Content Creation">Content Creation</option>';
        skillsSelect.innerHTML += '<option value="User Experience Design">User Experience Design</option>';
        skillsSelect.innerHTML += '<option value="Animation">Animation</option>';
    } else if (category === "Healthcare Skills") {
        skillsSelect.innerHTML += '<option value="Patient Care">Patient Care</option>';
        skillsSelect.innerHTML += '<option value="Medical Terminology">Medical Terminology</option>';
        skillsSelect.innerHTML += '<option value="Nursing">Nursing</option>';
        skillsSelect.innerHTML += '<option value="Clinical Research">Clinical Research</option>';
        skillsSelect.innerHTML += '<option value="Healthcare Administration">Healthcare Administration</option>';
    } else if (category === "Business Skills") {
        skillsSelect.innerHTML += '<option value="Project Management">Project Management</option>';
        skillsSelect.innerHTML += '<option value="Strategic Planning">Strategic Planning</option>';
        skillsSelect.innerHTML += '<option value="Financial Analysis">Financial Analysis</option>';
        skillsSelect.innerHTML += '<option value="Marketing">Marketing</option>';
        skillsSelect.innerHTML += '<option value="Sales">Sales</option>';
        skillsSelect.innerHTML +=
            '<option value="Customer Relationship Management">Customer Relationship Management</option>';
        skillsSelect.innerHTML += '<option value="Business Development">Business Development</option>';
        skillsSelect.innerHTML += '<option value="Data Analysis">Data Analysis</option>';
        skillsSelect.innerHTML += '<option value="Market Research">Market Research</option>';
    }
}
</script>

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

        <form action="phpcode/skills_add_code.php" class="needs-validation" novalidate="" name="admin_form"
            id="admin_form" method="POST" enctype="multipart/form-data">

            <div class="card scroll4 border-yellow shadow-lg">
                <h5 class="card-header border-yellow text-center fs-2 bg-yellow"
                    style=" font-weight: bold; font-family: Passion One, sans-serif;">Add Skill</h5>
                <div class="card-body">
                    <div class="">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="category" class="form-label">Category</label>
                                <select id="category" name="category" onchange="updateSkills()" class="form-select"
                                    required>
                                    <option value="">Select Category</option>
                                    <option value="Technical">Technical Skills</option>
                                    <option value="Soft Skills">Soft Skills</option>
                                    <option value="Creative Skills">Creative Skills</option>
                                    <option value="Healthcare Skills">Healthcare Skills</option>
                                    <option value="Business Skills">Business Skills</option>
                                </select>
                                <div class="invalid-feedback">
                                    Select Category is required.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="skills" class="form-label">Skills</label>
                                <select id="skills" name="skills[]" class="form-select" multiple
                                    aria-label="multiple select example" required>
                                    <option value="">Select Category First</option>
                                </select>
                                <div class="invalid-feedback">
                                    Valid Skills is required.
                                </div>
                            </div>
                            <div class="clear"></div>

                            <input type="hidden" name="id" id="id" value="<?php echo $edit; ?>">
                        </div>
                        <hr class="my-4">
                        <input type="submit" class="w-100 fs-3 btn btn-blue hover3" placeholder="save" value="Save"
                            name="submit" id="submit" style=" font-weight: bold; font-family: Passion One, sans-serif;">
                    </div>
                </div>
        </form>
    </div>
</div>
<div class="clear m-3"></div>
</div>

<!-- ----------------------------------------- -->









<?php
include ('include/footer.php'); ?>