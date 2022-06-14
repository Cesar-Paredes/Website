<?php

class usersModel
{

    public function __construct()
    {
        $this->db = new Model;
    }

    public function getUsers()
    {
        $this->db->query("SELECT * from users");
        return $this->db->getResultSet();
    }

    public function getUser($id)
    {
        $this->db->query("SELECT * from users where id=:id");
        $this->db->bind(":id", $id);
        return $this->db->getSingle();
    }

    public function getUserbyName($name)
    {
        $this->db->query("SELECT * from users where username=:name");
        $this->db->bind(":name", $name);
        return $this->db->getSingle();
    }

    public function getPasswordbyName($name)
    {
        $this->db->query("SELECT password from users where username=:name");
        $this->db->bind(":name", $name);
        return $this->db->getSingle();
    }
    
    public function createUser($data)
    {
        $this->db->query("INSERT into users (username, firstname, lastname,  email, password, phone) values (:username, :firstname, :lastname, :email, :password, :phone)");
        $this->db->bind(":username", $data['username']);
        $this->db->bind(":firstname", $data['firstname']);
        $this->db->bind(":lastname", $data['lastname']);
        $this->db->bind(":email", $data['email']);
        $this->db->bind(":password", $data['password']);
        $this->db->bind(":phone", isset($data['phone']) ? $data['phone'] : "");
        $this->db->bind(":active", $data['active']);
        


        if ($this->db->execute()) {
            $id = $this->db->dbh->lastInsertId();
            $data = [
                'id' => $id,
                'created' => true
            ];
            return $data;
        } else {
            return false;
        }
    }
    public function updateUser($data)
    {
        $this->db->query("UPDATE users SET username=:username, firstname=:firstname, lastname=:lastname, email=:email, password=:password, phone=:phone where id=:id");
        $this->db->bind(":username", $data['username']);
        $this->db->bind(":firstname", $data['firstname']);
        $this->db->bind(":lastname", $data['lastname']);
        $this->db->bind(":email", $data['email']);
        $this->db->bind(":password", $data['password']);
        $this->db->bind(":id", $data['id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteUser($id)
    {
        $this->db->query("DELETE from users where id=:id");
        $this->db->bind(":id", $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
