<?php 
session_start();
include "subject.php";
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <header>
            <div class='headersection'>
                <ul class='left_header_section'>
                    <a><img src='assets/srkr_logo.png' width='250px' height='50px'></a>
                </ul>
                <ul class='right_header_section'>
                    <a href="#homeSection">HOME</a>
                    <a href="#coursesSection">SYLLABUS</a>
                    <a href="#footer">CONTACT</a>
                    <a href="logout.php">LOGOUT</a>
                </ul>
            </div> 
     </header>
          <div class='main'>
                <div id="homeSection" >
                     <div class="L">
                     <p>
                         <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
                         <br>
                         <h1>Welcome! To</h1>
                         <br>
                         <h1>SRKR Engineering College</h1>
                    </p>
                     </div>
                     <div class="R">
                         <div class="box">
                              <span style="--i:1;"><a href="marvel_characters.html"><img src="assets/images/srkr_clz.jpg"></a></span>
                              <span style="--i:2;"><a href="AOS.html"><img src="assets/images/2.jpg"></a></span>
                              <span style="--i:3;"><a href="defenders.html"><img src="assets/images/3.jpg"></a></span>
                              <span style="--i:4;"><a href="xmen.html"><img src="assets/images/1.jpeg"></a></span>
                              <span style="--i:5;"><a href="f4.html"><img src="assets/images/photo6336781941382163755.jpg"></a></span>
                         </div>
                    </div>
                     
               </div>
                <div id="coursesSection">
                    <center><h1>Syllabus</h1></center>
                    <div onclick=f1("first")><h3>First Year</h3></div>
                    <div onclick=f1("second")><h3>Second Year</h3></div>
                    <div onclick=f1("third")><h3>Third Year</h3></div>
                    <div onclick=f1("forth")><h3>Forth Year</h3></div>
                </div>
               <div><embed id="pdf" src='' style="display:none;"/></div>
          </div>
          <footer id="footer">
               <div class="L">
                    SRKR Engineering College<br>
                    Chinna Amiram, Bhimavaram
                    Andhra Pradesh, India - 534204
               </div>
               <div class="R">
                    Telephone: +91 (8816) 223332<br>
                    Email: principal@srkrec.ac.in 
               </div>
               
          </footer>
</body>
<script src="assets/js/script.js"></script>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
?>