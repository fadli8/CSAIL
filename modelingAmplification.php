<?php 
    $connect = new PDO("mysql:host=sql9.freemysqlhosting.net;dbname=sql9351309", "sql9351309", "RQy7Yk8QyN");

    $query = "SELECT * FROM `projects` WHERE `catego3` LIKE 'Modeling' and `display` like 'yes' and `Categories` like 'Modeling, Amplification'";
    
    $statement = $connect->prepare($query);
    
    $statement->execute();
    
    $result = $statement->fetchAll();

    $query1 = "SELECT * FROM `projects` WHERE `catego3` LIKE 'Amplification' and `display` like 'yes' and `Categories` like 'Modeling, Amplification'";
    
    $statement1 = $connect->prepare($query1);
    
    $statement1->execute();
    
    $result1 = $statement1->fetchAll();
    
    include 'head.php';
?>


    <!-- Page header -->
    <div class="elh-page-header elh-img-bg elh-bg-modeling">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">Modeling, Amplification</h3>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Modeling, Amplification</li>
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
                                        <h3>MODELING, AMPLIFICATION</h3><br>
                                        <h5>MODELING</h5><br>

                                        <p>
                                         Modern cryptography provides strong security guarantees via mathematical proofs. One major challenge is to define realistic formal models in which security of cryptographic systems can be proven and which at the same time cover real-world needs and threats. Researchers at MIT have tackled the question of providing better and strong security models for central and emerging cryptographic tasks which have been so far lacking appropriate modeling, like distributed cryptographic protocols, physical-layer security and password-based cryptography.
 										</p>

 										<h5>ARTICLES IN REFEREED CONFERENCES OR JOURNALS</h5><br>

 										<p>
 											Micciancio, D., and Tessaro, S. “An Equational Approach to Secure Multi-Party Computation.” Innovations in Theoretical Computer Science - ITCS 2013.
 										</p>

 										<p>
 											Bellare, M., Ristenpart, T., and Tessaro, S. “<a href="http://people.csail.mit.edu/tessaro/papers/mis.pdf" target="_blanck">Multi-Instance Security and its Application to Password-Based Cryptography</a>” Advances in Cryptology -- CRYPTO 2012. LNCS, vol. 7417, pp. 312–329, Aug 2012.
 										</p>

 										<p>
 											Bellare, M., Tessaro, S., and Vardy, A. “<a href="http://people.csail.mit.edu/tessaro/papers/wiretap-proc.pdf" target="_blanck">Semantic Security for the Wiretap Channel.</a>” Advances in Cryptology -- CRYPTO 2012. LNCS, vol. 7417, pp. 294–311, Aug 2012. [<a href="http://sms.cam.ac.uk/media/1247118" target="_blanck">Video</a>]
 										</p>
 										<?php
                                            foreach($result as $row)
                                            {
                                             echo '
                                             
                                              <p>'.$row["discription_project"].'<br/><br/></p>
                                                                                          ';
                                            }
                                        ?>

 										<h5>AMPLIFICATION</h5><br>

 										<p>
 											In the real-world, the security of cryptographic systems may end up being reduced for different reasons: Better attacks may weaken computational assumptions underlying the security of these systems, and implementation errors may lead to both security vulnerabilities as well as incorrect behavior of cryptographic algorithms. The area of security amplification deals with protecting cryptographic systems from such vulnerabilities by providing efficient methods to transform possibly weak cryptosystems into strongly secure ones. 
 										</p>

 										<p>
 											Researchers at MIT have recently made several advances in the theory of security amplification for different form of encryption algorithms.
 										</p>

 										<h5>ARTICLES IN REFEREED CONFERENCES OR JOURNALS</h5><br>

 										<p>
 											Lin, H., and Tessaro, S. “<a href="http://people.csail.mit.edu/tessaro/papers/encampl.pdf" target="_blanck">Amplification of Chosen-Ciphertext Security.</a>” Advances in Cryptology -- EUROCRYPT 2013. May 2013. (To appear).
 										</p>

 										<p>
 											Gazi, P., and Tessaro, S. “<a href="http://people.csail.mit.edu/tessaro/papers/cascades.pdf" target="_blanck">”Advances in Cryptology -- EUROCRYPT 2012. LNCS, vol. 7327, pp. 63–80, Apr 2012.</a>
 										</p>

 										<p>
 											Tessaro, S. “<a href="file://localhost/pub/crypto/publications/Tessar11.pdf" target="_blanck">” Theory of Cryptography — TCC 2011, LNCS, vol. 6597, pp. 37–54, Mar 2011. </a>
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
