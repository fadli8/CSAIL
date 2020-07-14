<?php
$connect = mysqli_connect("sql9.freemysqlhosting.net", "sql9351309", "RQy7Yk8QyN", "sql9351309");  
 $output = '';  
 $sql = "SELECT * FROM projects 

ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      
           <table class="table table-striped table-bordered">  
                <tr>  
                    <th>Title</th>
                    <th>Discription</th>
                    <th>link</th>
                    <th>Action</th>

                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = 

mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                    <td >'.$row["title_project"].'</td>  
                    <td >'.$row["discription_project"].'</td>  
                    <td ><a href="'.$row["link_project"].'">Click Here</a></td>  
                    <td><button type="button" name="delete_btn" data-id="'.$row["id"].'" class="btn btn-danger btn_delete">Delete</button></td>  
                </tr>  
           ';  
      }    
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  


     ';  
 echo $output;  
 ?>