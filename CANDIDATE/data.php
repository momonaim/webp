<?php
// Sample CV text
$cvText = "Name: John Doe
Email: john.doe@example.com
Address: 123 Main Street, Cityville, Country
phone: 123 19172

Experience:
- Job Title: Software Engineer
  Company: Tech Solutions Inc.
  Duration: 2018-2022
  Description: Developed web applications using PHP, MySQL, and JavaScript.

- Job Title: Data Analyst
  Company: Data Analytics Co.
  Duration: 2016-2018
  Description: Analyzed large datasets using Python and SQL.

Education:
- Degree: Bachelor of Science in Computer Science
  Institution: University XYZ
  Graduation Year: 2016

Skills:
PHP, Python, JavaScript
MySQL, SQL
Pandas, NumPy
";
// Function to extract information from CV text
function extractCVInfo($cvText)
{
  $info = [];

  // Extract name
  preg_match("/(?:Name|nom):\s*(.*?)\n/i", $cvText, $matches);
  $info['name'] = isset ($matches[1]) ? trim($matches[1]) : '';

  // Extract email
  preg_match("/Email:\s*(.*?)\n/i", $cvText, $matches);
  $info['email'] = isset ($matches[1]) ? trim($matches[1]) : '';

  // Extract address
  preg_match("/(?:Address|adresse):\s*(.*?)\n/i", $cvText, $matches);
  $info['address'] = isset ($matches[1]) ? trim($matches[1]) : '';

  // Extract phone
  preg_match("/(?:phone|tel|Téléphone|Telephone):\s*(.*?)\n/i", $cvText, $matches);
  $info['phone'] = isset ($matches[1]) ? trim($matches[1]) : '';

  // Extract experience
  preg_match("/(?:Experience|Expérience|Experiences|Erfahrung):\s*(.*?)(?:Education|Formation|$)/si", $cvText, $matches);
  $experienceText = isset ($matches[1]) ? trim($matches[1]) : '';
  // echo $experienceText . "<br/>";
  preg_match_all("/(.*?)\n/", $experienceText, $expMatches);
  $info['experience'] = isset ($expMatches[1]) ? $expMatches[1] : [];

  // Extract education
  preg_match("/(?:Education|Formation|Ausbildung):\s*(.*?)(?:Skills|Compétences|$)/si", $cvText, $matches);
  $educationText = isset ($matches[1]) ? trim($matches[1]) : '';
  // echo $educationText . "<br/>";
  preg_match_all("/(.*?)\n/", $educationText, $eduMatches);
  $info['education'] = isset ($eduMatches[1]) ? $eduMatches[1] : [];

  // Extract skills
  preg_match("/(?:Skills|Compétences|Fähigkeiten):\s*(.*?)$/si", $cvText, $matches);
  $skillsText = isset ($matches[1]) ? trim($matches[1]) : '';
  // echo $skillsText . "<br/>";
  $info['skills'] = explode("\n", $skillsText);

  return $info;
}


// // Extract information
// $cvInfo = extractCVInfo($cvText);

// // Display extracted information
// print_r("Name: " . $cvInfo['name'] . "<br/>");
// print_r("Email: " . $cvInfo['email'] . "<br/>");
// print_r("Address: " . $cvInfo['address'] . "<br/>");
// print_r("Telephone: " . $cvInfo['phone'] . "<br/>");
// print_r("Experience: . <br/>");
// foreach ($cvInfo['experience'] as $exp) {
//     echo "- " . $exp . "\n";
// }
// echo "Education: . <br/>";
// foreach ($cvInfo['education'] as $edu) {
//     echo "- " . $edu . "\n";
// }
// echo "Skills:\n";
// foreach ($cvInfo['skills'] as $skill) {
//     echo "- " . $skill . "\n";
// }