<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>RVCE EL Managment</title>

    <style>
              #preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #fcfcfc; /* Choose the background color you want */
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
      }





.home{
    
    background-image: url(./assests/bg.png) ;
    height: auto;
    float: right;
    
}

    </style>
  </head>
  <body>
  






    <!--Preloader-->
    <div id="preloader" style="align-self: center;">
        <div class="spinner-grow text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-secondary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-success" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-danger" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-warning" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-info" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-secondary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow text-dark" role="status">
            <span class="visually-hidden">Loading...</span>
          </div></div>
    <!--Nav-->
    <nav class="navbar navbar-expand-lg " style="background-color: rgb(216, 223, 223);">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="data:image/png;base64,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" alt="Logo" width="37" height="30" class="d-inline-block align-text-top">
            
          </a>
        <a class="navbar-brand active" href="#" style="font-weight: 500;">RVCE MMS</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown" style="
        justify-content: end;">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./adminlogin.php">College Login</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link active" href="#">Admin</a>
            </li>
            <li class="nav-item" style="float: right;">
                <a class="nav-link active" href="./login.php">Login</a>
              </li>
            
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--Nav-->


    <section class="home" id="home" style="
    background-image: url('https://img.freepik.com/free-vector/businessman-consulting-watch_74855-2350.jpg'); background-repeat:no-repeat; width: 600px; height: 400px;">
    
    
    


    </section>
    <section style="text-align: center;margin-top: 50px; margin-left: 10px; ">

        <b style="font-family:Arial, Helvetica, sans-serif; font-size: larger; " >
            Greetings, esteemed user. Welcome to the RVCE EL Management System. Kindly proceed by either logging in or registering to access additional functionalities.</b><br>
            
            <button type="button" class="btn btn-primary btn-lg" style="margin-top: 60px;">Register</button>
            <a href="./login.php"><button type="button" class="btn btn-secondary btn-lg" style="margin-top: 60px;">Login</button></a>
    </section>
    <br><br>
    <br>
    <br><br>
    <br>
    <br>    


    <section style="width: 100%; background-color: rgb(216, 223, 223); margin-top: 12px;">
    <a href="./login.php"><marquee><b style="text-transform: uppercase;color: black;">Results Announced - Checkout..!</b></marquee></a>
    
    <section id="about">
        <div class="container">
            <h2>About Our Marks Management System</h2>
            <p>Welcome to our Marks Management System! We understand the importance of efficiently managing academic data to ensure smooth operations for educational institutions.</p>
            <h3>Our Mission</h3>
            <p>Our mission is to simplify the process of managing and analyzing student performance data for educators and administrators. By providing user-friendly tools and comprehensive features, we aim to streamline the task of tracking, evaluating, and reporting academic progress.</p>
            <h3>Key Features</h3>
            <ul>
                <li>Efficient Data Management</li>
                <li>Customizable Reporting</li>
                <li>Collaborative Platform</li>
                <li>Security and Privacy</li>
            </ul>
            <h3>Why Choose Us?</h3>
            <ul>
                <li>User-Centric Design</li>
                <li>Reliable Support</li>
                <li>Continuous Improvement</li>
            </ul>
            <p>Join countless educational institutions that have already benefited from our Marks Management System. Whether you're a small school or a large university, our solution is scalable to meet your needs. Contact us to schedule a demo or start your free trial.</p>
        </div>
    </section>
    
    


          <br>


    </section>
    <br>
    <section id="contact" style="margin-left: 15px;">
  <h2>Contact Us</h2>

  <div class="container" style="display: flex; flex-direction: row; align-items: center; justify-content: space-around; min-height: 350px;">
    <div class="contact-info" style=" display: flex; flex-direction: column; align-items: center; justify-content: center; margin-bottom: 20px;">
      <div class="contact-item">
        <p style="display: flex; align-items: center; margin-bottom: 5px;">
          <i class="fas fa-envelope" style="color: #24a8e8; font-size: 24px; margin-right: 10px;"></i>
          Email: <a href="mailto:contact@example.com" style="color: #24a8e8; text-decoration: none;">admin@rvce.edu.in</a>
        </p>
      </div>
      <div class="contact-item">
        <p style="display: flex; align-items: center; margin-bottom: 5px;">
          <i class="fas fa-phone" style="color: #e84a32; font-size: 24px; margin-right: 10px;"></i>
          Phone: +91 8660101432
        </p>
      </div>
      <div class="contact-item">
        <p style="display: flex; align-items: center; margin-bottom: 5px;">
          <i class="fas fa-map-marker-alt" style="color: #f5d022; font-size: 24px; margin-right: 10px;"></i>
          RV College of Engineering,<br> Bengaluru, Karnataka 560055
        </p>
      </div>
    </div>

    <form action="#" method="post" style="display: flex; flex-direction: column; width: 100%; max-width: 400px; background-color: #e8f0fe; border-radius: 10px; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
      <b style="margin-bottom: 5px; color: #424242; font-weight: bold;">Enter:</b>

      <div class="form-group">
        <input type="text" id="name" name="name" placeholder="Name" required style="border: 1px solid #ced4da; padding: 10px; border-radius: 5px; background-color: #fff;">
      </div>

      <div class="form-group">
        <input type="email" id="email" name="email" placeholder="Email" required style="border: 1px solid #ced4da; padding: 10px; border-radius: 5px; background-color: #fff;">
      </div>

      <div class="form-group">
        <input type="tel" id="phone" name="phone" placeholder="Phone Number" style="border: 1px solid #ced4da; padding: 10px; border-radius: 5px; background-color: #fff;">
      </div>

      <div class="form-group">
        <textarea id="message" name="message" placeholder="Message" required style="border: 1px solid #ced4da; padding: 10px; border-radius: 5px; background-color: #fff;"></textarea>
      </div>

      <button type="submit" style="background-color: #24a8e8; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">SEND</button>
    </form>
  </div>
</section>
    <br>

    

    
    











    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script>

        // Preloader JS
        document.addEventListener("DOMContentLoaded", function() {
      var preloader = document.getElementById("preloader");

      setTimeout(function() {
        preloader.style.display = "none";
      }, 1500); // Display preloader for 2 seconds
    });
    document.addEventListener("DOMContentLoaded", function() {
      var preloade = document.getElementById("preloade");

      setTimeout(function() {
        preloader.style.display = "none";
      }, 1000); // Display preloader for 2 seconds
    });



    </script>
  </body>
</html>
