<?php

namespace OTRS\Entity;

class Error {
    
    private $ErrorCode;
    private $ErrorMessage;
    
    public function getErrorCode() {
        return $this->ErrorCode;
    }

    public function getErrorMessage() {
        return $this->ErrorMessage;
    }

    public function setErrorCode($ErrorCode) {
        $this->ErrorCode = (string)$ErrorCode;
        return $this;
    }

    public function setErrorMessage($ErrorMessage) {
        $this->ErrorMessage = (string)$ErrorMessage;
        return $this;
    }


}
