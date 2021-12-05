<?php
// gets the end of the url path
$path = $_SERVER['REQUEST_URI'];
$dest = basename($path);

$json = file_get_contents('links.json');
$data = json_decode($json, true);

if ($data[$dest]) {
  header('Location: ' . $data[$dest]);
} else {
  header('Location: /link/');
}

echo $link;
