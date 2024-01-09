<?php
class database{
    public static function conectar(){
        $conexio = new mysqli("guilll-loguinphp.db.tb-hosting.com","guilll_guille","X9jrh33J","guilll_loguinphp");
        $conexio->query("SET NAMES 'utf8'");

        return $conexio;
    }
}
?>