<?php 
    include 'head.php';
    
    $connect = new PDO("mysql:host=sql9.freemysqlhosting.net;dbname=sql9351309", "sql9351309", "RQy7Yk8QyN");

    $query = "SELECT * FROM `projects` WHERE `catego` LIKE 'no' and `catego1` LIKE 'no' and `catego2` LIKE 'no' and `catego3` LIKE 'no' and `catego4` LIKE 'no' and `display` like 'yes' and `Categories` like 'Multi-party Computation'";
    
    $statement = $connect->prepare($query);
    
    $statement->execute();
    
    $result = $statement->fetchAll();
?>


    <!-- Page header -->
    <div class="elh-page-header elh-img-bg elh-bg-multi-party-computation">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">Multi-party Computation</h3>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Multi-party Computation</li>
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
                                        <h3>MULTI-PARTY COMPUTATION</h3><br>

                                        <p>
                                         Multiparty computation allows a group of players to perform a given task as correctly and as privately as if a trusted third party has performed the computation on a players behalf. In fundamental papers by Goldreich, Micali and Wigderson [GMW87] and Ben-Or, Goldwasser and Wigderson [BGW88] it was shown that any probabilistic (polynomial-time) function can be securely computed in the computational and in the information-theoretic settings. Ever since, many papers have been produced and a lot of research is still going on in this fundamental area. In particular, the following issues are of critical importance: ability to compose secure protocols (e.g., sequential/parallel/concurrent reducibility), round and communication complexity, the network structure (e.g., existence of private channels, broadcast, limited connectivity), adversary structure that can be tolerated (e.g., thereshold adversaries), types of adversary (e.g., active/passive/fail, adaptive/non-adaptive) and some others.
 										</p>

 										<h5>ARTICLES IN REFEREED CONFERENCES OR JOURNALS</h5><br>

 										<p>
 											Micciancio, D., and Tessaro, S. "An Equational Approach to Secure Multi-Party Computation." Innovations in Theoretical Computer Science (ITCS2013).
 										</p>

 										<p>
 											Boyle, E., Goldwasser, S., Tessaro, S. “Communication Locality in Secure Multi-party Computation - How to Run Sublinear Algorithms in a Distributed Setting.” <a href="http://www.informatik.uni-trier.de/~ley/db/conf/tcc/tcc2013.html#BoyleGT13" target="_blanck">TCC 2013.</a>
 										</p>

 										<p>
 											Akavia, A., Goldwasser, S., and Hazay, C.  “Distributed Public Key Schemes Secure against Continual Leakage.” Proceedings of the 31th Annual ACM Symposium on Principles of Distributed Computing (PODC 2012), Funchal, Madeira, Portugal, pages 155-164, July 2012.
 										</p>

 										<p>
 											Boyle, E., Goldwasser, S., Jain, A., and Tauman Kalai, Y. “Multiparty Computation Secure Against Continual Memory Leakage.” Proceedings of the 44th ACM Symposium on Theory of Computing (STOC), New York, NY, May 2012.
 										</p>

 										<p>
 											Boyle, E., Goldwasser, S., and Tauman Kalai, Y.  “Coin Tossing with Leakage.”     Proceedings of the 25th International Symposium on DIStributed Computing, Rome, Italy,  September 20-22, 2011.
 										</p>

 										<p>
 											Boyle, E., Goldwasser, S., and Tauman Kalai, Y.  “Coin Tossing with Leakage.”     Proceedings of the 25th International Symposium on DIStributed Computing, Rome, Italy,  September 20-22, 2011.
 										</p>

 										<p>
 											Canetti, R., Eiger, D., Goldwasser, G., and Lim, D.Y. “How to Protect Yourself without Perfect Shredding.” 35th International Colloquium on Automata, Languages and Programming (ICALP 2008), pages 511-523, Reykjavik, Iceland, July 2008.
 										</p>

 										<p>
 											Chen, H., Cramer, R., Goldwasser, S., de Haan, R., and Vaikuntanathan, V. “Secure Computation from Random Error Correcting Codes.” EUROCRYPT 2007, Barcelona, Spain, pages 291-310, May 2007.
 										</p>

 										<p>
 											Goldwasser, S., Pavlov, E., and Vaikuntanathan, V. “Fault-Tolerant Distributed Computing in Full-Information Networks.” Proceedings of the 47th Annual IEEE Symposium on Foundations of Computer Science (FOCS 2006), Berkeley, CA, October 2006.
 										</p>

 										<p>
 											Goldwasser, S. and Lindell, Y. “Secure Multi-Party Computation without Agreement.” J. Cryptology 18(3):247-287, 2005.
 										</p>

 										<p>
 											Goldwasser, S., Sudan, M., and Vaikuntanathan, V. “Distributed Computing with Imperfect Randomness.” 19th International Symposim on Distributed Computing (DISC 2005), Cracow, Poland, pages 288-302, September 2005.
 										</p>

 										<p>
 											Goldwasser, S. and Lindell, Y. “Secure Computation without Agreement.” Proceedings of the 16th Int’l Symposium on DIStributed Computing (DISC 2002), pages 17-32, Toulouse, France, October 2002. 
 										</p>

 										<p>
 											Gertner Y., Goldwasser S., and Malkin T. “A Random Server Model for Private Information Retrieval (or How to Achieve Information Theoretic PIR Avoiding Database Replication).” 2nd International Workshop on Randomization and Approximation Techniques in Computer Science (RANDOM 1998), Barcelona, Spain, October 1998. 
 										</p>

 										<p>
 											Goldwasser, S. “Multi-Party Computations: Past and Present.” Invited paper to Proceedings of the Sixteenth Annual ACM Symposium on Principles of Distributed Computing (PODC 1997), Santa Barbara, California, USA, August 21-24, 1997. 
 										</p>

 										<p>
 											Goldreich, O., Goldwasser S., and Linial N. “Fault Tolerant Distributed Computation in the Full Information Model.” Proceedings of the 32nd Annual Symposium on Foundations of Computer Science (FOCS 1991), Puerto Rico, October 1991.
 										</p>

 										<p>
 											Goldwasser, S. and Levin L. “Fair Computation of General Functions in Presence of Immoral Majority.” A. Menezes, S. Vanstone, editors Advances in Cryptology (Proceedings of CRYPTO90, Santa Barbara, CA, August 1990), volume 537 of Lecture Notes in Computer Science,1991. Springer.
 										</p>

 										<p>
 											Beaver, D. and Goldwasser, S. “Multi Party Fault Tolerant Computation with Faulty Majority Based on Oblivious Transfer.” Proceedings of 30th Annual Symposium on Foundations of Computer Science (FOCS89), Duke, NC, October 1989.
 										</p>

 										<p>
 											Beaver, D. and Goldwasser, S. “Multi Party Fault Tolerant Computation with Faulty Majority.” G. Brassard, editor, Advances in Cryptology - Proceedings of 9th Annual Intl. Cryptology Conference (Crypto89), volume 435 of Lecture Notes in Computer Science, pages 589-590, 1989. Springer.
 										</p>

 										<p>
 											Ben-Or, M., Goldwasser S., Kilian J., and Wigderson A. “Multi-Prover Interactive Proofs: How to Remove Intractability Assumptions.” Proceedings of 20th Annual ACM Symposium on Theory of Computing (STOC 1988), Chicago, Illinois, pages 113-122, May 1988.
 										</p>

 										<p>
 											Chor, B., Goldwasser S., Micali S., and Awerbuch B. “Verifiable Secret Sharing and Achieving Simultaneity in the Presence of Faults.” Proceedings of 26th Annual Symposium on the Foundations of Computer Science (FOCS 1985), pages 383-395, October 1985.
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
