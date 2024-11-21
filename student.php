<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <style>

        body{
            background-color: #dfdcdc;
        }


        #list{
            -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    -webkit-font-smoothing: auto!important;
    font-family: "Roboto","Fira Sans","Segoe UI","HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-weight: 400;
    font-size: 1em;
    line-height: 2;
    overflow-wrap: break-word;
    color: white;
    box-sizing: inherit;
    margin-top: 0;
    margin-left: .5rem;
    display: block;
    margin-bottom: 0px;
        }


    #username{
        -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    -webkit-font-smoothing: auto!important;
    overflow-wrap: break-word;
    box-sizing: inherit;
    margin-bottom: .5rem;
    margin-left: .5rem;
    font-weight: 300;
    line-height: 1.1;
    font-size: 2.5rem;
    font-family: Roboto,"Fira Sans","Segoe UI","HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,sans-serif;
    color: white;
    }

    .title{
        padding: 10px;
        margin-bottom: 5px;
        font-size: larger;
    }




    </style>
    <title>Results</title>
</head>

<body>
<?php
    session_start();
    $sn = $_SESSION['user'];
    $con = mysqli_connect("localhost", "root", "", "el");
    $q2 = "select * from sem where email='$sn'";

    $r2 = mysqli_query($con, $q2);
    $username = mysqli_fetch_assoc($r2);

    //echo "<script>alert('$sn')</script>";

    echo "
    <section style='background-color:#7a319f '> 
    <span margin-left:80px>
    <a href='./index2.php' style='text-decoration: none;' ><p  id = 'list'>◀ Home Page </p></a>
    <h1 id = 'username'>".$username['Name']."</h1>
    <br>
    
    
    </span>
    
    
    
    </section>
    <br>

    
    
    
    
    "

    
    ?>
    
<!-- quiz -->
<b class="title">Quiz</b>
<br>


<?php
    $con = mysqli_connect("localhost", "root", "", "el");
    $q = "select * from sem where email='$sn'";
    
    $r = mysqli_query($con, $q);

    $currentSubject = null; // Variable to store the current subject
    echo "<div style='display: flex; flex-direction: row;'>";

    

    while ($d = mysqli_fetch_assoc($r)) {

        if($d['Quiz'] !=NULL){
        // Check if the subject is different from the previous row
        if ($d['Subject'] !== $currentSubject) {
            $i=1;
            // If different, create a new card
            if ($currentSubject !== null) {
                echo "</div></div>"; // Close the previous card
            }
            $backgroundColor = generateBackgroundColorq($d['Subject']);

            // Start a new card for the current subject
            echo "<div class='card' style='width: 18rem; border-style: solid ; margin-left: 8px; '>
                    <section style='background-color:  $backgroundColor; padding:0px;'><br><br><br><br></section>
                    <div class='card-body'>
                        <h5 class='card-title'style='text-transform: uppercase;'>" . $d['Subject'] . "</h5>
                        <h6 class='card-subtitle mb-2 text-body-secondary'>Result :</h6>";
                        
        }

        // Display CIE marks for the current subject
        
            echo "<p class='card-text'>Quiz ".$i++." - " . $d['Quiz'] . "</p>";
        
        

        // Update current subject
        $currentSubject = $d['Subject'];

    }
    }

    // Close the last card
    if ($currentSubject !== null) {
        echo "</div></div>";
    }

    // Function to generate a background color based on a string
    function generateBackgroundColorq($subject) {
        // Simple hash function to convert the subject name into a color
        $hash = md5($subject);
        return "#" . substr($hash, 0, 6); // Use the first 6 characters of the hash as a hex color code
    }
    echo "</div>";
?>

    
    
    <br>
    <b class="title">CIE</b> <br>


<?php
    $con = mysqli_connect("localhost", "root", "", "el");
    $q = "select * from sem where email='$sn'";
    
    $r = mysqli_query($con, $q);

    $currentSubject = null; // Variable to store the current subject
    echo "<div style='display: flex; flex-direction: row;'>";

    

    while ($d = mysqli_fetch_assoc($r)) {
        if($d['CIE'] !=NULL){
        // Check if the subject is different from the previous row
        if ($d['Subject'] !== $currentSubject) {
            $i=1;
            // If different, create a new card
            if ($currentSubject !== null) {
                echo "</div></div>"; // Close the previous card
            }
            $backgroundColor = generateBackgroundColor($d['Subject']);

            // Start a new card for the current subject
            echo "<div class='card' style='width: 18rem; border-style: solid ; margin-left: 8px; '>
                    <section style='background-color:  $backgroundColor; padding:0px;'><br><br><br><br></section>
                    <div class='card-body'>
                        <h5 class='card-title'style='text-transform: uppercase;'>" . $d['Subject'] . "</h5>
                        <h6 class='card-subtitle mb-2 text-body-secondary'>Result :</h6>";
                        
        }

        // Display CIE marks for the current subject
        echo "<p class='card-text'>CIE ".$i++." - " . $d['CIE'] . "</p>";

        // Update current subject
        $currentSubject = $d['Subject'];
    }
    }

    // Close the last card
    if ($currentSubject !== null) {
        echo "</div></div>";
    }

    // Function to generate a background color based on a string
    function generateBackgroundColor($subject) {
        // Simple hash function to convert the subject name into a color
        $hash = md5($subject);
        return "#" . substr($hash, 0, 6); // Use the first 6 characters of the hash as a hex color code
    }
    echo "</div>";
?>


<!-- SEE -->


    <br>
    <b class="title">SEE Results</b>


<?php
    $con = mysqli_connect("localhost", "root", "", "el");
    $q = "select * from sem where email='$sn'";
    
    $r = mysqli_query($con, $q);

    $currentSubject = null; // Variable to store the current subject
    echo "<div style='display: flex; flex-direction: row;'>";

    

    while ($d = mysqli_fetch_assoc($r)) {
        if($d['SEE'] !=NULL){
        // Check if the subject is different from the previous row
        if ($d['Subject'] !== $currentSubject) {
            $i=1;
            // If different, create a new card
            if ($currentSubject !== null) {
                echo "</div></div>"; // Close the previous card
            }
            $backgroundColor = generateBackgroundColors($d['Subject']);

            // Start a new card for the current subject
            echo "<div class='card' style='width: 18rem; border-style: solid ; margin-left: 8px; '>
                    <section style='background-color:  $backgroundColor; padding:0px;'><br><br><br><br></section>
                    <div class='card-body'>
                        <h5 class='card-title'style='text-transform: uppercase;'>" . $d['Subject'] . "</h5>
                        <h6 class='card-subtitle mb-2 text-body-secondary'>Result :</h6>";
                        
        }

        // Display CIE marks for the current subject
        echo "<p class='card-text'>SEE ".$i++." - " . $d['SEE'] . "</p>";

        // Update current subject
        $currentSubject = $d['Subject'];
    }
    }

    // Close the last card
    if ($currentSubject !== null) {
        echo "</div></div>";
    }

    // Function to generate a background color based on a string
    function generateBackgroundColors($subject) {
        // Simple hash function to convert the subject name into a color
        $hash = md5($subject);
        return "#" . substr($hash, 0, 6); // Use the first 6 characters of the hash as a hex color code
    }
    echo "</div>";
?>








    
</body>
</html>