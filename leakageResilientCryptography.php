<?php 
    $connect = new PDO("mysql:host=sql9.freemysqlhosting.net;dbname=sql9351309", "sql9351309", "RQy7Yk8QyN");

    $query = "SELECT * FROM `projects` WHERE `catego4` LIKE 'Articles In Refereed' and `display` like 'yes' and `Categories` like 'Leakage Resilient Cryptography'";
    
    $statement = $connect->prepare($query);
    
    $statement->execute();
    
    $result = $statement->fetchAll();

    $query1 = "SELECT * FROM `projects` WHERE `catego4` LIKE 'News Article' and `display` like 'yes' and `Categories` like 'Leakage Resilient Cryptography'";
    
    $statement1 = $connect->prepare($query1);
    
    $statement1->execute();
    
    $result1 = $statement1->fetchAll();

    $query2 = "SELECT * FROM `projects` WHERE `catego4` LIKE 'Forth-coming Work' and `display` like 'yes' and `Categories` like 'Leakage Resilient Cryptography'";
    
    $statement2 = $connect->prepare($query2);
    
    $statement2->execute();
    
    $result2 = $statement2->fetchAll();
    
    include 'head.php';
?>


    <!-- Page header -->
    <div class="elh-page-header elh-img-bg elh-bg-leakage-resilient-cryptography">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">Leakage Resilient Cryptography</h3>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Leakage Resilient Cryptography</li>
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
                                        <h3>LEAKAGE RESILIENT CRYPTOGRAPHY</h3><br>

                                        <p>
                                         The increasing popularity of cloud computing makes  side channel attacks a greater threat to cryptographic algorithms than previously realized. Whereas an attacker would have to be pretty motivated to install a device in your wall to measure your computer’s power consumption, it’s comparatively easy to load a bit of code on a server in the cloud and eavesdrop on other applications it’s running.
 										</p>

 										<p>
 											To address this reality, cryptographers have been investigating ways of protecting against broad families of side channels attacks for a broad spectrum of cryptographic algorithms and protocols, both at design time and through the introduction of general anti-side-channel-attack compilers. Researchers at the CIS group ahave taken a lead on these investigations. Below is a list of papers and articles on the groups research.
 										</p>

 										<h5>ARTICLES IN REFEREED CONFERENCES OR JOURNALS</h5><br>

 										<p>
 											Chase, M., Putnam, A., Sherwood, T., Shumow, D., and Vaikuntanathan, V. "An Inspection-Resistant On-chip Memory Architecture." ISCA 2012. 
 										</p>

 										<p>
 											Akavia, A., Goldwasser, S., and Hazay, C. "Distributed Public Key Schemes Secure against Continual Leakage." ACM Symposium on Principles of Distributed Computing - PODC 2012.
 										</p>

 										<p>
 											Boyle, E., Goldwasser, S., Jain, A., Tauman Kalai, Y. " <a href="http://dl.acm.org/citation.cfm?doid=2213977.2214087" target="_blanck">Multiparty Computation Secure Against Continual Memory Leakage.</a>" ACM Symposium on Theory of Computing - STOC 2012.  
 										</p>

 										<p>
 											Goldwasser, S., Rothblum, G. "How to Compute in the Presence of Leakage." <a href="http://www.informatik.uni-trier.de/~ley/db/conf/focs/focs2012.html#GoldwasserR12" target="_blanck"> FOCS 2012: 31-40</a>
 										</p>

 										<p>
 											Boyle, E., Goldwasser, S., Tauman Kalai., Y.  "<a href="http://eprint.iacr.org/2011/291" target="_blanck">Leakage-Resilient Coin Tossing.</a>" The International Symposium on Distributed Computing - DISC 2011.
 										</p>

 										<p>
 											Boyle, E., Segev, G., Wichs, D.  "<a href="http://eprint.iacr.org/2010/488" target="_blanck">Fully Leakage-Resilient Signatures.</a>" Advances in Cryptology - EUROCRYPT 2011.
 										</p>

 										<p>
 											Brakerski, Z., Kalai, Y., Katz, J., and Vaikuntanathan, V. "Cryptography against continual Memory Leakage." FOCS 2010.<a href="http://eprint.iacr.org/2010/278" target="_blanck">Cryptology Eprint Archive.</a>
 										</p>

 										<p>
 											Brakerski, Z., Tauman Kalai, Y., Katz, J., and Vaikuntanathan, V.  "Overcoming the Hole in the Bucket: Public-Key Cryptography Resilient to Continual Memory Leakage." FOCS 2010. (Note: Brakerski was a PhD student of Goldwasser in Weizmann Institute)
 										</p>

 										<p>
 											Chen, H., Cramer, R., Goldwasser, S., de Haan, R., and Vaikuntanathan, V. “Secure Computation from Random Error Correcting Codes.” EUROCRYPT 2007, Barcelona, Spain, pages 291-310, May 2007.
 										</p>

 										<p>
 											Goldwasser, S., Pavlov, E., and Vaikuntanathan, V. “Fault-Tolerant Distributed Computing in Full-Information Networks.” Proceedings of the 47th Annual IEEE Symposium on Foundations of Computer Science (FOCS 2006), Berkeley, CA, October 2006.
 										</p>

 										<p>
 											Faust, S., Rabin, T., Reyzin, L., Tromer, E., and Vaikuntanathan, V. "Protecting against Computationally Bounded and Noisy Leakage." Eurocrypt 2010. [<a href="http://www.cs.toronto.edu/~vinodv/leakcirc.pdf" target="_blanck">pdf]</a>
 										</p>

 										<p>
 											Dodis, Y., Goldwasser, S., Kalai, Y., Peikert, C., and Vaikuntanathan, V. "Public-key Encryption Schemes with Auxiliary Inputs."  Theory of Cryptography Conference - TCC 2010. [<a href="http://www.cs.toronto.edu/~vinodv/auxinput.pdf" target="_blanck">pdf]</a>
 										</p>

 										<p>
 											Goldwasser, S., Rothblum, G."<a href="http://www.mit.edu/~rothblum/papers/sidechannels.pdf"  target="_blanck">Securing Computation against Continual Leakage.</a>" CRYPTO 2010.
 										</p>

 										<p>
 											Goldwasser, S., Kalai, Y., Peikert, C., and Vaikuntanathan, V. "Robustness of the Learning with Errors Assumption." Innovations in Computer Science - ICS 2010. [<a href="http://www.cs.toronto.edu/~vinodv/robustlwe.pdf" target="_blanck">pdf]</a>
 										</p>

 										<p>
 											Akavia, A., Goldwasser, S., and Vaikuntanathan V. "Cryptography against Memory Attacks." Theory of Cryptography Conference - TCC 2009. [<a href="http://www.cs.toronto.edu/~vinodv/AGV-proc.pdf" target="_blanckhttp://www.cs.toronto.edu/~vinodv/AGV-proc.pdf">pdf] </a>
 										</p>

 										<p>
 											Katz, J., and Vaikuntanathan, V. "Signature Schemes with Bounded Leakage Resilience." Asiacrypt 2009. [<a href="http://www.cs.toronto.edu/~vinodv/KV-Sigs.pdf" target="_blanck">pdf]</a>
 										</p>

 										<p>
 											Canetti, R., Eiger, D., Goldwasser, S., Lim, D. "How to Protect Yourself without Perfect Shredding." <a href="http://www.informatik.uni-trier.de/~ley/db/conf/icalp/icalp2008-2.html#CanettiEGL08">ICALP 2008.</a>
 										</p>
 										<?php
                                            foreach($result as $row)
                                            {
                                             echo '
                                             
                                              <p>'.$row["discription_project"].'<br/><br/></p>
                                                                                          ';
                                            }
                                        ?>
 										<h5>NEWS ARTICLE</h5><br>

 										<p>
 											Goldwasser, S. "<a href="http://www.outlookseries.com/A0993/Security/3592_Shafi_Goldwasser_MIT_Thwart_Cleverest_Side_Channel_Attackers_Shafi_Goldwasser_Side_Channel.htm" target="_blanck">Thwart the Cleverest Side Channel Attackers.</a>" ConstituentWorks 2012.
 										</p>
 										<?php
                                            foreach($result1 as $row)
                                            {
                                             echo '
                                             
                                              <p>'.$row["discription_project"].'<br/><br/></p>
                                                                                          ';
                                            }
                                        ?>
 										<h5>FORTH-COMING WORK</h5><br>
 										<p>
 											Boyle, E., Garg, S., Jain, A., Tauman Kalai, Y., Sahai, A. "Secure Computation Against Adaptive Auxiliary Information." Manuscript. 
 										</p>
                                        <?php
                                            foreach($result2 as $row)
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
