<?php

function jsonData() {
  $ch   = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://www.balldontlie.io/api/v1/players");
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
  $res  = curl_exec($ch);
  $file = 'jugadores.json';
  file_put_contents($file, $res);
}

function jsonDataId($id) {
  $ch  = curl_init();
  curl_setopt($ch, CURLOPT_URL, "https://www.balldontlie.io/api/v1/players/" . $id);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
  $res = curl_exec($ch);
  $res = json_decode($res);
  return $res;
}

function stdClass_Array($data) {
  if (is_object($data)) {
    $data = get_object_vars($data);
  }
  if (is_array($data)) {
    return array_map(__FUNCTION__, $data);
  } else {
    return $data;
  }
}
?>




