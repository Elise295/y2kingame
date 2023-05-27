<?php
class Account {
    private $accID;
    private $userName;
    private $password;
    private $name;
    private $phone;
    private $address;

    public function getAccID() {
        return $this->accID;
    }

    public function setAccID($accID) {
        $this->accID = $accID;
    }
    public function getUserName() {
        return $this->userName;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function displayInfo() {
        echo "User Name: " . $this->getUserName() . "<br>";
        echo "Password: " . $this->getPassword() . "<br>";
        echo "Name: " . $this->getName() . "<br>";
        echo "Phone: " . $this->getPhone() . "<br>";
        echo "Address: " . $this->getAddress() . "<br>";
    }
}

?>