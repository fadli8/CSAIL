<?php
    $connect = new PDO("mysql:host=sql9.freemysqlhosting.net;dbname=sql9351309", "sql9351309", "RQy7Yk8QyN");

$query = "SELECT * FROM `projects` WHERE `Technical_Reports` LIKE 'no' and `display` like 'yes' and `Categories` like 'Circular Security'";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$query1 = "SELECT * FROM `projects` WHERE `Technical_Reports` LIKE 'yes' and `display` like 'yes' and `Categories` like 'Circular Security'";

$statement1 = $connect->prepare($query1);

$statement1->execute();

$result1 = $statement1->fetchAll();

$url = $_SERVER['REQUEST_URI'];

echo $url;

include 'head.html';
?>


    <!-- Page header -->
    <div class="elh-page-header elh-img-bg elh-bg-9">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">Circular Security</h3>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Circular Security</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Page header End -->

    <!-- Main wrapper start -->
    <div class="elh-main-wrap">

        <!-- Blog Style 3 -->
        <div class="elh-section elh-section-padding elh-bottom-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="elh-event-single">
                            <article class="elh-post style-4">
                              
                                <div class="elh-post-body">
                                    <div class="elh-post-entry">
                                        <h3>Circular Security</h3>
                                        <br>

                                        <p>The classical security definition of semantic secure public-key encryption requires that an efficient attacker with access to the public encryption-key must not be able to find two messages such that it can distinguish a random encryption of one from a random encryption of the other. This notion of security, however (as well as other commonly accepted ones), does not capture certain situations that may occur in the "real world" such as encrypting and sending functions of the secret decryption-key. In recent years, extensive research effort has been invested in providing encryption schemes which are provably secure even in the above settings. Such schemes are said to achieve key-dependent message (KDM) security.</p>
                                        
                                        <h5>ARTICLES IN REFEREED CONFERENCES AND JOURNALS</h5>
                                        
                                        <p>Brakerski, Z., Goldwasser, S., and Tauman Kalai, Y. “Black-Box Circular-Secure Encryption Beyond Affine Functions.” Theory of Cryptography (TCC 2011), volume 6597 of Lecture Notes in Computer Science, pages 201-218, Providence, RI, 2011. Springer.</p>

                                        <p>Brakerski, Z. and Goldwasser, S. “Circular and Leakage Resilient Public-Key Encryption under Subgroup Indistinguishability - (or: Quadratic Residuosity Strikes Back)”. In Tal Rabin, editor, Advances in Cryptology, 30th Annual Cryptology Conference (CRYPTO 2010), volume 6223 of Lecture Notes in Computer Science, pages 1-20, 2010. Springer.</p>
                                        <?php
                                            foreach($result as $row)
                                            {
                                             echo '
                                             
                                              <p>'.$row["discription_project"].'<br/><br/></p>
                                                                                          ';
                                            }
                                        ?>

                                        <h5>TECHNICAL REPORTS</h5>

                                        <p>Brakerski, Z. and Goldwasser, S.  “Circular and Leakage Resilient Public-Key Encryption Under Subgroup Indistinguishability (or: Quadratic Residuosity Strikes Back).” IACR Cryptology ePrint Archive 2010: 226, 2010.</p>

                                        <p>Brakerski, Z., Goldwasser, S., and Tauman Kalai, Y. “Black-Box Circular-Secure Encryption Beyond Affine Functions.” IACR Cryptology ePrint Archive 2009: 485, 2009.</p>
                                        
                                         <?php
                                            foreach($result1 as $row)
                                            {
                                             echo '
                                             
                                              <p>'.$row["discription_project"].'<br/><br/></p>
                                                                                          ';
                                            }
                                        ?>
                                    </div>
                                                                    
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Style 3 End -->
    </div>
    <!-- Main wrapper start end -->

    <footer>
        <div class="elh-footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="elh-footer-widgets">
                        <div class="col-md-4 col-xs-6">
                            <aside class="widget about_widget">
                                <a class="footer-logo" href="#">
                                    <img src="images/logo-2C-notext.svg" width="150px" alt="Logo">
                                </a>
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p> -->
                                <div class="clearfix"></div>
                                <div class="socials">
                                    <a href="https://www.facebook.com/MITCSAIL/" target="_blanck"><i class="fa fa-facebook"></i></a>
                                    <a href="https://twitter.com/MIT_CSAIL" target="_blanck"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/mit_csail/" target="_blanck"><i class="fa fa-instagram"></i></a>
                                    <!-- <a href="#"><i class="fa fa-linkedin"></i></a> -->
                                    <a href="https://www.youtube.com/user/MITCSAIL" target="_blanck"><i class="fa fa-youtube"></i></a>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-4 col-xs-6">
                             <div class="widget widget_contact_info">
                                <h3 class="widget-title">Contact Us</h3>
                                <div class="contact_info">
                                     <p class="contact-info-item">
                                        <i class="fa fa-map-marker"></i>
                                        <span class="contact_info">Massachusetts Institute of Technology <br> Computer Science & Artificial ntelligence Laboratory <br> 32 Vassar St, Cambridge MA 02139</span>
                                    </p>
                                    <p class="contact-info-item">
                                        <i class="fa fa-phone"></i>
                                        <span class="contact_info">+1 617-253-5851</span>
                                    </p>
                                    <p class="contact-info-item">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="contact_info">webmaster@csail.mit.edu</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-6">
                            <div class="widget widget_custom-menu">
                                <h3 class="widget-title">Quick Links</h3>
                                <ul class="custom-menu">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="cisSeminar.html">CIS Seminar</a></li>
                                    <li><a href="cisCourses.html">CIS Courses</a></li>
                                    <li><a href="members.html">Members</a></li>
                                    <li><a href="patents.html">Patents</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-2 col-xs-6">
                            <div class="widget widget_custom-menu">
                                <h3 class="widget-title" style="visibility: hidden;">Quick Links</h3>
                                <ul class="custom-menu">
                                    <li><a href="circularSecurity.html">Research Projects</a></li>
                                    <li><a href="software.html">Software</a></li>
                                    <li><a href="thesis.html">Thesis</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="elh-footer-lower-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 text-center">
                        <p class="copyright xs-text-center">Copyright 2019. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/visible.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/plyr.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <script src="js/map.js"></script>
</body>

</html>
