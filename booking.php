<?php
include 'admin/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css"
        integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="booking.css">
    <title>Document</title>
</head>

<body>

    <!-- nav bar section -->
    <div class="container-nav">
        <nav>
            <div class="logo">
                <h1>jamshedpur food</h1>
            </div>

            <ul>
                <a href="index.php">home</a>
                <a href="about.php">about</a>
                <a href="menu.php">our menu</a>
                <a href="booking.php">book now</a>
                <a href="contact.php">contact</a>

            </ul>

            <div class="login">
                <button>Login</button>
            </div>
        </nav>
    </div>
    <!-- nav bar section end -->
    <div class="book">
        <h1>Book A Table</h1>
        <h2>Lorem Ipsum is simply dummy text of the printing <br> and typesetting industry.</h2>
    </div>

    <div class="booknow">
        <div class="conn">
            <div class="cont1">
                <h2 style="color: red;font-size: 1.6rem;">Reserve Your Seat</h2>
                <h1 style="color: black; font-size: 2.4rem;">Call Us Or Visit Place</h1>
                <p style="color: grey; font-size: 20px;">Lorem ipsum dolor sit amet,colur consectetur omni adipisicing
                    elit,sed do eiusmod tempor incididunt labore et magna aliqua.</p>
            </div>
            <div class="cont1">
                <img src="image/reserve-img.jpg" alt="" height="600px" width="520px">
            </div>
        </div>
        <div class="conten">
            <div class="cont2">
                <h2 style="color: black;">Torre Annunziata</h2>
                <p style="color: grey;">1614 E. Bell Rd #104.<br>Salerno, AZ 85022<br>(989) 867-1010<br>Open today
                    11AM-10PM0</p>
            </div>
            <div class="conten1">
                <h2 style="color: black;">Posillipo</h2>
                <p style="color: grey;">204 E. Pizzetta Tommaso<br>Sorrento, AZ 85022<br>(989) 867-1010<br>Open today
                    11AM-10PM0</p>
            </div>

        </div>
        <div class="cont-img">
            <div class="cont">
                <h2 style="color: black;">Torre del Greco</h2>
                <p style="color: grey;">Vale Puglia 54<br>Torre Del Greco AZ 85022<br>(989) 867-1010<br>Open today
                    11AM-10PM0</p>
            </div>
            <div class="cont3">
                <h2 style="color: black;">Naples Mercato</h2>
                <p style="color: grey;">Corso Itali AA<br>Naples, AZ 85022<br>(989) 867-1010<br>Open today 11AM-10PM0
                </p>
            </div>
        </div>
    </div>

    <div class="location">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14711.258911439305!2d86.19055448080714!3d22.809327999026095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f5e30c11c7ba33%3A0xc49228a8b424f28e!2sSakchi%2C%20Jamshedpur%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1753939178091!5m2!1sen!2sin"
            width="1275" height="550" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="book-data">
        <div class="reserve">
            <img src="image/book-img.jpg" alt="" height="500px" width="500px">
        </div>
        <div class="book1">
            <div class="logo5">
                <h3 style="color: red;">Reservation</h3>
                <h1 style="color: black;">Book A Table Now !</h1>
            </div>
            <div class="details">
                <form action="" method="post">
                    <div class="form-group">
                        <input type="text" placeholder="Name *" name="name" required>
                        <input type="email" placeholder="Email *" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="number" placeholder="Phone *" name="phone" required>
                        <input type="time" placeholder="Time *" name="time" required>
                    </div>
                    <div class="form-group">
                        <input type="date" placeholder="Date *" name="date" required>
                        <input type="text" placeholder="Guest *" name="guest" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit">BOOK NOW</button>
                    </div>
                </form>

<?php
        if(isset($_POST['submit'])){
            
    $name= $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $time= $_POST['time'];
    $date= $_POST['date'];
    $guest= $_POST['guest'];

    $reserve = "INSERT INTO reservation (name, email, phone, time, date, guest) VALUES ('$name', '$email', '$phone', '$time', '$date', '$guest')";

    if ($conn->query($reserve)) {
           $reseve = "SELECT * FROM reservation";

          
        } else {
            echo "Database error: " . $conn->conect_error;
        }

    }
?>

            </div>
        </div>
    </div>

    <div class="content7">
        <div class="logo7">
            <h6 style="color: black; display: block;">INFORMATION</h6>
            <a href="">Home</a>
            <a href="">Blog</a>
            <a href="">About Us</a>
            <a href="">Menu</a>
            <a href="">Contact Us</a>
        </div>
        <div class="logo7">
            <h6 style="color: black;">TOP ITEMS</h6>
            <a href="">Pepperoni</a>
            <a href="">Swiss Mushroom</a>
            <a href="">Barbeque Chicken</a>
            <a href="">Vegetarian</a>
            <a href="">Ham & Cheese</a>
        </div>
        <div class="logo7">
            <h6 style="color: black;">OTHERS</h6>
            <a href="">Checkout</a>
            <a href="">Cart</a>
            <a href="">Product</a>
            <a href="">Locations</a>
            <a href="">Legal</a>
        </div>
        <div class="logo7">
            <h6 style="color: black;">SOCIAL MEDIA</h6>
            <div class="icon1">
                <i class="fa-brands fa-square-facebook"></i>
                <i class="fa-brands fa-square-pinterest"></i>
                <i class="fa-brands fa-x-twitter"></i>
                <i class="fa-brands fa-square-instagram"></i>
            </div>
            <p style="color: grey;">Signup and get exclusive offers and <br> coupon codes</p>
            <button>SIGN UP</button>
        </div>
    </div>
    <div class="cont">
        <a href="">Privacy Policy</a>
        <a href="">Refund Policy</a>
        <a href="">Cookie Policy</a>
        <a href="">Terms & Conditions</a>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
</html>