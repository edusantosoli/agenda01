<?php

$link = mysqli_connect("127.0.0.1", "root", "E072582e", "ramais");

if (!$link) {
    echo "Error: Erro em connectar ao banco de dados." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success:conexao realizada com sucesso" . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);
?>