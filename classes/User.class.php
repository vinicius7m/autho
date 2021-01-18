<?php
require_once 'crudUser.php';

class User extends Connection implements crudUser{
    private $id;
    private $name;
    private $email;
    private $password;

    protected function setId($id) {
        $this->id = $id;
    }
    protected function getId() {
        return $this->id;
    }
    protected function setName($name) {
        $this->name = $name;
    }
    protected function getName() {
        return $this->name;
    }
    protected function setEmail($email) {
        $this->email = $email;
    }
    protected function getEmail() {
        return $this->email;
    }
    protected function setPassword($password) {
        $this->password = $password;
    }

    // Métodos específicos
    public function formData($name, $email, $password) {
        $this->setName($name);
        $this->setEmail($email);
        $this->setPassword($password);
    }

    // Métodos da interface
    public function create() {
        echo $this->getName();
        echo $this->getEmail();
    }
    public function read() {

    }
    public function update($name, $email, $password, $id) {

    }
    public function delete($id) {

    }


}