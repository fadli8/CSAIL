<?php 
    $connect = new PDO("mysql:host=sql9.freemysqlhosting.net;dbname=sql9351309", "sql9351309", "RQy7Yk8QyN");

    $query = "SELECT * FROM `projects` WHERE `catego2` LIKE 'Books' and `display` like 'yes' and `Categories` like 'Lattice-based Cryptography'";
    
    $statement = $connect->prepare($query);
    
    $statement->execute();
    
    $result = $statement->fetchAll();

    $query1 = "SELECT * FROM `projects` WHERE `catego2` LIKE 'Articles In Refereed' and `display` like 'yes' and `Categories` like 'Lattice-based Cryptography'";
    
    $statement1 = $connect->prepare($query1);
    
    $statement1->execute();
    
    $result1 = $statement1->fetchAll();

    include 'head.php';
?>


    <!-- Page header -->
    <div class="elh-page-header elh-img-bg elh-bg-lattice-based-cryptography">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">Lattice-based Cryptography</h3>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Lattice-based Cryptography</li>
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
                                        <h3>LATTICE-BASED CRYPTOGRAPHY</h3><br>

                                         <p>
                                         Identifying hard computational problems which are amenable for cryptographic use is a very important task. Although hard computational problems seem to be all around us, only very few of those problems were found to be useful for cryptography.  A current research direction of ours and others is centered around the design of cryptosystems which are based on geometric problems (in particular, problems on integer lattices).
 										</p>

 										<h5>BOOKS</h5><br>

										<p>
 											Goldwasser, S. and Micciancio, D. “Complexity of Lattice Problems: A Cryptographic Perspective.” Kluwer international Series in Engineering and Computer Science, Kluwer Academic Publishers, March 2002. 
 										</p>
 										
 										<?php
                                            foreach($result as $row)
                                            {
                                             echo '
                                             
                                              <p>'.$row["discription_project"].'<br/><br/></p>
                                                                                          ';
                                            }
                                        ?>

 										<h5>ARTICLES IN REFEREED CONFERENCES OR JOURNALS</h5><br>

 										<p>
 											Goldwasser, S., Kalai, Y.T., Peikert, C., and Vaikuntanathan, V. “Robustness of the Learning with Errors Assumption.” Innovations in Computer Science (ICS 2010), pages 230-240, Beijing, China, January 2010. 
 										</p>

 										<p>
 											Goldwasser, S. and Kharchenko, D. “Proof of Plaintext Knowledge for the Ajtai-Dwork Cryptosystem.” Theory of Cryptopgrahy, Second Theory of Cryptography Conference (TCC 2005), volume 3378 of Lecture Notes in Computer Science, pages 529-555, 2005. Springer.
 										</p>

 										<p>
 											Golderich, O. and Goldwasser, S. “On the Limits of Non-Approximability of Lattice Problems.” J. of Computer and System Sciences, 60(3):540-563, June 2000.
 										</p>

 										<p>
 											Goldreich, O., Goldwasser, S., and Halevi, S. “Public-Key Cryptosystems from Lattice Reduction Problems.” B. Kaliski, Jr., editor, Advances in Cryptology (Proceedings of CRYPTO 1997, Santa Barbara, CA, August 1997), volume 1294 of Lecture Notes in Computer Science, pages 112-131, 1997. Springer. 
 										</p>

 										<p>
 											Goldreich, O., Goldwasser, S., and Halevi, S. “Eliminating Decryption Errors in the Ajtai-Dwork Cryptosystem.” B. Kaliski, Jr., editor, Advances in Cryptology (Proceedings of CRYPTO 1997, Santa Barbara, CA, August 1997), volume 1294 of Lecture Notes in Computer Science, pages 105-111, Springer.  1997.
 										</p>
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
