<?php
/*
 * Project: CST-126-Blog-Project v.0.6
 * Module Name: BlogPost v.0.3
 * Author: Daniel Cender
 * Date: March 31, 2019
 * Synopsis: This page displays all user posts and reveals actions to tag, update or delete.
 */
require ('../../config.php');
require (DIR_HELPERS . 'session.php');
require (DIR_HELPERS . 'db.php');

$conn = dbConnect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>All Posts</title>
<script src="../helpers/languageFilter.js"></script>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	crossorigin="anonymous">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<?php include(VIEW_HEADER); ?>
<h3>All Posts</h3>

<?php

$sqlQuery = "SELECT ID,Title FROM post";

$resultSet = $conn->query($sqlQuery);

echo "<div class=\"list-group\" style='margin-top:50px'>";
while ($row = $resultSet->fetch_assoc()) {
    $id = $row["ID"];
    $title = $row["Title"];
    echo "<a class=\"list-group-item list-group-item-action\" href='viewPost.php?id=$id'>$title</a>";
}
echo "</div>";
$conn->close();
?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
</body>
</html>