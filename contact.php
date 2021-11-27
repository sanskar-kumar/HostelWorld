<?php 
  session_start(); 

//   if (!isset($_SESSION['username'])) {
//   	$_SESSION['msg'] = "You must log in first";
//   	header('location: login.php');
//   }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  $login=$_SESSION['loggin'];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/stylecontact.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            .navigations{
                background-color: rgb(209 20 80);
            }
            * {
    margin: 0;
    padding: 0;
}

body {
    font-size: 14px;
    background-color: black;
    color: black;
}

h1 {
    color: black;
}

.container {
    width: 80%;
    margin: 50px auto;
    color: black;
}

.contact-box {
    background: rgb(87, 73, 73);
    display: flex;
}

.contact-left {
    background: #ccc;
    color: black;
    flex-basis: 60%;
    padding: 40px 60px;
}

.contact-right {
    flex-basis: 40%;
    padding: 40px;
    background: rgb(209 20 80);
    color: #fff;
}

h1 {
    margin-bottom: 10px;
}

.container p {
    margin-bottom: 40px;
}

.input-row {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.input-row .input-group {
    flex-basis: 45%;
}

input {
    width: 100%;
    border: none;
    border-bottom: 1px solid #ccc;
    outline: none;
    padding: 5px;
}

textarea {
    width: 100%;
    border: 1px solid #ccc;
    outline: none;
    padding: 5px;
}

label {
    margin-bottom: 6px;
    display: block;
    color: black;
}

button {
    background: #03000c;
    width: 100px;
    border: none;
    outline: none;
    color: #fff;
    height: 35px;
    border-radius: 30px;
    margin-top: 20px;
    box-shadow: 0px 5px 15px 0px rgba(28, 0, 181, 0.3);
}

.contact-left h3 {
    color: black;
    font-weight: 600;
    margin-bottom: 30px;
    width: 50%;
}

.navigations {
    background-color: rgb(209 20 80);
}

.contact-right h3 {
    font-weight: 600;
    margin-bottom: 30px;
    width: 50%;
}

tr td:first-child {
    padding-right: 20px;
}

td {
    padding-top: 10px;
}

.footer {
    background: black;
    height: 30px;
}

body {
    background-color: rgb(202, 212, 224);
}

.fa-facebook {
    background: #3B5998;
    color: white;
}


/* Twitter */

.fa-twitter {
    background: #55ACEE;
    color: white;
}

.fa-instagram {
    background: #ee55e1;
    color: white;
}

.fa {
    padding: 20px;
    font-size: 30px;
    width: 50px;
    text-align: center;
    text-decoration: none;
}


/* Add a hover effect if you want */

.fa:hover {
    opacity: 0.7;
}
        </style>

    <title>HOSTEL WORLD</title>
</head>

<body>
    <!-- navigation bar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark navigations">
        <div class="container-fluid">
            <a class="navbar-brand" href="/project/index.php">HOSTEL WORLD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/project/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/project/hostels.php">Hostels</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="/project/myhostels.php">My Profile</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/project/about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active">Contact Us</a>
                    </li>
                    <?php
                        if($login){
                            echo "</li>
                            <li class='nav-item'>
                       <a class='nav-link'href='index.php?logout='1''>LOGOUT</a>
                        </li>";
                        }
                        ?>
                </ul>
                <div class="d-flex">
                       <?php
                       if(!$login){
                           echo '<a class="navbar-brand" href="login.php">
                           <img src="https://img.icons8.com/color/48/000000/user.png" alt="" width="30" height="24" class="d-inline-block align-text-top">User Login

                       </a>
                       <a class="navbar-brand" href="admin_login.php">
                           <img src="https://img.icons8.com/external-itim2101-lineal-color-itim2101/64/000000/external-admin-network-technology-itim2101-lineal-color-itim2101-1.png" alt="" width="30" height="24" class="d-inline-block align-text-top">Admin
                           Login

                       </a>';
                       }
                       ?>
                       <?php  if (isset($_SESSION['username'])) : ?>
    	<p><img src="https://img.icons8.com/metro/26/000000/guest-male.png"><button class="btn btn-primary" type="submit"> <a href="myhostels.php" style="color: white; text-decoration:none"><?php echo $_SESSION['username']; ?></a></button> </p>
       <?php endif ?>
            
                </div>
            </div>
    </nav>
    <br>
    
    <!-- contact us form -->
    <div class="container">
        <h1>CONTACT US</h1>
        <p>We understand that when a newcomer arrives in a new city, finding a hostel on time can be tough. In these difficult times, finding a hostel can be a difficult task, but don't worry, we're here to assist. Simply go to our hostel website and you'll get all the information you need on the most cost-effective hostels in your chosen cities. Why waste time when you can get your favourite hostels at your fingertips with just one click?</p>
        <div class="contact-box">
            <div class="contact-left">
                <h3>SEND YOUR REQUEST</h3>
                <form method="POST">
                    <div class="input-row">
                        <div class="input-group">
                            <label for="">Your Full Name</label>
                            <input type="text" placeholder="John Smith" name="name">
                        </div>
                        <div class="input-group">
                            <label for="">Contact</label>
                            <input type="text" placeholder="0000000000"name="phone">
                        </div>
                    </div>
                    <div class="input-row">
                        <div class="input-group">
                            <label for="">Email</label>
                            <input type="email" placeholder="xyz@gmail.com"name="email">
                        </div>
                        <div class="input-group">
                            <label for="">Subject</label>
                            <input type="text" placeholder="Subject"name="subject">
                        </div>
                    </div>
                    <label for="">Message</label>
                    <textarea name="message" id="" rows="5" placeholder="Your message"></textarea>
                    <button type="submit" name="submit">SEND</button>
                    <?php
                include 'connection.php';
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];

                    $query = "insert into query
      (name,phone,email,subject,message) 
      values ('$name','$phone','$email','$subject','$message')";

                    $run = mysqli_query($conn, $query) or die(mysqli_connect_error());
                    
                }
                ?>
                </form>
            </div>
            <div class="contact-right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3494.861456017023!2d77.10234885032014!3d28.842984481189514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b1923ada2e3%3A0x1169930518add2fe!2sNational%20Institute%20of%20Technology%20Delhi!5e0!3m2!1sen!2sin!4v1636705780921!5m2!1sen!2sin"
                    width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                <h3>REACH US</h3>
                <table>
                    <tr>
                        <td>Email</td>
                        <td>contactus@example.com</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>9667650530</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>National Institute of Technology Delhi
A-7, Institutional Area, near Satyawadi Raja Harish Chandra Hospital, New Delhi, Delhi 110040</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
 
 
    <div class="footer">
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: rgb(209 20 80);">
            <!-- Grid container -->
            <div class="container">
                <!-- Section: Links -->
                <section class="mt-5">
                    <!-- Grid row-->
                    <div class="row text-center d-flex justify-content-center pt-5">
                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="/project/about.html" class="text-white">About us</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="/project/hostels.html" class="text-white">Hostels</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="#!" class="text-white">Review</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="/project/contact.html" class="text-white">Help</a>
                            </h6>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2">
                            <h6 class="text-uppercase font-weight-bold">
                                <a href="/project/contact.html" class="text-white">Contact</a>
                            </h6>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row-->
                </section>
                <!-- Section: Links -->

                <hr class="my-5" />

                <!-- Section: Text -->
                <section class="mb-5">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam eum harum corrupti dicta, aliquam sequi voluptate quas.
                            </p>
                        </div>
                    </div>
                </section>
                <!-- Section: Text -->

                <!-- Section: Social -->
                <section class="text-center mb-5">

                    <a href="#" class="fa fa-facebook"></a>

                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>

                </section>
                <!-- Section: Social -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </div>
</body>
</html>

