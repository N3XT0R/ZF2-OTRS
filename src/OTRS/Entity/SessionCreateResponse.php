<?php

namespace OTRS\Entity;


class SessionCreateResponse {
    
    private $SessionID;
    private $Error;
    
    public function getSessionID() {
        return $this->SessionID;
    }

    /**
     * 
     * @return OTRS_Error
     */
    public function getError() {
        return $this->Error;
    }

    public function setSessionID($SessionID) {
        $this->SessionID = $SessionID;
        return $this;
    }

    public function setError(OTRS_Error $Error) {
        $this->Error = $Error;
        return $this;
    }

}
