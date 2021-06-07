<!DOCTYPE html>
<html>

<head>
    <title>Bus Transport Management System</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Flight Ticket Booking  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
    />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
</head>

<body id="page-top">
    <!-- navbar content   -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <img src="images/l1.jpeg" alt="logo" class="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#routes">Routes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#status">Status</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <h1 style="margin-top: 100px;"><b>Bus Ticket Booking</b></h1>
    <div class="main-agileinfo">
        <div class="sap_tabs">
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item" style="color: black;"><span>Journey details</span></li>
                   
                </ul>
                <div class="clearfix"> </div>
                <div class="resp-tabs-container">
                    <div class="tab-1 resp-tab-content roundtrip">
                        <form action="confirm.php" method="post">
                            <div class="from">
                                <h4>From</h4>
                                <select id="w3_country2" onchange="change_country(this.value)" class="frm-field required" name="from">
									<option>Bagalkot</option>  
									<option>Bangalore</option>   
									<option>Mysore</option>   
									<option>Bijapur</option>   		
									<option>Hubli</option>  				
								</select>
                            </div>
                            <div class="to">
                                <h4>To</h4>
                                <select id="w3_country2" onchange="change_country(this.value)" class="frm-field required" name="to">
									<option>Bagalkot</option>  
									<option>Bangalore</option>   
									<option>Mysore</option>   
									<option>Bijapur</option>   		
									<option>Hubli</option>  				
								</select>
                            </div>
                            <div class="clear"></div>
                            <div class="date">
                                <div class="depart">
                                    <h4>Depart</h4>
                                    <input id="datepicker" name="dtime" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
                                </div>
                                
                                <div class="clear"></div>
                            </div>
                            <div class="class">
                                <h4>Class</h4>
                                <select id="w3_country2" onchange="change_country(this.value)" class="frm-field required" name="class">
									<option>Economy</option>  
									<option>Premium Economy</option>   
									<option>Business</option>   
									<option>First class</option>   						
								</select>
                            </div>
                            <div class="clear"></div>
                            <div class="from">
                                <h4>Age</h4>
                                <input type="text" name="age" class="city2" required="" style="width: 60px;">
                            </div>
                            <div class="clear"></div>
                            <div style="text-align: center;">
                                <input type="submit" value="Search bus" id="submit" name="submit" style="color: black;">
                            </div>
                        </form>
                    </div>
                   

                </div>
            </div>
        </div>
    </div>

    <!-- footer content  -->
    <footer class="ftco-footer ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4"><br><br>
                        <h3 class="ftco-heading-2" style="color: antiquewhite; "><b>About</b></h3><br>
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
                        <h3 class="ftco-heading-2" style="color: antiquewhite; "><b>Links</b></h3>
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
                        <h3 class="ftco-heading-2" style="color: antiquewhite; "><b>Have a Questions?</b></h3><br>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Bangalore, India</span></li>
                                <li><a href="tel: +91-6718374964"><span class="icon icon-phone"></span><span class="text">+91-6718374964</span></a></li>
                                <li><a href="mailto: abcde@gmail.com"><span class="icon icon-envelope"></span><span class="text">abcde@gmail.com</span></a></li>
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



    <script src="js/jquery.min.js">
    </script>
    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default',
                width: 'auto',
                fit: true
            });
        });
    </script>
    <!--Calendar-->
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <script src="js/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
        });
    </script>
    <script>
        $('.value-plus').on('click', function() {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) + 1;
            divUpd.text(newVal);
        });

        $('.value-minus').on('click', function() {
            var divUpd = $(this).parent().find('.value'),
                newVal = parseInt(divUpd.text(), 10) - 1;
            if (newVal >= 1) divUpd.text(newVal);
        });
    </script>

    <script>
        $(document).ready(function() {
            size_li = $("#myList li").size();
            x = 1;
            $('#myList li:lt(' + x + ')').show();
            $('#loadMore').click(function() {
                x = (x + 1 <= size_li) ? x + 1 : size_li;
                $('#myList li:lt(' + x + ')').show();
            });
            $('#showLess').click(function() {
                x = (x - 1 < 0) ? 1 : x - 1;
                $('#myList li').not(':lt(' + x + ')').hide();
            });
        });
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>