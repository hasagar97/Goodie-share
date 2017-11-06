	
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<title>Search</title>
<head>
	<link rel="stylesheet"  href="search.css">
</head>
<body>
<div class="header">
	<div>
		<table>
		<tr>
			<td> tag:
	       	<td>	<input type = "text" id="tag"  />
	        <td> <button type=button onclick="search()" >GO</button>
	    </table>    <!-- <input  type="submit" name="submit" value="GO" onclick="search()"> -->
	</div>
</div>
						<?php
						// // if there are any errors, display them
						// if ($error != '')
						// {
						// 	echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
						// }
						?>
<!-- 
<div class="imgcontainer">
    <img src=<?php  /*echo "images/".$_GET['id'].".png" */?> alt="Avatar" class="avatar">
 </div>

<form>
<input type="hidden" name="id" value="<?php  $id; ?>"/>
<div class="container">
<p><strong>ID:</strong> <?php  $id; ?></p>
<strong>First Name: *</strong> <?php  $username; ?>"<br/>
<strong>passcode *</strong> <?php  $passcode; ?>"<br/>  -->


<!-- <input  type="submit" name="submit" value="Submit"> -->


<?php

// connect to the database
//searching starts from here
include('config.php');

// echo $_GET['tag'];
if (isset($_GET['tag']) /*&& is_numeric($_GET['id']) && $_GET['tag'] > 0*/)	//if id is set
{
// query db
	$tag = $_GET['tag'];
	// echo $tag;
	$sqlquery="SELECT * FROM object WHERE tag1=\"$tag\" OR tag2=\"$tag\" OR tag3=\"$tag\"";
	$result = mysqli_query($db,$sqlquery);
	// echo $sqlquery;
	if(!$result)
	{
		echo "no result found";
		die(mysql_error());
	}
	// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	// check that the 'id' matches up with a row in the databse
	echo "<table> <tr>";
	while( $row = mysqli_fetch_array($result,MYSQLI_ASSOC)) 
	{ ?>

<td class="sale">
<div  class="saleItem" class="grow">
		<div class="imgcontainer">
   			 <img src=<?php echo "images/".$row['id'].".png" ?> alt="Avatar" class="avatar">
		</div>
		<div class="container">
			<ul>
			<input type="hidden" name="id" value="<?php echo $id; ?>"/>
		
			<li><strong>ID:</strong> <?php echo $row['id']; ?></p>
			<li><strong>Owner </strong> <?php echo $row['user'] ?>"<br/>
			<li><strong>price</strong> <?php echo $row['price'] ?>"<br/>
			<li><strong>Description</strong> <?php echo $row['description'] ?>"<br/>
			</ul>
		</div> 
</div>


		<!-- // echo out the contents of each row into a table -->
		<!-- echo "<tr>";
		echo '<td>' . $row['id'] . '</td>';
		echo '<td>' . $row['username'] . '</td>';
		echo '<td>' . $row['passcode'] . '</td>';
		echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a></td>';
		echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
		echo "</tr>"; -->
	<?php
	}
	

echo "</table>";
	// if($row)
	// {
	// // get data from db
	// 	$username = $row['username'];
	// 	$passcode = $row['passcode'];
	// // show form
	// 	renderForm($id, $username, $passcode, '');
	// }

	// else
	// // if no match, display result
	// {
	// 	echo "No results!";
	// 	renderForm(0,"-","-",'');
	// }
}
else
{ 
	?>
	<div id="bottom_error"><p>
	<?php
	if(!isset($GET_['tag']))
		echo "please enter the id to be searched";
	else
		echo "error not found";
	?></div><?php 
	// renderForm(0,"-","-",'');
}
?>

<script> 
function search()
{
	var str1 = document.getElementById("tag").value;
	var str2 = "search.php?tag=";
	str2 += str1;
	// var res = str2.concat(str1);
	// document.getElementByName("help").innerHTML = res;
	window.location = str2 ;
}
</script> 

</body>
</html>
