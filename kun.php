<!doctype html>
<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="db2";

$conn = mysqli_connect($servername, $username,$password,$dbname);
if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$phone = $_POST['phone'];
$email=$_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$register_query = "INSERT INTO `register`(`fname`, `mname`, `lname`, `address`, `phone`, `email`, `username`, `password`) VALUES ('$fname','$mname','$lname','$address','$phone','$email','$user','$pass')";
try{
$register_result = mysqli_query($conn, $register_query);
if($register_result){
if(mysqli_affected_rows($conn)>0){
echo("Welcome".$fname."registration succesfull");
$username = "sanuk3304@gmail.com";
$hash = "2f1b1e236ba91763df4765bee13bdaa131e577465663716d36164e128dc32845";

    // Config variables. Consult http://api.textlocal.in/docs for more info.
    $test = "0";

    // Data for text message. This is the text message data.
$sender = "TXTLCL"; // This is who the message appears to be from.
    //$numbers = "8757460985"; // A single number or a comma-seperated list of numbers
    $message = "Congratulation" . $fname ."you are succesfully registered to pharma online medicine delivery,search medicine and order medicine by nearby store";
    // 612 chars or less
    // A single number or a comma-seperated list of numbers
$message = urlencode($message);
    $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$phone."&test=".$test;
    $ch = curl_init('http://api.textlocal.in/send/?');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); // This is the result from the API
    curl_close($ch);
}else{
echo("error in registration");
}
 
}
}catch(Exception $ex){
echo("error".$ex->getMessage());
}

}
 
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <lVink rel="stylesheet" href="css/aos.css">
 
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/shopno.css">
</head>
 
<body>
   <div class="site-wrap">


      <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

  <div class="container">
    <div class="d-flex align-items-center justify-content-between">
      <div class="logo">
        <div class="site-logo">
          <a href="index.html" class="js-logo-clone">Pharma</a>
        </div>
      </div>
      <div class="main-nav d-none d-lg-block">
        <nav class="site-navigation text-right text-md-center" role="navigation">
          <ul class="site-menu js-clone-nav d-none d-lg-block">
            <li class="#"><a href="index.html">Home</a></li>
            <li class="#"><a href="message.php">Order</a></li>
            
            <li class="has-children">
              <a href="#">Store</a>
              <ul class="dropdown">
                <li><a href="#">City</a></li>
                <li class="has-children">
                  <a href="#">Bhopal</a>
                  <ul class="dropdown">
                    <li><a href="mpnagar.html">Mp Nagar</a></li>
                    <li><a href="NEW.html">New Market</a></li>
                    <li><a href="anand.html">AnandNagar</a></li>
                    <li><a href="#">Indrapuri &amp; Piplani</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="#">Bokaro</a>
                  <ul class="dropdown">
                    <li><a href="https://www.justdial.com/Bokaro/Chemists-in-Bokaro-Sector-9/nct-10096237">Sector-9</a></li>
                    <li><a href="https://www.justdial.com/Bokaro/Chemists-in-Bokaro-Sector-4/nct-10096237">Sector-4</a></li>
                    <li><a href="https://www.onefivenine.com/india/Listing/Locality/medicalshops/Bokaro/Bokaro/Sector-8">Sector-8</a></li>
                    <li><a href="https://www.justdial.com/Bokaro/Chemists-in-Bokaro-Steel-City/nct-10096237">CO-operative &amp; Sector-12</a></li>
                    <li><a href="#">Sector-2</a></li>
                    
                    <li><a href="#">CO-operative &amp; Sector-12</a></li>
                    <li><a href="#">Chas</a></li>
                    <li><a href="#">Sector-6</a></li>
                  
                  </ul>
                </li>
                <li class="has-children">
                  <a href="#">Kolkata</a>
                  <ul class="dropdown">
                    <li><a href="https://www.justdial.com/Bhopal/Chemists-in-M-P-Nagar/nct-10096237">Mp Nagar</a></li>
                    <li><a href="https://www.justdial.com/Bhopal/Chemists-in-Indrapuri/nct-10096237">New Market</a></li>
                    <li><a href="#">AnandNagar</a></li>
                    <li><a href="https://www.justdial.com/Bhopal/Chemists-in-Indrapuri/nct-10096237">Indrapuri</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="#">Mumbai</a>
                  <ul class="dropdown">
                    <li><a href="#">Andheri/a></li>
                    <li><a href="#">Goragaon</a></li>
                    <li><a href="#">morai</a></li>
                    <li><a href="#">panvel</a></li>
                    <li><a href="#">DHaravi/a></li>
                    <li><a href="#">Gorgaon</a></li>
                    <li><a href="#">morai</a></li>
                    <li><a href="#">panvel</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="#">Delhi</a>
                  <ul class="dropdown">
                    <li><a href="#">east delhi</a></li>
                    <li><a href="#">North delih </a></li>
                    <li><a href="#">south delhi</a></li>
                    <li><a href="#">west delhi</a></li>
                  </ul>
                </li>
               </ul>
            </li>
            <li><a href="about.html">About</a></li>
            <li><a href="kun.php">Contact</a></li>
            <li><a href="TxnTest.php">Payment</a></li>
            </ul>
         </nav>
      </div>
           <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="#" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
          </div>
      </div>
    </div> 
<div class="site-blocks-cover inner-page" style="background-image: url('images/hero_1.jpg');">
    <div align="center">   
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="banner-wrap bg-success h-100">
           <div class="main-agileinfo">
		      	<div class="agileits-top">
             <div class="form">
               <form action="" method="post">
                <table align="center">
                <tr>
                <td></td>
                <td><input type="text" name="fname" placeholder="First name"></td>
                </tr>
                <tr>
                <td></td>
                <td><input type="text" name="mname" placeholder="Middle name"></td>
                </tr>
                <tr>
                <td></td>
                <td><input type="text" name="lname" placeholder="Last name"></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td></td>
                <td><input type="text" name="address" placeholder="Enter Address"></td>
                </tr>
                <tr>
                <td></td>
                <td><input type="tel" name="phone" placeholder="Phone No"></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
                
                <tr>
                <td></td>
                <td><input type="email" name="email" placeholder="Email"></td>
                
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
                
                <tr>
                <td></td>
                <td><input type="text" name="username" placeholder="Username"></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
                
                <tr>
                <td></td>
                <td><input type="password" name="password" value="admin"  placeholder="Password"></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
							  <td><input type="checkbox" class="checkbox" required="">
							          <span class="text-primary">I Agree To The Terms & Conditions</span>
							  </td> 
                </tr> 
                <tr>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <td></td>
                <td></td>
                </tr> 
                <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
          </table>
        </form>
      </div> 
    </div>
  </div>   
</div>
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="text-center">
          <div class="col-md-15 row-md-15">  
            <p>Copyright &copy; All rights reserved | This website is made
              with <i class="icon-heart" aria-hidden="true"></i> by <a href="#" target="_blank" class="text-primary">KG</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>  
</div>      
</body>
</html>