<?php
// updates the file links.json with a link and name provided in post parameters
function saveLink()
{
  $link = $_POST['link'];
  $name = $_POST['name'];

  if (empty($name) || strlen($name) > 0) {
    $name = generateShortCode();
  }

  $json = file_get_contents('links.json');
  $data = json_decode($json, true);
  $data[$name] = $link;
  $json = json_encode($data);
  file_put_contents('links.json', $json);

  return $name;
}

function generateShortCode()
{
  $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  $code = '';
  for ($i = 0; $i < 5; $i++) {
    $code .= $chars[rand(0, strlen($chars) - 1)];
  }
  return $code;
}

$code = saveLink();
header("Location: /link?link=$code");
