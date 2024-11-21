<!DOCTYPE html>
<html lang="en">

<?php
include("./connect.php"); // connection to db
error_reporting(0);
?>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles1.css">

    <title>Login Form</title>
  </head>
  <body>
  <?php
    
    if(isset($_REQUEST['log'])){
        $un = $_REQUEST['username'];
        

        
        $q = "select * from student where USN='$un'";
        $r = mysqli_query($db,$q);
        if ($d=mysqli_fetch_assoc($r)>0){
            session_start();
            $_SESSION['user'] = $un;
            header("location:adminpage1.php");
        }

        else{
          echo "<script>alert('USN not found - click on add option to proceed');</script>";

          
          //echo "<script>alert('USN not found ' click on add option to proceed);</script>";         
            // echo '<script>alert("User doesnt exist , please register")</script>';
        }
   
    }

    if(isset($_REQUEST['new'])){
      $_SESSION['user'] = NULL;      
      header("location:adminpage2.php");
    

    }
?>

    <div class="search-container">
      <form id="searchForm">
        <label for="username">USN:</label>
        <input type="text" id="username" name="username" required />

        <div class="btn">
          <button type="submit" name="log">SEARCH</button>
          <p id="error-message" class="error" ></p>
        </div>
        <span><hr><b><center>New User..!</center></b><br></span>
        
        <div class="btn">
          <button type="submit" name="new" onclick="toggleRequired()">ADD</button>
          <p id="error-message" class="error"></p>
        </div>
        
      </form>
      <a href="index.PHP"><button style="margin-left: 18px;" >HOME</button></a>
      
    </div>

    <script>
        function toggleRequired() {
            var usernameInput = document.getElementById('username');
            usernameInput.required = !usernameInput.required;
        }
    </script>

    <script src="script.js"></script>
  </body>
</html>
