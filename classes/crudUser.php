<?php
interface crudUser {
    public function create();
    public function read();
    public function update($name, $email, $password, $id);
    public function delete($id);

}