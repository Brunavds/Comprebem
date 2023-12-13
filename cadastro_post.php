<?php

// Função para conectar ao banco de dados
function connectDatabase(){
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'banco_de_dados';

    // Estabelece a conexão com o banco de dados
    $connection = mysqli_connect($server, $user, $password, $database);

    // Verifica se a conexão foi bem-sucedida
    if(!$connection){
        // Se a conexão falhou, encerra o script e exibe uma mensagem de erro
        die('Conexão falhou:' . mysqli_connect_error());
    }

    // Retorna o objeto de conexão para ser usado em outras partes do código
    return $connection;
}

// Função para cadastrar um novo usuário no banco de dados
function cadastrarUsuario($name, $cpf, $email, $endereco, $bairro, $estado, $password){
    // Conecta ao banco de dados usando a função anterior
    $connection = connectDatabase();

    // Escapa caracteres especiais para evitar injeção de SQL
    $name = mysqli_real_escape_string($connection, $name);
    $cpf = mysqli_real_escape_string($connection, $cpf);
    $email = mysqli_real_escape_string($connection, $email);
    $endereco = mysqli_real_escape_string($connection, $endereco);
    $bairro = mysqli_real_escape_string($connection, $bairro);
    $estado = mysqli_real_escape_string($connection, $estado);
    $password = mysqli_real_escape_string($connection, $password);

    // Gera um hash da senha para armazenamento seguro no banco de dados
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    // Monta a query SQL para inserir o novo usuário na tabela 'users'
    $query = "INSERT INTO users (name, cpf, email, endereco, bairro, estado, password) 
              VALUES ('$name', '$cpf', '$email', '$endereco', '$bairro', '$estado', '$password_hashed')";

    // Executa a query no banco de dados
    if(mysqli_query($connection, $query)){
        // Se a inserção foi bem-sucedida, exibe uma mensagem de sucesso
        echo "Usuário cadastrado com sucesso";
    }else{
        // Se houve um erro na inserção, exibe uma mensagem de erro
        echo "Erro ao cadastrar o usuário: " . mysqli_error($connection);
    }

    // Fecha a conexão com o banco de dados para liberar recursos
    mysqli_close($connection);
}

?>
