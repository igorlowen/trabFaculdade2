<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $texto = $_POST["nome"];
    $password = $_POST["Senha"];
    $email = $_POST["Email"];
    $data = $_POST["Data de nascimento"];

    echo "Nome: " . $texto . "<br>";
    echo "Senha: " . $password;
    echo "E-mail: " . $email;
    echo "Data de Nascimento: " . $data;
}
?>