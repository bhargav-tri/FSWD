<?php
require "config.php";

if(isset($_POST['phno']) && isset($_POST['email']) && isset($_POST['msg']))
{
        $num=$_POST["phno"];
        $email=$_POST['email'];
        $msg=$_POST['msg'];

        $sql=mysqli_query($conn,"INSERT INTO contact (phone,email,msg) VALUES('{$num}','{$email}','{$msg}')");
        if($sql)
        {
          echo "<script>alert('Thank You For Contacting us');</script>";

        }
}
$sql2=mysqli_query($conn,"SELECT * FROM contact");
$row=mysqli_fetch_all($sql2,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- displays site properly based on user's device -->
    <title>Bionic Engineers</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <script
      src="https://kit.fontawesome.com/99674bd4f6.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="./images/logo/blogo.png"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <nav>
        <img src="./images/logo/blogo.png" alt="logo" class="logo" />
        <ul>
            <li><a href="./index.html">Dealers in</a></li>
            <li><a href="./contactus.html">Contact us</a></li>
            <li><a href="./aboutus.html">About us</a></li>
          </ul>
      </nav>
    <section class="contactus" id="contactUs" style="height:75vh">
        <h2>We would love to hear it from you on your query</h2>
        <form method="post">
              <input type="text" id="phNo" name="phno" placeholder="Enter phone number" />
              <input type="email" id="email" name="email" placeholder="Enter your email" />
              <textarea
                rows="4"
                cols="50"
                id="message"
                placeholder="Write your message here"
                name="msg"
              ></textarea>
              <button type="submit" name="submit">Submit</button>
        </form>
</section><br><br><br>
<div class="d-flex"  >
 
<div class="container" id="results">
    <div class="card mt-5 my-5 border border-dark cr1" >
        <div id="res">
         <div class="card-header bg-dark text-white">
            <h2>Look What Other Customers Said to us</h2>
          
         </div>
         <div class="card-body">
            <table class="table">
                <tr>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Message</th>
                    <!-- <th>Action</th> -->
                </tr>
                <?php foreach($row as $p): ?>
                    <tr>
                        <td ><?= $p['phone']; ?></td>
                        <td ><?= $p['email']; ?></td>
                        <td ><?= $p['msg']; ?></td>
                        <!-- <td>
                            <a  class="text-primary fs-3"><i class="bi bi-pencil-square p-lg-2"></i></a> 
                            <a  onclick="return confirm('Are you sure you want to delete this record?')" class="text-danger fs-3" ><i class="bi bi-trash"></i></a>

                        </td> -->
                    </tr>
                <?php endforeach; ?>
                </table>
         </div>
                </div>
               
               
        </div>
    </div>
</div>


<br><br><br>




      <div class="wlogo">
        <a href="https://api.whatsapp.com/send?phone=+911234567892&text=Thank%20You%20for%20contacting%20us">
          +91-8574265856<br>
          Chat with us, and get a quotation as soon as possible
        </a>
        <a href="#"><i class="fab fa-whatsapp fa-2x"></i></a>
      </div>  
      <footer>
        <img src="./images/logo/blogo.png" alt="logo" class="logo" />
        <ul>
          <li>
            <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-whatsapp fa-2x"></i></a>
          </li>
          <li>
            <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
          </li>
        </ul>
      </footer>
</body>
</html>