<?
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include 'connection.php';

$id =  rand(1, 999);
$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];

$query = "INSERT INTO mensagens(id, nome, email, comment) VALUES ('$id', '$name', '$email', '$comment')";


if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}
?>