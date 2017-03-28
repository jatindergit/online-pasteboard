<?php
$data = $_POST['screen'];
list($type, $data) = explode(';', $data);
list(, $data)      = explode(',', $data);
$data = base64_decode($data);
$siteURL = 'http://trickntip.com';
$name = md5(uniqid(rand(), true)).'.png';
file_put_contents('uploads/'.$name, $data);
echo json_encode(array('url' => $siteURL, 'name' => $name));


?>
