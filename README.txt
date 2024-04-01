

DATABASE MOST BE NAMED `WEBP3`


----------REQUIREMENTS---------------------------

phpMyAdmin console:
set global net_buffer_length=1048576;
set global max_allowed_packet=1073741824;


-------------BDD location-----------------------

9 results - 9 files

webp.sql:
  20  --
  21: -- Base de données : `webp3`
  22  --

admin\connection\db.php:
  4  $password = ""; // Change this to your database password
  5: $database = "WEBP3"; // Change this to your database name
  6  

connection\db.php:
  4  $password = ""; // Change this to your database password
  5: $database = "WEBP3"; // Change this to your database name
  6  

RECRUITER\DASHBOARD\connection\db.php:
  4  $password = ""; // Change this to your database password
  5: $database = "WEBP3"; // Change this to your database name
  6  

RECRUITER\DASHBOARD\phpcode\approve.php:
  16      // Database connection
  17:     $dsn = 'mysql:host=localhost;dbname=webp3';
  18      $username = 'root';

RECRUITER\DASHBOARD\phpcode\post_job_code.php:
  49      // Database connection
  50:     $dsn = 'mysql:host=localhost;dbname=webp3';
  51      $username = 'root';

RECRUITER\DASHBOARD\phpcode\reject.php:
  16      // Database connection
  17:     $dsn = 'mysql:host=localhost;dbname=webp3';
  18      $username = 'root';

RECRUITER\DASHBOARD1\connection\db.php:
  4  $password = ""; // Change this to your database password
  5: $database = "WEBP3"; // Change this to your database name
  6  

RECRUITER\phpcode\post_job_code.php:
  49      // Database connection
  50:     $dsn = 'mysql:host=localhost;dbname=webp3';
  51      $username = 'root';
