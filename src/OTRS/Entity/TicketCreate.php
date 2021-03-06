<?php

namespace OTRS\Entity;

class TicketCreate {
    
    private $UserLogin;
    private $CustomerUserLogin;
    private $SessionID;
    private $Password;
    private $Ticket;
    private $Article;
    private $DynamicField;
    private $Attachment;
    
    public function getUserLogin() {
        return $this->UserLogin;
    }

    public function getCustomerUserLogin() {
        return $this->CustomerUserLogin;
    }

    public function getSessionID() {
        return $this->SessionID;
    }

    public function getPassword() {
        return $this->Password;
    }

    public function getTicket() {
        return $this->Ticket;
    }

    public function getArticle() {
        return $this->Article;
    }

    public function getDynamicField() {
        return $this->DynamicField;
    }

    public function getAttachment() {
        return $this->Attachment;
    }

    public function setUserLogin($UserLogin) {
        $this->UserLogin = $UserLogin;
        return $this;
    }

    public function setCustomerUserLogin($CustomerUserLogin) {
        $this->CustomerUserLogin = $CustomerUserLogin;
        return $this;
    }

    public function setSessionID($SessionID) {
        $this->SessionID = $SessionID;
        return $this;
    }

    public function setPassword($Password) {
        $this->Password = $Password;
        return $this;
    }

    public function setTicket(Ticket $Ticket) {
        $this->Ticket = $Ticket;
        return $this;
    }

    public function setArticle($Article) {
        $this->Article = $Article;
        return $this;
    }

    public function setDynamicField($DynamicField) {
        $this->DynamicField = $DynamicField;
        return $this;
    }

    public function setAttachment(array $aAttachments) {
        $this->Attachment = $aAttachments;
        return $this;
    }

    public function addAttachment(Attachment $oAttachment){
        $this->Attachment[] = $oAttachment;
        return $this;
    }
    
}
