<?php
//$data_uri = "data:image/png;base64,iVBORw0K...";
$data_uri = $_POST['image'];
$encoded_image = explode(",", $data_uri)[1];
$decoded_image = base64_decode($encoded_image);
$date=date('ymdhis');
file_put_contents($date."signature.png", $decoded_image);
?>