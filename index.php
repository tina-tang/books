<?php
/*
Filename: index.php
Date: 26 November 2013
Description: This script creates a table, deletes records and repopulates the data with appropriate data types and fields as defined for this lab.  There is also a form with three textboxes with a submit button transferring data to database.php
*/
ob_start();
   include "database.php";
ob_end_clean();
 

//create the table if it does not exist
 $q = "CREATE TABLE IF NOT EXISTS booktable(  
 
          id                  int                primary key not null auto_increment,
		  title               varchar(50)        not null,
		  authorLastName      varchar(40)        not null,
		  authorFirstName     varchar(40)        not null,
          description         varchar(60)        not null)";

mysqli_query($link, $q) or die (mysqli_error($link));
        echo "Created table successfully <br/>";

//insert data into table
$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
        NULL,'Finding Your Element','Robinson','Ken','What you are meant to be')";
      mysqli_query($link,$q) or die (mysqli_error($link));

$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
		NULL,'Carry on, warrior: thoughts on life unarmed','Melton','Glennon Doyle','You can conquer')";
      mysqli_query($link,$q) or die (mysqli_error($link));

$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
		NULL,'The Book of Negroes','Hill','Lawrence','We are all the same color')";
      mysqli_query($link,$q) or die (mysqli_error($link));

$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
		NULL,'Walt Disney','Gabler','Neil','Dreams come true')";
      mysqli_query($link,$q) or die (mysqli_error($link));

$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
		NULL,'The Shack','Young','WM Paul','Peace in heaven')";
       mysqli_query($link,$q) or die (mysqli_error($link));
	   
$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
		NULL,'How We Decide','Lehrer','Jonah','Listen to yourself')";
       mysqli_query($link,$q) or die (mysqli_error($link));

$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
		NULL,'Sacred Hearts','Dunant','Sarah','Follow your heart')";
       mysqli_query($link,$q) or die (mysqli_error($link));

$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
		NULL,'The Courage to Write','Keyes','Ralph','Unlock your subconscious')";
       mysqli_query($link,$q) or die (mysqli_error($link));

$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
		NULL,'Unashamed','Rivers','Francine','Seek the light')";
       mysqli_query($link,$q) or die (mysqli_error($link));

$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
		NULL,'Nurtured by Love','Suzuki','Shinichi','Help children realize their potential')";
       mysqli_query($link,$q) or die (mysqli_error($link));

        echo "Inserted successfully <br/> ";


//delete all records from the table
$q = "DELETE FROM booktable";
     mysqli_query($link,$q)or die (mysqli_error($link));;

       echo "Deleted successfully <br/>";

//repopulate the table with data
$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
        NULL,'Finding Your Element','Robinson','Ken','What you are meant to be')";
      mysqli_query($link,$q) or die (mysqli_error($link));

$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
		NULL,'Carry on, warrior: thoughts on life unarmed','Melton','Glennon Doyle','You can conquer')";
      mysqli_query($link,$q) or die (mysqli_error($link));

$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
		NULL,'The Book of Negroes','Hill','Lawrence','We are all the same color')";
      mysqli_query($link,$q) or die (mysqli_error($link));

$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
		NULL,'Walt Disney','Gabler','Neil','Dreams come true')";
      mysqli_query($link,$q) or die (mysqli_error($link));

$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
		NULL,'The Shack','Young','WM Paul','Peace in heaven')";
       mysqli_query($link,$q) or die (mysqli_error($link));
	   
$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
		NULL,'How We Decide','Lehrer','Jonah','Listen to yourself')";
       mysqli_query($link,$q) or die (mysqli_error($link));

$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
		NULL,'Sacred Hearts','Dunant','Sarah','Follow your heart')";
       mysqli_query($link,$q) or die (mysqli_error($link));

$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
		NULL,'The Courage to Write','Keyes','Ralph','Unlock your subconscious')";
       mysqli_query($link,$q) or die (mysqli_error($link));

$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
		NULL,'Unashamed','Rivers','Francine','Seek the light')";
       mysqli_query($link,$q) or die (mysqli_error($link));

$q = "INSERT INTO booktable (id, title, authorLastName, authorFirstName, description) VALUES(
		NULL,'Nurtured by Love','Suzuki','Shinichi','Help children realize their potential')";
       mysqli_query($link,$q) or die (mysqli_error($link));

        echo "Repopulated the table successfully <br/><br/>";
?>

<!DOCTYPE html><!-- allows form inputs to be added to table -->
<html>
	<head>
         <meta http-equiv="Content-Type" content = "text/html; charset=UTF-8">
         <title>New Book Information:</title>
	</head>
    <body>
      <form action="database.php" method = "post">
			Title:<input type="text" name = "title" size="60"/><br><br>
			First name:<input type="text" name = "firstname" size="30"><br><br>
			Last name:<input type="text" name = "lastname" size="30"><br><br>
			Description:<br>
			<Textarea rows = "10" cols = "60" name = "description">
			</textarea><br><br>
			<input type="submit" name = "submit_info" value="Go">
     </form>
    </body>
</html>