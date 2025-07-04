<?php

namespace app\classes;

class Bind {
    private static $bind = [];

    public static function set($name, $value) {
        if(!isset(static::$bind[$name])) {
            static::$bind[$name] = $value;
        }
    }

    public static function get($name) {
        if (!isset(static::$bind[$name])) {
            throw new \Exception("Esse índice não existe no bind: {$name}");
        }
        // A flag (object) basicamente está transformando o formato de retorno em object, o que faz com que os parâmetros devolvidos 
        // sejam acessados utilizando o padrão $item->subitem
        return (object) static::$bind[$name];
    }
}