<?php
$_POST = json_decode(file_get_contents("php://input"), true); // перевод json для работыв в php
echo var_dump($_POST);

?>