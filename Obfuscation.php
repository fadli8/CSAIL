<?php 
    $connect = new PDO("mysql:host=sql9.freemysqlhosting.net;dbname=sql9351309", "sql9351309", "RQy7Yk8QyN");

    $query = "SELECT * FROM `projects` WHERE `catego` LIKE 'no' and `catego1` LIKE 'no' and `catego2` LIKE 'no' and `catego3` LIKE 'no' and `catego4` LIKE 'no' and `display` like 'yes' and `Categories` like 'Obfuscation'";
    
    $statement = $connect->prepare($query);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
    include 'head.php';
?>


    <!-- Page header -->
    <div class="elh-page-header elh-img-bg elh-bg-Obfuscation">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">Obfuscation</h3>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Obfuscation</li>
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
                               <!--  <div class="elh-post-thumb">
                                    <img class="img-responsive" src="images/blog/large-1.jpg" alt="...">
                                </div> -->
                                <div class="elh-post-body">
                                    <!-- <div class="elh-post-metas">
                                        <span class="elh-event-date"><i class="fa fa-calendar"></i> 25 December 2018</span>
                                        <span class="elh-event-time"><i class="fa fa-clock-o"></i> 12:45pm</span>
                                        <span class="elh-post-categories">
                                            <i class="fa fa-folder-open"></i>
                                            <a href="#">Education</a>
                                        </span>
                                    </div>
                                    <p class="elh-event-location"><i class="fa fa-map-marker"></i> 15 Madison Squre, Dunroaming St. New York, NY-856485</p> -->
                                    <div class="elh-post-entry">
                                        <h3>OBFUSCATION</h3><br>

                                        <p>
                                         An obfuscator is a compiler that transforms any program into an obfuscated program  that has the same input-output functionality as the original program, but is “unintelligible”. Obfuscation has applications for cryptography and for software protection.
 										</p>

                                        <h5>ARTICLES IN REFEREED CONFERENCES OR JOURNALS</h5><br>

 										<p>
 											Alwen, J., Barbosa, M., Farshim, P., Gennaro, R., Gordon, S.D., Tessaro, S. "On the Relationship between Functional Encryption, Fully Homomorphic Encryption, and Obfuscation." To appear at the Fourtheenth IMA International Conference on Cryptogaphy and Coding.
 										</p>

 										<p>
 											Goldwasser, S., Kalai, Y., Popa, R., Vaikuntanathan, V., and Zeldovich, N. "<a href="http://eprint.iacr.org/2012/733" target="_blanck">Succinct Functional Encryption and Applications: Reusable Garbled Circuits and Beyond.</a>" IACR Cryptology ePrint Archive 2012: 733, 2012.
 										</p>

 										<p>
 											Bitansky, N., Canetti, R., Goldwasser, S., Halevi, S., Tauman Kalai,  Y., and Rothblum, G.N. “Program Obfuscation with Leaky Hardware.” In Dong Hoon Lee, Xiaoyun Wang, editors, ASIACRYPT 2011 - 17th International Conference on the Theory and Application of Cryptology and Information Security, Seoul, South Korea, December 4-8, 2011, volume 7073 of Lecture Notes in Computer Science, pages 722-739, 2011. Springer.
 										</p>

 										<p>
 											Goldwasser, G., Tauman Kalai, Y., and Rothblum, G.N. “One-Time Programs.” 28th International Cryptology Conference (CRYPTO 2008), pages 39-56, Santa Barbara, CA, July 2008.
 										</p>
 										                                
                                        <p>
                                            Goldwasser, S. and Rothblum, G. “On Best-Possible Obfuscation.” Theory of Cryptography, 4th Theory of Cryptography Conference (TCC 2007), volume 4392 of Lecture Notes in Computer Science, pages 194-213, 2007. Springer.
                                        </p>

                                        <p>
                                            Goldwasser, S. and Tauman Kalai, Y. “On the Impossibility of Obfuscation with Auxiliary Input.” Proceedings of the 46th Annual IEEE Symposium on Foundations of Computer Science (FOCS 2005), Pittsburgh, PA, pages 553-562, October 2005.
                                        </p>
                                        
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
