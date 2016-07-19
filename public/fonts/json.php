<?php
header('Content-type: text/json');
echo json_encode([
    'post' => $_POST,
    'get' => $_GET,
])