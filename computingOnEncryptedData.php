<?php 
    $connect = new PDO("mysql:host=sql9.freemysqlhosting.net;dbname=sql9351309", "sql9351309", "RQy7Yk8QyN");

    $query = "SELECT * FROM `projects` WHERE `catego` LIKE 'no' and `catego1` LIKE 'no' and `catego2` LIKE 'no' and `catego3` LIKE 'no' and `catego4` LIKE 'no' and `display` like 'yes' and `Categories` like 'Computing on Encrypted Data'";
    
    $statement = $connect->prepare($query);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    
    include 'head.php';
?>

    <!-- Page header -->
    <div class="elh-page-header elh-img-bg elh-bg-computing-encrypted-data">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">Computing on Encrypted Data</h3>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Computing on Encrypted Data</li>
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
                                        <h3>Computing on Encrypted Data</h3>
                                        <br>

                                        <p>In modern technologies like cloud computing users outsource computations on their sensitive data to the cloud, while expecting that their data is kept private.  This raises the following intriguing possibility: can we keep the users' data encrypted and allow the server to compute on encrypted data without decrypting it and without knowledge of the secret key? Can we keep the users' data encrypted and allow the server to compute only partial information on the data (such as classify the data according to various classification algorithms) without the knowledge of the secret key? Researchers at CIS group are actively studying these questions.</p>
                                        
                                        <h5>ARTICLES IN REFEREED CONFERENCES OR JOURNALS</h5>
                                        
                                        <p>Alwen, J., Barbosa, M., Farshim, P., Gennaro, R., Gordon, S.D., Tessaro, S. "On the Relationship between Functional Encryption, Fully Homomorphic Encryption, and Obfuscation." To appear at the Fourtheenth IMA International Conference on Cryptogaphy and Coding.</p>

                                        <p>Goldwasser, S., Kalai, Y., Popa, R., Vaikuntanathan, V., and Zeldovich, N. "<a href="https://eprint.iacr.org/2012/733" target="_blanck">Succinct Functional Encryption and Applications: Reusable Garbled Circuits and Beyond.</a>" IACR Cryptology ePrint Archive 2012: 733, 2012.</p>

                                        <p>Goldwasser, S., Lewko, L., and Wilson D., "Bounded-Collusion IBE from Key Homomorphism." In Ronald Cramer, editor, Theory of Cryptography: Ninth IACR Theory of Cryptography Conference (TCC 2012), Taormina, Italy, March 2012, volume 7194 of Lecture Notes in Computer Science, pages 564-581, 2012. Springer.</p>

                                        <p>Brakerski, Z., and Vaikuntanathan, V."Efficient Fully Homomorphic Encryption from (Standard) LWE." FOCS 2011. (Note: Part of this research was conducted while Brakerski was a visiting student at MIT from Weizmann Institute)</p>

                                        <p>Brakerski, Z., and Vaikuntanathan, V. "Fully Homomorphic Encryption from Ring-LWE and Security for Key Dependent Messages." CRYPTO 2011. (Note: Part of this research was conducted while Brakerski was a visiting student at MIT from Weizmann Institute)</p>
                                        
                                        <?php
                                            foreach($result as $row)
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
