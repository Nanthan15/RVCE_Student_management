<!DOCTYPE html>
<html lang="en">
<?php
include("./connect.php"); // connection to db
error_reporting(0);
?>
<?php
if (isset($_GET['class'])) {
    $class = urldecode($_GET['class']);
    
} else {
    echo "class not specified.";
}
?>
<?php
if (isset($_GET['subject'])) {
    $subject = urldecode($_GET['subject']);
    //echo "Subject: " . $subject;
} else {
    //echo "Subject not specified.";
}
?>

<?php
if (isset($_GET['eval'])) {
    $eval = urldecode($_GET['eval']);
    //echo "Subject: " . $subject;
} else {
    //echo "Subject not specified.";
}
?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Admin Panel</title>
</head>
<body style="background: #6f8a8b;">
<?php
if (!isset($_SESSION['user'])) {
    // If it doesn't exist, start a new session
    session_start();
}

$sn = $_SESSION['user'];
?>
<header>
    <h1>College  </h1>
</header>
<main id="main-content" style="padding-bottom: 500px;">
    <div class="forms w-50">
        <center><?php

        $eval2 = $eval;
        
        
        
        echo "<p style='font-size: 28px; color: #333; font-family: Arial, sans-serif;'>" . $eval2 . "</p>";

        ?></center>
        
        <form class="mb-3 g-3 col-md-4" style="transform: translate(145px, 7px);" method="post">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" >NAME</th>
                        <th scope="col">USN</th>
                        <th scope="col">BRANCH</th>
                        <th scope="col">SECTION</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">SUBJECT</th>
                        <th scope="col">MARKS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $class1 = $class;
                    $subject1 = $subject;
                    
                    $con = mysqli_connect("localhost", "root", "", "el");
                    $q = "select * from student where Section = '$class1'";
                    $r = mysqli_query($con, $q);
                    while ($d = mysqli_fetch_assoc($r)) {
                        echo "<tr>";
                        echo "<td>" . $d['Name'] . "</td>";
                        echo "<td>" . $d['USN'] . "</td>";
                        echo "<td>" . $d['Branch'] . "</td>";
                        echo "<td>" . $d['Section'] . "</td>";
                        echo "<td>" . $d['email'] . "</td>";
                        echo "<td>" .$subject1. "</td>";
                        // echo "<td>
                        //         <select class='form-select' name='subjects[]' style='width: 150px;'>
                        //             <option value='OS'>OS</option>
                        //             <option value='DSA'>DSA</option>
                        //             <option value='Maths'>Maths</option>
                        //             <option value='ADLD'>ADLD</option>
                        //         </select>
                        //     </td>";
                        echo "<td><input type='text' class='form-control' name='marks[" . $d['USN'] . "]' style='width: 100px;'></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <button type="submit" class="btn btn-primary" name="log">SUBMIT</button>
            <br>
        </form>
        <a href="./pages/update.html"><button type="button" class="btn btn-primary" style="margin-left:145px">BACK</button></a>
    </div>
    <br><br>

</main>
<footer>
    <p>&copy; Student Result Management System</p>
</footer>


<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

<?php
if (isset($_POST['log'])) {
    $subjects = $_POST['subjects'];
    $marks = $_POST['marks'];
    $subject1 = $subject;
    $class1 = $class;
    $eval1 =$eval;
    
    $con = mysqli_connect("localhost", "root", "", "el");
    $q = "select * from student where Section = '$class1' ";
    $r = mysqli_query($con, $q);
    
    while ($d = mysqli_fetch_assoc($r)) {
        $usn = $d['USN'];
        if (isset($marks[$usn])) {
            $subject = $subject ; // Corrected to use $usn as the index
            $mark = $marks[$usn];
            $cn = $d['USN'];
            $ro = $d['Name'];
            $da = $d['Branch'];      
            $li = $d['Section'];
            $le = $d['email'];

            if($eval == 'Quiz'){
                $q1 = "INSERT INTO sem (USN, Name, Branch, Section, email, Subject, Quiz) VALUES ('$cn','$ro','$da','$li','$le','$subject','$mark')";
                          
            $r1 = mysqli_query($con, $q1);

            }
            elseif($eval == 'CIE'){
                $q1 = "INSERT INTO sem (USN, Name, Branch, Section, email, Subject, CIE) VALUES ('$cn','$ro','$da','$li','$le','$subject','$mark')";
                          
            $r1 = mysqli_query($con, $q1);

            }
            else{
                $q1 = "INSERT INTO sem (USN, Name, Branch, Section, email, Subject, SEE) VALUES ('$cn','$ro','$da','$li','$le','$subject','$mark')";
                          
            $r1 = mysqli_query($con, $q1);

            }



            
            
            
        }
        
    }
    echo "<script>alert('Marks added successfully ');</script>";
}
?>

