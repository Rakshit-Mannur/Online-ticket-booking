<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
    <script src="js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>

    <header>
        <div class="menu-toggle"></div>
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">lll</label>

            <img src="images/logo.jpeg" alt="logo" class="logo">

            <ul>
                <li><a href="home.html" class="active">Home</a></li>
                <li><a href="#routes" class="active">Routes</a></li>
                <li><a href="/starks/services/index.html" class="active">Services</a></li>
                <li><a href="/starks/status/index.html" class="active">Status</a></li>
                <li><a href="#" class="active">Contact Us</a></li>
            <?php 
                if(!isset($_SESSION["fullname"]) || empty($_SESSION["fullname"])) 
                {
            ?>
                 <li><a href="/starks/login.php" class="active">Login</a></li>

            <?php 
                }
                else
                 {
            ?>
                  <li><a href="/starks/login.php" class="active"><?php echo $_SESSION["fullname"] ?></a></li>
            <?php 
                 }
            ?>
                 
             
            
               
            </ul>
        </nav>
        <!-- nav bar ended -->

        <!-- header part -->

    </header>
    <div class="body"><br><br><br><br>
        <div class="text">
            <h2 style="margin-top: -100px;">SRI KALABHAIRAVA TRAVELS</h2><br>
            <p></p>
            <h3 style="text-align: center;">NEED A RIDE ?
                <br>
                <p></p>
                <p>YOU'VE COME TO THE RIGHT PLACE.</p>
            </h3>
            <!-- slider -->
            <marquee behavior="" direction="left">YOUR SAFETY IS OUR RESPONSIBILITY</marquee>
        </div>
        <p></p>
        <div class="btn">
            <button class="btn btn-success"><a href="/starks/services/index.html">Services</a></button>
            <button class="btn btn-success"><a href="/starks/booknow.php">Book now</a> </button>
        </div>
    </div>
    <p></p>
    <!-- input part -->
    <div class="bgco" style="margin-top: -150px;" id="routes">
        <div class="jumbotron">
            <label for="Departure date and time"><b> DATE AND TIME :</b></label><br>
            <input type="datetime-local" value="2021-06-01T00:00:00" class="form-control">

            <label for="from"><b>PICK UP LOCATION :</b></label><br>
            <input type="text" class="form-control" placeholder="From">

            <label for="To"><b> DROP OFF LOCATION :</b></label><br>
            <input type="text" class="form-control" placeholder="To" style="margin-right: 40px;">

            <!-- <label for="To"><b> HOW MANY :</b></label><br>
  <input type="number" class="form-control" placeholder="how many members"> -->
        </div>
        <div class="search">
            <button class="btn btn-primary" id="search">Search</button>
        </div>
    </div>

    <!-- our services -->

    <div class="os">
        <div class="container my-6" style="width: 100%; padding-left: 50px;">
            <section>
                <div class="text-center mb-5 col-md-10 mx-auto" style="margin-top: -40px;">
                    <h2 class="font-weight-bold display-4 text-capitalize">Our Services</h2>
                </div>
                <hr color="white">
                <h3 class="font-weight-bold">Special Offers:</h3><br>
                <div class="row">
                    <div class="col-md-4 my-6">
                        <a href="#" class="text-dark" style="text-decoration: none;">
                            <div class="px-3 py-5 bg-primary-color text-white rounded">
                                <div class="text-center">
                                    <i class="fas fa-chart-area fa-3x mb-3"></i>
                                </div>
                                <div class="px-3 text-center pb-3">
                                    <h5 class="text-uppercase font-weight-600">UI/UX Design</h5>
                                    <p class="font-weight-light my-3">Lorem ipsum dolor sit consectetur adipisicing elit. Alias amet deleniti et fugit iusto nesciunt.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 my-6">
                        <a href="#" class="text-dark" style="text-decoration: none;">
                            <div class="px-3 py-5 bg-primary-color text-white rounded">
                                <div class="text-center">
                                    <i class="fas fa-chart-area fa-3x mb-3"></i>
                                </div>
                                <div class="px-3 text-center pb-3">
                                    <h5 class="text-uppercase font-weight-600">UI/UX Design</h5>
                                    <p class="font-weight-light my-3">Lorem ipsum dolor sit consectetur adipisicing elit. Alias amet deleniti et fugit iusto nesciunt.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 my-6">
                        <a href="#" class="text-dark" style="text-decoration: none;">
                            <div class="px-3 py-5 bg-primary-color text-white rounded">
                                <div class="text-center">
                                    <i class="fas fa-chart-area fa-3x mb-3"></i>
                                </div>
                                <div class="px-3 text-center pb-3">
                                    <h5 class="text-uppercase font-weight-600">UI/UX Design</h5>
                                    <p class="font-weight-light my-3">Lorem ipsum dolor sit consectetur adipisicing elit. Alias amet deleniti et fugit iusto nesciunt.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <br>
                <h3 class="font-weight-bold">Popular Routes:</h3>
                <div class="row">
                    <div class="col-md-4 my-4">
                        <a href="#" class="text-dark" style="text-decoration: none;">
                            <div class="px-3 py-5 bg-primary-color text-white rounded">
                                <div class="text-center">
                                    <i class="fas fa-chart-area fa-3x mb-3"></i>
                                </div>
                                <div class="px-3 text-center pb-3">
                                    <h5 class="text-uppercase font-weight-600">UI/UX Design</h5>
                                    <p class="font-weight-light my-3">Lorem ipsum dolor sit consectetur adipisicing elit. Alias amet deleniti et fugit iusto nesciunt.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 my-4">
                        <a href="#" class="text-dark" style="text-decoration: none;">
                            <div class="px-3 py-5 bg-primary-color text-white rounded">
                                <div class="text-center">
                                    <i class="fas fa-chart-area fa-3x mb-3"></i>
                                </div>
                                <div class="px-3 text-center pb-3">
                                    <h5 class="text-uppercase font-weight-600">UI/UX Design</h5>
                                    <p class="font-weight-light my-3">Lorem ipsum dolor sit consectetur adipisicing elit. Alias amet deleniti et fugit iusto nesciunt.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 my-4">
                        <a href="#" class="text-dark" style="text-decoration: none;">
                            <div class="px-3 py-5 bg-primary-color text-white rounded">
                                <div class="text-center">
                                    <i class="fas fa-chart-area fa-3x mb-3"></i>
                                </div>
                                <div class="px-3 text-center pb-3">
                                    <h5 class="text-uppercase font-weight-600">UI/UX Design</h5>
                                    <p class="font-weight-light my-3">Lorem ipsum dolor sit consectetur adipisicing elit. Alias amet deleniti et fugit iusto nesciunt.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
        </div>
        </section>
    </div>
    </div>
    <br><br>

    <!-- footer content  -->
    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4"><br><br>
                        <h3 class="ftco-heading-2">About</h3><br>
                        <p>##########################.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <p>####################</p>
                            <li class="ftco-animate"><a href="https://twitter.com/sumitsaha56" target="_blank"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.linkedin.com/in/sumitsaha74" target="_blank"><span class="icon-linkedin"></span></a></li>
                            <li class="ftco-animate"><a href="https://github.com/sumit076" target="_blank"><span class="icon-github"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/profile.php?id=100016258539757" target="_blank"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/sumitsaha8308/" target="_blank"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4"><br><br>
                        <h3 class="ftco-heading-2">Links</h3>
                        <ul class="list-unstyled"><br>
                            <li><a href="#home-section"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                            <li><a href="#routes-section"><span class="icon-long-arrow-right mr-2"></span>Routes</a></li>
                            <li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                            <li><a href="#status-section"><span class="icon-long-arrow-right mr-2"></span>Status</a></li>
                            <li><a href="#login-section"><span class="icon-long-arrow-right mr-2"></span>Login</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md">
                    <div class="ftco-footer-widget mb-4"><br><br>
                        <h3 class="ftco-heading-2">Have a Questions?</h3><br>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Bangalore, India</span></li>
                                <li><a href="tel: +91-6718374964"><span class="icon icon-phone"></span><span class="text">+91-6718374964</span></a></li>
                                <li><a href="mailto: abcde@gmail.com"><span class="icon icon-envelope"></span><span class="text">abcde@gmail.com</span></a></li><br>
                                <li><a href="/starks/driver/index.html"><span class="icon icon-envelope"></span><span class="text">Are you a driver ?</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved.</p><br>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

</body>



</html>