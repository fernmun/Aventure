<?php

header('Content-Type: application/json');
$json = array(
  'datetime' => time(),
);
echo json_encode($json);