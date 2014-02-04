<?php
/*
Filename: database.php
Date: 26 November 2013
Description: This script connects to mySQL and selects the database for queries.  The script adds form data from index.php into the table
*/
 
//connect to the server
 $link = mysqli_connect("localhost", "root", "1234") or 
       die(mysqli_connect_error());
          
		  echo "Successfully connected <br/>";

//select the database for work
 mysqli_select_db($link, "booksdatabase") or 
       die(mysqli_error($link));

//insert form data
$q = "INSERT INTO booktable (title, authorLastName, authorFirstName, description) 
      VALUES ('$_POST[title]','$_POST[lastname]','$_POST[firstname]','$_POST[description]')
      ";

$results = mysqli_query($link, $q)or die(mysqli_error ($link));
     echo "1 record added <br/><br/>";
     echo "<hr>";

//define aliases to be used as display names
$q = 
"SELECT id AS `Product ID`, title AS Title, CONCAT(authorFirstName, ' ' ,authorLastName) AS Author, description AS Description
          FROM booktable
		  ORDER BY Author ASC";
$result = mysqli_query($link, $q)or die(mysqli_error ($link));
     echo "Selected records  <br/><br/>";
     echo "<hr>";

//output the query results as an HTML table
 echo 
"<head>
	<style>
  
	tr:nth-of-type(even){background-color:#ccc;}
	</style>
</head>
<table>";

  echo "<tr><th>Product ID</th><th>Title</th><th>Author</th><th>Description</th></tr>";
  while($row = mysqli_fetch_array($result))
  {
     echo "<tr><td>";
	 echo $row ['Product ID'];
	 echo "</td><td>";
	 echo $row ['Title'];
     echo "</td><td>";
	 echo ucfirst($row ['Author']);//uppercase first letter
     echo "</td><td>";
     echo $row ['Description'];
     echo "</td></tr>";
  }
  echo "</table>";
?>

<!DOCTYPE html><!--form is processed by this script -->
<html>
	<head>
         <meta http-equiv="Content-Type" content = "text/html; charset=UTF-8">
         <title>Book Information</title>
	</head>
     <body>
      
<?php  htmlentities($_POST['title'])."<br>";
	   htmlentities($_POST['lastname'])."<br>";
	   htmlentities($_POST['firstname'])."<br>";
       htmlentities($_POST['description'])."<br>";
?>
    </body>
</html>

