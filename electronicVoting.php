<?php 
    $connect = new PDO("mysql:host=sql9.freemysqlhosting.net;dbname=sql9351309", "sql9351309", "RQy7Yk8QyN");

    $query = "SELECT * FROM `projects` WHERE `catego1` LIKE 'The Evox Voting System' and `display` like 'yes' and `Categories` like 'Electronic Voting'";
    
    $statement = $connect->prepare($query);
    
    $statement->execute();
    
    $result = $statement->fetchAll();

    $query1 = "SELECT * FROM `projects` WHERE `catego1` LIKE 'Bibliography On Electronic Voting' and `display` like 'yes' and `Categories` like 'Electronic Voting'";
    
    $statement1 = $connect->prepare($query1);
    
    $statement1->execute();
    
    $result1 = $statement1->fetchAll();

    $query2 = "SELECT * FROM `projects` WHERE `catego1` LIKE 'Other' and `display` like 'yes' and `Categories` like 'Electronic Voting'";
    
    $statement2 = $connect->prepare($query2);
    
    $statement2->execute();
    
    $result2 = $statement2->fetchAll();
    
    include 'head.php';
?>


    <!-- Page header -->
    <div class="elh-page-header elh-img-bg elh-bg-electronic-voting">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">Electronic Voting</h3>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Electronic Voting</li>
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
                                        <h3>ELECTRONIC VOTING</h3><br>

                                        <p>
                                         The Cryptography and Information Security research group of MIT's <a href="http://www.lcs.mit.edu/" target="_blanck">Laboratory for Computer Science</a>has a long-standing interest in electronic voting and the security of voting technology.
 										</p>

 										<p>
 											Professor <a href="http://theory.lcs.mit.edu/~rivest" target="_blanck">Ronald L. Rivest</a>has led this project. Other key participants have been Mark Herschberg, Kazho Ohta,<a href="http://ben.adida.net/" target="_blanck">Ben Adida</a>, Brandon DuRette, Rachel Greenstadt, and Kevin McDonald.
 										</p>

 										<p>
 											Our sponsors have included: DARPA (DARPA contract DABT63-96-C-0018, "Security for Distributed Computer Systems") and NTT. (Thanks!)
 										</p>
 										

 										<h5><a> THE EVOX VOTING SYSTEM</a></h5><br>

 										<p>
 											<a>ne part of our research has been the implementation of the EVOX voting scheme, and testing its use in MIT campus-wide student elections. The scheme is based on the paper, "A practical secret voting scheme for large scale elections", by Atsushi Fujioka, Tatsuaki Okamoto, and Kazuo Ohta (Proceedings AUSCRYPT '92, 1993), pages 244-251.</a>
 										</p>

 										<p>
 											<a>The original implementation was done by Mark Herschberg as part of his></a><a href="http://groups.csail.mit.edu/cis/voting/herschberg-thesis/index.html" target="_blanck">Master's thesis.</a>The protocol details are listed<a href="http://theory.lcs.mit.edu/~cis/voting/protocol/index.html" target="_blanck">here</a>.
 										</p>

 										<p>
 											EVOX has recently reached what we're calling version 2.0beta. EVOX has a new interface, built entirely in HTML, that links to the EVOX Java applet via a few simple Javascript procedures, using Netscape LiveConnect. A generalized Object Store interface is now being used for the Anonymizer, so that the system can easily be switched over to a database-backed system using JDBC-to-Oracle. (March 13th, 1999)
 										</p>

 										<p>
 											The EVOX system ran the UA Elections, from March 10th to March 14th, 1999.
 										</p>

 										<p>
 											On May 25th, 1999 a second branch of the EVOX system has been created which uses multiple administrators for vote signing. This should improve the security by preventing the administrator from forging votes. This work was done as a part of a <a href="http://theory.lcs.mit.edu/~cis/theses/DuRette-bachelors.pdf" target="_blanck"> Bachelors thesis</a> by Brandon DuRette.
 										</p>

 										<p>
 											In no specific order, we plan to do the following over the next few weeks and months: (1) Use JDBC to store votes in a database. (2) Add ability to have multiple counters (3) Explore other protocols (modularize out the protocol?) (4) Post full documentation of protocol, changes made to it for practical reasons, and Java implementation
 										</p>

 										<p>
 											For any information on using EVOX, how EVOX works, or on electronic voting in general, please don't hesitate to contact<a href="ben@mit.edu" target="_blanck">Ben Adida</a>.
 										</p>
 										
 										<?php
                                            foreach($result as $row)
                                            {
                                             echo '
                                             
                                              <p>'.$row["discription_project"].'<br/><br/></p>
                                                                                          ';
                                            }
                                        ?>
 										
 										<h5><a>BIBLIOGRAPHY ON ELECTRONIC VOTING</a></h5><br>

 										<p>
 											<a>Rachel Greenstadt has prepared a short</a><a hrefhttp://theory.lcs.mit.edu/~cis/voting/greenstadt-voting-bibliography.html" target="_blanck">bibliography</a> of research on electronic voting. (January, 2000)
 										</p>
 										
 										<?php
                                            foreach($result1 as $row)
                                            {
                                             echo '
                                             
                                              <p>'.$row["discription_project"].'<br/><br/></p>
                                                                                          ';
                                            }
                                        ?>

 										<h5><a>OTHER INTERESTING LINKS ON ELECTRONIC VOTING AND VOTING TECHNOLOGY:</a></h5><br>

 										<p>
 											<a href="http://www.calvoter.org/" target="_blanck">Calfornia Voter Foundation</a>	
 										</p>

 										<p>
 											<a href="http://www.ecom.cmu.edu/people/faculty/mshamos/" target="_blanck">Michael Shamos</a>'s paper, <a href="http://www.cpsr.org/conferences/cfp93/shamos.html" target="_blanck">"Electronic Voting--Evaluating the Threat"</a>
 										</p>

 										<p>
 											<a href="http://wean1.ulib.org/cgi-bin/metawin-lectures.pl?target=Lectures/Distinguished%20Lectures/2000" target="_blanck">Michael Shamos's 11/15/00 talk on voting in Florida (given as a CMU Distinguished Lecture)</a>
 										</p>

 										<p>
 											<a href="http://www.electiondataservices.com/home.htm" target="_blanck">Election Data Services</a>(has map of voting technologies)
 										</p>

 										<p>
 											<a href="http://www.calvoter.org/votingtechnology.html" target="_blanck">Voting Technologies</a>
 										</p>

 										<p>
 											<a href="http://www.internetpolicy.org/" target="_blanck">Internet Policy Institute Report on Internet Voting</a>
 										</p>

 										<ol style="list-style: none;">
 											<li> Also available <a href="http://www.netvoting.org/" target="_blanck">here.</a></li>
 										</ol>

 										<p>
 											<a href="http://www.collinscenter.org/info-url2660/info-url.htm" target="_blanck">Report of the Select Elections Task Force</a>prepared by the Collins Center for Public Policy for the State of Florida.
 										</p>

 										<p>
 											<a href="http://www.vote.caltech.edu/" target="_blanck">MIT-CalTech Voting Technology Project </a> (See the<a href="http://web.mit.edu/newsoffice/nr/2000/voting.html" target="_blanck"> press announcement</a>.)
 										</p>

 										<p>
 											<a href="http://www.research.att.com/~lorrie/" target="_blanck">Lorrie Cranor's home page</a> (many voting-relevant links)
 										</p>

 										<p>
 											<a href="http://lorrie.cranor.org/voting" target="_blanck">One of her pages devoted to voting</a>
 										</p>

 										<p>
 											<a href="http://lorrie.cranor.org/voting" target="_blanck">Rebecca Mercuri's page on Electronic Voting</a>
 										</p>

 										<p>
 											<a href="http://www.csl.sri.com/users/neumann/#5" target="_blanck">Peter Neumann on voting</a>
 										</p>

 										<p>
 											<a href="http://www.csl.sri.com/users/neumann/illustrative.html#23" target="_blanck">Peter Neumann's list of election problems</a>
 										</p>

 										<p><a href="http://www.ss.ca.gov/executive/ivote" target="_blanck">California Electronic Voting Task Force Report</a>
 										</p>

 										<p>Avi Rubin's note on electronic voting.
 										</p>

 										<ol style="list-style: none;">
 											<li><a href="http://avirubin.com/e-voting.security.html" target="_blanck">html</a></li>
 											<li><a href="http://avirubin.com/e-voting.security.pdf" target="_blanck">pdf</a></li>
 										</ol>

 										

 										<p>
 											<a href="http://voting-integrity.org/" target="_blanck">The Voting Integrity Project</a></p>

 										<p>
 											<a href="http://www.nist.gov/itl/lab/specpubs/500-158.htm" target="_blanck">Accuracy, Integrity, and Security in Computerized Vote-Tallying</a> by Roy G. Saltman (NIST report).</p>

 										<p>
 											<a href="http://www.cs.uiowa.edu/~jones/voting/uscrc.html" target="_blanck">Evaluating Voting Technology</a> by Douglas Jones.</p>

 										<p>
 											<a href="http://www.votehere.net/" target="_blanck">VoteHere.Net site</a></p>
                                      
 										<ol style="list-style: none;">
 											<li><a href="http://www.votehere.net/" target="_blanck">VoteHere.Net page on "recounts"</a></li>
 											
 										</ol>
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
