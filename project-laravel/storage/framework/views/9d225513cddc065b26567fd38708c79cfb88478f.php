<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link rel="icon" type="image/png" href="GoPress.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Go express Indonesia | <?php echo e($title); ?></title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbars">
            <div class="InUp">
                <img class="imgNavbar" src="img/GoPress.png">
                <div class="In">Sign In</div>
                <div class="Up">Sign Up</div>
            </div>

            
            <ul class="navigation">
                <li> <a class="<?php echo e($title === 'Home' ? 'active' : ''); ?>" href="/">home</a></li>
                <li> <a class="<?php echo e($title === 'Order' ? 'active' : ''); ?>" href="/order">order</a></li>
                <li> <a class="<?php echo e($title === 'Trace' || $title === 'Rates' || $title === 'Location' ? 'active' : ''); ?>"
                        href="/trace">track</a></li>
                <li> <a class="<?php echo e($title === 'Service' ? 'active' : ''); ?>" href="/service">service</a></li>
                <li> <a class="<?php echo e($title === 'Company' || $title === 'News' || $title === 'FAQ' || $title === 'Event' || $title === 'Top Employee' 
                 || $title === 'Packaging' || $title === 'Dangerous Goods' || $title === 'Prohibited Goods' ? 'active' : ''); ?>"
                        href="/company">about</a></li>
            </ul>
        </nav>



    </header>

    <div class="slider-home container-fluid content" style="padding-right:0px ; padding-left:0px;">
        <img class="imageSlider" src="/company-information.png" alt="Gambar 4">
    </div>

    
    

    <nav class="navbar navbar-expand-sm justify-content-center container col-sm-9 mt-4" style="position: static">
        <div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link  <?php echo e($title === 'Company' ? 'active' : ''); ?>" href="/company">Company</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  <?php echo e($title === 'News' || $title === 'Event' || $title === 'Top Employee' ? 'active' : ''); ?>" href="/news">News & Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo e($title === 'FAQ' ? 'active' : ''); ?>" href="/FAQ">FAQ</a>
                </li>
                <li class="nav-item dropdown" style="position: static">
                    <a class="nav-link dropdown-toggle <?php echo e($title === 'Packaging' || $title === 'Dangerous Goods' || $title === 'Prohibited Goods' ? 'active' : ''); ?>"
                        data-bs-toggle="dropdown" href="/packaging" role="button" aria-haspopup="true"
                        aria-expanded="false">Packaging Information</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item " href="/packaging">Guidance</a>
                        <a class="dropdown-item " href="/dangerous">Dangerous Goods</a>
                        <a class="dropdown-item " href="/prohibited">Prohibited</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container">
        <?php echo $__env->yieldContent('container'); ?>
    </div>



    <button style="border-radius:30px" class="open-button" onclick="openForm()">Contact Us</button>

    <div class="chat-popup" id="myForm">
        <img src="/logoX.png" alt="" class="index_db_close" onclick="closeForm()">
        <form action="/action_page.php" class="form-container">
            <div class="index_db_txtbox_headimg">
                <img src="bgMagdalena.png" style="width: 100%;display: block;">
                <div class="index_db_txtbox_imgbox">
                    <img src="magdalenaCS.jpeg">
                    <div>
                        <h2>Kontak Kami</h2>
                        <p>Hubungi kami untuk segala pertanyaan Anda!</p>
                    </div>
                </div>
            </div>
            <div class="index_db_textbox_cont">
                <div class="index_db_textbox_item">
                    <img style="width:25px" src="/logoPhone.png"><a style="text-decoration: none ; color: #000"
                        href="tel:021-8066-1888"> Call Us +62 8123 4567 890</a>
                </div>
                <div class="index_db_textbox_item">
                    <img style="width:25px" src="/logoMail.png">
                    <a href="mailto:febrinasihombing18@gmail.com " style="text-decoration: none ;  color: #000">Email
                        Us</a>
                </div>
                <div class="index_db_textbox_item">
                    <a id="chart_with_us" href="javascript:;" style="text-decoration: none; color: #000; color: #000">
                        <img style="width: 25px" src="/logoChat.png"><span> Chat with Us<span
                                style="font-size: 10px;color:#333;float: right;margin-top: 5px ;"> </span></span>
                    </a>
                </div>
                <div class="index_db_textbox_item">
                    <a href="https://wa.me/+6281234567890" target="_blank"
                        style="text-decoration: none ;  color: #000">
                        <img src="/logoWA.png" style="width:25px ;"> Chat via Whatsapp</a>
                </div>
            </div>
            <p class="index_db_textbox_tip">Stay Connected</p>
            <div class="index_db_icon" style="position: initial;margin-left: 0;margin-bottom: 10px;">
                <a target="_blank" style="margin-right:10px"><img src="/logoFB.png"></a>
                <a target="_blank" style="margin-right:10px"><img src="/logoTwitter.png"></a>
                <a target="_blank" style="margin-right:10px"><img src="/logoIG.png"></a>
                <a target="_blank"><img src="/logoYT.png"></a>
            </div>
        </form>
    </div>

    <section class="footer mt-4">
        <!-- Footer -->
        <div class="footer">
            <footer class="text-center text-lg-start text-muted">
                <!-- Section: Social media -->
                <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                    <!-- Left -->
                    <div class="me-5 d-none d-lg-block">
                        <span>Get connected with us on social networks :</span>
                    </div>
                    <!-- Left -->

                    <!-- Right -->
                    <div class="icon-socmed">
                        <a href="" class="me-4 text-reset" style="text-decoration: none;">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="" class="me-4 text-reset" style="text-decoration: none;">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="me-4 text-reset" style="text-decoration: none;">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="" class="me-4 text-reset" style="text-decoration: none;">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="me-4 text-reset" style="text-decoration: none;">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="" class="me-4 text-reset" style="text-decoration: none;">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                    <!-- Right -->
                </section>
                <!-- Section: Social media -->

                <!-- Section: Links  -->
                <section class="">
                    <div class="container text-center text-md-start mt-5">
                        <!-- Grid row -->
                        <div class="row mt-3">
                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                                <!-- Content -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    <i class="fa-solid fa-truck-fast me-2"></i>Go Express
                                </h6>
                                <p>
                                    Entrust your products to us with a fast, safe and practical service system.
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">
                                    OTHERS
                                </h6>
                                <p>
                                    <a href="/company" class="text-reset">Company</a>
                                </p>
                                <p>
                                    <a href="/news" class="text-reset">News</a>
                                </p>
                                <p>
                                    <a href="/event" class="text-reset">Event</a>
                                </p>
                                <p>
                                    <a href="/service" class="text-reset">Service</a>
                                </p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                                <!-- Links -->
                                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                                <p><i class="fas fa-home me-3"></i> Jl. Janti Gg. Arjuna No. 59, Karangjambe,
                                    Banguntapan, Bantul,
                                    Yogyakarta 5519</p>
                                <p>
                                    <i class="fas fa-envelope me-3"></i>
                                    GOPRESS.CO.ID
                                </p>
                                <p><i class="fas fa-phone me-3"></i> + 021 234 567 88</p>
                                <p><i class="fas fa-print me-3"></i> + 021 234 567 89</p>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                    </div>
                </section>
                <!-- Section: Links  -->
            </footer>
            <!-- Footer -->
        </div>
    </section>


    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
    <script src="js/script.js"></script>
    <script src="js/bergerak.js"></script>
    
</body>

</html>
<?php /**PATH C:\applications\project-laravel\resources\views/layouts/mainNews.blade.php ENDPATH**/ ?>