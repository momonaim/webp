<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Skills</title>
</head>
<body>
    <h2>Add Skills and Values</h2>
    <form action="insert_skills.php" method="post">
        <div id="skills">
            <div class="skill">
                <label for="skill_name_1">Skill Name:</label>
                <input type="text" id="skill_name_1" name="skill_name[]" required>
                <label for="skill_value_1">Skill Value:</label>
                <input type="number" id="skill_value_1" name="skill_value[]" required>
            </div>
        </div>
        <button type="button" onclick="addSkill()">Add Another Skill</button>
        <br><br>
        <input type="submit" value="Add Skills">
    </form>

    <script>
        let skillCounter = 1;

        function addSkill() {
            skillCounter++;

            const skillsDiv = document.getElementById('skills');
            const newSkillDiv = document.createElement('div');
            newSkillDiv.classList.add('skill');
            newSkillDiv.innerHTML = `<br>
                <label for="skill_name_${skillCounter}">Skill Name:</label>
                <input type="text" id="skill_name_${skillCounter}" name="skill_name[]" required>
                <label for="skill_value_${skillCounter}">Skill Value:</label>
                <input type="number" id="skill_value_${skillCounter}" name="skill_value[]" required>
            `;
            skillsDiv.appendChild(newSkillDiv);
        }
    </script>
</body>
</html>
