<?php
include('../connection/db.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script type="text/javascript">
    //jquery code
    $(document).ready(function() {
        var counter = 2;
        //the selector we interact with to load more comments
        //the function will run when we click the btn
        $("#btn").click(function() {
            //from where we gonnaload the comments
            //second parameter is like a counter for the query limiter in the load-comments.php
            //seconds parameter pulls up to the file 
            counter = counter + 2;
            //2 cause limit example
            $("#comments").load("load-comments.php", {
                //counter is passed using post method
                //commentnewcount this the post name
                commentnewcount: counter
            });
        });
    });
    </script>
</head>

<body>

    <div id="comments">
        <?php
		$conn2 = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
		$conn2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$stmt = $conn2->prepare("SELECT * FROM comments LIMIT 2");
		$stmt->execute();
		$result = $stmt->fetchAll();

		if ($stmt->rowCount() > 0) {
			echo "Comments";
			foreach ($result as $row) {
				echo "<p>";
				echo $row['author'];
				echo "<br>";
				echo $row['message'];
				echo "</p>";
			}
		}
		if (count($result) > 0) {
			echo "results";
			foreach ($result as $row) {
				echo "<p>";
				echo $row['author'];
				echo "<br>";
				echo $row['message'];
				echo "</p>";
			}
		}

		$sql = "SELECT * FROM comments LIMIT 2";
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			echo "MUSQLI";
			while ($row = mysqli_fetch_assoc($result)) {
				// code...
				echo "<p>";
				echo $row['author'];
				echo "<br>";
				echo $row['message'];
				echo "</p>";
			}
		} else {
			echo "there are no comments";
		}

		?>


    </div>

    <button id="btn">Show more comments</button>
</body>

</html>