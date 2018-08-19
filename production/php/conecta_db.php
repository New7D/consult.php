<?php
/**
 * Created by Wesley.
 * User: wesle
 * Date: 19/08/2018
 * Time: 01:22
 */

class db {

    private $host = '127.0.0.1';
    private $usuario = 'root';
    private $senha = '';
    private $database = 'db_consult';

    public function conecta_mysql (){
        //CRIAR CONEXAO
        $con = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

        //AJUSTAR O CHARSET DE COMUNICAÇÂO ENTRE APLICAO E BD
        mysqli_set_charset($con, 'utf8');

        //VERIFICAR CONEXAO
        if (mysqli_connect_errno()) {
          echo 'Erro Ao Conectar ao DB' .mysqli_connect_error();
        }
        return $con;
    }

}

?>