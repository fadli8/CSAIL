<?php

$connect = new PDO("mysql:host=sql9.freemysqlhosting.net;dbname=sql9351309", "sql9351309", "RQy7Yk8QyN");

$query = "SELECT * FROM projects ORDER BY id DESC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$query1 = "SELECT id FROM projects ORDER BY id DESC LIMIT 1";
$res = $connect->prepare($query1);
$res->execute();
$last_id = $res->fetchColumn();
// echo "tetststs = ".$last_id;

    include 'head.php';
?>


    <!-- Page header -->
    <div class="elh-page-header elh-img-bg elh-bg-projects">
        <div class="elh-overlay">
            <div class="container text-center">
                <h3 class="elh-page-title">Project</h3>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Project</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- Page header End -->

    <!-- Main wrapper start -->
    <div class="elh-main-wrap">

        <!-- Members Body -->
        <div class="elh-section elh-section-padding">
            <div class="container">
                <div class="row">
                    <div class="elh-post style-4 elh-post-body">
                        <div class="col-sm-12 elh-post style-4 elh-post-body">
                            <form  method="post" id="add_details">
                                <div class="form-group">
                                 <label>Title :</label>
                                 <input type="text" name="title_project" class="form-control" required />
                                </div>
                                <div class="form-group">
                                 <label>Project :</label>
                                 <select id="select" name="Categories" onchange="document.getElementById('categorie').value=this.options[this.selectedIndex].text">
                                    <option>Select Project</option>
                                    <option value="1">Circular Security</option>
                                    <option value="0">Computing on Encrypted Data</option>
                                    <option value="1">Delegation Paradigm</option>
                                     <option value="2">Electronic Voting</option>
                                     <option value="0">Foundations of Symmetric Cryptography</option>
                                     <option value="3">Lattice-based Cryptography</option>
                                     <option value="5">Leakage Resilient Cryptography</option>
                                     <option value="4">Modeling, Amplification</option>
                                     <option value="0">Multi-party Computation</option>
                                     <option value="0">Obfuscation</option>
                                </select>
                                <input type="hidden" name="categorie" id="categorie" >
                                </div>
                                
                                 <div class="form-group" id='catego' style="display:none">
                                 <label>title :</label>
                                 <select name="catego">
                                     <option value="no">Select Title</option>
                                    <option value="Articles In Refereed">Articles In Refereed Conferences And Journals</option>
                                    <option value="Technical Reports">Technical Reports</option>
                                    
                                </select>
                                
                                </div>
                                <div class="form-group" id='catego1' style="display:none">
                                 <label>title :</label>
                                 <select name="catego1">
                                     <option value="no">Select Title</option>
                                    <option value="The Evox Voting System">The Evox Voting System</option>
                                    <option value="Bibliography On Electronic Voting">Bibliography On Electronic Voting</option>
                                    <option value="Other">Other Interesting Links On Electronic Voting And Voting Technology</option>
                                    
                                </select>
                                
                                </div>
                                <div class="form-group" id='catego2' style="display:none">
                                 <label>title :</label>
                                 <select name="catego2">
                                     <option value="no">Select Title</option>
                                    <option value="Articles In Refereed">Articles In Refereed Conferences And Journals</option>
                                    <option value="Books">Books</option>
                                </select>
                                
                                </div>
                                 <div class="form-group" id='catego3' style="display:none">
                                 <label>title :</label>
                                 <select name="catego3">
                                     <option value="no">Select Title</option>
                                    <option value="Modeling">Modeling</option>
                                    <option value="Amplification">Amplification</option>
                                </select>
                                
                                </div>
                                 <div class="form-group" id='catego4' style="display:none">
                                 <label>title :</label>
                                 <select name="catego4">
                                     <option value="no">Select Title</option>
                                    <option value="Articles In Refereed">Articles In Refereed Conferences And Journals</option>
                                    <option value="News Article">News Article</option>
                                    <option value="Forth-coming Work">Forth-coming Work</option>
                                    
                                </select>
                                
                                </div>
                                
                                <div class="form-group">
                                 <label>Discription :</label>
                                 <!--<input type="text" name="discription_project" class="form-control" required />-->
                                 <textarea name="discription_project" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                 <label>Link :</label>
                                 <input type="text" name="link_project" class="form-control" required />
                                </div>
                        
                                <div  class="form-group">
                                  <input type="submit" name="add" id="add" class="btn btn-success btn-block" value="Add" />
                                </div>
                           </form>
                         </div>
                           <!-- <div class="col-md-8"></div> -->
                            <br />
                            <br />
                            <h3 align="center">View Details</h3>
                            <br />
                            <div id="live_data"></div>
                        
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Members Body End -->

        <!-- Blue Bar -->
        <div class="elh-section elh-theme-bg elh-subscribe-section">
            <div class="container">
                <div class="row">
                  
                </div>
            </div>
        </div>
        <!-- Blue Bar End -->

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
    
    <script>
   
$(document).ready(function(){
    
  function fetch_data()  
  {  
       $.ajax({  
            url:"select.php",  
            method:"POST",  
            success:function(data){  
                 $('#live_data').html(data);  
            }  
       });  
  } 
  fetch_data();
 
 $('#add_details').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"insert.php",
   method:"POST",
   data:$(this).serialize(),
   dataType:"json",
   beforeSend:function(){
    $('#add').attr('disabled', 'disabled');
   },
   success:function(data){
    $('#add').attr('disabled', false);
    if(data.title_project)
    {
     var html = '<tr>';
     html += '<td>'+data.title_project+'</td>';
     html += '<td>'+data.discription_project+'</td>';
     html += '<td><a href="'+data.link_project+'">Clic Here</a></td>';
     html += '<td><a href="'+data.id+'" class="btn btn-danger">Delete</a></td></tr>';
     $('#table_data').prepend(html);
     $('#add_details')[0].reset();
     
     fetch_data();
    }
   }
  })
 });
  $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id");  
           if(confirm("Are you sure you want to delete it?"))  
           {  
                $.ajax({  
                     url:"delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 
});

$(function() {
    $('#select').change(function(){
        $('#catego')[ ($("option[value='1']").is(":checked"))? "show" : "hide" ]();
        $('#catego1')[ ($("option[value='2']").is(":checked"))? "show" : "hide" ]();
        $('#catego2')[ ($("option[value='3']").is(":checked"))? "show" : "hide" ]();
        $('#catego3')[ ($("option[value='4']").is(":checked"))? "show" : "hide" ]();
        $('#catego4')[ ($("option[value='5']").is(":checked"))? "show" : "hide" ]();
    });
});
// function showDiv(div, element)
//     {
//         document.getElementById(div).style.display = element.value == 1 ? 'block' : 'none';
        
//     }
</script>

</body>

</html>
