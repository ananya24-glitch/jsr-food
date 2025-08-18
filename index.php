<?php
include 'admin/db.php';

$sql= "SELECT * FROM home";

$result= $conn->query($sql);

$tech = "SELECT * FROM products";

$techresult = $conn->query($tech);

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
    <link rel="stylesheet" href="nav.css">
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


    <!-- slider starrt -->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/banner1.avif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/banner2.avif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/banner3.avif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- slider end -->

    <div class="content">
        <?php
        if($result->num_rows >0){
            while($row=$result->fetch_assoc()){

        echo '<img src="admin/uploads/' . $row["image"].' " alt="">
        <div class="para">
            <h1>'  . $row['title'] . '</h1>
            <p>' . $row['description'] . '</p>
        </div>
        <div class="con-img" style="margin-top: 26rem;">

            <img src="image/daily-fresh-vacter.png" alt="" style="height: 6rem;">
        </div>';
         }
        }
?>
    </div>
    <div class="dish">
        <div class="logo1">
            <h3>Popular Dishes</h3>
            <h1>Browse Our Menu</h1>
        </div>

        <div class="icons">
            <i class="fa-solid fa-arrow-left"></i>
            <i class="fa-solid fa-arrow-right"></i>
        </div>
    </div>
     <!-- 🔧 menu-wrapper with inline CSS -->
    <div class="menu-wrapper" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; padding: 20px;">
        <?php
        if($techresult->num_rows > 0){
            while($row = $techresult->fetch_assoc()){
                echo '<div class="con-menu" style="border: 1px solid #eee; padding: 15px; width: 300px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); border-radius: 10px; text-align: center;">
                        <img src="admin/uploads/' . $row["image"] . '" alt="" style="width:100%; height:200px; object-fit:cover; border-radius: 8px;">
                        <div class="menu-food">
                            <h3 style="color:black">' . $row['name'] . '</h3>
                            <div class="price">
                                <h4>' . $row['price'] . '</h4>
                            </div>
                        </div>
                        <div class="icons-1" style="color: gold; margin: 10px 0;">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p style="color:grey">' . $row['description'] . '</p>
                        <button style="margin-top:10px; padding: 8px 15px; background-color: #dc3545; color: white; border: none; border-radius: 5px;">Order Now</button>
                    </div>';
            }
        }
        ?>
    </div>
    <div class="content2">
        <img src="our-story.png" alt="">
        <img src="" alt="">
        <div class="para2">
            <h3>Our Story</h3>
            <h1>The Pizzon Has Excellent Of Quality Foods</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged.</p>
            <button>Read More</button>
        </div>
    </div>
    <div class="content3">
        <div class="logo2">
            <div class="logo3">
                <h3 style="color: red;">Our Strength</h3>
                <h1 style="color: black;">Why We Are The Best?</h1>
            </div>
            <div class="img-con">
                <img src="image/strength-vacter.png" alt="">
            </div>
        </div>

        <div class="icons2">
            <div class="food">
                <i class="fa-solid fa-bowl-rice"></i>
                <h3>All kinds of Foods</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
            </div>
            <div class="food1">
                <i class="fa-solid fa-fan"></i>
                <h3>Fresh Food</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
            </div>
            <div class="food2">
                <i class="fa-solid fa-face-grin"></i>
                <h3>Best Taste</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
            </div>
            <div class="food3">
                <i class="fa-solid fa-location-dot"></i>
                <h3>On Time Delivery</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
            </div>
        </div>

    </div>
    <div class="content4">
        <div class="logo4">
            <h3 style="color: red;">Customer Feedback</h3>
            <h1 style="color: black;">Client Testimonials</h1>
        </div>

        <div class="icons3">
            <i class="fa-solid fa-arrow-left"></i>
            <i class="fa-solid fa-arrow-right"></i>
        </div>
    </div>
    <div class="feedback">
        <div class="menu-con1">
            <img src="image/client-1.jpg" alt="">
            <div class="client-1">
                <h3>Johan Doe</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum accusamus numquam consequatur cumque
                    dolorem impedit illum sequi.</p>
            </div>
            <div class="icons1">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
        </div>
        <div class="menu-con1">
            <img src="image/client-2.jpg" alt="">
            <div class="client-1">
                <h3>Alex Saanu</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum accusamus numquam consequatur
                    cumque dolorem impedit illum sequi.</p>
            </div>
            <div class="icons1">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
        </div>
        <div class="menu-con1">
            <img src="image/client-3.jpg" alt="">
            <div class="client-1">
                <h3>Jona Leoner</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum accusamus numquam consequatur
                    cumque dolorem impedit illum sequi.</p>
            </div>
            <div class="icons1">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
        </div>
        <div class="menu-con1">
            <img src="image/client-4.jpg" alt="">
            <div class="client-1">
                <h3>Takar Bowa</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum accusamus numquam consequatur
                    cumque dolorem impedit illum sequi.</p>
            </div>
            <div class="icons1">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
        </div>
    </div>
    <div class="content5">
        <div class="logo5">
            <h3 style="color: red;">Reservation</h3>
            <h1 style="color: black;">Book A Table Now !</h1>
        </div>
        <div class="details">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" placeholder="Name *" name="name" required>
                    <input type="email" placeholder="Email *" name= "email" required>
                </div>
                <div class="form-group">
                    <input type="number" placeholder="Phone *" name="phone" required>
                    <input type="time" placeholder="Time *" name="time" required>
                </div>
                <div class="form-group">
                    <input type="date" placeholder="Date *" name= "date" required>
                    <input type="text" placeholder="Guest *" name="guest" required>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit">BOOK NOW</button>
                </div>
            </form>
            <div class="reser-img">
                <img src="image/reservation-pizza.png" alt="" height="450px" width="450px">
            </div>
        </div>

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

          $reserveresult = $conn->query($reserve);
        } else {
            echo "Database error: " . $conn->conect_error;
        }

    }
?>
    </div>
    <div class="content6">
        <div class="logo6">
            <h3 style="color: red;">From Our Blog</h3>
            <h1 style="color: black;">Our Latest News </h1>
        </div>
        <div class="blog1">
            <img src="image/blog-1.jpg" alt="" height="300px" width="450px">
            <h4 style="color: grey;">07 Mar 2022</h4>
            <h3 style="color: black;">How to keep fear from ruining your art business with confidet</h3>
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