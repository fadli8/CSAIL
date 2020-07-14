
<?php

//insert.php

$connect = new PDO("mysql:host=sql9.freemysqlhosting.net;dbname=sql9351309", "sql9351309", "RQy7Yk8QyN");

$data = array(
 ':title_project'  => $_POST["title_project"],
 ':discription_project'  => $_POST["discription_project"],
 ':link_project'  => $_POST["link_project"]
); 

$query = "
 INSERT INTO projects 
(title_project, discription_project, link_project) 
VALUES (:title_project, :discription_project, :link_project)
";

$statement = $connect->prepare($query);

if($statement->execute($data))
{
 $output = array(
  'title_project' => $_POST['title_project'],
  'discription_project'  => $_POST['discription_project'],
  'link_project'  => $_POST['link_project']
 );

 echo json_encode($output);
}

?>