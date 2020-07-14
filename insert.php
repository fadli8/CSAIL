
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
}
// echo "<div class="alert alert-success" role="alert">Good</div>";
?>