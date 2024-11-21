<!DOCTYPE html>
<html lang="en">
<?php
include("./connect.php"); // connection to db
error_reporting(0);
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Admin Panel</title>
</head>
<body style="background: #6f8a8b;">


    <header>
        <h1>Admin </h1>
    </header>
    <main id="main-content">
        <div class="forms w-50">
        <form class="mb-3 g-3 col-md-4" style="transform: translate(145px, 7px);">
        



        <?php
    $con = mysqli_connect("localhost", "root", "", "el");
    


    if(isset($_REQUEST['log'])) {
      $cn = $_REQUEST['USN'];
      $ro = $_REQUEST['Name'];
      $da = $_REQUEST['Branch'];       
      $li = $_REQUEST['Section'];
      $le = $_REQUEST['email'];
      $lir = $_REQUEST['Subject'];
      $lit = $_REQUEST['Quiz'];
      $liy = $_REQUEST['CIE'];
      $liu = $_REQUEST['SEE'];
      

  // Insert data of marks to sem
  $q1 = "insert into sem(USN,Name,Branch,Section,email,Subject,Quiz,CIE,SEE) values('$cn','$ro','$da','$li','$le','$lir','$lit','$liy','$liu')";
    
  $r1 = mysqli_query($con, $q1);
  if($r1){
    echo "<script>alert('IE Added');</script>";

 }
 else{
  echo "<script>alert('error');</script>";
  //   mysqli_query($con);
 }


 //inserting data to students
 $q2 = "insert into student(Name,email,USN,Branch,password,Section) values('$ro','$le','$cn','$da','','$li')";
 $r2 = mysqli_query($con, $q2);




};?>

    








<form>
        
  <div class='col-10'>
<label for='inputl4' class='form-label'>NAME : </label>

<input type='text' class='form-control' id='inputl4' name= 'Name'  >
</div>

<div class='col-10'>
        <label for='input15' class='form-label'>USN : </label>
      
        <input type='text' class='form-control' id='input15' name = 'USN'  >
      </div>
      <div class='col-10'>
        <label for='input16' class='form-label'>BRANCH : </label>
        
        
        <select class="form-control" id="input24" name='Branch' style="width: 330px;" required>
  <option value="CSE">Computer Science </option>
  <option value="DS">CSE- Data Science</option>
  <option value="AI">CSE - AIML</option>
  <option value="ISE">Information Science</option>
</select>
      </div>
      <div class='col-10'>
        <label for='input17' class='form-label'>SECTION : </label>
        
        
        <select class="form-control" id="input24" name='Section' style="width: 330px;" required>
  <option value="CSE-A">CSE-A </option>
  <option value="CSE-B">CSE-B</option>
  <option value="CSE-C">CSE-C</option>
  <option value="CSE-D">CSE-D</option>
</select>
      </div>
      <div class='col-10'>
        <label for='input18' class='form-label'>EMAIL : </label>
        <input type="text" class='form-control' id='input18' name='email'  >
      </div>





      
      
      </div>
      <!-- <div class="col-12 sbm">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
      </div> -->
    
    <br><br>
  </div>
  <div class="forms2">
      <form class="mb-3 g-3 col-md-4">
      <div class="col-10">
<label for="input24" class="form-label">SUBJECT:</label>
<select class="form-control" id="input24" name='Subject' style="width: 304px;" required>
  <option value="OS">OS</option>
  <option value="DSA">DSA</option>
  <option value="Maths">Maths</option>
  <option value="ADLD">ADLD</option>
</select>
</div>
          <div class="col-10">
            <label for="input25" class="form-label">CIE : </label>
            <input type="text" class="form-control" id="input25" name='CIE' style="width: 304px;" required>
          </div>
          <div class="col-10">
            <label for="input26" class="form-label">SEE : </label>
            <input type="text" class="form-control" id="input26" name='SEE' style="width: 304px;" placeholder="" >
          </div>
          <div class="col-10">
            <label for="input27" class="form-label">QUIZE : </label>
            <input type="text" class="form-control" id="input27" name='Quiz' style="width: 304px;" placeholder="" required>
          </div>
          <div class="col-10">
            <label for="input28" class="form-label">GRADE : </label>
            <input type="text" class="form-control" id="input28 " style="width: 304px;">
          </div>
          

          
        
        <button type="submit" class="btn btn-primary" style=" margin-top: 24px; " name="log">SUBMIT</button>
          <a href="./adminMainPage.php"><button type="button" class="btn btn-primary" style=" margin-top: 24px;">BACK</button></a>
          </div>
        </form>
      </div>
    <footer>
        <p>&copy; Student Result Management System</p>
    </footer>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
