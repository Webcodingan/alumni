<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery</title>
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!-- header -->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php">
                     <span>Gallery</span>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
               <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="berita.php">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="donasi.php">Donasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cari alumni.php">Cari alumni</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="galeri.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admin/login.php">Login</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4">Gallery</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><i class="fas fa-angle-right mx-2"></i>Gallery</li>
                </ul>
            </div>
        </div>
        <div class="shape">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
                <path fill-opacity="1">
                    <animate attributeName="d" dur="20000ms" repeatCount="indefinite"
                        values="M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z; M0,160L48,181.3C96,203,192,245,288,234.7C384,224,480,160,576,133.3C672,107,768,117,864,138.7C960,160,1056,192,1152,197.3C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;												 M0,64L48,74.7C96,85,192,107,288,133.3C384,160,480,192,576,170.7C672,149,768,75,864,80C960,85,1056,171,1152,181.3C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;
                                                 M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;" />

                </path>
            </svg>
        </div>
    </section>
    <!-- //inner banner -->
           <br>
           <div class="container">
     <h2 style="text-align:center; margin-bottom: 100px" class="title-style">Gallery</h2>
     <div class="row top-cont-grid align-items-center" >
                <?php
                include 'admin/backend/database.php' ;
                $sql="select * from u_file";
                    $hasil=mysqli_query($kon,$sql);
                    while ($alumni = mysqli_fetch_array($hasil)):
                ?>
                 
                <div class="col-lg-4 mb-5">
                    <div class="right-img">
                        <img src="admin/backend/gambar/<?php echo $alumni['gambar']; ?>" style="width: 300px"/>
                    </div>
                
            </div>
            <?php endwhile; ?>
        </div>
        </div>
        </div>

    <!-- stats -->
    <!-- //stats -->

    
    <!-- footer -->
    <footer class="w3l-footer">
        <div class="shape-footer">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
                <path fill-opacity="1">
                    <animate attributeName="d" dur="20000ms" repeatCount="indefinite"
                        values="M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z; M0,160L48,181.3C96,203,192,245,288,234.7C384,224,480,160,576,133.3C672,107,768,117,864,138.7C960,160,1056,192,1152,197.3C1248,203,1344,181,1392,170.7L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;												 M0,64L48,74.7C96,85,192,107,288,133.3C384,160,480,192,576,170.7C672,149,768,75,864,80C960,85,1056,171,1152,181.3C1248,192,1344,128,1392,96L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;
                                             M0,160L48,181.3C96,203,192,245,288,261.3C384,277,480,267,576,234.7C672,203,768,149,864,117.3C960,85,1056,75,1152,90.7C1248,107,1344,149,1392,170.7L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z;" />

                </path>
            </svg>
        </div>
        <div class="w3l-footer-16 py-5">
            <div class="container">
                <div class="row footer-p">
                    <div class="col-lg-4 pe-lg-5">
                        <h3>About Us</h3>
                        <p class="mt-3">Nama : Danniel </p>
                        <P>Whatsapp : 081384681305</P>
                        <div class="columns-2 mt-4 pt-1">
                            <ul class="social">
                                <li><a href="#facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#linkedin"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li><a href="#twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#google"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                                <li><a href="#github"><i class="fab fa-github"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 mt-lg-0 mt-5">
                        <div class="row">
                            <div class="col-xl-5 col-6 column">
                                <h3>Quick Link</h3>
                                <ul class="footer-gd-16">
                                    <li><a href="berita.php">Berita</a></li>
                                    <li><a href="donasi.php">Donasi</a></li>
                                    <li><a href="cari alumni.php">Cari alumni</a></li>
                                    <li><a href="galeri.php">Gallery</a></li>
                                    <li><a href="admin/login.php">Login</a></li>
                                </ul>
                            </div>
                            <div class="col-6 column">
                                <h3>Contact Info</h3>
                                <ul class="footer-contact-list">
                                    <li class="">Jakarta Indonesia</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-7 col-sm-8 column mt-lg-0 mt-4 pl-xl-0">
                        <h3>Newsletter </h3>
                        <div class="end-column">
                            <form action="#" class="subscribe" method="post">
                                <input type="email" name="email" placeholder="Email Address" required="">
                                <button><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                            </form>
                            <p class="mt-4">Subscribe to our mailing list and get updates to your email inbox.</p>
                        </div>
                    </div>
                </div>
                <div class="below-section text-center pt-lg-4 mt-5">
                    <p class="copy-text">&copy; 2022 Work Field. All rights reserved. Design by <a
                            href="https://w3layouts.com/" target="_blank"> W3Layouts</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- //footer -->

    <!-- Js scripts -->
    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- /counter-->
    <script src="assets/js/counter.js"></script>
    <!-- //counter-->

    <!-- testimonial script -->
    <script>
        $(document).ready(function () {

            $('.client-single').on('click', function (event) {
                event.preventDefault();

                var active = $(this).hasClass('active');

                var parent = $(this).parents('.testi-wrap');

                if (!active) {
                    var activeBlock = parent.find('.client-single.active');

                    var currentPos = $(this).attr('data-position');

                    var newPos = activeBlock.attr('data-position');

                    activeBlock.removeClass('active').removeClass(newPos).addClass('inactive').addClass(
                        currentPos);
                    activeBlock.attr('data-position', currentPos);

                    $(this).addClass('active').removeClass('inactive').removeClass(currentPos).addClass(
                        newPos);
                    $(this).attr('data-position', newPos);

                }
            });

        }(jQuery));
    </script>
    <!-- //testimonial script -->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- //disable body scroll which navbar is in active -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
    <!-- //Js scripts -->
</body>

</html>