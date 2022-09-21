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

            $this->setData($results[0]);
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

            $this->setData($results[0]);

        } else {

            throw new Exception("Login e/ou senha incorretos.");

        }

    }


   public function __toString(){
        return json_encode(array(
           "id"=>$this->getId(),
           "login"=>$this->getLogin(),
           "senha"=>$this->getSenha(),
          // "dataCadastro"=>$this->getDataCadastro()->format("d/m/Y H:i:s")
        ));
    }

    public function update($login, $password){

        $this->setLogin($login);
        $this->setSenha($password);

        $sql = new sql();
        $sql->query("UPDATE usuarios SET login = :LOGIN, senha = :PASSWORD WHERE id = :ID", array(
           ':LOGIN'=>$this->getLogin(),
            'PASSWORD'=>$this->getSenha(),
            ':ID'=>$this->getId()
        ));


    }

   public function __construct($login = "", $password = ""){

       $this->setLogin($login);
       $this->setSenha($password);

    }

    public function insert(){
        $sql = new Sql();
        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ':LOGIN'=>$this->getLogin(),
            ':PASSWORD'=>$this->getSenha()
        ));

        if (count($results) > 0) {
            $this->setData($results[0]);
        }
    }

    /**
     * @param $data
     * @return void
     * @throws Exception
     */
    private function setData($data): void
    {
        $this->setId($data['id']);
        $this->setLogin($data['login']);
        $this->setSenha($data['senha']);
        $this->setDataCadastro(new DateTime($data['dataCadastro']));
    }

}