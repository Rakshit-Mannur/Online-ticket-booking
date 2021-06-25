<?php 
    session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Our services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="css/styles.css" rel="stylesheet" />

    <style>
        .dropdown {
            position: relative;
            display: inline-block;
            }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #495057;
            min-width: 180px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 1px;
            z-index: 1;
            }

        .dropdown:hover .dropdown-content {
            display: block;
            }
    </style>

</head>

<body id="page-top">
    <!-- navbar content   -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <img src="l1.jpeg" alt="logo" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/starks/home/home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/starks/home/home.php#routes">Routes</a></li>
                    <li class="nav-item"><a class="nav-link" href="/starks/services/index.php">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="/starks/status/index.php">Status</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contactUs">Contact Us</a></li>
                    
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
                 
                    <div class="dropdown">
                        <span> <li><a href="/starks/login.php" class="active" style="color: white; padding: 10px"><?php echo $_SESSION["fullname"] ?></a></li></span>
                            <div class="dropdown-content">
                              <a href="#" style="color: white; padding: 10px" class="active">Profile</a><br>
                              <a href="#" style="color: white; padding: 10px" class="active">Travel history</a><br>
                              <a href="#" style="color: white; padding: 10px" class="active">Privacy policy</a><br>
                              <a href="#" style="color: white; padding: 10px" class="active">About us</a><br>      
                              <a href="/starks/logout.php" style="color: white; padding: 10px" class="active">Logout</a>
                            
                            </div>
                    </div>
                  
                <?php 
                    }
                ?>

                </ul>
            </div>
        </div>
    </nav>
    <!-- services content -->
    <div class="container my-6">
        <section>
            <div class="text-center mb-5 col-md-10 mx-auto" style="margin-top: -40px;">
                <h2 class="font-weight-bold display-4 text-capitalize">Our <span class="text-primary-color">Services</span></h2>
            </div>

            <h3 class="font-weight-bold">Logistics Services:</h3>
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
            <!-- </div> -->

            <br>

            <h3 class="font-weight-bold">Food Services:</h3>
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
    <!-- footer content  -->
    <footer class="ftco-footer ftco-section" id="contactUs">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4"><br><br>
                        <h3 class="ftco-heading-2">About</h3><br>
                        <p>##########################.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <p>####################</p>
                            <li class="ftco-animate"><a href="#" target="_blank"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#" target="_blank"><span class="icon-linkedin"></span></a></li>
                            <li class="ftco-animate"><a href="#" target="_blank"><span class="icon-github"></span></a></li>
                            <li class="ftco-animate"><a href="#" target="_blank"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#" target="_blank"><span class="icon-instagram"></span></a></li>
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









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>