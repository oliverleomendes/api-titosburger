<?php

$senha = "123456";

$senha_segura = password_hash($senha, PASSWORD_BCRYPT);

echo password_verify($senha, $senha_segura);
echo "<br>";
echo $senha_segura;