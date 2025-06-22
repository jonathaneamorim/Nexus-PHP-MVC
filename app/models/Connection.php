<?php

namespace app\models;

use PDO;

class Connection {
    public static function connect() {
        $config = Bind::get('config')->database;
        // Definindo a conexão com banco de dados
        // first attr = connection info
        // second attr = username
        // third attr = password
        $pdo = new PDO("mysql:host=$config->host;dbname=$config->dbname;charset=$config->charset","$config->username","$config->password", $config->options);
        // Set type error
        // $pdo->setAtributes("PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION");
        // Tipo de listagem quando resgatar informações do banco de dados
        // PDO::FETCH_OBJ = Quando resgatar os dados é possivel capturar neste método ($user->name)
        // PDO::FETCH_ASSOC = (1)Quando resgatar os dados é possivel capturar neste método ($user['name'])
        // $pdo->setAtributes("PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ");
        return $pdo;
    }
}