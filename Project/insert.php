<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      echo $_POST['username'];
      echo " ";
      echo $_POST['password'];

      $id = mysqli_real_escape_string($db,$_POST['id']);
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $insert = "INSERT INTO `emp` VALUES ($id,'$myusername','$mypassword')";
      $result = mysqli_query($db,$insert);
      // $sql = "SELECT username FROM emp WHERE username = '$myusername' and passcode = '$mypassword'";
      // // echo $sql;
      // $result = mysqli_query($db,$sql);
      // // echo $result;
      // $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      // // $active = $row['active'];
      
      // $count = mysqli_num_rows($result);
      // echo $count;
      // // If result matched $myusername and $mypassword, table row must be 1 row
		
      // if($count == 1) {
      //    // session_register("myusername");
      //    $_SESSION['login_user'] = $myusername;
         
      //    header("location: welcome.php");
      // }else {
      //    $error = "Your Login Name or Password is invalid  ";
      // }
   }
?>
<html>
   
   <head>
      <title>Insert Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Insert</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                   <label>id  :</label><input type = "number" name = "id" class = "box"/><br /><br />
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <form action="view.php">
                  <input type="submit" value="Go all data entries" />
               </form>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error;  ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>