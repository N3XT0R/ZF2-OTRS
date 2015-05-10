<?php

namespace OTRS\Entity;

class SessionCreate {
    
    private $UserLogin;
    private $CustomerUserLogin;
    private $Password;
    
    public function getUserLogin() {
        return $this->UserLogin;
    }

    public function getCustomerUserLogin() {
        return $this->CustomerUserLogin;
    }

    public function getPassword() {
        return $this->Password;
    }

    public function setUserLogin($UserLogin) {
        $this->UserLogin = $UserLogin;
        return $this;
    }

    public function setCustomerUserLogin($CustomerUserLogin) {
        $this->CustomerUserLogin = $CustomerUserLogin;
        return $this;
    }

    public function setPassword($Password) {
        $this->Password = $Password;
        return $this;
    }

 
}
