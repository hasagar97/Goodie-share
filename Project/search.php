<?php

/*

EDIT.PHP

Allows user to edit specific entry in database

*/



// creates the edit record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($tag, $username, $passcode, $error)
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<link rel="stylesheet" type="text/css" href="search.css">
<title>Search</title>
</head>
<body>
<?php
// if there are any errors, display them
if ($error != '')
{
	echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>

<div class="imgcontainer">
    <img src=<?php echo "images/".$_GET['tag'].".png" ?> alt="Avatar" class="avatar">
 </div>

<form>
<input type="hidden" name="tag" value="<?php echo $tag; ?>"/>
<div class="container">
<p><strong>tag:</strong> <?php echo $id; ?></p>
<strong>First Name: *</strong> <?php echo $username; ?>"<br/>
<strong>passcode *</strong> <?php echo $passcode; ?>"<br/> 


<!-- <input  type="submit" name="submit" value="Submit"> -->


<br />
                   <label>tag  :</label><input type = "text" id="nums" value="7" /><br /><br />
                   <button type=button onclick="search()" >GO</button>
                   <!-- <input  type="submit" name="submit" value="GO" onclick="search()"> -->
<p id="help"></p>
            
<script> 
function search()
{
	var str1 = document.getElementById("nums").value;
	var str2 = "search.php?tag=";
	str2 += str1;
	// var res = str2.concat(str1);
	// document.getElementByName("help").innerHTML = res;
	window.location = str2 ;
}
</script> 
</div>
</body>
</html>
<?php
}
// connect to the database
include('config.php');
if (isset($_GET['tag']) && is_numeric($_GET['tag']) && $_GET['tag'] > 0)
{
// query db
	$id = $_GET['tag'];
	$result = mysqli_query($db,"SELECT * FROM emp WHERE id=$id");
	if(!$result)
	{
		die(mysql_error());
	}
	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	// check that the 'id' matches up with a row in the databse
	if($row)
	{
	// get data from db
		$username = $row['username'];
		$passcode = $row['passcode'];
	// show form
		renderForm($id, $username, $passcode, '');
	}

	else
	// if no match, display result
	{
		echo "No results!";
		renderForm(0,"-","-",'');
	}
}
else
{ 
	if(!isset($GET_['id']))
		echo "please enter the id to be searched";
	else
		echo "error not found";
	renderForm(0,"-","-",'');
}
?>