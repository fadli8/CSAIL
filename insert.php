
<?php

//insert.php

$connect = new PDO("mysql:host=sql9.freemysqlhosting.net;dbname=sql9351309", "sql9351309", "RQy7Yk8QyN");

$data = array(
 ':title_project'  => $_POST["title_project"],
 ':discription_project'  => $_POST["discription_project"],
 ':link_project'  => $_POST["link_project"],
 ':Categories'  => $_POST["categorie"],
 ':catego'  => $_POST["catego"],
 ':catego1'  => $_POST["catego1"],
 ':catego2'  => $_POST["catego2"],
 ':catego3'  => $_POST["catego3"],
 ':catego4'  => $_POST["catego4"]
); 

$query = "
 INSERT INTO projects 
(title_project, Categories, discription_project, link_project, catego, catego1, catego2, catego3, catego4) 
VALUES (:title_project, :Categories, :discription_project, :link_project, :catego, :catego1, :catego2, :catego3, :catego4)
";

$statement = $connect->prepare($query);

if($statement->execute($data))
{
 $output = array(
  'title_project' => $_POST['title_project'],
  'discription_project'  => $_POST['discription_project'],
  'link_project'  => $_POST['link_project'],
  ':Categories'  => $_POST["categorie"],
  ':catego'  => $_POST["catego"],
  ':catego1'  => $_POST["catego1"],
  ':catego2'  => $_POST["catego2"],
  ':catego3'  => $_POST["catego3"],
  ':catego4'  => $_POST["catego4"]
 );

 echo json_encode($output);
 
 $to = "fadliayman10@gmail.com, fadliayman01@gmail.com";
$subject = "Notification from CSAIL";

$message = "
<html>
<head>
<title>Notification from CSAIL</title>
</head>
<body>
<p><b>this is a notification from CSAIL website.</b> <br/><br/> Someone Inserted information to the website and waiting for your validation, Please <a href='https://www.google.com/'>Clic here</a> to validate the informations.</p>
<
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <fadliayman10@gmail.com>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
}
// echo "<div class="alert alert-success" role="alert">Good</div>";
?>
