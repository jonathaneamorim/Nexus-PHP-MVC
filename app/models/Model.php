<?php

namespace app\models;

// Todos os models criados a partir de agora serão estendidos de Model
// Aqui estarão itens que deverão ser utilizados em todos os arquivos model, ex: Conexão com o banco de dados para gerar tabelas
abstract class Model {

    protected $connection;

    public function __construct() {
        $this->connection = Connection::connect();
    }

    public function all() {
        $sql = "SELECT * FROM {$this->table}";
        $list = $this->connection->query($query);
        $list->execute();

        return $list->fetchAll();
    }

}