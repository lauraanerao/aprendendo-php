<?php

namespace App\Usuario;

use App\Sql\Sql;
use DateTime;
use Exception;

class Usuario {

    private $id;
    private $login;
    private $senha;
    private $dataCadastro;

    public function getId() {
        return $this->id;
    }

    public function setId($value) {
        $this->id = $value;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($value) {
        $this->login = $value;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($value) {
        $this->senha = $value;
    }

    public function getDataCadastro() {
        return $this->dataCadastro;
    }

    public function setDataCadastro($value) {
        $this->dataCadastro = $value;
    }

    /**
     * Retorna informações de um usuário pela ID
     *
     * @param $id
     * @return void
     * @throws Exception
     */
    public function loadById($id) {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM usuarios WHERE id = :ID", array(
            ":ID" => $id
        ));

        if (count($results) > 0) {

            $row = $results[0];

            $this->setId($row['id']);
            $this->setLogin($row['login']);
            $this->setSenha($row['senha']);
            $this->setDataCadastro(new DateTime($row['dataCadastro']));
        }
    }

    public static function getList(){

        $sql = new Sql();

        return $sql->select("SELECT * FROM usuarios ORDER BY login;");

    }

    /**
     * @param $login
     * @return array
     */
    public static function search($login): array
    {

        $sql = new Sql();
        return $sql->select("SELECT * FROM usuarios WHERE login LIKE :SEARCH ORDER BY login",array(
            ':SEARCH'=>"%" . $login . "%"
        ));
    }

    public function login($login, $password){

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM usuarios WHERE  login = :LOGIN AND senha = :PASSWORD", array(
            ":LOGIN"=>$login,
            ":PASSWORD"=>$password
        ));

        if (count($results) > 0) {

            $row = $results[0];

            $this->setId($row['id']);
            $this->setLogin($row['login']);
            $this->setSenha($row['senha']);
            $this->setDataCadastro(new DateTime($row['dataCadastro']));

        } else {

            throw new Exception("Login e/ou senha incorretos.");

        }
    }
    public function __toString(){
        return json_encode(array(
           "id"=>$this->getId(),
           "login"=>$this->getLogin(),
           "senha"=>$this->getSenha(),
           "dataCadastro"=>$this->getDataCadastro()->format("d/m/Y H:i:s")
        ));
    }

}