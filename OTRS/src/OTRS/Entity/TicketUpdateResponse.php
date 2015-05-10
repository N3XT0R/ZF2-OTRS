<?php

namespace OTRS\Entity;

class TicketUpdateResponse {
    
    private $TicketID;
    private $TicketNumber;
    private $ArticleID;
    private $Error;
    
    
    public function getTicketID() {
        return $this->TicketID;
    }

    public function getTicketNumber() {
        return $this->TicketNumber;
    }

    public function getArticleID() {
        return $this->ArticleID;
    }

    public function getError() {
        return $this->Error;
    }

    public function setTicketID($TicketID) {
        $this->TicketID = $TicketID;
        return $this;
    }

    public function setTicketNumber($TicketNumber) {
        $this->TicketNumber = $TicketNumber;
        return $this;
    }

    public function setArticleID($ArticleID) {
        $this->ArticleID = $ArticleID;
        return $this;
    }

    public function setError(Error $Error) {
        $this->Error = $Error;
        return $this;
    }


}
